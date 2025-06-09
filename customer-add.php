<?php session_start();
if(empty($_SESSION['staffid'])):
include("head-clerk.php");
 
endif;




?>
<!DOCTYPE html>
<html>
<head>

   

  <title>PALM PLANTATIONS LISTS AND DETAILS</title>
   <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">

<link rel="stylesheet" type="text/css" href="css/owner.css">

<script>
    function Verify()
{
  int ownerID = document.getElementById("ownerID");
  var name = document.getElementById("name");
var identitycard = document.getElementById("identitycard");


if (ownerID.value == "" )
{
alert("Error: Owner ID is invalid");
return false;
}
else if (name.value == "" )
{
alert("Error: Name is invalid");
return false;
}
else if (identitycard.value == "" )
{
alert("Error: Identity Card is empty");
return false;
}


else return true;
}
</script>
</head>

<body class= "owner">
<section>
  <h3>ADD OWNER</h3>
   


  

      <form name="submit"id="submit"action="cust-add-connect.php"onsubmit="return validation()" method="post" enctype="multipart/form-data">



   

    <table>


    <table align='center' border='5' width='40%'>

   
  
    <tr><td>OWNER ID :</td>
    <td><input type="text" name="ownerID" id="ownerID" required= /></td></tr>

    <tr><td>OWNER NAME: </td>
    <td><input type="text"  name="name" id="name" required= /></td></tr>


    <tr><td>IDENTITY CARD: </td>
    <td><input type="text"  name="identitycard" id="identitycard" required= /></td></tr>

   
    

          <label ></label>
       
      </td>

   

     <tr><td align="center" colspan="2"><input type="submit" name=submit value="SUBMIT " />
    <input type="reset" name="CLEAR FORM" value="CLEAR" /></td></tr><br/>


</table>


<td><a href="display-owner.php" class="btn btn-success">BACK</a></td>




<br/>

 
</form>
</section>
</center>
<?php
      include("footer.php");
      ?>

</body>
</html>