<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="curriculum">
            <div  class="curriculum-title">CURRICULUM</div>
            <div class="curriculum-opt">
                <div class="curriculum-opt-list" onclick="dispCurrCol('B.Tech')">
                    <i class="fas fa-book-reader"></i>
                    <name>B.Tech</name>
                </div>
                <div class="curriculum-opt-list" onclick="dispCurrCol('M.Tech')" >
                    <i class="fas fa-laptop-code"></i>
                    <name>M.Tech</name>
                </div>
                <div class="curriculum-opt-list" onclick="dispCurrCol('MSc')">
                    <i class="fas fa-award"></i>
                    <name>MSc</name>
                </div>
                <div class="curriculum-opt-list" onclick="dispCurrCol('PHD')">
                    <i class="fas fa-award"></i>
                    <name>PHD</name>
                </div>
                
            </div>
            <div class="curriculum-display" id="currDisp" >
                <iframe  id="currDispPDF" style="width: 100%;height: 100%;border: none;"></iframe>
            </div>
            <div class="curriculum-opt-sub" id="B.Tech">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2019.pdf')">R-2019</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2018.pdf')">R-2018</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2015.pdf')">R-2015</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2012.pdf')">R-2012</div>
            </div>
            <div class="curriculum-opt-sub" id="M.Tech">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('mtech2015pt.pdf')">R-2015(P.T)</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('mtech2013ft.pdf')">R-2013(F.T)</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('mtech2013pt.pdf')">R-2013(P.T)</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('mtech2009ft.pdf')">R-2009(F.T)</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('mtech2009pt.pdf')">R-2009(P.T)</div>
            </div>
            <div class="curriculum-opt-sub" id="MSc">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('msc2015.pdf')">R-2015</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('msc2010.pdf')">R-2010</div>
            </div>
            <div class="curriculum-opt-sub" id="PHD">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('phd2015.pdf')">R-2015</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('phd2010.pdf')">R-2010</div>
            </div>
            
        </div>
        
        <?php include 'footer.php'?>

    </div>
    </body>
    <script src="./Js/curriculum.js" type="text/javascript"></script>

</html>


