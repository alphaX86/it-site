<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
    <?php 
        include 'dbConnect.php';
        $fID=$_GET['fID'];
        $sql='SELECT * FROM `faculty_` WHERE `fID` = '.$fID;
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        echo '<script>const fac=JSON.parse(`'.$row["details"].'`);</script>';
        $sql='SELECT * FROM `facultyDetails_` WHERE `fID` = '.$fID;
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        echo'<script>const faculty=JSON.parse(`'.$row["details"].'`);console.log(faculty)</script>';        
    ?>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="facultyDetails">
            <div class="facultyImg">
                <img id="fimg" alt="Faculty-Image"></img>
            </div>
            <div class="facultyContent">
                <div class="facultyContent-Item">
                   <Name></Name>
                </div>
                <div class="facultyContent-Item">
                   <Design></Design>
                </div>
                <div class="facultyContent-Item">
                    <content></content>
                </div>
                <div class="facultyContent-Item_links" id="fLinks">
                   
                    <a  id="femail" class="facultyContent-Item_links-icon">
                        <i class="fas fa-envelope-open"></i>
                    </a>
                    <a id="fphone" class="facultyContent-Item_links-icon">
                        <i class="fas fas fa-phone-alt"></i>
                    </a>
                </div>
            </div>
            <div class="facultyColList" id="listDisp">
                
            </div>
            <div class="facultyDispCol" id="dispCol">
            </div>

        </div>
        <?php include 'footer.php'?>

    </div>
    </body>
    <script src="./Js/facultyDetails.js" type="text/javascript"></script>


</html>


