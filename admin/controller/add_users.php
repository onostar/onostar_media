<?php

    $fullname = ucwords(htmlspecialchars(stripslashes($_POST['full_name'])));
    $username = ucwords(htmlspecialchars(stripslashes($_POST['username'])));
    $role = ucwords(htmlspecialchars(stripslashes($_POST['user_role'])));
    $store = htmlspecialchars(stripslashes($_POST['store_id']));
    $phone = htmlspecialchars(stripslashes($_POST['phone']));
    $email = htmlspecialchars(stripslashes($_POST['email_address']));
    $address = ucwords(htmlspecialchars(stripslashes($_POST['home_address'])));
    $password = 123;

    $data = array(
        'full_name' => $fullname,
        'username' => $username,
        'user_role' => $role,
        'store' => $store,
        'phone' => $phone,
        'email_address' => $email,
        'home_address' => $address,
        'user_password' => $password
    );
    // instantiate classes
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

    //check if user exists
    $check = new selects();
    $results = $check->fetch_count_cond('users', 'username', $username);
    if($results > 0){
        echo "<p class='exist'>$username already exists</p>";
    }else{
        //create user
        $add_data = new add_data('users', $data);
        $add_data->create_data();
        if($add_data){
            echo "<p>$fullname Created</p>";
        }
    }