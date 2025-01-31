<?php

    $customer = ucwords(htmlspecialchars(stripslashes($_POST['customer'])));
    $phone = htmlspecialchars(stripslashes($_POST['phone_number']));
    $address = ucwords(htmlspecialchars(stripslashes(($_POST['address']))));
    $email = htmlspecialchars(stripslashes(($_POST['email'])));
    $product = ucwords(htmlspecialchars(stripslashes($_POST['product'])));
    $date = ucwords(htmlspecialchars(stripslashes($_POST['reg_date'])));
    // $store = htmlspecialchars(stripslashes(($_POST['customer_store'])));
    $todays_date = date("Ym");
        $ran_num ="";
        for($i = 0; $i < 4; $i++){
            $random_num = random_int(0, 9);
            $ran_num .= $random_num;
        }
        $customer_num = $todays_date.$ran_num;
    $data = array(
        'customer' => $customer,
        'phone_numbers' => $phone,
        'customer_email' => $email,
        'customer_address' => $address,
        // 'store' => $store,
        'product' => $product,
        'reg_date' => $date,
        'reg_number' => $customer_num
    );
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

   //check if customer exists
   $check = new selects();
   $results = $check->fetch_count_cond('customers', 'customer', $customer);
   if($results > 0){
       echo "<p class='exist'><span>$customer</span> already exists!</p>";
   }else{
       //create customer
       $add_data = new add_data('customers', $data);
       $add_data->create_data();
       if($add_data){
           echo "<p><span>$customer</span> ceated successfully!</p>";
       }
   }