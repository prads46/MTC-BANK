<!DOCTYPE html>
<html lang="en">
<head>
<!-- required metatags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap css -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<title>Basic Banking System</title>
</head>

<!-- navbar -->
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="Images/banklogo.png" alt="MTC Bank" style="width: 70px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href=" index.php " style="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" style="">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" style=""> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" style="">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->
  
<!-- About section -->
<div class="big" style="background-color:CadetBlue" >
<section id ="about" class="container" style="color: blue ;text-align: center ; ">
<h2 class="heading">About Us</h2>
<div class="container">
<div class="row">
<img class="mt-3" style="height: 150px; width: 150px; display: flex; justify-content: right" src="Images/aboutus.jpg" alt="MTC BANK">
</div>
<div class="col-md-6 mx-auto mt-4">
<div>
<span class="text" style="font-size: 30px; color: blue">MTC BANK</span>
</div>
<div class="mt-2">
<span class="sub-content" style="color: black; font-size: 25px">We are Banking System where you can do basic banking.
Users can view other user's profile , transfer Money and can also view past Transactions betweeen diffrent users</span>
</span></div></div><br><br><br><br>
</nav>


<!-- services section -->
<section class="container" id="services">
<h3 class="heading" style="margin: 0px; text-align:center">Services</h3><br>
<div class="container text-center">
<div class="row" >
<div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="images/users.gif" class="card-img-top mt-3 img" alt="all users profile">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="transferMoney.php" class="btn btn-primary" style="background-color: black; color: white"> View Users Profile</a>
          </div>
        </div>
        <div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="images/transaction.gif" class="card-img-top mt-3 img" alt="users past transaction">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="transactionhistory.php" class="btn btn-primary" style="background-color: black; color: white">Transfers Table</a>
          </div>
        </div>
        <div class="card col-md-3 mx-auto" style="width: 15rem; height: 270px">
          <img src="images/mt.gif" class="card-img-top mt-3 img" alt="transfer money">
          <div class="card-body">
            <h5 class="card-title" id="transmoney"></h5>
            <p class="card-text"></p>
            <a href="transferMoney.php" class="btn btn-primary" style="background-color: black; color: white">Transfer Money</a>
          </div>
        </div>
      </div>
    </div>
    </div><br><br><br><br>
  </section>
<br><br>




  <!-- contact us User form -->
  <section class="mx-auto" id="contact" style="background-color: CadetBlue">
    <h2 class="heading" style="text-align: center; color:red"><b>Contact Us</b></h2><br>
  
  
  <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name:" aria-label="First name" style="ml-2">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name:" aria-label="Last name">
  </div>
</div>
<form class="mt-3">
  
    <label for="inputEmail4" class="form-label"></label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email"><br><br>
  </div>
  <div class="col-3" >
  <label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}">

      </div>
  <div class="tp" style="display: flex; flex-direction: row">
  <div class="col-3">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div><br><br></div>


  <button type="submit" style="padding: 2px 2px 2px 2px;margin-left: 600px; color : white; background-color:black "><b>Submit</b></button><br><br>

  <footer style="background-color: CadetBlue">
     <p class="text-copy" style="text-align: center"><b>
     www.MTCBANK.com Copyright &copy; 2021 All rights reserved</b>
    </p>
  
 
  </footer>
  </form>
</section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>

    

</body>
</html>