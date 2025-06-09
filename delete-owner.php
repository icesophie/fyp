<?php
    session_start();

    include("connect.php");

    $confirm = "Are you sure to delete this owner?";
    $sql = "DELETE FROM owner WHERE ownerID = '" . $_GET['id'] . "'";
    
    if ($conn->query($sql) == TRUE)
    {
        echo "<script>
                window.alert('Owner has been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-owner.php\">";
    }
    else
    {
        echo "<script>
                window.alert('Owner cannot been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-owner.php\">";
    }
    
    $conn->close();

?>