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
                        <div style="padding:15px">
                            <h3>COMPANIES</h3>
                            <table>
                                <colgroup>
                                    <col style="width:50%">
                                    <col style="width:50%">
                                </colgroup>  
                                <tr><td>- Wells Fargo</td>    
                                    <td>- Citicorp</td>
                                </tr>
                                <tr><td>- Wells Fargo</td>    
                                    <td>- Citicorp</td>
                                </tr>
                                <tr><td>- Wells Fargo</td>    
                                    <td>- Citicorp</td>
                                </tr>
                                <tr><td>- Wells Fargo</td>    
                                    <td>- Citicorp</td>
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
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
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
                    <br><br>

                </div>
            </div>

        <br>

        <?php include 'footer.php'?>
    </body>

</html>


