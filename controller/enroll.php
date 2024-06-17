<?php
    include "connections.php";
    session_start();
    require "../PHPMailer/PHPMailerAutoload.php";
    require "../PHPMailer/class.phpmailer.php";
    require "../PHPMailer/class.smtp.php";

    // $_SESSION['success'] = "";


    if(isset($_POST['book'])){
        $surname = ucwords(htmlspecialchars(stripslashes($_POST['surname'])));
        $other_names = ucwords(htmlspecialchars(stripslashes($_POST['other_names'])));
        $email = htmlspecialchars(stripslashes($_POST['email_address']));
        $phone = htmlspecialchars(stripslashes($_POST['phone_number']));
        $gender = htmlspecialchars(stripslashes($_POST['gender']));
        $course = htmlspecialchars(stripslashes($_POST['course']));

        //check if user already submitted admission
        $check = $connectdb->prepare("SELECT * FROM admissions WHERE phone = :phone OR email_address = :email_address");
        $check->bindValue("phone", $phone);
        $check->bindValue("email_address", $email);
        $check->execute();
        if($check->rowCount() > 0){
            echo "<script>alert('You have submitted an Application before. If you have not been contacted, please send us a mail at contact@onostarmedia.com');
            window.open('../index.php', '_parent');
            </script>";
        }else{
            $send = $connectdb->prepare("INSERT INTO admissions (last_name, other_names, email_address, phone, gender, course) VALUES(:last_name, :other_names, :email_address, :phone, :gender, :course)");
            $send->bindvalue("last_name", $surname);
            $send->bindvalue("other_names", $other_names);
            $send->bindvalue("email_address", $email);
            $send->bindvalue("phone", $phone);
            $send->bindvalue("gender", $gender);
            $send->bindvalue("course", $course);
            $send->execute();
            function smtpmailer($to, $from, $from_name, $subject, $body)
        {
            
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 
    
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.onostarmedia.com';
            $mail->Port = 465; 
            $mail->Username = 'info@onostarmedia.com';
            $mail->Password = 'yMcmb@her0123!';   
    
    
            $mail->IsHTML(true);
            $mail->From="contact@onostarmedia.com";
            $mail->FromName=$from_name;
            $mail->Sender=$from;
            $mail->AddReplyTo($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($to);
            $mail->AddAddress('onostarmedia@gmail.com');
            if(!$mail->Send())
            {
                $error ="Please try Later, Error Occured while Processing...";
                return $error; 
            }
            else 
            {
                
                echo "<script>alert('Your application has been submitted. We will be in touch shortly.');
                window.open('../index.php', '_parent');
                </script>";
                /* unlink($ssn_folder);
                unlink($dlf_folder);
                unlink($dlb_folder); */
                // header("Location: index.html");
                // return $error;
            }
        }
        
        $to   = 'admission@onostarmedia.com';
        $from = 'admission@onostarmedia.com';
        $from_name = "Onostar Media";
        $name = 'Onostar Media Training';
        $subj = 'Software Development Admission';
        $msg = "<h2>New Application from $other_names $surname</h2>
        <p>Below are the information of the student</p> \n
        <style>
            .user_infos{
                display:flex;
                align-items:center;
                justify-content:space-between;
            }
            .user_info .data{
                width:300px;
            }
        </style>
        <div class='user_infos'>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Last Name:</h3>
                <p>$surname</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Other Names:</h3>
                <p>$other_names</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Phone Number:</h3>
                <p>$phone</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Email Address:</h3>
                <p>$email</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Gender:</h3>
                <p>$gender</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Course of study:</h3>
                <p>$course</p>
            </div>
            
        </div>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);

        }
    }

?>