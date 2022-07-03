<!DOCTYPE html>
<html>
    <head>
        <title>ADD BOOK</title>
    </head>
<body>
    <table>
        <tr>
            <td>CSE3003:Computer Networks</td>
            <td>MAT2003:Optimization Techniques</td>
            <td>CSE2008:Operating Systems</td>
            <td>MAT2005:Linear Algebra</td>
        </tr> 
        <tr>
            <td>CHY1004:Engineering Chemistry</td>
            <td>MAT1011:Applied Statistics</td>
            <td>ENG2001:English</td>
            <td>CSE2006:Computer Graphics</td>
       </tr>   
       <tr>
           <td>ONL1001:C language</td>
           <td>CSE2005:OOPS</td>
           <td>CSE1004:JAVA </td>
           <td>CSE2001:DSA</td>
      </tr>
      </table>
 
  <h1>ADD BOOK</h1>

      <form method="post">
          Student_id:
          <input type="text" name="student_id">
         </br></br>
          Course_code:
          <input type="text" name="coursecode">
         </br></br>
          <button name="add">ADD</button>
</form> 
     <?php
     if(isset($_POST["add"])){
       $id=$_POST["student_id"];
       $code=$_POST["coursecode"];
       $con=new mysqli("localhost","root","","student_info");
        if($con->connect_error){
            die("Connection failed: ".$con->connect_error);}
         $sql="INSERT INTO book VALUES('$id','$code')" ;
         if($con->query($sql)===TRUE){
             echo "Your book has been added successfully";
             header("Location:home.html");}
         else{
            echo "Error: ".$sql.$con->error;}}?>                

</body>
</html>