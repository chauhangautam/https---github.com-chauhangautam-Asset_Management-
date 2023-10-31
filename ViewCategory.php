<?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM category");
                    ?>
 
                    
                <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
 
  <link rel="stylesheet" href="view.css">

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

  <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                       
                      <tr>
                      <td><strong>Asset  Id</strong></td>
                        <td><strong>Asset Name</strong></td>
                        
                        <td><strong>Date</strong></td>
                        <td><strong>Model</strong></td>
                        <td><strong>Invoice No.</strong></td>
                        <td><strong>Book Value</strong></td>
                        <td><strong>Location </strong></td>
                        <td><strong>Quantity</strong></td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    <td><?php echo $row["asset_id"]; ?></td>
                        <td><?php echo $row["asset"]; ?></td>
                     
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["model"]; ?></td>
                        <td><?php echo $row["Invoice_No."]; ?></td>
                        <td><?php echo $row["Book_Value"]; ?></td>
                        <td><?php echo $row["Location"]; ?></td>
                        <td><?php echo $row["Quentity"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

  </body>
 </html>