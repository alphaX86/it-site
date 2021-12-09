<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
    </head>
    <header>
        <?php include 'dbConnect.php'?>
        <?php 
        $toRemove=[];
        $test=strtotime('2021-11-07 00:00:00');
        $today=date('Y-m-d h:i:s');
        $test2=date('Y-m-d h:i:s',$test);
        echo '<script>console.log("'.$test2.'");</script>';
        if($today<$test2)
            echo '<script>console.log("'.$today.'");</script>';
        else
            echo '<script>console.log("'.$test2.'");</script>';
        ?>
    </header>
    <body>
        <div class='site'>
            <?php include 'header.php'?>
            <div class="aboutUs">
                <div class="aboutUs-opts">
                    <div class="aboutUs-opts_list">
                        <li>
                            <i class="fas fa-photo-video"></i>
                            <content>Virtual Tour</content>
                        </li>
                        <li>
                            <i class="fas fa-users"></i>
                            <content>IT Association</content>
                        </li>
                        <li>
                            <i class="fas fa-hotel"></i>
                            <content>Annual Report</content>
                        </li>
                    </div>
                    <div class="aboutUs-opts_imgSlide">
                        <images>
                            <img src="./Images/MainPage/SL-1.jpeg"/>
                            <img src="./Images/MainPage/SL-1.jpeg"/>
                            <img src="./Images/MainPage/SL-1.jpeg"/>
                            <img src="./Images/MainPage/SL-1.jpeg"/>
                            <img src="./Images/MainPage/SL-1.jpeg"/>
                        </images>    
                    </div>
                    <?php
                    echo '<div class="aboutUs-opts_flashNews">
                        <display>';
                        $sql='SELECT * FROM `flashNews`';
                        $result = $conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            $NewsId=$row['newsID'];
                            $data=$row['news'];
                            $isLink=$row['isLink'];
                            if($isLink=='1')
                                $link=$row['link'];
                            $expDate=$row['expDate'];
                            $strTime=strtotime($expDate);
                            $exp=date('Y-m-d h:i:s',$strTime);
                            if($exp<$today){
                                array_push($toRemove,$NewsId);
                            }else{
                                echo '<li>
                                        <i class="far fa-newspaper"></i>
                                        <a ';
                                echo ($isLink=='1')?'href="'.$link.'"':'';
                                echo '>'.$data.'</a>
                            </li>';
                            }
                        }
                        for($i=0;$i<count($toRemove);$i++){
                            $sql='DELETE FROM `flashNews` WHERE `flashNews`.`newsID` = '.$toRemove[$i];
                            $result = $conn->query($sql);
                        }
                        $toRemove=[];    
                    echo'</display>
                    </div>';
                    ?>
                </div>
                <div class="aboutUs-Wel">
                    <h1>Welcome to Department of Information Technology</h1>
                    <p>Keeping with the tradition of Anna University in offering new areas of specialization in engineering, the Department of Information Technology was instituted in the year 2001 with the objective of imparting knowledge in cutting-edge technologies in Information Technology and Computer Sciences.</p>
                    <p>The department is currently headed by Dr. Dhananjay Kumar, an educator and researcher himself. In the footsteps of the former Heads, the incumbent Head is further taking the department to reach newer heights. The department has a team of dynamic, young and dedicated staff, with specialization in wide array of areas. It offers full time and part time courses for both UG and PG. The department receives funds from DST under FIST programme.</p>
                    <p>All the members of TEAM IT share the belief that IT is a tool, if used effectively can improve the quality of all activities being carried out. As a first step, a project to automate all administrative activities has been taken up and the entire project is being done using the services of our department staffs. In the near future the department will have post Graduate course (other than MS By Research) offering curriculum in the field of Computer Science and Information Technology.</p>
                    <p>Department of Information Technology, MIT, thrives to accomplish its vision of developing dexterous and proficient students. Its progress is growing exponentially in contributing efficient and technically sound students to the corporate world.</p>
                    <p>“Imagination is more important than knowledge “ - Innovative ideas from student side are encouraged and support for implementation of the same offered by faculty members.</p>
                    
                </div>
            </div>
           <?php include 'footer.php'?>
        </div>
    </body>

</html>
