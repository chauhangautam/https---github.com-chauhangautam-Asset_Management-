 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
</head>
<body>
    <section class="vh-100 bg-image "
    style="background-image: url(' https://insite.ipwea.org/wp-content/uploads/2020/11/Story-44-Image-1.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Log In account</h2>
                <?php
        if (isset($_POST["log_In"])) {
           $email = $_POST["email"];
           $password = $_POST["pass"];
            require_once "db.php";
            $sql = "SELECT * FROM userform WHERE email = '$email'  ";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    
                }
                else
                {
                  header("Location: home.php");
                    die();
                    
                }
            }
            else
            {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
  
                <form method="post" action="signIn.php">
  
                  
  
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg"  name="email" required="required"/>
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg"  name="pass" required="required"/>
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
  
                   
  
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>
  
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="log_In"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Log In</button>
                  </div>
  
                  <p class="text-center text-muted mt-5 mb-0"> <a href="Registration.php"
                      class="fw-bold text-body"><u>Register here</u></a></p>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</body>
</html>