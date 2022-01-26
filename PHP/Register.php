<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="style">
    <form method="post" action="registerform.php" name="registerform">
        <img src="dd.jpg" class="img" >
        <br>
        <div class="blue">
            <br>
            <br>
        <h1> Register Now </h1>
        <p> <input type="text" name="fname" id="fname" required placeholder="Enter your First Name"></p> <br>
        <p> <input type="text" name="lname" id="lname" required placeholder="Enter your Last Name"></p><br>
        <p> <input type="text" name="uname" id="uname" required placeholder="Username"></p><br>
        <p> <input type="email" name="email" id="email" placeholder="Enter your Email Address"></p><br>
        <p> <input type="password" name="pw" id="pw" placeholder="Enter Password"></p><br>
        <p> <input type="password" name="pw1" id="pw1" placeholder="Confirm Password"></p><br>
        <p> <input type="text" name="address" id="address" placeholder="Address"></p><br>
        <p> <input type="number" name="num" id="num" required placeholder="Enter your Phone Number"> </p><br>
        <br>
        <br>
        <div class="button">
        <input type="submit" value="Register" id="Register" class="reg"> 
        <input type="reset" value="Reset"  id="reset" class="reg">
        </div>
        
        </div>
    </form>
    </div>
</body>
</html>