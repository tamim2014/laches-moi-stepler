
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <title> Authentification officier de l'etat civil</title>
 <link rel="stylesheet" href="/css/show.html.css" type="text/css" media="screen, projection">
 <link rel="stylesheet" href="/css/login.css" type="text/css" media="screen, projection">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#signup").hide()
            $("#affiche-inscription").click(function(){
                $("#signup").show();
                $("#login").hide();
            });
            $("#affiche-login").click(function(){
                $("#signup").hide();
                $("#login").show();
            });
        });
    </script>
</head>

<body style="background-color:#f7f7f9;" >    	 
        <div id="login"  >
            <h3>Login</h3>
            <form method="post" action="" name="login">
                <label>Username or Email</label>
                <input type="text" name="usernameEmail" autocomplete="off" />
                <label>Password</label>
                <input type="password" name="password" autocomplete="off"/>
                
                <!-- <div class="errorMsg"><?php echo $errorMsgLogin; ?></div> -->
                <input type="submit" class="button" name="loginSubmit" value="Login">
                <input type="button" id="affiche-inscription" class="button" name="inscription" value="Signup"  >
            </form>
        </div>
        

        <div id="signup"  >
            <h3>Registration</h3>
            <form method="post" action="" name="signup">
                <label>Name</label>
                <input type="text" name="nameReg" autocomplete="off" />
                <label>Email</label>
                <input type="text" name="emailReg" autocomplete="off" />
                <label>Username</label>
                <input type="text" name="usernameReg" autocomplete="off" />
                <label>Password</label>
                <input type="password" name="passwordReg" autocomplete="off"/>
                <!-- <div class="errorMsg"><?php echo $errorMsgReg; ?></div> -->
                <input type="submit" class="button" name="signupSubmit" value="Signup">
                <input type="button" id="affiche-login" class="button" name="inscription" value="Login"  >
            </form>
        </div>
</body>
</html>