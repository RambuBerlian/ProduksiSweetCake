<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Page</title>  
    <style>  
        body {  
            margin: 0;  
            padding: 0;  
            background-color: #f0f0f0;  
            font-family: sans-serif;  
        }  

        .container {  
            width: 400px;  
            margin: 100px auto;  
            background-color: #f70070;  
            padding: 30px;  
            border-radius: 10px;  
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
        }  

        h2 {  
            text-align: center;  
            color: #fff;  
            margin-bottom: 20px;  
        }  

        input[type="text"],  
        input[type="password"] {  
            width: 100%;  
            padding: 10px;  
            margin: 10px 0;  
            border: none;  
            background-color: #fff;  
            border-radius: 5px;  
        }  

        input[type="text"]:focus,  
        input[type="password"]:focus {  
            outline: none;  
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);  
        }  

        button {  
            background-color: #fff;  
            color: #f70070;  
            padding: 12px 20px;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
            width: 100%;  
            margin-top: 20px;  
        }  

        button:hover {  
            background-color: #ddd;  
        }  

        .forgot-password {  
            text-align: center;  
            color: #fff;  
            margin-top: 10px;  
            font-size: 14px;  
        }  

        .register-link {  
            text-align: center;  
            color: #fff;  
            margin-top: 20px;  
            font-size: 14px;  
        }  

        .register-link a {  
            color: #840091;  
            text-decoration: none;  
        }  

        .register-link a:hover {  
            text-decoration: underline;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h2>LOGIN</h2>  
        <input type="text" placeholder="Username">  
        <input type="password" placeholder="Password">  
        <p class="forgot-password">Forgot Password?</p>  
        <button id="sign-in" onclick="login()">SIGN IN</button>
        <p class="register-link">Don't have an account? <a href="#">Register here</a></p>  
    </div>  
    <div id="snackbar" style="display:none; position:fixed; bottom:10px; left:50%; transform:translateX(-50%); background-color:green; color:white; padding:10px; border-radius:5px;">
        </div>
</body>  
</html>