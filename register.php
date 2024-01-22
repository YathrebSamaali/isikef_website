<!doctype html>
<html lang="en">

<head>
  <title>S'inscrire</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="icon" href="images/icon.jpg">
  <script>
		function validateForm() {
			var email = document.forms["loginForm"]["email"].value;
			var password = document.forms["loginForm"]["password"].value;
	if (email.indexOf("@u-jendouba.tn") == -1) {
			document.getElementById("emailError").innerHTML = "L'email doit être de la forme: votre-email@u-jendouba.tn";
			return false;
		} else {
			document.getElementById("emailError").innerHTML = "";
		}
		
		if (password.length != 8) {
			document.getElementById("passwordError").innerHTML = "Le mot de passe doit contenir exactement 8 caractères";
			return false;
		} else {
			document.getElementById("passwordError").innerHTML = "";
		}
	}
	
	function clearEmailError() {
		document.getElementById("emailError").innerHTML = "";
	}
	
	function clearPasswordError() {
		document.getElementById("passwordError").innerHTML = "";
	}
</script>

</head>
<body>

  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-2">
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">S'inscrire</p>
              
              <span id="emailError" style="color:red;padding-left:60px;"></span>
              <span id="passwordError" style="color:red;padding-left:60px;"></span>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  

                  <form class="mx-1 mx-md-4" action="add.php" name="loginForm" onsubmit="return validateForm()" method="post">
                  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><i class="bi bi-person-circle"></i> Nom</label>
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="SVP entrez votre Nom !" style="border-radius:25px ;" required />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i>  E-mail</label>
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" oninput="clearEmailError()" name="email" id="email" autocomplete="off" placeholder="SVP entrez votre E-mail !" style="border-radius:25px ;" required/>

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Mot de passe</label>
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" oninput="clearPasswordError()" name="password" id="password" autocomplete="off" placeholder="SVP entrez votre Mot de passe !" style="border-radius:25px ;" required />
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;background-color: red;" style="border-radius:25px ;" />

                    </div>

                  </form>
                  <p align="center">Vous avez déjà un compte ? <a href="login.php"  style="font-weight:600; text-decoration:none;color:red;">Connexion</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="images/signup.png" class="img-fluid" alt="Sample image" height="300px" width="500px">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/scripts.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>