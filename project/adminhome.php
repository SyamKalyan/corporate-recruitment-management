<?php
session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
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
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="admin.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="Img5.jpg" class="image">
    
<header class="header">
    <a href="">Dashboard</a>
    <div class="logout">
        <a href="login.php" class="btn btn-primary">Logout</a>
</div>


</header>

<aside>
    <ul>
        <li>
            <a href="profile.html">profile</a>
    </li>

    <li>
            <a href="job.html">Job search</a>
    </li>

    <li>
            <a href="job2.html">Job provide</a>
    </li>

    <li>
            <a href="status.html">Status</a>
    </li>

    <li>
            <a href="">Settings</a>
    </li>


</ul>


</aside>
<div class="content">
    <h1>
        Online Recruitments
    </h1>
    <p>
    A Corporate Recruitment Management Web Application is a cloud-based software platform that helps companies streamline their recruitment process. It offers various features like job posting, candidate screening, resume parsing, interview scheduling, reference verification, background checks, and analytics to make the hiring process more efficient and effective. The application provides a centralized location where recruiters can manage all recruitment activities, from initial job posting to final onboarding. By automating several tasks, such as sending auto-response emails, scheduling interviews, and tracking applicant progress, the application enables recruiters to save time and focus on core recruiting activities.       
</p>


</div>


    
</body>
</html>