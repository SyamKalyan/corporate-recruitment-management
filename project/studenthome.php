<?php
session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='admin')
    {
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='mentor')
    {
        header("location:login.php");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Student Dashboard</title>

    <link rel="stylesheet" type="text/css" href="student.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="Img5.jpg" class="image">
    
<header class="header">
    <a href="">Student Dashboard</a>
    <div class="logout">
        <a href="" class="btn btn-primary">Logout</a>
</div>


</header>

<aside>
    <ul>
        <li>
            <a href="">Admission</a>
    </li>

    <li>
            <a href="">Add Courses</a>
    </li>

    <li>
            <a href="">View Mentor</a>
    </li>

    <li>
            <a href="">View Courses</a>
    </li>
    <li>
            <a href="">Feedback</a>
    </li>




</ul>


</aside>
<div class="content">
    <h1>
        Admin Access
    </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aperiam aspernatur hic reiciendis atque esse, ad quibusdam. Ducimus officia quae maiores tempore fugit in hic omnis quaerat. Aliquam, ipsum neque.
</p>


</div>


    
</body>
</html>