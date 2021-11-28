<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./css/main.css'>
        <!-- include dbConnect here -->
    </head>
    <body>
        <div class='site'> 

            <?php include 'header.php'?>

            <div class="gallery"> 

            <h1>OUR GALLERY</h1>

            <div class="grid-space">
                <div class="grid-bg">
                    <br>
                    
                    <!-- php/sql part starts -->
                    <h2>Part 1</h2> <!-- for testing -->
                    <div class="grid-container">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>  
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                    </div>
                    <br>
                    
                    <!-- include DB part php for gallery here -->
                    <!-- gallerySqlPart.txt -->
                    <!-- keep the other 3 parts for testing -->
                    
                    <h2>Trial Part</h2>  <!-- for testing -->
                    <div class="grid-container">
                        <?php
                                $dir = "./Images/Gallery/01_Dept";

                                if (is_dir($dir)){
                                    if ($dh = opendir($dir)){
                                        $a=scandir($dir);
                                        foreach ($a as $b){
                                            if($b!="." and $b!="..")
                                                echo "<div><img src='$dir/$b'></img></div>";
                                        }
                                        closedir($dh);
                                    }
                                }
                        ?>
                    </div>
                    <br>

                    <h2>Part 2</h2>  <!-- for testing -->
                    <div class="grid-container">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>  
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                    </div>
                    <br>
                    <!-- end of php -->
                </div>
            </div> 
            
            <br>

            </div>
            <?php include 'footer.php'?>
        </div>
    </body>


 
</html>


