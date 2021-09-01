<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <?php
            $statusChange=$_POST['statusChange'];
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
                <li class="admin-flash-present_item">
                    <i class="fas fa-plus"></i>                    
                    <p class="admin-flash-present_item_news">ADD NEWS</p>
                </li>
                <?php
                    
                    echo '<li class="admin-flash-present_item">
                            <p class="admin-flash-present_item_news">Hello ACOE Results Came </p>
                            <i class="fas fa-pen-square fa-2x" onclick="Edit('.')"></i> 
                        </li>';
                ?>                
                <li class="admin-flash-present_item">
                    <p class="admin-flash-present_item_news">Hello ACOE Results Came </p>
                    <i class="fas fa-pen-square fa-2x" onclick="Edit(`.`)"></i> 
                </li>
            </div>
            <div class='admin-flash-edit'>
                <div class="admin-flash-edit_item">
                    <input type='text'></input>
                    <input type='text'></input>
                    <a href='#?statusChange=Upd'class='admin-flash-edit_confirm'><i class="fas fa-wrench fa-2x"></i></a>
                    <a href='#?statusChange=Del'class='admin-flash-edit_delete'><i class="fas fa-trash-alt fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="admin-flash-add">

        </div>
    </div>
    </body>

</html>
