<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <?php
            include '../dbConnect.php';
            if(isset($_POST['statusChange']))
                $statusChange=$_POST['statusChange'];
            else
                $statusChange=$_GET['statusChange'];
            $initID=0;
            if($statusChange=='Del'){
                $id=$_POST['id'];
                $isLink=$_POST['isLink'];               
                if($isLink=='0'){
                    $sql ="SELECT link FROM `flashNews` WHERE `newsID` =".$id;
                    $result = $conn->query($sql);
                    $row=$result->fetch_assoc();
                    $link=$row["link"];
                    unlink(('../'.$link));
                }else{
                    $link=$_POST['link'];
                }
                $sql ="DELETE FROM `flashNews` WHERE `newsID` =".$id;
                $result = $conn->query($sql); 
            }elseif ($statusChange=='Upd') {
                $id=$_POST['id'];
                $news=$_POST['news'];
                $isLink=$_POST['isLink'];
                $link=$_POST['link'];
                if($isLink=='0'){
                     if($_FILES['pdf']['type']!=""){
                        $fileLocation=$_FILES['pdf']['tmp_name'];
                        $a=$_FILES['pdf']['type'];
                        $extention =explode('/',$a);
                        $fileTo='PDF/flashNews/'.$id.'.'.$extention[1];
                        move_uploaded_file($fileLocation,'../'.$fileTo);
                        $sql ="UPDATE `flashNews` SET `news` = '".$news."' WHERE `newsID` =".$id;     
                    }else{
                        $sql ="UPDATE `flashNews` SET `news` = '".$news."' WHERE `newsID` =".$id;
                    }                   

                }if($isLink=="-1"){
                    $sql ="UPDATE `flashNews` SET `news` = '".$news."', `link` = NULL WHERE `newsID` =".$id;
                }else{
                    $sql ="UPDATE `flashNews` SET `news` = '".$news."', `link` = '".$link."' WHERE `newsID` =".$id;
                }
                $result = $conn->query($sql); 
            }elseif ($statusChange== 'Add'){
                $id=$_POST['id'];
                $news=$_POST['news'];
                if(isset($_POST['link']))
                    $link=$_POST['link'];
                else    
                    $link=NULL;
                $expDate=$_POST['expDate'];
                $isLink=$_POST['isLink'];
                $fileTo='PDF/flashNews/';
                if($isLink==0){
                    if($link==NULL){

                        $fileLocation=$_FILES['pdf']['tmp_name'];
                        $a=$_FILES['pdf']['type'];
                        $extention =explode('/',$a);
                        $fileTo=$fileTo.$id.'.'.$extention[1];
                        move_uploaded_file($fileLocation,'../'.$fileTo);
                    }

                }
                $sql="INSERT INTO `flashNews` (`newsID`, `news`, `link`, `expDate`, `isLink`) VALUES ('".$id."', '".$news."', ";
                if($isLink==-1)
                    $sql=$sql.'NULL';
                else if($isLink==0)
                   $sql=$sql."'".$fileTo."'";
                else 
                    $sql=$sql."'".$link."'";
                $sql=$sql.", '".$expDate."', ".$isLink.")";
                $result = $conn->query($sql);
                $statusChange="NULL"; 
            } elseif($statusChange=='newAdd'){
                $newId=$_GET['id'];
            }
                  
        ?>
        <script type="text/javascript">
            function radioChange(){
                console.log(document.getElementById("pdf").checked);
                if(document.getElementById("pdf").checked){
                    console.log('change');
                    //document.getElementById('source').innerHTML='Hello';
                    document.getElementById("source").innerHTML='<input type="file" name="pdf" required ></input>'
                }else if(document.getElementById("NULL").checked)
                document.getElementById("source").innerHTML='';
                else
                    document.getElementById("source").innerHTML='<input type="text" name ="link" style="width:100%;height:100%;border-radius:10px;padding: 2px 7px;transform:translateX(-2.5%)" required></input>';    
            }
            function Edit(id,news,link,isLink){
                console.log('change edit');
                document.getElementById('edit-newsId').value=id;
                document.getElementById('edit-isLink').value=isLink;
                document.getElementById('edit-news').value=news;
                console.log(link + " "+isLink);
                if(isLink=='0'){
                    document.getElementById("source").innerHTML='<input type="file" name="pdf" ></input>'
                }else if(isLink=='-1')
                    document.getElementById("source").innerHTML='';
                else{
                    document.getElementById("source").innerHTML='<input type="text" name ="link" value="'+link+'"style="width:100%;height:100%;border-radius:10px;padding: 2px 7px;transform:translateX(-2.5%);overflow:hidden" required></input>';
                }    
            } 
            function checkUpd(){
                document.getElementById("confirm").checked=true;
            }
            function checkDel(){
                document.getElementById("delete").checked=true;
            }
        </script>
    </head>
    <body>
    <div class='site'>
        <?php include './header.php'?>
        <div class='admin-flash'>
            <div class='admin-flash-present'>
                <?php
                    $sql ="SELECT * FROM `flashNews`";
                    $result = $conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        $initID=$row["newsID"];
                        echo '<li class="admin-flash-present_item">
                                <p class="admin-flash-present_item_news">'.$row["news"].'</p>
                                <i class="fas fa-pen-square fa-2x admin-edit-button" onclick="Edit('.$row["newsID"].',`'.$row["news"].'`,`'.$row["link"].'`,'.$row["isLink"].')"></i> 
                            </li>';
                    }
                ?>                
                <li class="admin-flash-present_item admin-edit-button">
                    <?php  
                        echo '<a href="http://localhost:3000/Admin/flashNews.php?statusChange=newAdd&id='.($initID+1).'" class="admin-edit-button admin-flash-present_add">
                            <i class="fas fa-plus"></i>                    
                            <strong class="admin-flash-present_item_news">ADD NEWS</strong>
                        </a>';
                    ?>
                </li>
            </div>
            <div class='admin-flash-edit'>
                <form action="http://localhost:3000/Admin/flashNews.php" method='post' class='admin-flash-edit_form' enctype="multipart/form-data">
                    
                    <?php
                        if($statusChange!='newAdd'){
                            echo '<div class="admin-flash-edit_item">
                                    <strong class="admin-flash-edit_item_text">NEWS :</strong>
                                    <input type="text" id="edit-news" name="news" class="admin-flash-edit_item_input"></input>
                                </div>
                                <div class="admin-flash-edit_item">
                                    <strong class="admin-flash-edit_item_text">SOURCE :</strong>
                                    <div id="source" class="admin-flash-edit_item_input">
                                        
                                    </div>
                                </div>
                                <div class="admin-flash-edit_buttons">                                    
                                    <input type="radio"  name="id" id="edit-newsId" checked style="visibility:hidden">
                                    <input type="radio"  name="isLink"  id="edit-isLink" checked style="visibility:hidden">
                                    <input type="radio" value="Upd" id="confirm" name="statusChange" style="visibility:hidden">
                                    <input type="radio" value="Del" id="delete" name="statusChange" style="visibility:hidden">
                                    <button type="submit" onclick="checkUpd()" class="admin-flash-edit_confirm"><i class="fas fa-wrench fa-4x"></i></button>
                                    <button type="submit" onclick="checkDel()" class="admin-flash-edit_delete"><i class="fas fa-trash-alt fa-4x"></i></button>
                                </div>';
                        }else{ 
                            echo '<div class="admin-flash-edit_item">
                                    <strong class="admin-flash-edit_item_text">NEWS :</strong>
                                    <input type="text"name="news" class="admin-flash-edit_item_input" required></input>
                                </div>
                                <div class="admin-flash-edit_item">
                                    <strong class="admin-flash-edit_item_text">SOURCE :</strong>
                                    <div id="source" class="admin-flash-edit_item_input">
                                        
                                    </div>                           
                                </div>
                                <div class="admin-flash-edit_item">
                                    <input type="radio" id="pdf" onchange="radioChange()" value="0" name="isLink">PDF</input>
                                    <input type="radio" value="1" onchange="radioChange()" name="isLink">LINK</input>
                                    <input type="radio" id="NULL" onchange="radioChange()" value="-1" name="isLink" checked="checked">NULL</input>
                                </div>
                                <div class="admin-flash-edit_buttons">
                                    <label for="ExpDate"><strong>EXP.Date : </strong></label>
                                    <input type="date" id="edit-expDate" name="expDate" required ></input>
                                    <input type="radio" value="Add" name="statusChange"checked style="visibility:hidden">
                                    <input type="radio" value="'.$newId.'" name="id" checked style="visibility:hidden">
                                    <button type="submit" value="" name="newAdd" class="admin-flash-edit_add"><i class="fas fa-plus-square fa-4x"></i></button>
                                </div>';
                        }
                    ?>             

                </form>
            </div>
        </div>
        <div class="admin-flash-add">

        </div>
    </div>
    </body>

</html>
