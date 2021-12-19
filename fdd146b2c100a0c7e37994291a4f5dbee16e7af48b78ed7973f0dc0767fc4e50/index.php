<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <script src="../Js/main.js" type="text/javascript"></script>
        
        <?php
            include '../dbConnect.php';
            $contents=file_get_contents('./users.json');
            echo'<script>const users='.$contents.';</script>';
        ?>
    </head>
    <body>
        <div class='site'>                       
            <div class="admin-validate">
            <form action="" method="GET" id="myform">
                <span>Admin Login</span>
                <input type="text"name="type" id="type" style="display:none;"></input>
                <input type="text" name="fID" id="fID" style="display:none;"></input>
                <span><i>User Name:</i><input type="text" id="user"></input></span>
                <span><i>Password:</i><input type="password" id="password"></input></span>
                <span onclick="validate()">LOGIN</span>
                <span id="msg"></span>
            </form>
            </div>
        </div>
    </body>
    <script src="./Js/validate.js" type="text/javascript"></script>
</html>