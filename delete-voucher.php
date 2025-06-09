<?php
    session_start();

    include("connect.php");

    $confirm = "Are you sure to delete this voucher?";
    $sql = "DELETE FROM voucher WHERE voucherID = '" . $_GET['id'] . "'";
    
    if ($conn->query($sql) == TRUE)
    {
        echo "<script>
                window.alert('Voucher has been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-voucher.php\">";
    }
    else
    {
        echo "<script>
                window.alert('Voucher cannot been deleted')
            </script>";  
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-voucher.php\">";
    }
    
    $conn->close();

?>