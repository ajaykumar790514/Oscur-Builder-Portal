<?php 
defined('BASEPATH') or exit('No direct script access allowed');
// ### checkbox ###
// send mail
if (!function_exists('sendMail'))
{
   function sendMail($message,$email,$subject)
    {
        
          $ch = curl_init();
          $fields = array( 'message'=>$message, 'email'=>$email,'subject'=>$subject);
          $postvars = '';
          foreach($fields as $key=>$value) {
            $postvars .= $key . "=" . $value . "&";
          }
          $url = "https://techfizone.com/techfiprojects/email_master/raghukul/mailApi.php";
          curl_setopt($ch,CURLOPT_URL,$url);
          curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
          curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
          curl_setopt($ch,CURLOPT_TIMEOUT, 20);
          $response = curl_exec($ch);
    
          curl_close ($ch);

        //use curl for mail sending
        return $response;
        
    }      
}