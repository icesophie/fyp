<?php session_start();
if(empty($_SESSION['staffid'])):
include("head-clerk.php");
include("connect.php");
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
  double oerprice = document.getElementById("oerprice");
  var palmID = document.getElementById("palmID");
  var staffID = document.getElementById("staffID");
  int no= document.getElementById("no");
  
  
  




if (weightofpalm.value == "" || oer.value == "" )
{
alert("Error: Weight Of Palm  and OER is invalid");
return false;
}
// Perform the multiplication
      var total = parseFloat(weightofpalm) * parseFloat(oer) * parseFloat(oerprice);
      
      // Update the result in the total input field
      document.getElementById("total").value = total.toFixed(2); // Displaying with 2 decimal places
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
   


  

     <form name="submit" id="submit" action="voucher-connect.php" onsubmit="return validation()" method="post" enctype="multipart/form-data">
      <table align='center' border='5' width='40%'>
        <tr>
          <td>WEIGHT OF PALM :</td>
          <td><input type="text" name="weightofpalm" id="weightofpalm" required></td>
        </tr>
        <tr>
          <td>OER:</td>
          <td><input type="text" name="oer" id="oer" required></td>
        </tr>
        <tr>
          <td>OER PRICE:</td>
          <td><input type="text" name="oerprice" id="oerprice" required></td>
        </tr>
        <tr>
          <td>PALM ID:</td>
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
        
        <tr>
          <td>STAFF ID:</td>
          <td><select name="staffID" id="staff" required/>
      <option value=''></option>
    <?php 

    $sql= "SELECT * FROM staff";
    $result = mysqli_query($conn, $sql); 

    while ($row = mysqli_fetch_assoc($result)) 
    {
    $staffID = $row['staffID'];
    $name = $row['name'];
    echo "<option value=\"$staffID\">$name</option>";
    }
    

?>
 </select></td></tr> 
        <tr>
          <td>NO:</td>
          <td><select name="no" id="weight" required/>
      <option value=''></option>
    <?php 

    $sql= "SELECT * FROM weight";
    $result = mysqli_query($conn, $sql); 

    while ($row = mysqli_fetch_assoc($result)) 
    {
    $no = $row['no'];
   
    echo "<option value=\"$no\">$no</option>";
    }
    

?>
 </select></td></tr> 
        <tr>
          <td align="center" colspan="2">
            <input type="submit" name="submit" value="SUBMIT" onclick="return Verify()">
            <input type="reset" name="CLEAR FORM" value="CLEAR">
          </td>
        </tr>
      </table>
      <center><p class="center"><b><a href="display-voucher.php">BACK</a></b></p></center>
    </form>
  </section>
</body>
</html>

<?php
include('footer.php');
?>