<?php session_start();
if(empty($_SESSION['staffid'])):
include("head-clerk.php");
endif;
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VOUCHER</title>
	<link rel="stylesheet" type="text/css" href="css/voucher.css">
	<script>
    function Verify()
{
  
  double weightofpalm = document.getElementById("weightofpalm");
  var oer = document.getElementById("oer");
  var palmID = document.getElementById("palmID");
  var staffID = document.getElementById("staffID");
  int no= document.getElementById("no");
  
  
  




if (weightofpalm.value == "" )
{
alert("Error: Weight Of Palm is invalid");
return false;
}
else if (oer.value == "" )
{
alert("Error: OER is invalid");
return false;
}
else if (palmID.value == "" )
{
alert("Error: Palm ID is invalid");
return false;
}
else if (staffID.value == "" )
{
alert("Error:  Staff is empty");
return false;
}
else if (no.value == "" )
{
alert("Error:  No is empty");
return false;
}

else return true;
}
</script>
</head>
<body class="voucher">
	<section> 
  <h3>ADD VOUCHER</h3>
   


  

      <form name="submit"id="submit"action="voucher-connect.php"onsubmit="return validation()" method="post" enctype="multipart/form-data">



   

    <table>


    <table align='center' border='5' width='40%'>

   
  
    <tr><td>WEIGHT OF PALM :</td>
    <td><input type="text" name="weightofpalm" id="weightofpalm" required= /></td></tr>

    <tr><td>OER: </td>
    <td><input type="text"  name="oer" id="oer" required= /></td></tr>


		<tr><td>PALM ID: </td>
    <td><input type="text"  name="palmID" id="palmID" required= /></td></tr>

    <tr><td>STAFF ID: </td>
    <td><input type="text"  name="staffID" id="staffID" required= /></td></tr>

    <tr><td>NO: </td>
    <td><input type="text"  name="no" id="no" required= /></td></tr>


   
    

          
       
      </td>

   

     <tr><td align="center" colspan="2"><input type="submit" name=submit value="SUBMIT " />
    <input type="reset" name="CLEAR FORM" value="CLEAR" /></td></tr><br/>


</table>

<center><p class="center"><b> <a href="display-voucher.php">BACK</a></b></p></center>



<br/>

 
</form>
</section>
</center>

</body>
</html>


<?php
	include('footer.php');
?>