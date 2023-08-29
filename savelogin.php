<?php


include "db.php";



$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  

    $username=$_POST["email"];

   
    $password=$_POST["password"];
  
    $confirmpassword=$_POST["cp"];
  


    $sql="Select * from reghome Where  email='$username' AND password='$password' ";


    $result=mysqli_query($db,$sql);
   
   
    
    $num=mysqli_num_rows($result);
   
   
  if($password==$confirmpassword)
    {
    if($num==1)
   {
        $login=true;
        session_start();
    
        $_SESSION["email"]=$username;
       


     if($_SESSION["email"])
          {
            header("Location:dashboard.php");
          }
        else
        {
           header("Location:index.php?error=Incorrect username or Password .");
        }
      }

  
 
    }
    else
    {
      ?>
    <script>
    alert("CONFIRM PASSWORD AND PASSWORD ARE NOT SAME PLEASE LOGIN AGAIN ......");
    window.location="index.php";
    </script>
    <?php
    }
    
  }
?>