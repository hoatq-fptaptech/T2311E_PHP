<?php 
// Hàm tạo access token từ Client ID và Secret ID
function get_access_token($client_id, $client_secret) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/oauth2/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
    curl_setopt($ch, CURLOPT_USERPWD, $client_id . ':' . $client_secret);
  
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $result = json_decode($result, true);
    return $result['access_token'];
  }
  
  // Hàm tạo thanh toán
  function create_payment($access_token, $success_url,$cancel_url,$grand_total) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/payments/payment');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, '{
        "intent":"sale",
        "redirect_urls":{
          "return_url":"' . $success_url . '",
          "cancel_url":"' . $cancel_url . '"
        },
        "payer":{
          "payment_method":"paypal"
        },
        "transactions":[
          {
            "amount":{
              "total":'. number_format($grand_total,2,".","") .',
              "currency":"USD"
            }
          }
        ]
      }');
  
      $headers = array();
      $headers[] = 'Content-Type: application/json';
      $headers[] = 'Authorization: Bearer ' . $access_token;
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close($ch);
      $result = json_decode($result, true);
      return $result;
  }