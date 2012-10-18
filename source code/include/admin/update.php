<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
<title>Beadysite - Free HTML5 Template</title>

<link rel="stylesheet" type="text/css" href="./css/style1.css">
<link rel="stylesheet" href="css/reset1.css">
<link rel="stylesheet" href="css/animate1.css">
<link rel="stylesheet" href="css/styles1.css">
</head>

<body>
<div id="page">
<header>

	<img src="images/logo.png" width="303" height="82" alt="logo" /> 
  
      <br />
      <img src="images/bg_banner_grey.gif" width="980" height="5" alt="logo_banner" />

      </header>


  <div id="content">

  
<div id="sidebar">

<div id= "welcome">

 <?php
    echo "<br>"."Welcome ".$_SESSION['name']."! ";

  ?>
  <div id= "break"><center><a href = "#">[Account Settings]</a></center></div>
</div>

<center>

 <div id="menu3">
 <ul>
  <li><a href="index.php?action=homenav">Home</a></li>
    <li><a href="index.php?action=addmember">Add Member</a></li>
     <li><a href="index.php?action=updatemember">Update Member</a></li>
    <li><a href="index.php?action=addtransaction">Add Transaction</a> </li>
    <li><a href="index.php?action=history">Transaction History</a></li>
    <li><a href="index.php?action=logout">[Log Out]</a></li>
 </ul>
 </div>
  </div>
  <div style="clear: both;">&nbsp;</div>
  <img src="images/bg_banner_grey.gif" width="980" height="5" alt="logo_banner" />
<footer>
 Your Site Name 
				© 2011 | Design by <a href="http://www.html5-templates.co.uk" target="_blank">HTML5 Templates</a>
</footer>
</div>
</body>
</html>
