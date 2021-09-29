<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
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
            <form id="staffDisplay" action='facultyDetails.php' method='post' enctype="multipart/form-data" style="display:none;">
                    <input type="text" id="fName" name="fName"></input>
                    <input type="text" id="fDesig" name="fDesig"></input>
                    <input type="text" id="fEmail" name="fEmail"></input>
                    <input type="text" id="fImage" name="fImage"></input>
                    <input type="text" id="fType" name="fType"></input>
                    <input type="tel" id="fPhone" name='fPhone'></input>
                    <input type="number" id="fID" name="fID"></input>

            </form>

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
            document.getElementById('fName').value=name;
            document.getElementById('fDesig').value=desig;
            document.getElementById('fEmail').value=email;
            document.getElementById('fPhone').value=phone;
            document.getElementById('fImage').value=img;
            document.getElementById('fType').value=type;
            document.getElementById('fID').value=id;
            document.getElementById("staffDisplay").submit(); 
        }
    </script>

</html>

