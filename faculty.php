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

            </div>
            <div class="faculty-list" id="teachStaff" >
                <?php
                    
                    $sql ='SELECT * FROM '.$tableFName.' WHERE `type` = 1';
                    echo '<script>console.log("'.$sql.'")</script>';
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $Fid=$row['fID'];
                        $Fname=$row['name'];
                        $Femail=$row['emailID'];
                        $FDesig=$row['designation'];
                        $Fimage=$row['image'];
                        $Fphone=$row['phoneNo'];
                        echo '<div class="faculty-listItem" onclick="dispFac(`'.$Fname.'`,`'.$FDesig.'`,`'.$Femail.'`,`'.$Fphone.'`,`'.$Fimage.'`,1,'.$Fid.')">
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
                    echo '<script>console.log("'.$sql.'")</script>';
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
                    echo '<script>console.log("'.$sql.'")</script>';
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
        </div>   
        
        <?php include 'footer.php'?>
    </div>
    </body>
    <script>
        var current="teachStaff";
        document.getElementById(current).style.visibility='visible';
        function makeVisible(id){
            document.getElementById(current).style.visibility='hidden';
            document.getElementById(id).style.visibility='visible';
            current=id;
        }
        function dispFac(name,desig,email,phone,img,type,id){
            setCookie("fName",name);
            setCookie("fDesig",desig);
            setCookie("fEmail",email);
            setCookie("fPhone",phone);
            setCookie("fImage",img);
            setCookie("fType",type);
            setCookie("fID",id);
            location.replace("./facultyDetails.php");
        }
    </script>

</html>

