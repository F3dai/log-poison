<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

<h1>Monke</h1>

<ul>
  <li><a href="/index.php">Home</a></li>
  <li><a href="/index.php?file=monkeone.php">monke #1</a></li>
  <li><a href="/index.php?file=monketwo.php">monke #2</a></li>
</ul>

<p> read about monke</p>
<p>the most comprehensive website about monkes</p>

</body>
</html>

<?php

$file = $_GET['file'];

if(isset($file))
{
    include("$file");
}
