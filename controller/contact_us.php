<?php
    include "connections.php";
    session_start();

    require "../PHPMailer/PHPMailerAutoload.php";
    require "../PHPMailer/class.phpmailer.php";
    require "../PHPMailer/class.smtp.php";
    // $_SESSION['success'] = "";


    if(isset($_POST['send_message'])){
        $fullname = ucwords(htmlspecialchars(stripslashes($_POST['full_name'])));
        $email_address = htmlspecialchars(stripslashes($_POST['email']));
        $message = ucwords(htmlspecialchars(stripslashes($_POST['message'])));

        function smtpmailer($to, $from, $from_name, $subject, $body)
        {
            
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 
    
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.onostarmedia.com';
            $mail->Port = 465; 
            $mail->Username = 'contact@onostarmedia.com';
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
                
                echo "<script>alert('Thanks for contacting Onostar Media. We respond to your message shortly.');
                window.open('../index.php', '_parent');
                </script>";
                /* unlink($ssn_folder);
                unlink($dlf_folder);
                unlink($dlb_folder); */
                // header("Location: index.html");
                // return $error;
            }
        }
        
        $to   = 'contact@onostarmedia.com';
        $from = "$email_address";
        $from_name = "$fullname";
        $name = 'Onostar Media Contact';
        $subj = 'Contact Message';
        $msg = "<h2>New Message from $fullname</h2>
        <p>Below are the details of the message</p> \n
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
                <h3>Full Name:</h3>
                <p>$fullname</p>
            </div>
            <div class='data' style='display:flex;gap:1rem'>
                <h3>Email Address:</h3>
                <p>$email_address</p>
            </div>
                <h3>message:</h3>
                <p>$message</p>
            </div>
            
        </div>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);

        }
    

?>