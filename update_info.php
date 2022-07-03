<!DOCTYPE html>
<html>
    <head>
        <title>Update_info </title>
    </head>
    <body>
        <h1>Enter Details</h2>
        <form method="post">
            <table>
             <tr>
                 <td>Student_id</td>
                 <td><input type="text" name="Student_id"></td>
                </tr>
             <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
          
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <td>Block</td>
                <td><input type="text" name="block"></td>
            </tr>
            <tr>
                <td>Room Number</td>
                <td><input type="text" name="room_num"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><button name="submit">UPDATE</button></td>
            </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["submit"])){
            $id=$_POST["Student_id"];
            $name=$_POST["name"];
            $email=$_POST["email"];
            $number=$_POST["number"];
            $block=$_POST["block"];
            $room_num=$_POST["room_num"];
            $password=$_POST["password"];
            $con=new mysqli("localhost","root","","student_info");
            if($con->connect_error){
                die("Connection failed: ".$con->connect_error);}
            $sql="UPDATE student_details SET name='$name',email='$email',phn_number='$number',block='$block',room_num='$room_num',password='$password' WHERE student_id='$id'";
            if($con->query($sql)===TRUE){
                echo "Updates have been made successfully";}
            else{
                echo "Error: ".$sql.$con->error;}}?>    