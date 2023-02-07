<?php
include "../../database_connect.php";

if(isset($_POST['btn_log'])){
    
        session_start();
        $log="SELECT * FROM `io_user` WHERE `u_id`='$_POST[uid]' and `password`='$_POST[pwd]'";
        
        $res=$con->query($log);
        if($res->num_rows > 0){
          $_SESSION[u_id]=$_POST[uid];
          $_SESSION[u_password]=$_POST[pwd];
        //echo $_SESSION[d_id];
         
           echo "<script>location.href='./index.php';</script>";
            }else{
                echo "<script>alert('Login Fail');location.href='../../login.php';</script>";
        }
    }
    
?> 