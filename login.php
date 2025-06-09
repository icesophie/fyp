<?php
    include("head.php");
?>
<html>
<head>
    <title>Login System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section>
        <form class = "login"  method = "POST" action = "login-connect.php">
            <table>
                <tr>
                    <th>
                        <h4><u>Lo</u>gin</h4>
                    </th>       
                </tr>
                <tr>
                    <th>
                        Username:
                    </th>                    
                </tr>
                <tr>
                    <td>
                        <input type = "text" name = "staffID" size = "30" autofocus required>
                    </td>
                </tr>
                <tr>
                    <th>
                        Password:
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type = "password" name = "password" size = "30" required>
                    </td>
                </tr>  
                <tr>
                    <th><br></th>
                </tr>   
                <tr>
                    <th colspan = "2">
                        <input type = "submit" name = "submit" id="submit" value = "LOGIN">
                    </th>
                </tr>
                <tr>
                    <th style = "text-align: center">
                        <h5><br>Don't have an account yet? Register <a href = 'confirmregister.php'>Here</a></h5>
                    </th>
                </tr>
            </table>
        </form>    
    </section>
    <?php
        include("footer.php");
    ?>
</body>
</html>