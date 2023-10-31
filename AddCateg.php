 
                  <?php
                  if(isset($_POST['AddAsset']))
                  {
                    
                    $Aid = $_POST["Id"];
                    $Item= $_POST["asset"];
                    $Model = $_POST["model"];
                    $Date = $_POST["date"];
                    $Invoice = $_POST["Invoice"];
                    $bookValue = $_POST["Bvalue"];
                  
                    $location = $_POST["Location"];
                    $quentity = $_POST["quentity"];
                    require_once "db.php";
                    $sql = "INSERT INTO `category`(`asset_id`, `asset`, `model`, `date`, `Invoice_No.`, `Book_Value`, `Location`, `Quentity`) VALUES ('$Aid','$Item','$Model','$Date','$Invoice','$bookValue','$location','$quentity')";
                    $data= mysqli_query($conn,$sql);
                    if ($data)
                    {
                      echo "<div class='alert alert-success'>Data Saved successfully.</div>";
                    }
                    else{
                      echo "<div class='alert alert-success'>Not Saved.</div>";
                    }
                  }
                  
                  ?>
    
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
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-primary" id="neubar">
        <div class="container">
          <a class="navbar-brand" href="#"> Asset Management</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="Home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Asset Details</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="AddCateg.php">Add Detail</a></li>
              
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
    

      <section class="vh-100 bg-image "
      >
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Asset Details</h2>
                 

                  <form method="post" action="">
    
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Asset Id</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Id" required="required" />
                      
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3cg">Add Asset</label>
                      <input type="text" id="form3Example3cg" class="form-control form-control-lg"  name="asset" required="required"/>
                      
                    </div>
    
                    
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Model</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="model" required="required" />
                      
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Purchase Date</label>
                      <input type="date" id="form3Example4cg" class="form-control form-control-lg"  name="date" required="required"/>
                      
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Invoice Number</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Invoice" required="required" />
                      
                    </div>
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Book Value</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Bvalue" required="required" />
                      
                    </div>
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Location</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Location" required="required" />
                      
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cg">Quantity</label>
                      <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="quentity" required="required" />
                      
                    </div>
    
                    <div class="d-flex justify-content-center">
                      <button type="submit" name="AddAsset"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                    </div>
     
    
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