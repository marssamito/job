<?php

        $tittle=($_POST['JobTitle']);
        $name=($_POST['EmployeeName']);
        $phone=($_POST['PhoneNumber']);
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');
// Specify your login credentials
$username   = "joshua1";
$apikey     = "a76803534aafc4faaccfc6ba4a245c76961ea140cd247438934eae410dabc3b1";
// NOTE: If connecting to the sandbox, please use your sandbox login credentials
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254".$phone;
// And of course we want our recipients to know what we really do
$message    = "Hey, we welcome you for an interview concerning the job you had applied <u>".$tittle."</u>";
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);
// NOTE: If connecting to the sandbox, please add the sandbox flag to the constructor:
/*************************************************************************************
             ****SANDBOX****
$gateway    = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            echo "sms send";
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo "sms send";
    // echo " Number: " .$result->number;
    // echo " Status: " .$result->status;
    // echo " MessageId: " .$result->messageId;
    // echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!!