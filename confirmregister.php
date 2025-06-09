<?php session_start();
if(empty($_SESSION['staffid'])):
include("head.php");
 
endif;




?>
<!DOCTYPE html>
<html>
<head>

   

  <title>REGISTRATION PAGE</title>
   <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">

<link rel="stylesheet" type="text/css" href="css/staff.css">

<script>
    function Verify()
{
  var staffID = document.getElementById("staffID");
  var name = document.getElementById("name");
var position = document.getElementById("position");
var password = document.getElementById("password");


if (staffID.value == "" )
{
alert("Error: Staff ID is invalid");
return false;
}
else if (name.value == "" )
{
alert("Error: Name is invalid");
return false;
}
else if (position.value == "" )
{
alert("Error: Position is empty");
return false;
}
else if (password.value == "" )
{
alert("Error: Password is empty");
return false;
}


else return true;
}
</script>
</head>

<body class= "staff">
<section>
  <h3>REGISTER STAFF</h3>
   


  

      <form name="submit"id="submit"action="staff-connect.php"onsubmit="return validation()" method="post" enctype="multipart/form-data">



   

    <table>


    <table align='center' border='5' width='40%'>

   
  
    <tr><td>STAFF ID :</td>
    <td><input type="text" name="staffID" id="staffID" required= /></td></tr>

    <tr><td>STAFF NAME: </td>
    <td><input type="text"  name="name" id="name" required= /></td></tr>


    <tr><td>POSITION: </td>
    <td><select id="position" name="position" required>
    <option value="Manager" selected>Manager</option>
    <option value="Clerk" selected>Clerk</option>
    <option value="Worker" selected>Worker</option></select>



    </td></tr>

    <tr><td>PASSWORD: </td>
    <td><input type="text"  name="password" id="password" required= /></td></tr>

   
    

          <label ></label>
       
      </td>

   

     <tr><td align="center" colspan="2"><input type="submit" name=submit value="SUBMIT " />
    <input type="reset" name="CLEAR FORM" value="CLEAR" /></td></tr><br/>


</table>


<td><a href="login.php" class="btn btn-success"><u>BACK</u></a></td>




<br/>

 
</form>
</section>
</center>
<?php
      include("footer.php");
      ?>

</body>
</html>