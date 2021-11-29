<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <script src="../Js/main.js" type="text/javascript"></script>
    </head>
<body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="admin-student">
            <div class="student-menu" style="grid-row:1;">
                <item>
                    <i class="fas fa-book-reader"></i>
                    <name>B.Tech</name>
                </item>
                <item >
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
            <div class="student-mainOpt" style="grid-row:2;">
                <i>Semester-1</i>
                <i>Semester-2</i>
                <i>Semester-3</i>
                <i>Semester-4</i>
                <i>Semester-5</i>
                <i>Semester-6</i>
                <i>Semester-7</i>
                <i>Semester-8</i>
            </div>
            <div class="admin-student_displayT" id="timeTable">
           </div>
        </div>
    </div>
</body>
<script>
    function populateMainOpt(a){
        for(int i=1;i<a;i++){
            
        }
    }
</script>
</html>