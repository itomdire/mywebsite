<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geda Post</title>
  <link rel="stylesheet" type="text/css" href="./admin/main.css">
</head>
<body>
  <div id="container">
    <div id="header">
      <div id="logo">
        
      </div>
      <span>Geda</span>
      <ul>

        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=about">About Me</a></li>
        <li><a href="index.php?page=support">support</a></li>
        <li><a href="index.php?page=feedback">contact me</a></li>
      </ul>
    </div>
    <div id="content">
        <?php
      @$page=  $_GET['page'];
      if($page!="")

        {
      if($page=="home")
      {
        include('home.php');
      }
      if($page=="about"){
        include('about.php');
      }
      if($page=="support"){
        include('support.php');
      }
      if($page=="feedback"){
        include('feedback.php');
      }
    }
      else{
        include('home.php');
      }

        ?>

      </div>
      <div id="footer">
        Geda&copy;2022
      </div>
  </div>

</body>
</html>
