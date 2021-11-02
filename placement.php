<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href='./css/main.css'>
        
    </head>
    <body>
               
            <?php include 'header.php'?>

            <h1>PLACEMENT STASTICS</h1>

            <div class="grid-space">
                <div class="grid-bg">
                    <br>
                    
                    <!-- PIE CHART FINAL - DON'T TOUCH THIS -->
                    <h2>2021 - 2022 PLACEMENT STASTICS</h2> 
                    <div class="grid-container-pie">
                        <div>
                            <figure class="pie-chart">
                            <figcaption>
		                        Placed 25<span style="color:#4e79a7"></span><br>
		                        Not Placed 75<span style="color:#f28e2c"></span><br>
                            </figcaption>
	                        </figure>
                        </div>
                        <div style="padding:13px; background-color: rgba(255, 255, 255, 0.8)">
                            <h3>COMPANIES</h3>
                            <table>
                                <colgroup>
                                    <col style="width:25%">
                                    <col style="width:25%">
                                    <col style="width:25%">
                                    <col style="width:25%">
                                </colgroup>  
                                <tr><td>Accenture</td>    
                                    <td>Accolite</td>
                                    <td>Adobe</td>
                                    <td>Bank of America</td>
                                </tr>
                                <tr><td>Barclays</td>
                                    <td>Caterpillar</td>
                                    <td>Citicorp</td>    
                                    <td>CTS</td>
                                </tr>
                                <tr><td>IBM</td>
                                    <td>KLA Tencor</td>    
                                    <td>Lister Technologies</td>
                                    <td>L&T</td>
                                </tr>
                                <tr><td>Natwest</td>    
                                    <td>Navis India Ltd.</td>
                                    <td>NielsenIQ</td>
                                    <td>Oracle</td>
                                </tr>
                                <tr><td>Publicis Sapients</td>
                                    <td>RBS</td>
                                    <td>Samsung</td>    
                                    <td>SAP Labs</td>
                                </tr>
                                <tr><td>Searce</td>
                                    <td>Silicon Valley Bank</td>    
                                    <td>TCS</td>
                                    <td>Tekion</td>
                                </tr>
                                <tr><td>Verizon</td>    
                                    <td>Visa</td>
                                    <td>Walmart Labs</td>
                                    <td>Wells Fargo</td>
                                </tr>
                                <tr><td>Wipro</td>
                                    <td>Zoho</td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                    <br><br>                             
                    
                    <!-- BAR CHART AN IDEA - DON'T TOUCH THIS - PRESS F FOR SHANKAR -->
                    <h2>PREVIOUS YEARS PLACEMENT STASTICS</h2>  
                    <div class="Bar">    
                        <div class="Barchart">
                        <?php 
                            for($i=0;$i<100;$i++)
                                if($i%10==0)
                                    echo "<div class='Barchart-grid' indicator='".(100-$i)."'></div>";
                                else
                                    echo "<div class='Barchart-grid' indicator=''></div>";
                        ?>
                        </div>
                        <div class="graphs">
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                            <div class="graphEle" graph-title="a"></div>
                        </div>
                        <script>
                            let ele=document.getElementsByClassName("graphEle");
                            let data=[10,20,30,40,50,60,70,80,90,100];
                            for(let i=0; i<ele.length; i++)
                            {   ele[i].style["grid-column"]=(i+1);
                                ele[i].style["grid-row"]=((110-data[i])/10)+"/-1";
                            }
                        </script>
                    </div>
                    <br><br> 

                    <!-- BAR CHART FINAL - DON'T TOUCH THIS -->
                    <h2>PREVIOUS YEARS PLACEMENT STASTICS</h2>  
                    <canvas id="myChart2" width="50vw" height="20vh"></canvas>
                    <script>
                    var ctx = document.getElementById('myChart2').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['2020-2021 (115)', '2019-2020 (105)', '2018-2019 (111)', 
                                    '2017-2018 (118)', '2016-2017 (115)', '2015-2016 (116)', 
                                    '2014-2015 (108)', '2013-2014 (115)', '2012-2013 (111)', 
                                    '2011-2012 (122)', '2010-2011 (115)', '2009-2010 (74)'],
                            datasets: [{
                                label: '# placed',
                                data: [79, 75, 85, 77, 87, 87, 95, 95, 88, 103, 88, 65],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(75, 192, 192, 0.7)',
                                    'rgba(153, 102, 255, 0.7)',
                                    'rgba(255, 159, 64, 0.7)',
                                    'rgba(255, 99, 132, 0.7)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(75, 192, 192, 0.7)',
                                    'rgba(153, 102, 255, 0.7)',
                                    'rgba(255, 159, 64, 0.7)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
                    <p style="text-align:center; color: grey;">Academic Year (Number of Students Registered)</p>
                    <br><br>
                    
                    <h2>STUDENTS OPTED FOR HIGHER STUDIES</h2>  
                    <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                        <colgroup>
                            <col style="width:40%">
                            <col style="width:20%">
                            <col style="width:20%">
                            <col style="width:20%">
                        </colgroup>      
                        <thead>
                            <tr><th>Year</th>
                                <th>Ph.D</th>
                                <th>MS</th>
                                <th>MBA </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>2018 - 2019</td>
                                <td>-</td> <td>2</td> <td>-</td>
                            </tr>    
                            <tr><td>2017 - 2018</td>
                                <td>-</td> <td>5</td> <td>-</td>
                            </tr>  
                            <tr><td>2016 - 2017</td>
                                <td>-</td> <td>3</td> <td>1</td>
                            </tr>
                            <tr><td>2015 - 2016</td>
                                <td>-</td> <td>4</td> <td>1</td>
                            </tr>
                            <tr><td>2014 - 2015</td>
                                <td>-</td> <td>9</td> <td>-</td>
                            </tr>
                            <tr><td>2013 - 2014</td>
                                <td>-</td> <td>-</td> <td>-</td>
                            </tr>
                            <tr><td>2012 - 2013</td>
                                <td>1</td> <td>6</td> <td>-</td>
                            </tr>
                            <tr><td>2011 - 2012</td>
                                <td>-</td> <td>1</td> <td>-</td>
                            </tr>
                            <tr><td>2010 - 2011</td>
                                <td>-</td> <td>2</td> <td>2</td>
                            </tr>
                            <tr><td>2009 - 2010</td>
                                <td>-</td> <td>-</td> <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>

                    <h2>HIGHER STUDIES DETAILS</h2>  
                    <div class="highers">
                        <div class="hYears">
                            <div class="hYrs" onclick="makeVisible('y1819')">
                                <p>2018 - 2019</p>
                            </div>
                            <div class="hYrs" onclick="makeVisible('y1718')">
                                <p>2017 - 2018</p>
                            </div>
                            <div class="hYrs" onclick="makeVisible('y1617')">
                                <p>2016 - 2017</p>
                            </div>
                            <div class="hYrs" onclick="makeVisible('y1516')">
                                <p>2015 - 2016</p>
                            </div>  
                            <div class="hYrs" onclick="makeVisible('y1415')">
                                <p>2014 - 2015</p>
                            </div>     
                        </div>

                        <div class="highers-list" id="y1819" >
                        <?php                    
                            $sql ='SELECT * FROM Highers WHERE `year` = 2019';
                            $result = $conn->query($sql);
                            $i=0;
                            echo '<table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">';
                            echo '<thead>
                                    <tr><th>S.No</th>
                                        <th>Year of Passing</th>
                                        <th>Name</th>
                                        <th>Program Name</th>
                                        <th>University</th>
                                    </tr>
                                </thead>';
                            echo '<tbody>';
                            while($row = $result->fetch_assoc()) {
                                $Year=$row['year'];
                                $Name=$row['name'];
                                $Prog=$row['program'];
                                $Uni=$row['university'];
                                $i=$i+1;
                                echo '<tr><td>`'.$i.'`</td>
                                          <td>`'.$Year.'`</td>
                                          <td>`'.$Name.'`</td>
                                          <td>`'.$Prog.'`</td>
                                          <td>`'.$Uni.'`</td></tr>';
                            }
                            echo '</tbody';
                        ?>       
                        </div>
                    </div>
                    <br><br>

                </div>
            </div>

        <br>

        <?php include 'footer.php'?>
    </body>

</html>


