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
<link rel="stylesheet" type="text/css" href="css/palmadd.css">

<script>
    function Verify()
{
  int palmID = document.getElementById("palmID");
  int size = document.getElementById("size");
var address = document.getElementById("address");
int ownerID = document.getElementById("ownerID");

if (palmID.value == "" )
{
alert("Error: Palm ID is invalid");
return false;
}
else if (size.value == "" )
{
alert("Error: Size is invalid");
return false;
}
else if (address.value == "" )
{
alert("Error: Address is empty");
return false;
}
else if (ownerID.value == "" )
{
alert("Error: Owner ID is empty");
return false;
}

else return true;
}
</script>
</head>



<body class = "palmadd">
<section>
    <h3>ADD PALM</h3>

  

      <form name="submit"id="submit"action="palm-connect.php"onsubmit="return validation()" method="post" enctype="multipart/form-data">



   

    <table>


    <table align='center' border='5' width='40%'>

   
  
    <tr><td>PALM ID :</td>
    <td><input type="text" name="palmID" id="palmID" required= /></td></tr>

    <tr><td> PLANTATION SIZE: </td>
    <td><input type="text"  name="size" id="size" required= /></td></tr>


    <tr><td>PLANTATION ADDRESS: </td>
    <td><input type="text"  name="address" id="address" required= /></td></tr>

   
    <tr><td>OWNER ID: </td>
    <td><input type="text"  name="ownerID" id="ownerID" required= /></td></tr>

          <label ></label>
       
      </td>

   

     <tr><td align="center" colspan="2">

    
    <input type="submit" name=submit value="SUBMIT " />
    <input type="reset" name="CLEAR FORM" value="CLEAR" />

    

  </td></tr><br/> 


</table>



<td><a href="display-palm.php" class="btn btn-success">BACK</a></td>


<br/>

 
</form>
</section>


<?php
     include("footer.php")
      ?>

</body>
</html>