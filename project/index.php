<?php 
require('pdoConnect.php');
$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = "show_login_page";
}
if ($action == "show_login_page")     
{
	header("Location: login.php");
}else if($action == "test_user_valid"){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = 'select * from accounts where email = "'.$email.'"';
    $results = runQuery($sql);
    if(count($results)){
        $password_db = $results[0]['password'];
        if ($password_db==$pass) {
            $owner_id = $results[0]['id'];
            $fname = $results[0]['fname'];
            $lname = $results[0]['lname'];
            $email = $results[0]['email'];
            setcookie('ownerid',$owner_id);
            setcookie('fname',$fname);
            setcookie('lname',$lname);
            setcookie('owner_email',$email);
            header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");
        } else {
            header("Location: badinfo.php");
        }
    }else{
        header("Location: badinfo.php");
    }

}else if($action == "edit"){
    $id = $_POST['item_id'];
    header("Location: edit.php?itemid=$id");

}else if($action == "delete"){

    $id = $_POST['item_id'];
    $sql = 'delete from my_tasks where taskid = "'.$id.'"';
    $results = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");

}else if($action == "complete"){
    $item_id = $_POST['item_id'];
    $isdone = 1;
    $sql ='UPDATE my_tasks SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");

}else if($action == "incomplete"){
    $item_id = $_POST['item_id'];
    $isdone = 0;
    $sql ='UPDATE my_tasks SET `isdone` = "'.$isdone.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");

}else if($action == "add_task"){
    $ownerid = $_COOKIE['ownerid'];
    $owner_email = $_COOKIE['owner_email'];
    $due_date = $_POST['duedate'];
    $create_date = $_POST['createddate'];
    $task = $_POST['task'];
    $isdone = 0;
    $sql = 'INSERT INTO my_tasks (`owneremail`, `ownerid`, `createddate`, `duedate`, `task`, `isdone`) VALUES ("'.$owner_email.'", "'.$ownerid.'", "'.$create_date.'", "'.$due_date.'", "'.$task.'", "'.$isdone.'")';
    $result = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");

}else if($action == 'after_edit'){
    $task = $_POST['task'];
    $duedate = $_POST['duedate'];
    $createddate = $_POST['createddate'];
    $item_id = $_POST['item_id'];
    $sql ='UPDATE my_tasks SET `task` = "'.$task.'", `duedate` = "'.$duedate.'",`createddate` = "'.$createddate.'" WHERE taskid = "'.$item_id.'"';
    $result = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");
}   




?>










