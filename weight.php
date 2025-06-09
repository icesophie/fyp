<?php session_start();
if(empty($_SESSION['staffid'])):
  include("head-clerk.php");
  include("connect.php");
 
endif;




?>
<!DOCTYPE html>
<html>
<head>

   

  <title>WEIGHT DETAILS</title>
   <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel = "stylesheet" href = "css/weight.css">


<script>
    function Verify()
{
  int no = document.getElementById("no");
  var lorryplatenum = document.getElementById("lorryplatenum");
  var date = document.getElementById("date");
  var month = document.getElementById("month");
  var time = document.getElementById("time");
  var palmID = document.getElementById("palmID");
  var ownerID = document.getElementById("ownerID");
  double weightoflorryandpalm = document.getElementById("weightoflorryandpalm");
  double weightofpalm = document.getElementById("weightofpalm");
  
  



if (no.value == "" )
{
alert("Error: No is invalid");
return false;
}
else if (lorryplatenum.value == "" )
{
alert("Error: Lorry Plate Number is invalid");
return false;
}
else if (date.value == "" )
{
alert("Error: Date is invalid");
return false;
}
else if (month.value == "" )
{
alert("Error: Month is invalid");
return false;
}
else if (time.value == "" )
{
alert("Error:  Time is empty");
return false;
}
else if (palmID.value == "" )
{
alert("Error:  Palm ID is empty");
return false;
}
else if (ownerID.value == "" )
{
alert("Error:  Palm ID is empty");
return false;
}
else if (weightoflorryandpalm.value == "" )
{
alert("Error:  Weight Of Lorry And Palm is empty");
return false;
}
else if (weightofpalm.value == "" )
{
alert("Error:  Weight Of Palm is empty");
return false;
}
else return true;
}
</script>
</head>



<body class= "weight">
<section> 
  <h3>ADD WEIGHT</h3>
   


  

      <form name="submit"id="submit"action="weight-connect.php"onsubmit="return validation()" method="post" enctype="multipart/form-data">



   

    <table>


    <table align='center' border='5' width='40%'>

    <tr><td>NO :</td>
    <td><input type="text" name="no" id="no" required= /></td></tr>
  
    <tr><td>LORRY PLATE NUMBER :</td>
    <td><input type="text" name="lorryplatenum" id="lorryplatenum" required= /></td></tr>

    <tr><td>DATE: </td>
    <td><input type="date"  name="date" id="date" required= /></td></tr>


		<tr><td>TIME: </td>
    <td><input type="time"  name="time" id="time" required= /></td></tr>

    <tr><td>MONTH: </td>
    <td><input type="month"  name="month" id="month" required= /></td></tr>

    <tr><td>PALM ID: </td>
    <td><select name="palmID" id="palmplantation" required/>
      <option value=''></option>
    <?php 

    $sql= "SELECT * FROM palmplantation";
    $result = mysqli_query($conn, $sql); 

    while ($row = mysqli_fetch_assoc($result)) 
    {
    $palmID = $row['palmID'];
    $address = $row['address'];
    echo "<option value=\"$palmID\">$address</option>";
    }
    

?>
 </select></td></tr> 

    <tr><td>OWNER ID: </td>
    <td><select name="ownerID" id="ownerID" required= />
    <option value=''></option>
    <?php 

    $sql= "SELECT * FROM owner";
    $result = mysqli_query($conn, $sql); 

    while ($row = mysqli_fetch_assoc($result)) 
    {
    $ownerID = $row['ownerID'];
    $name = $row['name'];
    echo "<option value=\"$ownerID\">$name</option>";
    }
    

?>
 </select></td></tr> 

    <tr><td>WEIGHT OF LORRY AND PALM: </td>
    <td><input type="text"  name="weightoflorryandpalm" id="weightoflorryandpalm" required= /></td></tr>

    <tr><td>WEIGHT OF  PALM: </td>
    <td><input type="text"  name="weightofpalm" id="weightofpalm" required= /></td></tr>

   
    

          
       
      </td>

   

     <tr><td align="center" colspan="2"><input type="submit" name=submit value="SUBMIT " />
    <input type="reset" name="CLEAR FORM" value="CLEAR" /></td></tr><br/>


</table>

<center><p class="center"><b> <a href="display-weight.php">BACK</a></b></p></center>




<br/>

 
</form>
</section>
</center>
<?php
      include("footer.php");
      ?>

</body>
</html>