<?php
// bb-library/Payment/Adapter/Paylane.php

/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

class Payment_Adapter_Paylane implements \Box\InjectionAwareInterface
{
    private $config = array();

    protected $di;

    public function setDi($di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }

    public function __construct($config)
    {
        $this->config = $config;

        if(!function_exists('curl_exec')) {
            throw new Payment_Exception('PHP Curl extension must be enabled in order to use PayPal gateway');
        }

        // 548212e73fc90db8f45c53be8f6927e0
        if (!isset($this->config['merchant_id'])) {
            throw new Payment_Exception('Payment gateway "Paylane" is not configured properly. Please update configuration parameter "Paylane Merchant ID" at "Configuration -> Payments".');
        }

        // pre0$CLI7$brE2^s
        if (!isset($this->config['hash_salt'])) {
            throw new Payment_Exception('Payment gateway "Paylane" is not configured properly. Please update configuration parameter "Paylane Merchant ID" at "Configuration -> Payments".');
        }

        // get
        if (!isset($this->config['secured_form_callback_method'])) {
            throw new Payment_Exception('Payment gateway "Paylane" is not configured properly. Please update configuration parameter "Paylane Merchant ID" at "Configuration -> Payments".');
        }
    }

    public static function getConfig()
    {
        return array(
            'supports_one_time_payments'   =>  true,
            'supports_subscriptions'     =>  true,
            'description'     =>  'Enter your paylane credential to start accepting payments by Paylane.',
            'form'  => array(
                'merchant_id' => array(
                    'text',
                    array(
                        'label' => 'Paylane merchant_id',
                    ),
                ),
                'hash_salt' => array(
                    'text',
                    array(
                        'label' => 'Paylane Hash salt',
                    ),
                ),
                'secured_form_callback_method' => array(
                    'select',
                    array(
                        'multiOptions' => array(
                            'post' => 'POST',
                            'get' => 'GET',
                        ),
                        'label' => 'Secured Form callback Request Method',
                    )
                )
            ),
        );
    }

    public function getHtml($api_admin, $invoice_id, $subscription)
    {
        $invoice = $api_admin->invoice_get(array('id'=>$invoice_id));

        $transaction_type = 'S';
        $hash = sha1(implode('|', [
            $this->config['hash_salt'],
            $invoice['serie_nr'],
            $invoice['total'],
            $invoice['currency'],
            $transaction_type
        ]));

        return '<pre>'.var_dump($invoice).'</pre>
<form action="https://secure.paylane.com/order/cart.html" method="POST">
  <input type="hidden" name="amount" value="'.$invoice['total'].'" />
  <input type="hidden" name="currency" value="'.$invoice['currency'].'" />
  <input type="hidden" name="merchant_id" value="'.$this->config['merchant_id'].'" />
  <input type="hidden" name="description" value="'.$invoice['serie_nr'].'" />
  <input type="hidden" name="transaction_description" value="Transaction Number '.$invoice['serie_nr'].'" />
  <input type="hidden" name="transaction_type" value="'.$transaction_type.'" />
  <input type="hidden" name="back_url" value="'.$this->config['notify_url'].'" />
  <input type="hidden" name="language" value="en" />
  <input type="hidden" name="hash" value="'.$hash.'" />

  <button type="submit">Pay with PayLane</button>
</form>';

        // $data = array();
        // if($subscription) {
        //     $data = $this->getSubscriptionFields($invoice);
        // } else {
        //     $data = $this->getOneTimePaymentFields($invoice);
        // }

        // $url = $this->serviceUrl();
        // return $this->_generateForm($url, $data);
    }

    public function processTransaction($api_admin, $id, $data, $gateway_id)
    {
        $response = $data[$this->config['secured_form_callback_method']];
        $this->verifyHash($data['hash'], $response);

        if ($response['status'] == 'PERFORMED') {
            $api_admin->invoice_mark_as_paid(['id' => $id]);
        }

    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    protected function verifyHash($hash, $data)
    {
        return $hash == sha1(implode('|', [
            $this->config['hash_salt'],
            $data['status'],
            $data['description'],
            $data['amount'],
            $data['currency'],
            $data['id_sale']
        ]));
    }
}
