<html>

<head>
    <title>Logout</title>
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
</head>

<body style="background-image:url('login_page_background.jpg'); background-position : right ">
    <div style="height: 8%; border-style: solid; border-color:transparent transparent transparent transparent">
        <a href="Home.html">
            <img src="io_logo.png" width="380px" height="60px"></img>
        </a>
        <a href="buy_hitman.html">
            <input type="button" class="common" id="even" value="BUY HITMAN : WOA" style=" min-width: 200px; min-height: 50px; border-radius: 5px; background-color: rgb(165, 3, 3);  position: absolute;top: 2%; right: 2%; text-decoration: none; font-size: 140%;">
        </a>
    </div>
    <div style="height: 60%; width: 50%; border-style: double;border-color: aliceblue;  position: absolute; top: 18%;left: 47%;background-color: rgb(45, 45, 45);">
        <?php echo ("<p style= ' margin-top:150px; text-align: center; color: aliceblue; font-size: 220%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Thanks For Visiting</p>");
        echo ("<a href='website_login.php'><form><input type='button' value='GO TO LOGIN PAGE' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 75%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
       </form></a>");
        ?>
    </div>
</body>

</html>