<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="Online";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("Connection Error");
}

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $sql="select * from user where username='".$name."' AND password='".$pass."' ";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);
        if($row["usertype"]== "student")
        {
            
            $_SESSION['username']=$name;
            $_SESSION['usertype']="student";

            header("location:studenthome.php");
        }

        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$name;
            $_SESSION['usertype']="admin";
            header("location:adminhome.php");
        }
        elseif($row["usertype"]=="mentor")
        {
            $_SESSION['usertype']="mentor";
            $_SESSION['username']=$name;
            header("location:mentorhome.php");
        }
        else
        {
            session_start();
            $message=  "username or password do not match";

            $_SESSION['loginMessage']=$message;
            header("location:login.php");
        }
    }


?>