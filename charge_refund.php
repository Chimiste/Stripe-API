<?php
//Charging
  \Stripe\Stripe::setApiKey($sk_key);
	$charge = \Stripe\Charge::create(
    array(
		"amount"=>$charge_amount,
		"currency"=>"cad",
		"source"=>$token,
		"application_fee" =>	$application_charge
		),
    array("stripe_account"=>$stripe_id)
    );

		if(isset($charge->id)){
                     $charge_id = $charge->id;
                     require_once("success_message.php");
            
		}
	  } catch(\Stripe\Error\Card $e){ 
	    
	  }
	    
//Refund 

try{
 $re = \Stripe\Refund::create(array(
  "charge" => $charge_id,array("stripe_account" => $stripe_id)
));

print_r($re);

} catch(\Stripe\Error\Card $e){ 
echo  $e;
}
?>
