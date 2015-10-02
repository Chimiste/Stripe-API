<?php
<?php 
require_once('../stripe-php/init.php');
require("ini_stripe_keys.php");
require("../../php/select.php");
$link = select_db();
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($sk_key);

// Retrieve the request's body and parse it as JSON
$input = @file_get_contents("php://input");
$event_json = json_decode($input);

if(is_object($event_json)){
	foreach ($event_json->data as $lists){
		// if($lists-> == 'invoice.payment_succeeded'){
                 $plan_id = $lists->object->lines->data->plan->id;
                 $format = explode('_', $plan_id);
		 $user_id = $format[1];
                 $length = $format[2];//this is the lenght of subscription like N months 
                 $customer_id = $lists->customer;
                 $subscription_id =$lists->subscription;
                $invoice_id = $lists->object->id;

		   $query = "INSERT INTO cu_subscriptions(user_id, customer_id, subscription_id, invoice_id) VALUES ('$user_id','$customer_id','$subscription_id','$invoice_id');";
		   
		   if( mysql_query($query,$link)){
                            
                          $query = "SELECT customer_id FROM cu_subscriptions WHERE customer_id='$customer_id';";

		           if(mysql_num_rows(mysql_query($query,$link))  == $length){
                               $cu = \Stripe\Customer::retrieve($customer_id);
                                $cu->subscriptions->retrieve($subscription_id)->cancel();
                           }
                   }
		
		//}

              break;
	}
}

http_response_code(200); // PHP 5.4 or greater

?>

?>
