<?php
// Get the user data
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_VALIDATE_INT);
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$phno = filter_input(INPUT_POST, 'phno');
$dob = filter_input(INPUT_POST, 'dob');
$gender = filter_input(INPUT_POST, 'gender');
$password = filter_input(INPUT_POST, 'password');
$username = filter_input(INPUT_POST, 'username');

// Validate inputs
if ($firstname == null || $firstname == false ||
        $email == null || $password == null || $password == false|| $gender == null ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the user to the database  
    $query = 'INSERT INTO useraccount
                 (firstname, lastname, email, phno, dob, gender, password, username)
              VALUES
                 (:firstname, :lastname, :email, :phno, :dob, :gender, :password, : username)';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstname', $firstname);
    $statement->bindValue(':lastname', $lastname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phno', $phno);
    $statement->bindValue(':dob', $dob);
    $statement->bindValue(':gender', $gender)
    ;
    $statement->bindValue(':password', $password);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();

    // Display the login page
    include('index.php');
}
?>
?>