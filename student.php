<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="students">
            <div  class="student-title">CURRICULM</div>
            <div class="studnet-opt">
                <div class="student-opt-list" onclick="dispCurrCol('B.Tech')">
                    <i class="fas fa-book-reader"></i>
                    <name>B.Tech</name>
                </div>
                <div class="student-opt-list" onclick="dispCurrCol('M.Tech')" >
                    <i class="fas fa-laptop-code"></i>
                    <name>M.Tech</name>
                </div>
                <div class="student-opt-list" onclick="dispCurrCol('PHD')">
                    <i class="fas fa-award"></i>
                    <name>PHD</name>
                </div>
            </div>
            <div class="student-display" id="currDisp" >
                <iframe  id="currDispPDF" style="width: 100%;height: 100%;border: none;"></iframe>
            </div>
            
        </div>
        <?php include 'footer.php'?>

    </div>
    </body>

</html>


