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
            <div  class="curriculum-title">CURRICULM</div>
            <div class="curriculum-opt">
                <div class="curriculum-opt-list" onclick="dispCurrCol('B.Tech')">
                    <i class="fas fa-book-reader"></i>
                    <name>B.Tech</name>
                </div>
                <div class="curriculum-opt-list" onclick="dispCurrCol('M.Tech')" >
                    <i class="fas fa-laptop-code"></i>
                    <name>M.Tech</name>
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
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
            </div>
            <div class="curriculum-opt-sub" id="M.Tech">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
            </div>
            <div class="curriculum-opt-sub" id="PHD">
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
                <div class="curriculum-opt-sub-list" onclick="dispCurr('btech2008.pdf')">R-2008</div>
            </div>
            
        </div>
        
        <?php include 'footer.php'?>

    </div>
    </body>
    <script>
        var state=true;
        var current="";
        function dispCurr(doc){
            if(state){

            }
            document.getElementById("currDispPDF").style.visibility='visible';  
            document.getElementById("currDispPDF").src="./PDF/curriculum/"+doc;
            document.getElementById("currDispPDF").scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        function dispCurrCol(id){           
            if(current!=""){
                document.getElementById(current).style.visibility='hidden';
                document.getElementById("currDispPDF").style.visibility='hidden';            
            }
            document.getElementById(id).style.visibility='visible';
            document.getElementById(id).style.height='40vh';
            current=id;
        }
    </script>

</html>


