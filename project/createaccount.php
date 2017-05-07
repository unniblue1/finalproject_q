<?php

  include_once 'pdoConnect.php';

  $uname = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $birthday = $_REQUEST['birthday'];
  $num = $_REQUEST['phone'];
  $gender = $_REQUEST['gender'];

  $sql = 'select * from accounts where email = "'.$uname.'"';
  $results = runQuery($sql);
  if (count($results) > 0) {
    header("Location: exitedname.php");
  }else{
    $sql = 'INSERT INTO accounts (`email`, `password`, `fname`, `lname`, `birthday`, `gender`, `phone`) VALUES ("'.$uname.'", "'.$password.'", "'.$fname.'", "'.$lname.'", "'.$birthday.'", "'.$gender.'", "'.$num.'")';
    $result = runQuery($sql);
  }


?>







<?php include 'view/header.php'; ?>

<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="color:black">
  <div class="row">
    <div class="col-sm-8">
      <h2>Congratulations!</h2><br>
      <h4>Your account has been created. Login to access your task list.</h4>
      <br>
      <form method="post" action="index.php" name="loginform" id="loginform">
        <input type="submit" name="login" value="Login" class="btn btn-default">
      </form>
    </div>
  </div>
</div>
</body>
</html>




<?php include 'view/footer.php'; ?>