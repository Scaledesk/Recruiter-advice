<?php

error_reporting (1);
include('connection.php');
session_start();
$user_check=$_SESSION['login_user'];

if(!isset($user_check))
{
    header("Location: login.php");
}



include_once('header.php');
include_once('sidebar.php');
?>
           
           
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12" align="center">
                        <div class="page-title" >Welcome to Recruiter's Advice Admin Panel. Click on the pages from the left bar to add/delete content.</div>
                    </div> 
                </div>
            </main>
        
<?php
include_once('footer.php');
?>
        