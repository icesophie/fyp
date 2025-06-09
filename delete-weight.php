<?php
    session_start();

    include("connect.php");

    $confirm = "Are you sure to delete this weight?";
    $sql = "DELETE FROM weight WHERE no = '" . $_GET['id'] . "'";
    
    if ($conn->query($sql) == TRUE)
    {
        echo "<script>
                window.alert('weight has been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-weight.php\">";
    }
    else
    {
        echo "<script>
                window.alert('weight cannot been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-weight.php\">";
    }
    
    $conn->close();

?>