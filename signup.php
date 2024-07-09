<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<div class="body">
    <h1>SIGN UP</h1>
    
    <?php
        $username_error="";
        $email_error="";
        $password_error="";
      
        $username=$_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
//
        
        function format_text($text){
            $text = htmlspecialchars($text);
            $text = stripslashes($text);
            $text = trim($text);

            return $text;
        }
        ?>

        <form method="POST" action="conn.php">
            <!-- required -->
             <label for="username">username</label>
            <input type="text" name="username" placeholder="username" name="username">
            <span class="error"><?php echo $username_error ?></span>
            <!-- required actual email -->
             <label for="enail">email</label>
            <input type="text" name="email" placeholder="email" name="email">
            <span class="error"><?php echo $email_error ?></span>
            <!-- required -->
             <label for="password">password</label>
            <input type="password" name="password" placeholder="password" name="password">
            <span class="error"><?php echo $password_error ?></span>
            <input type="submit">
        </form>

    </body>
</div>   
</html>
<style>
    form{
        width:30%;
        display: flex;
        flex-direction: column;
    }
    input{
        margin-top: 1%;
    }
    .error{
        color:red;
    }
    body{
        colo:blue;
        
    }
</style>