<html>

<head>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<style>
    a:link {
        color: red;
    }

    a:visited {
        color: red;
    }

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

<body style="background-image:url('login_back2.jpg'); background-position :  1300px ">
    <div style="height: 8%; border-style: solid; border-color:transparent transparent transparent transparent">
        <a href="Home.html">
            <img src="io_logo.png" width="380px" height="60px"></img>
        </a>
        <a href="buy_hitman.html">
            <input type="button" class="common" id="even" value="BUY HITMAN : WOA" style=" min-width: 200px; min-height: 50px; border-radius: 5px; background-color: rgb(165, 3, 3);  position: absolute;top: 2%; right: 2%; text-decoration: none; font-size: 140%;">
        </a>
    </div>
    <div style="height: 60%; width: 50%; border-style: double;border-color: aliceblue;  position: absolute; top: 18%;left: 47%;background-color: rgb(45, 45, 45);">
        <?php
        $reg_email = "/^[a-zA-Z][_\.a-zA-Z]*@[a-z]+\.[a-z]{2,3}$/";
        $reg_pass = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        $flag = 0;
        $pass = 'wow2264@#gtaRDR';
        $conn = mysqli_connect('localhost', 'root', $pass);
        if (!$conn) {
            echo ("<p style='text-align: center; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                mysqli_connect_error() . "</p>");
            echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
        </form></a>");
            die();
        }
        if (!($result = mysqli_query($conn, 'CREATE DATABASE IF NOT EXISTS PLAYER '))) {
            echo ("<p style='text-align: center; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                mysqli_error($conn) . "</p>");
            echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                    </form></a>");
            die();
        }
        mysqli_select_db($conn, 'PLAYER');
        $sql = "CREATE TABLE IF NOT EXISTS PROFILE (
        EMAIL VARCHAR(30) PRIMARY KEY,
        PASSWORD VARCHAR(30) UNIQUE)";
        if (!mysqli_query($conn, $sql)) {
            echo ("<p style='text-align: center; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                mysqli_error($conn) . "</p>");
            echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                </form></a>");
            die();
        }

        if (isset($_POST['LOGIN'])) {
            $mail = $_POST['mail'];
            $pass = $_POST['passw'];
            if (!preg_match($reg_email, $mail)) {
                echo ("<p style='text-align: center; margin-top:40px; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                    "Invalid Email ID" . "</p>");
                echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                            </form></a>");
                die();
            }
            if (!preg_match($reg_pass, $pass)) {
                echo ("<p style='text-align: center; margin-top:40px; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                    "Invalid Password" . "</p>");
                echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                            </form></a>");
                die();
            }
            mysqli_select_db($conn, 'PLAYER');
            $disp = mysqli_query($conn, 'SELECT * FROM PROFILE');
            if ($disp) {
                while ($row = mysqli_fetch_array($disp)) {
                    if ($mail ==  $row['EMAIL'] && $pass == $row['PASSWORD']) {
                        echo ("<p style='text-align: center; color: aliceblue; font-size: 190%; font-family:Verdana, Geneva, Tahoma, sans-serif'> Profile Found </p>");

                        echo ("<p style=' margin-left: 25px; text-align: left; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>E-MAIL ID  </p>");
                        echo ("<p style=' margin-left: 25px; text-align: left; color: aliceblue; font-size: 130%; font-family:monospace;'>$mail</p><br><br>");

                        echo ("<p style=' margin-left: 25px; text-align: left; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>PASSWORD  </p>");
                        echo ("<p style=' margin-left: 25px; text-align: left; color: aliceblue; font-size: 130%; font-family:monospace;'>$pass</p><br>");
                        echo ("<a href='logout.php'><form><input type='button' value='LOGOUT' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                    </form></a>");
                        $flag = 1;
                        break;
                    }
                }
                if ($flag == 0) {
                    echo ("<p style='text-align: center; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Profile Not Found </p>");
                    echo ("<a href='website_login.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                </form></a>");
                    echo ("<p style='text-align: center; color: aliceblue; font-size: 110%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Don't have an account? Sign up <a href='New_player_sign-up.php'> here! </a></p>");
                    die();
                }
            }
        }
        if (isset($_POST['REGISTER'])) {
            $mail = $_POST["mail1"];
            $passm = $_POST["passw1"];
            if (!preg_match($reg_email, $mail)) {
                echo ("<p style='text-align: center; margin-top:40px; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                    "Invalid Email ID" . "</p>");
                echo ("<a href='New_player_sign-up.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                    </form></a>");
                die();
            }
            if (!preg_match($reg_pass, $passm)) {
                echo ("<p style='text-align: center; margin-top:40px; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                    "Invalid Password" . "</p>");
                echo ("<a href='New_player_sign-up.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                    </form></a>");
                die();
            }
            $quer = "insert into PROFILE values('$mail','$passm')";
            $ss = mysqli_query($conn, $quer);
            if ($ss) {
                echo ("<p style='text-align: center; color: aliceblue; font-size: 190%; font-family:Verdana, Geneva, Tahoma, sans-serif'>New Profile Created Successfully </p>");

                echo ("<p style=' margin-left: 10px; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>E-MAIL ID  </p>");
                echo ("<p style=' margin-left: 10px; text-align: left; color: aliceblue; font-size: 130%; font-family:monospace;'>$mail</p><br><br>");

                echo ("<p style=' margin-left: 10px; text-align: left; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>PASSWORD</p>");
                echo ("<p style=' margin-left: 10px; text-align: left; color: aliceblue; font-size: 130%; font-family:monospace;'>$passm</p><br>");

                echo ("<a href='website_login.php'><form><input type='button' value='GO TO LOGIN PAGE' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                </form></a>");
                die();
            } else {
                echo ("<p style='text-align: center; color: aliceblue; font-size: 130%; font-family:Verdana, Geneva, Tahoma, sans-serif'>Error : " .
                    "Profile Already Exists For This ID and/or Password" . "</p>");
                echo ("<a href='New_player_sign-up.php'><form><input type='button' value='RETRY' style='height: 10%; width: 90%; position: absolute;left: 5%; top: 80%  ;background-color: red; color: aliceblue; font-weight: bolder; font-size: 147%'>
                </form></a>");
                die();
            }
        } ?>
    </div>
</body>

</html>