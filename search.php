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
            <td>CHY1004:Enigineering Chemistry</td>
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
      <h1>Search for BOOK</h1>
      <form method="post">
          Enter course code:
          <input type="text" name="coursecode">
          </br>
          </br>
          <button name="search">SEARCH</button>
   </form>
   <?php
     if(isset($_POST["search"])){
         $code=$_POST["coursecode"];
         $con=new mysqli("localhost","root","","student_info");
        if($con->connect_error){
            die("Connection failed: ".$con->connect_error);}
        $sql="select * from student_details where student_id in(select student_id from book where course_code='$code')";
        $result=$con->query($sql);
        if($result->num_rows >0){
        while ($row=$result->fetch_assoc()){
            echo $row["student_id"]." ".$row["name"]." ".$row["email"]." ".$row["phn_number"]." ".$row["block"]." ".$row["room_num"];}}
        else{
         echo "No matches found";}}?>
         </body>
         </html>  