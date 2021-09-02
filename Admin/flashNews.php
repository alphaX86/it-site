<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <?php
            $statusChange=$_GET['statusChange'];
            if($statusChange=='Del'){
            }elseif ($statusChange=='Upd') {
            }elseif ($statusChange== 'Add'){

            }        
        ?>
        <script>
            function Edit(){
                console.log("hello");
            }
        </script>
    </head>
    <body>
    <div class='site'>
        <?php include './header.php'?>
        <div class='admin-flash'>
            <div class='admin-flash-present'>
                <li class="admin-flash-present_item admin-edit-button">
                    <?php $status='add'; 
                    echo "<a href='../admin/flashNewsData/add' class='admin-edit-button admin-flash-present_add'>";?>
                        <i class="fas fa-plus"></i>                    
                        <strong class="admin-flash-present_item_news">ADD NEWS</strong>
                    </a>
                </li>
                <?php
                    
                    echo '<li class="admin-flash-present_item">
                            <p class="admin-flash-present_item_news">Hello ACOE Results Came </p>
                            <i class="fas fa-pen-square fa-2x admin-edit-button" onclick="Edit('.')"></i> 
                        </li>';
                ?>                
                <li class="admin-flash-present_item">
                    <p class="admin-flash-present_item_news">Hello ACOE Results Came </p>
                    <i class="fas fa-pen-square fa-2x admin-edit-button" onclick="Edit(`.`)"></i> 
                </li>
            </div>
            <div class='admin-flash-edit'>
                <?php
                    if($statusChange!='add'){
                        echo '<div class="admin-flash-edit_item">
                                <strong class="admin-flash-edit_item_text">NEWS :</strong>
                                <input type="text" id="edit-news" class="admin-flash-edit_item_input"></input>
                            </div>
                            <div class="admin-flash-edit_item">
                                <strong class="admin-flash-edit_item_text">SOURCE :</strong>
                                <input type="text" id="edit-link" class="admin-flash-edit_item_input"></input>
                            </div>
                            <div class="admin-flash-edit_buttons">
                                <a href="#?statusChange=Upd"class="admin-flash-edit_confirm"><i class="fas fa-wrench fa-4x"></i></a>
                                <a href="#?statusChange=Del"class="admin-flash-edit_delete"><i class="fas fa-trash-alt fa-4x"></i></a>
                            </div>';
                    }else{ 
                        echo '<div class="admin-flash-edit_item">
                                <strong class="admin-flash-edit_item_text">NEWS :</strong>
                                <input type="text" id="edit-news" class="admin-flash-edit_item_input" required></input>
                            </div>
                            <div class="admin-flash-edit_item">
                                <strong class="admin-flash-edit_item_text">SOURCE :</strong>
                                <input type="text" id="edit-link" class="admin-flash-edit_item_input"></input>
                            </div>
                            <div class="admin-flash-edit_item">
                                <input type="radio" value="PDF" name="Type">PDF</input>
                                <input type="radio" value="Link" name="Type">LINK</input>
                                <input type="radio" value="NULL" name="Type" checked="checked">NULL</input>
                            </div>
                            <div class="admin-flash-edit_buttons">
                            <label for="ExpDate"><strong>EXP.Date : </strong></label>
                            <input type="date" name="ExpDate" required ></input>
                                <a href=""class="admin-flash-edit_add"><i class="fas fa-plus-square fa-4x"></i></a>
                            </div>';
                    }
                ?>             
            </div>
        </div>
        <div class="admin-flash-add">

        </div>
    </div>
    </body>

</html>
