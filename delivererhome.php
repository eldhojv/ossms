<html>
<head>
		<title>Fix-it</title>
    <link rel="stylesheet" type="text/css" href="css/admingateway.css" />

</head>
</head>
<body>
	<?php
	session_start();
	if($_SESSION['uname'])
	{include 'headerlogoutdeliverer.php';
	echo "Welcome ".$_SESSION['uname'];
    }
    else
    	header("location:login.php")
	?>





<div class="links">
  <div class="register">
    <a href="delivererdataview.php"> ORDER LIST </a>
    </div>

    <div class="buy">
   <a href="updateorderdel.php">UPDATE DATABASE</a>
    </div>
    
	
</body>
</html>