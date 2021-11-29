<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <?php
        echo '<script> var strData="";</script>'
        ?>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="student">
            <div  class="student-title">STUDENT</div>
            <div class="student-menu">
                <item onclick='selDeg("b.tech")' id="b.tech">
                    <i class="fas fa-book-reader"></i>
                    <name>B.Tech</name>
                </item>
                <item onclick='selDeg("m.tech")' id="m.tech">
                    <i class="fas fa-laptop-code"></i>
                    <name>M.Tech</name>
                </item>
                <item>
                    <i class="fas fa-award"></i>
                    <name>MSc</name>
                </item>
                <item>
                    <i class="fas fa-award"></i>
                    <name>PHD</name>
                </item>
            </div>
            <div class="student-cover" id="cover"></div>
            <div class="student-mainOpt Opt" id="mainOpt" style="visibility:hidden;">
                <i onclick="selOpt('nameList')"  id="nameList">Name List</i>
                <i onclick="selOpt('timeTable')" id="timeTable">Time Table</i>
            </div>
            <div class="student-mainOpt" id="subOpt" style="visibility:hidden;">
            </div>
            <div class="student-display" id="currDisp" style="visibility:hidden;">
            </div>            
        </div>
        <?php include 'footer.php'?>

    </div>
    </body>
    <script src="./Js/student.js" type="text/javascript"></script>


</html>


