<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <script src="../Js/main.js" type="text/javascript"></script>
        <?php
            session_start();
            include '../dbConnect.php';
            $generateStaff=1;
            $staffType=1;
            $initFID=0;
            $editingFID="NULL";
            $editStatus="NULL";
            $tableFName="`factulty`";
            $updStage="done";
            $tableFDetail='`facultyDetails`';
            $change="0";
            if(isset($_POST['generateStaff']))
                $generateStaff= $_POST['generateStaff'];
            if(isset($_POST['staffType']))
                $staffType=$_POST['staffType'];
            if(isset($_POST['editingFID']))
                $editingFID=$_POST['editingFID'];
            if(isset($_POST['editStatus']))
                $editStatus=$_POST['editStatus'];
            if(isset($_POST['updStage']))
                $updStage=$_POST['updStage']; 
            $change=$_POST['change'];
            if(!isset($_COOKIE['changedRows']))
                setcookie("changedRows", "", time() + (900), "/");
            if(!isset($_COOKIE['addedCol']))
                setcookie("addedCol", "", time() + (900), "/");
            echo $editingFID;
            echo $editStatus;
            if($editStatus=='Upd'){
                echo $updStage;
                if($updStage=='done'&&$change==-1){
                    echo " Hie";
                    $sql = "SELECT * FROM `initData` ";
                    $result = $conn->query($sql);
                    $row=$result->fetch_assoc();
                    echo "Prode";
                    echo $row['details'];
                    $isPresent=0;
                    if(strlen($row['details'])>1) 
                        $isPresent=1;
                    $present=explode('#',$row['details']);
                    $toAdd="";
                    if($_COOKIE['changedRows']!=""){
                        $changedRows=explode('#',($_COOKIE['changedRows'])) ;
                        for($i=0;$i<count($changedRows);$i++){
                            $col=$_COOKIE[$changedRows[$i]];                           
                            if(in_array($changedRows[$i],$present)){
                                $sql ="UPDATE ".$changedRows[$i]." SET `details` = '".$col." WHERE `fID`=".$editingFID;
                                $result = $conn->query($sql);
                            }else{
                                if(isset($_COOKIE['addedCol'])){
                                    $sql="SELECT `extraCol` FROM ".$tableFDetail." WHERE `fID`=".$editingFID.";";
                                    $result = $conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $cols=$row['extraCol'];
                                    if(strlen($cols)<=1)
                                        $cols=$_COOKIE['addedCol'];
                                    else    
                                        $cols=$cols."#".$_COOKIE['addedCol'];
                                    $sql ="UPDATE ".$tableFDetail." SET `extraCol` = '".$cols."' WHERE `fID`=".$editingFID;
                                    $result = $conn->query($sql);
                                }
                                $sql="CREATE TABLE `".$changedRows[$i]."` ( `fID` INT NOT NULL  , `details` TEXT NULL , PRIMARY KEY (`fID`))";
                                $result = $conn->query($sql);
                                $sql="INSERT INTO `".$changedRows[$i]."` (`fID`, `details`) VALUES ('".$editingFID."', '".$col."')";
                                $result = $conn->query($sql);
                                if(strlen($toAdd)<=1)
                                    $toAdd=$changedRows[$i];
                                else    
                                    $toAdd="#"+$changedRows[$i];
                                
                                $editingFID="NULL";
                                $editStatus="NULL";
                            }                
                        }
                        if(strlen($toAdd)>1){   
                            $coltoAdd=($isPresent)?((implode("#",$present))."#".$toAdd):$toAdd;
                            echo "Final List".$coltoAdd;
                            $sql ="UPDATE `initData` SET `details` = '".$coltoAdd."' WHERE fields=`extraCol`;";
                            $result = $conn->query($sql);
                        }
                        
                    }
                    setcookie("changedRows", "", time() + (900), "/");
                    setcookie("addedCol", "", time() + (900), "/");
                }else if($updStage=='advanced'||$change==1){
                    $FacName=$_POST['fName'];
                    $sql ="UPDATE ".$tableFName." SET `name` = '".$_POST['fName']."', `emailID` = '".$_POST['fEmailID']."' ";
                    if($_FILES['fImg']['type']!=""){
                        $imgLocation=$_FILES['fImg']['tmp_name'];
                        echo $_FILES['fImg']['name'];
                        $a=$_FILES['fImg']['type'];
                        $extention =explode('/',$a);
                        $imgTo="Images/faculty/".$editingFID.".".$extention[1];
                        move_uploaded_file($imgLocation,'../'.$imgTo);   
                        $sql=$sql.", `image` = '".$imgTo."'";
                    }
                    $sql=$sql." WHERE `factulty`.`fID` =".$editingFID;
                    $result = $conn->query($sql);
                     
                }  
            }else if($editStatus=="Add"){
                if($updStage=='advanced'||$change==1){
                    $FacName=$_POST['fName'];
                    $file=$_FILES['fImg'];
                    $email=$_POST['fEmailID'];
                    if($FacName==""||$file['type']==""||$email==""){
                        $updStage="done";
                        $editingFID="NULL";
                        echo '<script>alert("Incomplete Basic Data For New Staff");</script>';
                    }
                }
                
            }
        ?>
        <script type='text/javascript'>
            var data={
                changed:{}
            };
            function submitForm(){
                ///setCookie("test","shankar");
                document.getElementById("staffForm").removeAttribute('novalidate');
                document.getElementById("staffForm").submit(); 
            }
            function staffType(type){
                document.getElementById(type).checked=true;
                document.getElementById('gen').checked=true;
                submitForm();            
            }
            function edit(id){
                document.getElementById("staffID").value=id;
                document.getElementById("staffEditStatus").value="Upd";
                document.getElementById("stageB").checked=true;
                submitForm(); 
            }
            function addStaff(id){
                document.getElementById("staffID").value=id+1;
                document.getElementById("staffEditStatus").value="Add";
                document.getElementById("stageB").checked=true;
                submitForm(); 
            }
            function updateFinish(){
                document.getElementById("changeS").checked=true;
                console.log("Finish");
                submitForm();
            }
            function updateNext(){
                document.getElementById("changeP").checked=true;
                document.getElementById("stageA").checked=true;
                console.log("Move");
                submitForm();
            }
            function addList(col){
                document.getElementById("item-edit").style.visibility='visible';
                document.getElementById("item-edit-delete").style.visibility='hidden';
                document.getElementById("item-edit-update").onclick=function(){
                    data[col].push(document.getElementById("editList").value);
                    document.getElementById("editList").value="";
                    data["changed"][col]=true;
                    document.getElementById("item-edit").style.visibility='hidden';
                    populateList(col);                    
                }
                if(document.getElementById('addedCol').value.length<1)
                    document.getElementById('addedCol').value=col;
                else
                    document.getElementById('addedCol').value+="#"+col;
                console.log(document.getElementById('addedCol').value);

            }
            function changeData(i,col,content){
                document.getElementById("editList").value=content;
                document.getElementById("item-edit").style.visibility='visible';
                document.getElementById("item-edit-delete").style.visibility='visible';
                document.getElementById("item-edit-update").onclick=function(){
                    data["changed"][col]=true;
                    data[col][i]=document.getElementById("editList").value;
                    document.getElementById("editList").value="";
                    document.getElementById("item-edit").style.visibility='hidden';
                    document.getElementById("item-edit-delete").style.visibility='hidden';
                    populateList(col);
                }
                document.getElementById("item-edit-delete").onclick=function(){
                    data[col].splice(i,1);
                    data["changed"][col]=true;
                    document.getElementById("editList").value="";
                    document.getElementById("item-edit").style.visibility='hidden';
                    document.getElementById("item-edit-delete").style.visibility='hidden';
                    populateList(col);
                }

            }
            function addCol(){
                let output='<li class="admin-faculty-edit_advanced_field-list_item"><p style="marging-right:10px;"><strong>Column Name:</strong></p><input type="text" id="colName" style="height:95%;wdith:60%;text-transform: capitalize;"></li>';
                document.getElementById('field-list').innerHTML=output;
                document.getElementById('colName').onchange=()=>{
                    let col=document.getElementById('colName').value;
                    col=col.toUpperCase();
                    let items=document.getElementById('fieldListDisp').innerHTML;
                    let newItem='<li class="admin-faculty-edit_advanced_item" onclick="populateList(`'+col+'`)"><p>'+col+'</p></li>';
                    document.getElementById('fieldListDisp').innerHTML=newItem+items;
                    populateList(col,true);
                } 
            }
            function populateList(col,newItem=false){
                if(!data.hasOwnProperty(col)){
                    data[col]=(newItem)? []:document.getElementById(col).value.split('#');
                    data["changed"][col]=false;
                }
                console.log(data["changed"][col]);
                let output='<li class="admin-faculty-edit_advanced_field-list_item"><p><strong><u>'+col+'</u></strong></p></li>';                        
                for(let i=0;i<data[col].length;i++){
                    output+='<li class="admin-faculty-edit_advanced_field-list_item" ><p>'+data[col][i]+'</p><i class="fas fa-file-alt fa-2x" onclick="changeData('+i+',`'+col+'`,`'+data[col][i]+'`)"></i></li>';
                }
                console.log(col);
                output+='<li class="admin-faculty-edit_advanced_field-list_item" id="addItemToList"><p><strong style="margin-right:7px;">ADD</strong></p><i class="fas fa-plus fa-2x"></i></li>';
                document.getElementById('field-list').innerHTML=output;
                document.getElementById('addItemToList').onclick=function(){addList(col);}
            }
            function updateFinished(){
                let changedR='';
                console.log(data['changed']);
                for(x in data['changed']){
                    if(data['changed'][x]){
                        if(changedR.length<1)
                           changedR=x;
                        else 
                            changedR+='#'+x;
                        setCookie(""+x,data[x].join('#'));
                    }
                }
                setCookie("changedRows",""+changedR);
                let s=document.getElementById('addedCol').value;
                console.log(s);
                setCookie("addedCol",s);
                document.getElementById("changeC").checked=true;
                document.getElementById("stageD").checked=true;
                submitForm();
            }
        </script>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <form class="admin-faculty" id="staffForm" action='#'method='post' enctype="multipart/form-data">
            <div class="admin-faculty-staff">
                <div class="admin-faculty-staffType">
                    <li class="admin-faculty-staffType_item" onclick="staffType('Tech')">
                        <p>Technical Faculty</p>
                        <i class="fas fa-pen-square fa-2x " ></i> 
                    </li>
                    <li class="admin-faculty-staffType_item" onclick="staffType('Non-Tech')">
                        <p>Non-Technical Faculty</p>
                        <i class="fas fa-pen-square fa-2x " ></i>
                    </li>
                    <li class="admin-faculty-staffType_item" onclick="staffType('Office')">
                        <p>Office Faculty</p>
                        <i class="fas fa-pen-square fa-2x " ></i>
                    </li>
                    <li class="admin-faculty-staffType_item">
                        <input type='radio' id='Tech' style="visibility:hidden;" <?php if($generateStaff==1&&$staffType==1) echo "checked='checked'"?> value="1" name="staffType">
                        <input type='radio' id='Non-Tech' style="visibility:hidden;" <?php if($generateStaff==1&&$staffType==0) echo "checked='checked'"?> value="0" name="staffType">
                        <input type='radio' id='Office' style="visibility:hidden;" <?php if($generateStaff==1&&$staffType==-1) echo "checked='checked'"?> value="-1" name="staffType">
                        <input type='radio' id='gen' style="visibility:hidden;" value="1" name="generateStaff">
                    </li>    

                </div>

                <?php
                if($generateStaff==1){
                    echo '<div class="admin-faculty-staffList">';
                    echo '<li class="admin-faculty-staffList_item">
                            <input id="staffID" type="radio" name="editingFID" value="'.$editingFID.'" checked="checked" style="visibility:hidden">
                            <input id="staffEditStatus" type="radio" name="editStatus" value="'.$editStatus.'" checked="checked" style="visibility:hidden">
                          </li>';
                    $sql ="SELECT fID,`name` FROM ".$tableFName." WHERE `type` =".$staffType;
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $initFID=$row['fID'];
                        echo '<li class="admin-faculty-staffList_item">
                                <p>'.$row['name'].'</p>
                                <i class="fas fa-user-edit fa-2x admin-faculty-staffList_item_edit" onclick="edit('.$row['fID'].')"></i>
                            </li>';
                    }
                    echo'<li class="admin-faculty-staffList_item" onclick="addStaff('.$initFID.')">
                            <p style="margin-right:5px;"><strong>ADD</strong></p>
                            <i class="fas fa-plus fa-1x" ></i> 
                        </li>';                    
                    echo '</div>';
                }
                ?>
            </div>
            <div class="admin-faculty-edit">
                <?php
                    if($editStatus!='NULL'){
                        $Fname='';
                        $Femail='';
                        $Fimage='Images/faculty/noImage.jpeg';
                        if($editStatus=='Upd'){
                            $sql ="SELECT * FROM ".$tableFName." WHERE `fID` =".$editingFID;
                            $result = $conn->query($sql);
                            $row=$result->fetch_assoc();
                            $Fname=$row['name'];
                            $Femail=$row['emailID'];
                            if($row['image']!=''){
                                $Fimage=$row['image'];
                            }
                        }
                        if($updStage=="basic"){                        
                            echo'<div class="admin-faculty-edit_heading">BASIC INFO';
                            echo ($editStatus=="Add")?"(New Staff)":"";
                            echo '</div>
                            <div class="admin-faculty-edit_basic">
                                <img class="admin-faculty-edit_image" src="../'.$Fimage.'" alt="NO-IMAGE"></img>
                                <div class="admin-faculty-edit_info">
                                    <div class="admin-faculty-edit_info_item">
                                        <p>IMAGE :</p>
                                        <input type="file" name="fImg" ';
                                        echo ($editStatus=="Add")?'required':'';
                                        echo '></input>
                                    </div>
                                    <div class="admin-faculty-edit_info_item">
                                        <p>NAME :</p>
                                        <input type="text" name="fName" ';
                                        echo ($editStatus=="Add")?'required':'value="'.$Fname.'" ';
                                        echo '></input>
                                    </div>
                                    <div class="admin-faculty-edit_info_item">
                                        <p>EMAIL ID :</p>
                                        <input type="text" name="fEmailID" ';
                                        echo ($editStatus=="Add")?'required':'value="'.$Femail.'" ';
                                        echo '></input>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-faculty-edit_button">
                                <i class="fas fa-clipboard-check fa-4x"tooltip="Update & Finish" onclick="updateFinish()" ';
                                if($editStatus=="Add")echo 'style="visibility:hidden" ';
                                echo'></i>
                                <i class="fas fa-arrow-circle-right fa-4x " tooltip="Update & Next" onclick="updateNext()" ></i>
                            </div>';
                        }else if($updStage=="advanced"){
                            echo'<div class="admin-faculty-edit_heading"style="padding:7px;">ADVANCED INFO';
                            echo ($editStatus=="Add")?"":'-<u>'.$FacName.'</u>';
                            echo '</div>
                                <div class="admin-faculty-edit_advanced">
                                    <div class="admin-faculty-edit_advanced_info">
                                        <div class="admin-faculty-edit_advanced_fields" id="fieldListDisp">';
                                        if($editStatus!="Add"){
                                            $sql ="SELECT * FROM ".$tableFDetail."  WHERE `fID` =".$editingFID;
                                            $result = $conn->query($sql);
                                            $row=$result->fetch_assoc();
                                            $listOfCol=explode("#",$row["extraCol"]);
                                            for($i=0;$i<count($listOfCol);$i++){
                                                if($listOfCol[$i]=="")
                                                    break;
                                                $sql ="SELECT details FROM `".$listOfCol[$i]."`  WHERE `fID` =".$editingFID;
                                                $result = $conn->query($sql);
                                                $content=$result->fetch_assoc();
                                                $content=$content['details'];
                                                    echo '<li class="admin-faculty-edit_advanced_item" onclick="populateList(`'.$listOfCol[$i].'`)">
                                                            <p>'.$listOfCol[$i].'</p>
                                                            <textarea style="display:none" id="'.$listOfCol[$i].'">'.$content.'</textarea>
                                                        </li>';
                                                }
                                        }
                            echo        '
                                                    <li class="admin-faculty-edit_advanced_item" onclick="addCol()">
                                                        <i class="fas fa-plus fa-1x" ></i>    
                                                        <p style="margin-left:4px;"><strong>ADD</strong></p>
                                                    </li>
                                        </div>
                                        <div class="admin-faculty-edit_advanced_list">
                                            <div class="admin-faculty-edit_advanced_list_item">
                                                <p>AREA OF SPACIFICATION :</p>
                                                <input type="text" name="fAreaOfSpec"';
                                                echo ($editStatus=="Add")?'required':' value="'.$row["areaOfSpec"].'"';
                                                echo '>
                                            </div>
                                            <div class="admin-faculty-edit_advanced_list_item">
                                                <p>PERSONAL SITE :</p>
                                                <input type="text" name="fPersonalSite" ';
                                                echo ($editStatus=="Add")?'required':'value="'.$row["personalSite"].'"';
                                                echo '>
                                            </div>
                                            <div class="admin-faculty-edit_advanced_list_item">
                                                <p>ACOE SITE :</p>
                                                <input type="text" name="fACOESite" ';
                                                echo ($editStatus=="Add")?'required':' value="'.$row["acoeSite"].'"';
                                                echo '>
                                            </div>
                                            <div class="admin-faculty-edit_advanced_list_edit" id="item-edit" style="visibility:hidden">
                                                <i class="fas fa-trash fa-4x" id="item-edit-delete"></i>
                                                <textarea  id="editList" value=""';
                                                echo ($editStatus=="Add")?'required':'';
                                                echo '></textarea>
                                                <i class="far fa-check-square fa-4x" id="item-edit-update"></i>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="admin-faculty-edit_advanced_field-list" id="field-list">
                                        
                                    </div>
                                </div>
                                <div class="admin-faculty-edit_button">
                                    <i class="fas fa-clipboard-check fa-2x " tooltip="Complete Update" onclick="updateFinished()" ></i>
                                </div>

                            ';
                        }
                    }
                ?>
                <div style="display:none">
                    <input type="radio" value="1" name="change" id="changeS">
                    <input type="radio" value="-1" name="change" id="changeC">
                    <input type="radio" value="0" name="change" id="changeP" checked>
                    <input type="radio" value="basic" name="updStage" id="stageB">
                    <input type="radio" value="advanced" name="updStage" id="stageA">
                    <input type="radio" value="done" name="updStage" id="stageD" checked>
                    <textarea id="addedCol"></textarea>
                </div>
            </div> 
             
        </form>
    </div>
    </body>
</html>