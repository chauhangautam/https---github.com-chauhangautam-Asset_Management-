 
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
 
  <link rel="stylesheet" href="Home.css">
  <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
  html,body{
    width: 100%;
    height: 100%;
    padding: 0%;
    margin: 0%;
  }
</style> 
</head>
 <body>

  
  <nav class="navbar navbar-expand-sm navbar-primary" id="neubar">
    <div class="container">
       
      <a class="navbar-brand" href="Home.php"> Asset Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item"> 
            <a class="nav-link mx-2 " href="Home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Asset Details</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="AddCateg.php">Add Asset</a></li>
              
              <li><a class="dropdown-item" href="ViewCategory.php">View  Added Data</a></li>   
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Asset Information
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="mentinence.php">Maintenance</a></li>
              <li><a class="dropdown-item" href="ViewMentenence.php">View  maintenance data</a></li>
              
              <li><a class="dropdown-item" href="SupplierDetails.php">supplier Details</a></li>
              <li><a class="dropdown-item" href="ViewSupplier.php">View Store data</a></li>
            
            </ul>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Asset Disposal</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="Disposal.php">Asset Disposal</a></li>
              
              <li><a class="dropdown-item" href="ViewDisposal.php">View Disposal Data</a></li>   
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Help
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="Aboutus.html">About Us</a></li>
              <li><a class="dropdown-item" href="contactus.php">Contact us</a></li>
            </ul>
            <li class="nav-item">
             <a href="logout.php" class="btn btn-warning">Logout</a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

   <div class="heading1">
    <h1>Welcome to asset management</h1>
    <h2>Connecting with us</h2>
   </div>
    
   <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src=" https://i.rtings.com/assets/pages/6S2WXjTl/best-laptop-medium.jpg" class="card-img-top"
          alt="Hollywood Sign on The Hill" />
        <div class="card-body">
          <h5 class="card-title">Mantinence  Services </h5>
          <p class="card-text">
         Welcome to our plateform,  We are providing all types mentinece your asset and giving security to you..
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://d38cf3wt06n6q6.cloudfront.net/tyasuitefront/webgpcs/images/unique-features-of-asset-management-software.png" class="card-img-top"
          alt="Palm Springs Road" />
        <div class="card-body">
          <h5 class="card-title">
            
            Fast Services
          </h5>
          <p class="card-text">
          We are providing fast services to customers and trusted work to costumers ..and as well your asset tracking and mentinence..    
          </p>
        </div>
      </div>
    </div>
  </div>




   <div class='container-fluid'>
    <div class="card">
        <div class="heading text-center">
            <div class="head1">Just Scratching the Surface</div>
            <p class="bdr"></p>
        </div>
        <div class="card-body">
            <div class="row m-0 pt-5">
                <div class="card col-12 col-md-3">
                    <div class="card-content">
                        <i class="fas fa-hand-holding-usd fa-3x"></i>
                        <div class="card-title">
                            RECHARGE REPEAT
                            CUSTOMER
                        </div>
                        <p><small>Save customers' cards for future phone orders</small></p>
                        <div class="learn-more">
                            <p>
                                <small>
                                    LEARN MORE
                                    <label><i class="fas fa-angle-right"></i></label>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-3">
                    <div class="card-content">
                        <i class="far fa-handshake fa-3x"></i>
                        <div class="card-title">
                            ACCEPT ELECTRONIC
                            CHECK
                        </div>
                        <p><small>Save customers' elecronic during mentinence orders</small></p>
                        <div class="learn-more">
                            <p>
                                <small>
                                    LEARN MORE
                                    <label><i class="fas fa-angle-right"></i></label>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-3">
                    <div class="card-content">
                        <i class="fas fa-mobile-alt fa-3x"></i>
                        <div class="card-title">
                            STREAMLINE PHONE
                            PAYMENTS
                        </div>
                        <p><small>Save customers' cards for future phone orders</small></p>
                        <div class="learn-more">
                            <p>
                                <small>
                                    LEARN MORE
                                    <label><i class="fas fa-angle-right"></i></label>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-3">
                    <div class="card-content">
                        <i class="fas fa-user-secret fa-3x"></i>
                        <div class="card-title">
                            STAY<br />
                            SECURE
                        </div>
                        <p><small>Save customers' information  for future phone orders</small></p>
                        <div class="learn-more">
                            <p>
                                <small>
                                    LEARN MORE
                                    <label><i class="fas fa-angle-right"></i></label>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer row m-0">
            <p>
                <label>
                    <i class="fas fa-phone fa-rotate-90 text-primary"></i>
                </label>
                800-601-0230</p>
            <div>
                <p>
                    <small class="follow-text">FOLLOW US ON SOCIAL MEDIA</small> <label class="footer-right">
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-twitter-square"></i>
                    </label>
                </p>

            </div>
        </div>
        
    </div>
</div>
  </body>
 </html>