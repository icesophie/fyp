<?php
    session_start();

    include("connect.php");

    $confirm = "Are you sure to delete this plantation?";
    $sql = "DELETE FROM palmplantation WHERE palmID = '" . $_GET['id'] . "'";
    
    if ($conn->query($sql) == TRUE)
    {
        echo "<script>
                window.alert('Plantation has been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-palm.php\">";
    }
    else
    {
        echo "<script>
                window.alert('Plantation cannot been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-palm.php\">";
    }
    
    $conn->close();

?>