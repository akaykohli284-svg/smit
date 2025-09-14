<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>
        alert('$message');
        </script>";
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    !-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">w-school </label>
        <ul>
            
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
</nav>

<div class="section1">
    

    <img class="main_img" src="classroom.jpeg">
</div> 
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="welcome_img" src="school 1.jpeg">

            
</div>
<div class="col-md-8">
    <h1>welcome to smit's School</h1>
    <p>School-related words include common objects like
book, pencil, backpack, and desk; people like teacher and student; places such as classroom, library, and playground; activities like homework, lesson, and exam; and subjects such as maths.</p>

</div>
</div>

<center>
    <h1> our teachers </h1>

</center>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="teacher 1.jpeg">
            <p>Teachers'  is to appreciating the efforts  of teachers, which is observed  as World Teachers' globally. In India, the date  the birth anniversary of mrs. anushka sharma, a respected scholar, philosopher, and the school's second President. </p>
</div>
 <div class="col-md-4">
    <img class="teacher" src="teacher 2.jpeg">
    <p>Teachers' is to appreciating the efforts of teachers, there some pro as World Teachers' globally. In India, the date the birth anniversary of mrs. medhashankar, a respected scholar, philosopher, and the school's second President.</p>
</div>
 <div class="col-md-4">
    <img class="teacher" src="teacher 3.jpeg">
    <p>Teachers' is to appreciating the glows of teachers, which make on  observed as World Teachers' globally. In India, the date the birth anniversary of mrs. vamika sharma , a respected scholar, philosopher, and the school's second President.</p>
</div>


<center>
    <h1> our cources </h1>

</center>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="web developer img.jpeg">
            <p> <h3>web developer </h3> </p>
</div>
 <div class="col-md-4">
    <img class="teacher" src="fashion design.jpeg">
    <p><h3> fashion designer </h3></p>
</div>
 <div class="col-md-4">
    <img class="teacher" src="software developer.jpeg">
    <p><h3> software developer </h3> </p>
</div>

<center>
    <h1 class="adm">Admission Form </h1>
</center>

<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
    <div class="adm_int">
        <label class="label_text">Name</label>
        <input class="input_deg" type="text" name="">
</div>
<div class="adm_int">
        <label class="label_text">E-mail</label>
        <input class="input_deg" type="text" name="email">
</div><div class="adm_int">
        <label class="label_text">phone</label>
        <input class="input_deg" type="text" name="phone">
</div><div class="adm_int">
        <label>message</label>
        <textarea class="input_txt" name="message"></textarea>
</div><div class="adm_int" >
        
        <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
</div>

</form>
</div>

<footer>
    <h3 class="footer_text"> All @copyright reverved by smit's school </h3>
</footer>








</body>
</html>