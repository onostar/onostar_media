<?php
    include "connections.php";
    session_start();
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";

    if(isset($_POST['post_project'])){
        $subject = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        $message = ucwords(htmlspecialchars(stripslashes($_POST['details'])));
        
        $photo = $_FILES['photo']['name'];
        $photo_folder = "../media/".$photo;
        $photo_size = $_FILES['photo']['size'];

        
        $check_status = $connectdb->prepare("SELECT * FROM projects WHERE title = :title");
        $check_status->bindvalue("title", $subject);
        $check_status->execute();

        if($check_status->rowCount() > 0){
            $_SESSION['error'] = "$subject already posted!";
            header("Location: ../admin/admin.php");
        }else{
            if($photo_size > 300000){
                $_SESSION['error'] = "Error! Image size too large";
                header("Location: ../admin/admin.php");
            }else{
                if(move_uploaded_file($_FILES['photo']['tmp_name'], $photo_folder)){
                    $insert_news = $connectdb->prepare("INSERT INTO projects (title, details, photo) VALUES(:title, :details, :photo)");
                    $insert_news->bindvalue("title", $subject);
                    $insert_news->bindvalue("details", $message);
                    $insert_news->bindvalue("photo", $photo);
                    $insert_news->execute();

                    if($insert_news){
                        $_SESSION['success'] = "$subject posted successfully!";
                        /* send notification and email */
                        //get receipients and send message
                        /* $get_recipient = $connectdb->prepare("SELECT user_id FROM users WHERE phone_number != 'admin'");
                        $get_recipient->execute();
                        $views = $get_recipient->fetchAll();
                        foreach($views as $view){
                            $send_message = $connectdb->prepare("INSERT INTO notifications (not_subject, not_message, user_id) VALUES(:not_subject, :not_message, :user_id)");
                            $send_message->bindvalue("not_subject", $subject);
                            $send_message->bindvalue("not_message", $not_message);
                            $send_message->bindvalue("user_id", $view->user_id);
                            $send_message->execute();

                            
                        } */
                        /* send mail */
                        /* $get_mail = $connectdb->prepare("SELECT user_email FROM users WHERE phone_number != 'admin'");
                        $get_mail->execute();
                        $mails = $get_mail->fetchAll();
                        foreach($mails as $mail){
                            
                            //send mail
                            mail("$mail->user_email", $subject, $message, $mailHeader) or die("Error!"); */

                            
                        //  }
                        header("Location: ../admin/admin.php");
                    }else{
                        $_SESSION['error'] = "failed to post newsupload image";
                        header("Location: ../admin/admin.php");
                    }
                }else{
                    $_SESSION['error'] = "failed to upload image";
                    header("Location: ../admin/admin.php");
                }
            }
        }
    }   
    

?>