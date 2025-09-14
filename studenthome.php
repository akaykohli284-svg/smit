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
?>


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">

    !-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <a href="">Student Dashbord</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</header>

<aside>
    <ul>
        <li>
            <a href="">My courses</a>
</li>

<li>
            <a href="">My result</a>
</li>



</ul>
</aside>

<div class="content">
    <h1>Sidebar Accordion</h1>
    <p>
        So you are friends with someone- I’m guessing school friends . And you , in your wisdom and superiority, are writing to your friend telling him how to organise his life . That sort of thing might be just about acceptable if written by a Grandparent or an Auntie or Uncle - but friend it will come across as pompous and ridiculous.
    </p>

</div>

<input type="text" name="">
    
</body>
</html>