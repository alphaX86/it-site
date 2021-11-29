<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div class="infrastructure">
            <div class="infrastructure-title">Infrastructure</div>
            <div class="infrastructure-intro">
                <content>
                    The computational needs of the researchers and engineers are met through well equipped laboratories. The resources in the department are continually updated with the changing industrial trends. The Advanced computing facility has been provided with the latest dual-core processors from Intel.
                </content>
                <content>
                    The department has well equipped laboratories with facilities that are vital to train the students in state-of-art software and hardware. As a part of our expansion initiatives, a new computer lab of about 4500 sq.ft has been setup in the third floor of the IT department. A separate IT department block has also been proposed and is expected to start functioning in a couple of years.
                </content>                        
            </div>
            <div class="infrastructure-opt">
                <div class="infrastructure-opt_list" onclick="dispCol('PL-1','110vh')">Programming Laboratory - I</div>
                <div class="infrastructure-opt_list"onclick="dispCol('PL-2','110vh')">Programming Laboratory - II</div>
                <div class="infrastructure-opt_list" onclick="dispCol('HL','110vh')">Hardware Laboratory</div>
                <div class="infrastructure-opt_list" onclick="dispCol('PL','110vh')">Project Laboratory</div>
                <div class="infrastructure-opt_list" onclick="dispCol('PGL','110vh')">PG Laboratory</div>
                <div class="infrastructure-opt_list" onclick="dispCol('DAL','110vh')">Data Analytics Laboratory</div>
                <div class="infrastructure-opt_list" onclick="dispCol('SNL','110vh')">Sensor Network Laboratory</div>
                <div class="infrastructure-opt_list" onclick="dispCol('MRL','110vh')">Media Research Laboratory</div>   
            </div>
            <div class="infrastructure-others">
                <div class="infrastructure-others_titles">
                    <div class="infrastructure-others_titles-i" onclick="dispOthers('Lib')" >Department Library</div>
                    <div class="infrastructure-others_titles-i" onclick="dispOthers('CompFacility')" >Computer Facility</div>
                    <div class="infrastructure-others_titles-i" onclick="dispOthers('ConferenceHall')">IT Conference Hall</div>
                </div>
                <div  id="Lib" class="infrastructure-others_display" style="visibility:visible;">
                    <img></img>
                    <content>The Department Library is well equipped with over 800 books that cater to the needs of the faculty as well as students, both for academic and research purposes. Volumes from all leading publishers and authors are available in the library. It also has a wide range of CD/DVD collections for use by the staff and the students of the Department.</content>
                </div>
                <div id="CompFacility" class="infrastructure-others_display">
                    <img></img>
                    <content>The Department Library is well equipped with over 800 books that cater to the needs of the faculty as well as students, both for academic and research purposes. Volumes from all leading publishers and authors are available in the library. It also has a wide range of CD/DVD collections for use by the staff and the students of the Department.</content>
                </div>
                <div  id="ConferenceHall"class="infrastructure-others_display">
                    <img></img>
                    <content>A spacious and well equipped conference hall with many facilities. The hall is used to hold meetings with the staff, conduct class committee meeting and project reviews.</content>
                </div>
            </div>
            <script>
                let persent;
            </script>
            <?php 
                $contents=file_get_contents('./Files/infrastructure.json');
                $data=json_decode($contents,true);
                $ids=$data["Ids"];
                for($i=0;$i<count($ids);$i++){
                    $id=$ids[$i];
                    $content=$data[$id];
                    $courses=$content['courses'];
                    $equip=$content['equipment'];
                    echo '<div class="infrastructure-display" id="'.$id.'">
                    <div class="infrastructure-display-title">'
                        .$content['name'].
                    '</div>
                    <img class="infrastructure-display-img" src="'.$content['img'].'"></img>
                    <div class="infrastructure-display-stat">
                        <div id="'.$id.'-pieEven"class="infrastructure-display-pie" pie-title="Even Semester">
                            <div class="infrastructure-display-pieIn">
                            '.$content['workingHrs']['even'].'Hr/Week
                            </div>
                        </div>
                        <script>
                            persent='.$content['workingHrs']['even'].'/52*100;
                            document.getElementById("'.$id.'-pieEven").style= "background: conic-gradient(#1461d5 0.00% "+persent+"%,white "+persent+"% 100% );border: 0.1vh solid #1461d5; "; 
                            
                        </script>
                        <div  id="'.$id.'-pieOdd" class="infrastructure-display-pie"  pie-title="Odd Semester">
                            <div class="infrastructure-display-pieIn">
                            '.$content['workingHrs']['odd'].'Hr/Week
                            </div>
                        </div>
                        <script>
                        persent='.$content['workingHrs']['odd'].'/52*100;
                        document.getElementById("'.$id.'-pieOdd").style= "background: conic-gradient(#1461d5 0.00% "+persent+"%,white "+persent+"% 100%);"; 
                          
                        </script>
                    </div>                
                    <div class="infrastructure-display-courses">
                        
                        <title >
                            Even Semester
                        </title>
                        <content>';
                        for($j=0;$j<count($courses['even']);$j++){
                            echo '<li>
                                <i class="fab fa-audible"></i>
                                <data>'.$courses['even'][$j].'</data>
                            </li>';
                        }
                        echo '</content>
                        <title>
                            Odd Semester
                        </title>
                        <content>';
                        for($j=0;$j<count($courses['odd']);$j++){
                            echo '<li>
                                <i class="fab fa-audible"></i>
                                <data>'.$courses['odd'][$j].'</data>
                            </li>';
                        }
                        echo '</content>
                    </div>
                    <div class="infrastructure-display-equipment">';
                    for($j=0;$j<count($equip);$j++){    
                        echo '<li>
                            <i class="fas fa-bong"></i>
                            <data>'.$equip[$j].'</data>
                            </li>';
                    }
                echo '</div>
                </div>';
                }
            ?>
            
        </div>
        <?php include 'footer.php'?>

    </div>
    </body>
    <script src="./Js/facultyDetails.js" type="text/javascript"></script>
    <script src="./Js/infrastructure.js" type="text/javascript"></script>
    

</html>

