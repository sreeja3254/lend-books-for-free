<!DOCTYPE html>
<html>
<head>
    <title>Delete </title>
</head>
<body>
    <h2>Do u want to delete ur account?</h2>
    <form method="post">
    Student_id:
    <input type="text" name="student_id">
    </br>
    </br>
    <button name="delete_account">DELETE</button>
    </br>
    </form>
<h2>Do u want to delete the book u have given?</h2>
    <form method="post">
    Student_id:
    <input type="text" name="student_id">
    </br>
    </br>
    Course_code:
    <input type="text" name="course_code">
    </br>
    </br>
     <button name="delete_book">DELETE</button>
</form>
<?php
if(isset($_POST["delete_account"])){
    $id=$_POST["student_id"];
    $con=new mysqli("localhost","root","","student_info");
     if($con->connect_error){
        die("Connection failed: ".$con->connect_error);}
    $sql="DELETE FROM student_details WHERE student_id='$id'";
    if($con->query($sql)===TRUE){
        echo "Your account has been deleted successfully";} 
    else{
        echo "invalid student id.No user exist with that id";}}
        if(isset($_POST["delete_book"])){
            $id=$_POST["student_id"];
            $code=$_POST["course_code"];
            $con=new mysqli("localhost","root","","student_info");
             if($con->connect_error){
                die("Connection failed: ".$con->connect_error);}
        $sql="DELETE FROM book WHERE student_id='$id' AND course_code='$code'";                     
        if($con->query($sql)===TRUE){
            echo "Your book has been deleted successfully";} 
        else{
            echo "invalid student id/book id.No user/book exist with that id";}}?>


</body>
    </html>