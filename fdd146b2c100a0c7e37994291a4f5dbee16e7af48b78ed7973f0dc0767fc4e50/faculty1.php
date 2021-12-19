<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <script src="./Js/faculty.js" type="text/javascript"></script>
        <?php   
            session_start();
            $tableFName="`faculty_`";
            $tableFDetail='`facultyDetails_`';
            include '../dbConnect.php';
            if(isset($_GET['type']))
                $staffType= $_GET['type'];
            if(isset($_GET['fID']))
                $fID=$_GET['fID'];
            //echo '<script>var faculty=newFaculty('.$fID.','.$staffType.');</script>';
            $change=false;
            if(isset($_COOKIE['data'])){
                $data=$_COOKIE['data'];
               // echo $data;
                if($data!="")
                    $change=true;
            } 
            if(isset($_COOKIE['fdata'])){
                $fdata=$_COOKIE['fdata'];
                if($fdata!="")
                    $change=true;
            }                   
           // echo'<script>console.log("'.$_FILES['fImg']['tmp_name'].'");</script>';
           if($_FILES['fImg']['type']!=""){
            $imgLocation=$_FILES['fImg']['tmp_name'];
            $a=$_FILES['fImg']['type'];
            $extention =explode('/',$a);
            $imgTo="Images/faculty/".$fID.".".$extention[1];
            move_uploaded_file($imgLocation,'../'.$imgTo);
            }
            if($change){
                $sql ="UPDATE ".$tableFName." SET `details` = '".$data."' WHERE `fID` = ".$fID;
                $result = $conn->query($sql);
                $sql ="UPDATE ".$tableFDetail." SET `details` = '".$fdata."' WHERE `fID` = ".$fID;
                $result = $conn->query($sql);
                echo'<script>location.replace("http://localhost:3020/fdd146b2c100a0c7e37994291a4f5dbee16e7af48b78ed7973f0dc0767fc4e50/index.php")</script>';
            } 
            $sql ="SELECT * FROM `facultyDetails_` WHERE `fID` =".$fID;
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
           
            echo '<script>var faculty=JSON.parse(`'.$row['details'].'`);</script>';
            $sql ="SELECT * FROM `faculty_` WHERE `fID` =".$fID;
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            
            echo '<script>var fac=JSON.parse(`'.$row['details'].'`);</script>';
             
            $sql ="SELECT `details` FROM `facultyDetails_` WHERE `fID` = 0";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
           
            echo '<script>console.log(`'.$row["details"].'`);</script>';
            $sql ="SELECT `details` FROM `faculty_` WHERE `fID` = 0";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            
            echo '<script>console.log(`'.$row["details"].'`);</script>';
        ?>
    </head>
    <body>
        <div class='site'>
            <?php include 'header.php'?>
            <form action="#" enctype="multipart/form-data" method="POST" id="form" class="admin-fac">
                <heading>
                <name id="dispName">New Staff</name>
                <i class="fas fa-clipboard-check " tooltip="Complete Update" onclick="finishUpdate()" ></i>
                </heading>
                <img ></img>
                <info>
                    <detail>
                        <p>image :</p>
                        <input type="file" id="fImg" name="fImg"></input>
                    </detail>
                    <detail>
                        <p>name :</p>
                        <input type="text" id="fName"></input>
                    </detail>
                    <detail>
                        <p>destination :</p>
                        <input type="text" id="fDesig"></input>
                    </detail>
                    <detail>
                        <p>Email ID :</p>
                        <input type="text" id="fEmailID"></input>
                    </detail>
                    <detail>
                        <p>Contact No :</p>
                        <input type="tel" id="fPhone"></input>
                    </detail>
                    <detail>
                        <p>area of specification :</p>
                        <input type="text" id="fAreaOfSpec" required></input>
                    </detail>
                    <detail>
                        <p>prersonal site :</p>
                        <input type="text" id="fPersonalSite" required value="#"></input>
                    </detail>
                    <detail>
                        <p>ACOE site :</p>
                        <input type="text" id="fACOE" required value="#"></input>
                    </detail>
                    <detail id="item-edit">
                    <i class="fas fa-trash " id="item-edit-delete" onclick="delItem()"></i>
                    <textarea  id="editList" value=""></textarea>
                    <i class="far fa-check-square " id="item-edit-update" onclick="updateData()"></i>
                    </detail>
                </info>
                <colList>
                    
                </colList>
                <colDisp>
                
                </colDisp>
                
                
            </form>
        </div>
    </body>
    
</html>    