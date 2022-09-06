<!DOCTYPE html>

<!--
 * Zac Purkiss 
 * P444025
 * 09.08.2022
-->
 
<html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Question 7</title>
	<link rel="stylesheet" type="text/css" href="index_files/style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Question Seven</h1>
	
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li><a href="/index.php">Index</a></li>
			<li><a href="/one.php">Question 1</a></li>
			<li><a href="/two.php">Question 2</a></li>
			<li><a href="/three.php">Question 3</a></li>
			<li><a href="/four.php">Question 4</a></li>
			<li><a href="/five.php">Question 5</a></li>
			<li><a href="/six.php">Question 6</a></li>
			<li class="active"><a href="/seven.php">Question 7</a></li>
			<li><a href="/eight.php">Question 8</a></li>
			<li><a href="/nine.php">Question 9</a></li>
			<li><a href="/contact.php">Contact</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	
	<div class="container">
	  <table class="table">
	    <thead>
		  <th>Question</th>
		  <th>Description</th>
		  <th>Answer</th>
	    </thead>
		<tbody>
		  <?php
		    include_once('connection.php');

			$database = new Connection();
    		$db = $database->open();
			try{	
			  $sql = 'SELECT * FROM content WHERE id = 7';
			  foreach ($db->query($sql) as $row) {
		  ?>
		  <tr>
			<td><?php echo $row['question']; ?></td>
			<td><?php echo $row['description']; ?></td>
			<td><?php echo $row['answer']; ?></td>
		  </tr>
		  <?php 
			  }
			}
			catch(PDOException $e){
			  echo "'ruh roh' - scooby doo";
			}

			$database->close();

			  ?>
		</tbody>
	  </table>
	</div>
</body>
</html>