<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sweet Cake</title>  
    <style>  
        body {  
            margin: 0;  
            padding: 0;  
            font-family: sans-serif;  
            background-color: #f5f5f5;  
            color: #333;  
        }  

        .container {  
            max-width: 1200px;  
            margin: 0 auto;  
            padding: 20px;  
            display: flex;  
            justify-content: space-between;  
            align-items: center;  
        }  

        .header {  
            display: flex;  
            align-items: center;  
        }  

        .logo {  
            margin-right: 20px;  
        }  

        .logo img {  
            height: 40px;  
        }  

        .nav {  
            display: flex;  
            align-items: center;  
        }  

        .nav a {  
            text-decoration: none;  
            color: #333;  
            margin-right: 20px;  
        }  

        .content {  
            text-align: center;  
            margin-top: 50px;  
        }  

        h1 {  
            font-size: 3em;  
            margin-bottom: 20px;  
        }  

        .button {  
            display: inline-block;  
            padding: 10px 20px;  
            background-color: #f70070;  
            color: #fff;  
            text-decoration: none;  
            border-radius: 5px;  
            margin-top: 20px;  
        }  

        .cakes {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            margin-top: 50px;  
        }  

        .cake {  
            margin: 0 20px;  
        }  

        .cake img {  
            width: 150px;  
            height: auto;  
        }  

        .footer {  
            text-align: center;  
            margin-top: 50px;  
            font-size: 0.8em;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <div class="header">  
            <div class="logo">  
                <img src="cake1.jpg" alt="Sweet Cake Logo">  
            </div>  
            <div class="nav">  
                <a href="#">Home</a>  
                <a href="#">About Us</a>  
                <a href="#">Contact</a>  
            </div>  
        </div>  
    </div>  
    <div class="content">  
        <h1>a taste that makes<br>sweet memories!</h1>  
        <a href="#" class="button">Sign In</a>  
    </div>  
    <div class="cakes">  
        <div class="cake">  
            <img src="C1.png" alt="Cupcake">  
        </div>  
        <div class="cake">  
            <img src="C2.png" alt="Cake">  
        </div>  
        <div class="cake">  
            <img src="C3.png" alt="Cake">  
        </div>  
    </div>  
    <div class="footer">  
        © sweet cakeshop 2024  
    </div>  
</body>  
</html>