<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
    <?php 
        include 'dbConnect.php';
        $fName=$_POST["fName"];
        $fImg=$_POST["fImage"];
        $fDesig=$_POST["fDesig"];
        $fType=$_POST["fType"];
        $fID=$_POST["fID"];
        $fPhone=$_POST["fPhone"];
        $fEmail=$_POST['fEmail'];
        $sql='SELECT * FROM `facultyDetails` WHERE `fID` = '.$fID.' AND `type` = '.$fType;
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        $fAreaOfSpec=$row['areaOfSpec'];
        $fACOE=$row['acoeSite'];
        $fPersonalSite=$row['personalSite'];
        $fExtra=$row['extraCol'];
        if($fExtra=="")
            $populate=false;
        else    
            $populate=true;
        $fExtra=explode("#",$fExtra);        
    ?>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="facultyDetails">
            <div class="facultyImg">
                <?php echo'<img src="./'.$fImg.'" alt="Faculty-Image"></img>'; ?>
            </div>
            <div class="facultyContent">
                <div class="facultyContent-Item">
                   <?php echo '<i>'.$fName.'</i>';?>
                </div>
                <div class="facultyContent-Item">
                   <?php echo '<i>'.$fDesig.'</i>';?>
                </div>
                <div class="facultyContent-Item">
                    <?php echo '<i>'.$fAreaOfSpec.'</i>';?>
                </div>
                <div class="facultyContent-Item_links">
                   <?php
                    echo '
                    <a href="mailto:'.$fEmail.'" class="facultyContent-Item_links-icon">
                        <i class="fas fa-envelope-open"></i>
                    </a>
                    <a href="tel:'.$fPhone.'" class="facultyContent-Item_links-icon">
                        <i class="fas fas fa-phone-alt"></i>
                    </a>';
                    if($fType==1)
                        echo'
                        <a href="'.$fPersonalSite.'" class="facultyContent-Item_links-icon">
                            <i class="fas fa-house-user"></i>
                        </a>                    
                        <a href="'.$fACOE.'" class="facultyContent-Item_links-icon">
                            <i class="fas fa-paperclip "></i>
                        </a>';
                    else    
                        echo '<a></a><a></a>';
                    ?>
                </div>
            </div>
            <div class="facultyColList">
                <?php
                if($populate)
                    for($i=0;$i<count($fExtra);$i++)
                        echo'
                        <div class="facultyColList-item" onclick="dispCol(`'.$fExtra[$i].'`)"><i>'.$fExtra[$i].'</i></div>';
                
                ?>

            </div>
            <?php
            for($i=0;$i<count($fExtra);$i++){
                $col=$fExtra[$i];
                $sql='SELECT `details` FROM `'.$col.'` WHERE `fID` = '.$fID;
                $result = $conn->query($sql);
                $row=$result->fetch_assoc();
                $details=$row['details'];
                if($details!=""){
                    $details=explode("#",$details);
                    echo'
                    <div class="facultyDispCol" id="'.$col.'">
                        <h2>'.$col.'</h2>
                        <div class="facultyDispCol-list">';
                            for($j=0;$j<count($details);$j++)
                                echo '<li>
                                    <i class="fas fa-hand-point-right"></i>
                                    <detail>'.$details[$j].'</detail>
                                </li>';              
                            
                        echo '</div>
                    </div>
                    ';
                }
            }    
            ?>

        </div>
        <?php include 'footer.php'?>

    </div>
    </body>
    <script>
        var current="";
        function dispCol(id){

            if(current!="")
                document.getElementById(current).style.visibility='hidden';            
            document.getElementById(id).style.visibility='visible';
            document.getElementById(id).style.height='70vh';
            current=id;
        }
    </script>


</html>


