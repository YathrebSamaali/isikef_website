<?php
	
	include 'connection.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comment (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>commantaires</title>
    <link rel="icon" href="images/icon.jpg">
    <link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity = 'sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin = 'anonymous' referrerpolicy = 'no-referrer' />s
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
	background: #222222;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Roboto', sans-serif;
}

a .logo {
  display: inline-block;
  margin: 15px;
}
.logo img {
  width:250px;
  height:70px;
}

/*barre de navigation*/

nav {
  position: fixed;
  top: 0;
  width: 100%;
  height: 75px;
  background: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
  z-index: 10;
}

nav ul {
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  margin: 0 15px;
  font-size: 16px;
}

nav ul li a {
  color: black;
  text-decoration: none;
}
nav ul li a:hover::after {
  width: 80%;
}
nav ul li a:hover {
  color: #ff0000;
}
/* style pour la navigation déroulante*/
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content {
  display:none; 
  position: absolute;
  background-color: #fff;
  z-index: 1;
}
.dropdown-content a {
  color: black;
  margin: 25px 10px ;
  padding: 5px ; 
  font-size: 14px;
  text-decoration: none;
  display: block;

}
/* Style pour l'icône de la flèche vers le bas */
.dropbtn i {
  font-size: 14px;
  margin-left: 5px;
}
/* Style pour l'icône lorsqu'elle est survolée */
.dropbtn:hover i {
  transform: rotate(180deg);
}

/*button*/
.buttons-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
.btn {
  font-size: 18px;
  background: #ff0000;
  border-radius: 100px;
  padding: 12px 20px;
  margin: 5px;
  text-decoration: none;
  color: #fff;
  display: inline-block;
  border:2px solid transparent;
  transition: all 0.4s ease;
}
.btn:hover {
  background: transparent;
  color: #ff0000;
  border: 2px solid #ff0000;
}
.btn-login{
  font-size: 18px;
  background: transparent;
  color: #ff0000;
  border: 2px solid #ff0000;
}
.wrapper {
	background: white;
	border-radius: 10px;
	width: 500px;
	height: 350px;
	display: flex;
	justify-content: center;
	align-items: center;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.wrapper .form input {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	margin-bottom: 15px;
	margin-top: 20px;
}

.wrapper .form textarea {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	resize: none;
}

.wrapper .form .btn {
	background: #222222;
	color: white;
	font-size: 15px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 10px;
	width: 200px;
	border-radius: 20px;
	margin: 0 auto;
	display: block;
	margin-top: 5px;
	margin-bottom: 20px;
	opacity: 0.8;
	transition: 0.3s all ease;
}

.wrapper .form .btn:hover {
	opacity: 1;
}

.content {
	text-align: center;
	background:#ff0000;
	color: white;
	padding: 10px;
	width: 500px;
	border-radius: 10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}

.content p {
	margin-bottom: 15px;
	width: 450px;
}
    </style>
</head>
<body>
<nav>
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
      </div>
      <div class="navbar">
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Nos Actualités</a></li>
          
      
          <li >
            <a href="#" >Notre Bibliothèque</a>
            </li>
                   
          <li class="dropdown">
            <a href="#" class="dropbtn">Vie Estudiantine<i class="fas fa-angle-down"></i></a>
              <div class="dropdown-content">
                <a href="#">Activités Culturelles</a>
                <a href="#" >Activités Sportives</a>
              </div>
          </li>
     
        </ul>
      </div>
      <div class="buttons-container">
     
        <a href="logout.php" id="deconnexion-button"  class="btn btn-login"><i class="fa-solid fa-right-from-bracket"></i></a>
        
      </div>
      
      
      
    </nav>


	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Votre Nom">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Votre message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Poster un commentaire</button>
		</form>
	</div>
   
   
	<div class="content">
		<?php

			$sql = "SELECT * FROM comment";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>