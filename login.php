<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="login.css" rel="stylesheet"/>
    </head>
    
    <body>
        <div class="main">
        <h1 class="login">LOGIN PAGE</h1>
        <form method="post">
            <table class="table" >
                <tr >
                    <td><h4 >Student_id</h4></td>
                    <td><input type="text" name="Student_id"></td>
                </tr>
                <tr>
                    <td><h4 style="text-align:center">Password</h4></td>
                    <td><input type="text" name="password"></td>
                </tr>
            </table>
            <button  name="submit">LOGIN</button>
            </form>
            <h3 >Don't have an account?Then <a href="signup.php" target="_blank">SignUp</a></h3>
</div>
            <?php
            if(isset($_POST["submit"])){
            $id=$_POST["Student_id"];
            $password=$_POST["password"];
            $con=new mysqli("localhost","root","","student_info");
            if($con->connect_error){
                die("Connection failed: ".$con->connect_error);}
            
            $sql="select * from student_details where student_id='$id' and password='$password'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            if($row['student_id'] ==$id && $row['password']==$password){
                echo "logged in successfully";
                 header("Location:home.html");}
            else {
                echo "logged in failed";}}?>   
    </body>
</html>