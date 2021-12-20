<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <script src="./Js/main.js" type="text/javascript"></script>
    <?php 
        include 'dbConnect.php';
        $tableFName="`factulty_`";
        $defaultPhone=6020;
        $formalHOD='';
        echo'<script>var metaData=[]</script>';
        $sql ='SELECT * FROM `faculty_`';
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            echo'<script>metaData.push(JSON.parse(`'.$row["details"].'`));</script>';
        }
        echo'<script>
            techFac={};
            nonTechFac={};
            officeFac={};
            formerFac={};
            for(x in metaData){
                if(metaData[x].type==1)
                    if(metaData[x].present==1)
                        techFac[metaData[x].fID]=metaData[x];
                    else
                        formerFac[metaData[x].fID]=metaData[x];
                else if(metaData[x].type==0)
                    nonTechFac[metaData[x].fID]=metaData[x];
                else
                    officeFac[metaData[x].fID]=metaData[x];
            }
        </script>';

        
    
    ?>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="faculty">
            <div class="faculty-type">
                <div class="faculty-types" onclick="populate(1)">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>Teaching Staff</p>
                </div>
                <div class="faculty-types" onclick="populate(0)">
                    <i class="fas fa-microscope"></i>
                    <p>Technical Staff</p>
                </div>
                <div class="faculty-types" onclick="populate(-1)">
                    <i class="fas fa-school"></i>
                    <p>Non-Technical Staff</p>
                </div>
                <div class="faculty-types" onclick="populate(2)">
                    <i class="fas fa-user-tie"></i>
                    <p>Former HOD</p>
                </div>     

            </div>
            <form method="GET" action="./facultyDetails.php" class="faculty-list" id="facultyDisp" >
                <?php
                 /*   
                    $sql ='SELECT * FROM '.$tableFName.' WHERE `type` = 1';
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $Fid=$row['fID'];
                        $Fname=$row['name'];
                        $Femail=$row['emailID'];
                        $FDesig=$row['designation'];
                        $Fimage=$row['image'];
                        $Fphone=$row['phoneNo'];
                        if($row['present']==1)
                            echo '<div class="faculty-listItem" onclick="dispFac(`'.$Fname.'`,`'.$FDesig.'`,`'.$Femail.'`,`'.$Fphone.'`,`'.$Fimage.'`,1,'.$Fid.')">
                                <img src="./'.$Fimage.'"class="faculty-listItem_img" alt="Faculty-Image"></img>
                                <div class="faculty-listItem_Name"><strong>'.$Fname.'</strong></div>
                                <div class="faculty-listItem_Design">'.$FDesig.'</div>
                                <div class="faculty-listItem_Email">'.$Femail.'</div>
                            </div>';
                        else
                            $formalHOD=$formalHOD.'
                            <div class="faculty-listItem" onclick="dispFac(`'.$Fname.'`,`'.$FDesig.'`,`'.$Femail.'`,`'.$Fphone.'`,`'.$Fimage.'`,1,'.$Fid.')">
                                <img src="./'.$Fimage.'"class="faculty-listItem_img" alt="Faculty-Image"></img>
                                <div class="faculty-listItem_Name"><strong>'.$Fname.'</strong></div>
                                <div class="faculty-listItem_Design">'.$FDesig.'</div>
                                <div class="faculty-listItem_Email">'.$Femail.'</div>
                            </div>';
                    }*/
                ?>       

                </form>            
        </div>   
        
        <?php include 'footer.php'?>
    </div>
    </body>
    <script src="./Js/faculty.js" type="text/javascript" ></script>

</html>

