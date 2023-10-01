<html>

<head>
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="icon.jpg">
    <style>
        #even:hover {
            color: black;
            cursor: pointer;
        }

        #even {
            color: rgb(255, 255, 255);
            transition: color 500ms;
            font-family: monospace;
        }
    </style>
    <script>
        function showpass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body style="background-image:url('back_register.jpg'); background-repeat:no-repeat; background-position:-400px; background-size:auto">
    <div style="height: 8%; border-style: solid; border-color:transparent transparent transparent transparent">
        <a href="Home.html">
            <img src="io_logo.png" width="380px" height="60px"></img>
        </a>
        <a href="buy_hitman.html">
            <input type="button" class="common" id="even" value="BUY HITMAN : WOA" style=" min-width: 200px; min-height: 50px; border-radius: 5px; background-color: rgb(165, 3, 3);  position: absolute;top: 2%; right: 2%; text-decoration: none; font-size: 140%;">
        </a>
    </div>
    <div style="height: 60%; width: 50%; border-style: double;border-color: aliceblue;  position: absolute; top: 18%;left: 47%;background-color: rgb(45, 45, 45);">
        <p style="text-align: center; color: aliceblue; font-size: 170%; font-family: 'Courier New', Courier, monospace ; font-weight:bold">
            NEW ACCOUNT</p>
        <p style="position: relative; left: 5%; color: aliceblue; font-size: 170%; font-family: 'Courier New', Courier, monospace;">
            Email</p>
        <form action="Login_page_handle.php" method="POST">
            <input placeholder="Enter you Email here" type="email" name="mail1" style="height: 10%; width: 90%; position: absolute; left: 5%;" required>
            <br><br>
            <p style="position: relative; left: 5%; color: aliceblue; font-size: 170%; font-family: 'Courier New', Courier, monospace;">
                Password</p>
            <input id="pass" placeholder="Enter you passsword here" name="passw1" type="password" style="height: 10%; width: 90%; position: absolute; left: 5%;" required>
            <br><br><br>
            <input type="checkbox" onclick="showpass()" style="position: absolute; left: 70%;">
            <p style="color: aliceblue;font-family: 'Courier New', Courier, monospace; position: absolute; top: 67.6%; left: 75%;">
                Show Password</p>
            <br><br><BR>
            <input type="submit" name="REGISTER" value="REGISTER" style="height: 10%; width: 90%; position: absolute;left: 5%; font-family: 'Courier New', Courier, monospace; background-color: red; color: aliceblue; font-weight: bolder; font-size: 140%;">
        </form>
    </div>
</body>

</html>