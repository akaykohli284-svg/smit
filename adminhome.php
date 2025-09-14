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
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    
<?php
   include 'admin_css.php';
   ?>
    

</head>
<body>
    <header class="header">
        <a href="">Admin Dashbord</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</header>

<aside>
    <ul>
        <li>
            <a href="admission.php">Admission</a>
</li>

<li>
            <a href="smit.php">Add student</a>
</li>

<li>
            <a href="">View student</a>
</li>

<li>
            <a href="">Add teacher</a>
</li>

<li>
            <a href="">View teacher</a>
</li>

<li>
            <a href="">Add courses</a>
</li>

<li>
            <a href="">View courses</a>
</li>

</ul>
</aside>

<div class="content">
    <h1>Admin Dashboard</h1>

</div>


    
</body>
</html>