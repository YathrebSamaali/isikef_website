<?php
session_start();
include_once( 'connection.php' );

// if ( isset( $_SESSION[ 'name' ] ) && isset( $_SESSION[ 'username' ] ) ) {

// }
$_SESSION[ 'name' ];
$_SESSION[ 'email' ];
?>

<!doctype html>
<html lang = 'en'>

<head>
<title>Bienvenue</title>
<!-- Required meta tags -->
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity = 'sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin = 'anonymous' referrerpolicy = 'no-referrer' />
<!-- Bootstrap CSS v5.2.1 -->
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel = 'stylesheet'
integrity = 'sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin = 'anonymous'>
<link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'>

<link rel = 'icon' href = 'images/icon.jpg'>
<style>
.welcome {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:#edf2fc
}
.welcome  span {
    background-color: #edf2fc;
    color: red;
    padding: 15px;
    margin: 10pxpx;
    font-size: 38px;
    font-weight: 600;
    letter-spacing: 6px;
    text-transform: uppercase;
}

.welcome   p {
    margin: 20px;
}
.welcome  .btn {
    margin-top: -50px;
    width: 18%;
    background-color: red;
    color: white;
    font-weight: 500;
    letter-spacing: 5px;
    text-transform: uppercase;
    border-radius: 20px;
}
.welcome .btn:hover {
    margin-top: -30px;
    width:240px;
    background-color: darkred;
    font-weight: 500;
    transition: 1s;
    color: white;
}

/*logo*/

a .logo {
    display: inline-block;
    margin: 15px;
}
.logo img {
    width:180px;
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
.buttons-container .btn-login{
  font-size: 18px;
  background: transparent;
  color: #ff0000;
  border: 2px solid #ff0000;
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
    



<div class="welcome">
<h3>Bienvenue,  <span><?=$_SESSION['name'];?></span></h3>
<p>Votre Email id est : <h6><?=$_SESSION['email' ];
?></h6></p>
<br><br>
<a href = 'espace_etudiant.php' class = 'btn'>Voir les cours</a>
</div>

<script src="js/scripts.js"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
integrity = 'sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin = 'anonymous'>
</script>

<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js'
integrity = 'sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz' crossorigin = 'anonymous'>
</script>
</body>

</html>