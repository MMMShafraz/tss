<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- login css file link  -->
    <link rel="stylesheet" href="login.css">

</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            
            <!-- Icon -->
        <div class="fadeIn first logo">
            <a href="#" id="Icon"> <i class="fas fa-heartbeat"></i> <span class="ln1">Suwa Sahana</span><br><span class="ln2">HOSPITAL</span> </a>
        </div>

        <!-- Tabs Titles -->
        <h2 class="active fadeIn second"> Sign In </h2>
    
        
    
        <!-- Login Form -->
        <form>      
            <input type="text" id="login" class="fadeIn third" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn fourth" name="login" placeholder="password">
            <input type="submit" class="fadeIn fifth" value="Log In">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover fadeIn sixth" href="#">Forgot Password?</a>
        </div>

            <input type="submit" class="fadeIn seventh" value="Sign Up">
    
        </div>
    </div>

</body>
</html>

