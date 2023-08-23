<?php 
 
// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Demo Product"; 
$itemPrice = 75;  
$currency = "USD"; 
 
/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AVaEi03BoS6-jdb1u2-Q51alTrGEF4nRe0pL5rac_NJ8nP6ap3Bo0R11V0eGytD_1N2_ebfdk2C49Fmk'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EKP52xBmDkDXNN-eMmve1VDqLtwKyZ-h_emUEOtlK_l32z7TaxFc9W2Iayo4Z4aA7W8femMH7089gPBj'); 
define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'ecommerce_project'); 
 
?>