<?php
    include "connections.php";
    session_start();
    $_SESSION['success'] = "";
    $_SESSION['error'] = "";

    if(isset($_POST['post_media'])){
        $subject = ucwords(htmlspecialchars(stripslashes($_POST['title'])));
        $photo = $_FILES['photo']['name'];
        $photo_folder = "../media/".$photo;
        
        $check_status = $connectdb->prepare("SELECT * FROM gallery WHERE title = :title");
        $check_status->bindvalue("title", $subject);
        $check_status->execute();

        if($check_status->rowCount() > 0){
            $_SESSION['error'] = "$subject already posted!";
            header("Location: ../views/admin.php");
        }else{
            if(move_uploaded_file($_FILES['photo']['tmp_name'], $photo_folder)){
                $insert_news = $connectdb->prepare("INSERT INTO gallery (title, photo) VALUES(:title, :photo)");
                $insert_news->bindvalue("title", $subject);
                $insert_news->bindvalue("photo", $photo);
                $insert_news->execute();

                if($insert_news){
                    $_SESSION['success'] = "$subject posted successfully!";
                    /* send notification and email */
                    //get receipients and send message
                    
                     header("Location: ../admin/admin.php");
                }else{
                    $_SESSION['error'] = "failed to post image";
                    header("Location: ../admin/admin.php");
                }
            }else{
                $_SESSION['error'] = "failed to upload image";
                header("Location: ../admin/admin.php");
            }
        }
    }   
    

?>