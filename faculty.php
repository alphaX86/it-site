<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <script src="./Js/main.js" type="text/javascript"></script>
    <?php 
        include 'dbConnect.php';
        $tableFName="`factulty`";
        $defaultPhone=6020;
        $formalHOD='';
        
    
    ?>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="faculty">
            <div class="faculty-type">
                <div class="faculty-types" onclick="makeVisible('teachStaff')">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>Teaching Staff</p>
                </div>
                <div class="faculty-types" onclick="makeVisible('techStaff')">
                    <i class="fas fa-microscope"></i>
                    <p>Technical Staff</p>
                </div>
                <div class="faculty-types" onclick="makeVisible('nonTechStaff')">
                    <i class="fas fa-school"></i>
                    <p>Non-Technical Staff</p>
                </div>
                <div class="faculty-types" onclick="makeVisible('formalHOD')">
                    <i class="fas fa-user-tie"></i>
                    <p>Former HOD</p>
                </div>     

<<<<<<< HEAD
=======
            </div>
            <div class="faculty-list" id="teachStaff" >
                <?php
                    
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
                    }
                ?>       

            </div>
            <div class="faculty-list" id="techStaff" >
                <?php
                    
                    $sql ='SELECT * FROM '.$tableFName.' WHERE `type` = 0';
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $Fid=$row['fID'];
                        $Fname=$row['name'];
                        $Femail=$row['emailID'];
                        $FDesig=$row['designation'];
                        $Fimage=$row['image'];
                        echo '<div class="faculty-listItem" onclick="dispFac(`'.$Fname.'`,`'.$FDesig.'`,`'.$Femail.'`,`'.$defaultPhone.'`,`'.$Fimage.'`,0,'.$Fid.')">
                            <img src="./'.$Fimage.'"class="faculty-listItem_img" alt="Faculty-Image"></img>
                            <div class="faculty-listItem_Name"><strong>'.$Fname.'</strong></div>
                            <div class="faculty-listItem_Design">'.$FDesig.'</div>
                            <div class="faculty-listItem_Email">'.$Femail.'</div>
                        </div>';
                    }
                ?>  
            </div>
            <div class="faculty-list" id="nonTechStaff" >
                <?php
                    
                    $sql ='SELECT * FROM '.$tableFName.' WHERE `type` = -1';
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $Fid=$row['fID'];
                        $Fname=$row['name'];
                        $Femail=$row['emailID'];
                        $FDesig=$row['designation'];
                        $Fimage=$row['image']; 
                        $Fphone=$row['phoneNo'];
                        echo '<div class="faculty-listItem">
                            <img src="./'.$Fimage.'"class="faculty-listItem_img" alt="Faculty-Image"></img>
                            <div class="faculty-listItem_Name"><strong>'.$Fname.'</strong></div>
                            <div class="faculty-listItem_Design">'.$FDesig.'</div>
                            <div class="faculty-listItem_Email">'.$Fphone.'</div>
                        </div>';
                    }
                ?>       

            </div>
            <div class="faculty-list" id="formalHOD" >
                <?php
                    echo $formalHOD;
                ?>       

            </div>
        </div>   
        
>>>>>>> origin/shankuroko-patch-1
        <?php include 'footer.php'?>
    </div>
    </body>
    <script src="./Js/faculty.js" type="text/javascript" ></script>

</html>

