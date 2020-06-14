<html>
<head>
    <title>Login and Registration form</title>
    <link rel="stylesheet" href="fstyle.css">
    </head>
    <body>
    <div class="login-page">
        <div class="form">
        <form class="register-form" method="post" action="connect.php" >
            <input type="text" name="firstName" placeholder="Username"/>
            <input type="password" name="Password" placeholder="Password"/>
            <input type="email" name="emailId" placeholder="Email id"/>
            <button>Create</button>
            <p class="message">Already Registered? <a href="#">Login</a>
            </p>
            </form>
            <form class="login-form" method="post" action="check.php">
                <input type="text" name="username" placeholder="Username"/>
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit" name="login" value="login"/>
                <p class="message">Not Registered? <a href="#">Register</a>
                </p>
            </form>
        </div>
        </div>
        
        <script src=' https://code.jquery.com/jquery-3.4.1.min.js'>
        </script>
        <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"},"slow");    
        });
        </script>
    </body>
</html>