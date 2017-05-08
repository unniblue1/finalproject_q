<?php include 'view/header.php'; ?>


<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Account Information</h2><br>
      <h4>Login to access your account or if you have not registered, please  click on the Sign Up button to create an account.</h4>
      <br>
    </div>
  </div>
</div>
      


<div class="container" style="width: 24%;position: relative;left: -30%;background: #F5DEB3;padding: 8px 10px 8px 12px;color: #DC143C;border-radius: 7px;">
  <h2>User Information</h2>
  <form method="post" action="createaccount.php">
    <div class="form-group">
      <!-- <label>Email:</label> -->
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" style="padding: 2px 7px 10px 9px;"required>
    </div>
    <div class="form-group">
      <!-- <label>Password:</label> -->
      <input type="password" name="password" class="form-control" id="email" placeholder="Enter password" style="padding: 2px 7px 10px 9px;"required>
    </div>
    <div class="form-group">
      <!-- <label>First Name:</label> -->
      <input type="text" name="fname" class="form-control" id="email" placeholder="Enter first name" style="padding: 2px 7px 10px 9px;"required>
    </div>
    <div class="form-group">
      <!-- <label>Last Name:</label> -->
      <input type="text" name="lname" class="form-control" id="email" placeholder="Enter last name" style="padding: 2px 7px 10px 9px;"required>
    </div>
    <div class="form-group">
      <!-- <label>Phone Number:</label> -->
      <input type="text" name="phone" class="form-control" id="email" placeholder="Enter phone number" style="padding: 2px 7px 10px 9px;"required>
    </div>
    <div class="form-group">
      <!-- <label>Date of Birth:</label> -->
      <input type="date" name="birhtday" class="form-control" id="pwd" >
    </div>
    <div class="form-group">
      <!-- <label>Gender:</label> -->
      <input type="text" name="gender" class="form-control" id="pwd" placeholder="Enter gender">
    </div>
    <input type="submit" action="createaccount.php" value="Create Account" class="btn btn-default">
  </form>
</div><br>
</body>
</html>


<?php include 'view/footer.php'; ?>


