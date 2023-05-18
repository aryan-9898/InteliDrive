<?php
/*
  $owner_name = $_POST['owner_name'];
  $vehicle_name = $_POST['vehicle_name'];
  $vehicle_number = $_POST['vehicle_number'];
  $entry_date = $_POST['entry_date'];
  $exit_date = $_POST['exit_date'];
  $amount = $_POST['amount'];
  $pay_now = $_POST['pay_now'];
  $status = $_POST['status'];
  $update_record = $_POST['update_record'];

*/

 // include 'C:\xampp\htdocs\project\instamojo\Instamojo.php';
 // const API_KEY ="test_69ad787788dac34acc4d718ab54";
  //const AUTH_TOKEN = "test_163dbde3f94d5a224cf975e6e8e";
  include 'Instamojo/Instamojo.php';
  //$api = \Instamojo\Instamojo::init($authType, [
       // optiona);

   // $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
   //$api = new Instamojo\Instamojo('test_69ad787788dac34acc4d718ab54','test_163dbde3f94d5a224cf975e6e8e','https://test.instamojo.com/api/1.1/');
   $authType = "app/user" /**Depend on app or user based authentication**/

       $api = Instamojo\Instamojo::init($authType,[
        "client_id" =>  'XXXXXQAZ',
        "client_secret" => 'XXXXQWE',
        "username" => 'FOO', /** In case of user based authentication**/
        "password" => 'XXXXXXXX' /** In case of user based authentication**/

    ],true); 
    try {
        $response = $api->createPaymentRequest(array(
            "purpose" => $vehicle_number,
            "amount" => $amount,
           /* "send_email" => true,
            "email" => "foo@example.com",*/
            "owner_name"=>$owner_name,
            "allow_repeated_payments"=>false,
            "phone"=>$phone,
            "send_sms"=>true,

            "redirect_url" => "http://localhost/project/thankyou.php"
            ));
       // print_r($response);
       $pay_url=$response['longurl'];
       header("location:$pay_url");
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }

?>
