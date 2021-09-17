<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./css/main.css'>
    </head>
    <body>
        <div class='site'> 

            <?php include 'header.php'?>

            <h1>OUR GALLERY</h1>

            <div class="grid-space">
                <div class="grid-bg">
                    <br>
                    <!-- php/sql part starts -->
                    <h2 class="grid-secHead">Part 1</h2>
                    <div class="grid-container">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>  
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                    </div>
                    <br>
                    
                    <h2 class="grid-secHead">Part TRIAL</h2>
                    <div class="grid-container">
                    <?php
                        
                        
                        
                        $dir = "./Images/Gallery/01_Dept";

                            // Open a directory, and read its contents
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
                    
                    <h2 class="grid-secHead">Part 2</h2>
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
           



            <?php include 'footer.php'?>
        </div>
    </body>


    <!--  
        https://www.w3schools.com/php/func_directory_readdir.asp
    -->
</html>


