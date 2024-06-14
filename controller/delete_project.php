<?php
    include "connections.php";
    session_start();

    $_SESSION['success'] = "";
    $_SESSION['error'] = "";

    if(isset($_GET['project'])){
        $project = $_GET['project'];
        $delete_project = $connectdb->prepare("DELETE FROM projects WHERE project_id = :project_id");
        $delete_project->bindvalue("project_id", $project);
        $delete_project->execute();
        if($delete_project){
             

            $_SESSION['success'] = "Project Deleted!";
            header("Location: ../admin/admin.php");
        }else{
            $_SESSION['error'] = "Delete failed";
        }
    }
?>