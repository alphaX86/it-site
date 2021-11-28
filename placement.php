<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href='./css/main.css'>
        <script>
        var yearIds = ["y1819", "y1718", "y1617", "y1516", "y1415"];
        var  currentVisible = null;
        function toggleVisibility(divId) 
        {   if(currentVisible === divId) 
            {   currentVisible = null;  } 
            else 
            {   currentVisible = divId; }
            hideNonVisibleDivs();
        }
        function hideNonVisibleDivs() 
        {   var i, divId, div;
            for(i = 0; i < yearIds.length; i++) 
            {   divId = yearIds[i];
                div = document.getElementById(divId);
                if(currentVisible === divId) 
                {   div.style.display = "block"; } 
                else 
                {   div.style.display = "none";  }
            }
        }
        </script>
    </head>
    <body>
             
        <div class="site">

            <?php include 'header.php'?>
            
            <div class='placement'>

            <h1>PLACEMENT STASTICS</h1>

            <div class="grid-space">
                <div class="grid-bg">
                    <br>
                    
                    <!-- PIE CHART FINAL - DON'T TOUCH THIS -->
                    <h2>2021 - 2022 PLACEMENT STASTICS</h2> 
                    <div class="grid-container-pie">
                        
                        <div class="companies">
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
                        <div>
                            <figure class="pie-chart">
                            <figcaption>
		                        Placed 25<span style="color:white"></span><br>
		                        Not Placed 75<span style="color:#1461d5"></span><br>
                            </figcaption>
	                        </figure>
                        </div>
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
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)',
                                    'rgba(20, 97, 213, 0.7)'
                                ],
                                borderColor: [
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)',
                                    'rgba(20, 97, 213, 1)'
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
                    <p style="text-align:center; color: #242323; font-size: 1.2vw">Academic Year (Number of Students Registered)</p>
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
                            <div class="hYrs" onclick="toggleVisibility('y1819')">
                                <p>2018 - 2019</p>
                            </div>
                            <div class="hYrs" onclick="toggleVisibility('y1718')">
                                <p>2017 - 2018</p>
                            </div>
                            <div class="hYrs" onclick="toggleVisibility('y1617')">
                                <p>2016 - 2017</p>
                            </div>
                            <div class="hYrs" onclick="toggleVisibility('y1516')">
                                <p>2015 - 2016</p>
                            </div>  
                            <div class="hYrs" onclick="toggleVisibility('y1415')">
                                <p>2014 - 2015</p>
                            </div>     
                        </div>

                        <div class="highers-list" id="y1819" >
                        <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Year of Passing</th>
                                    <th>Name</th>
                                    <th>Program Name</th>
                                    <th>University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td>
                                    <td>2019</td>
                                    <td>Rakshana.G</td>
                                    <td>M. S-Computer Science & Systems</td>
                                    <td>Tacoma University</td>
                                </tr>
                                <tr><td>2</td>
                                    <td>2019</td>
                                    <td>N.Nivethan</td>
                                    <td>M.S -Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                            </tbody>
                        </table>     
                        </div>

                        <div class="highers-list" id="y1718" >
                        <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Year of Passing</th>
                                    <th>Name</th>
                                    <th>Program Name</th>
                                    <th>University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td>
                                    <td>2018</td>
                                    <td>J Aravind</td>
                                    <td>M.Tech Computer Science</td>
                                    <td>VIT University, Chennai</td>
                                </tr>
                                <tr><td>2</td>
                                    <td>2018</td>
                                    <td>N.Srivatsan</td>
                                    <td>MS - Computer Science</td>
                                    <td>North Carolina State University</td>
                                </tr>
                                <tr><td>3</td>
                                    <td>2018</td>
                                    <td>Roshini C</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Southern California</td>
                                </tr>
                                <tr><td>4</td>
                                    <td>2018</td>
                                    <td>K.Kaviya</td>
                                    <td>M.S -Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                                <tr><td>5</td>
                                    <td>2018</td>
                                    <td>Vaidhehi V</td>
                                    <td>M.S - Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                            </tbody>
                        </table>     
                        </div>

                        <div class="highers-list" id="y1617" >
                        <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Year of Passing</th>
                                    <th>Name</th>
                                    <th>Program Name</th>
                                    <th>University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td>
                                    <td>2017</td>
                                    <td>Remo Antony</td>
                                    <td>MBA</td>
                                    <td>Anna University</td>
                                </tr>
                                <tr><td>2</td>
                                    <td>2017</td>
                                    <td>Preethi A</td>
                                    <td>MS - Computer Science</td>
                                    <td>North Eastern University</td>
                                </tr>
                                <tr><td>3</td>
                                    <td>2017</td>
                                    <td>Vamsi Krishna</td>
                                    <td>MS - Computer Science</td>
                                    <td>Iowa State University</td>
                                </tr>
                            </tbody>
                        </table>     
                        </div>

                        <div class="highers-list" id="y1516" >
                        <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Year of Passing</th>
                                    <th>Name</th>
                                    <th>Program Name</th>
                                    <th>University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td>
                                    <td>2016</td>
                                    <td>Avinash Venkatesh </td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Texas Dallas</td>
                                </tr>
                                <tr><td>2</td>
                                    <td>2016</td>
                                    <td>Aditi Venugopalan</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Texas Dallas</td>
                                </tr>
                                <tr><td>3</td>
                                    <td>2016</td>
                                    <td>Ananth Narayanan.R</td>
                                    <td>MS - Computer Science</td>
                                    <td>Iowa State University</td>
                                </tr>
                                <tr><td>4</td>
                                    <td>2016</td>
                                    <td>Deepak Govind</td>
                                    <td>MS - Computer Science</td>
                                    <td>Illinois Institute of Technology</td>
                                </tr>
                                <tr><td>5</td>
                                    <td>2016</td>
                                    <td>Dharanya.S </td>
                                    <td>MBA</td>
                                    <td>Pondicherry University</td>
                                </tr>
                            </tbody>
                        </table>     
                        </div>

                        <div class="highers-list" id="y1415" >
                        <table class="table-striped" style="background-color: rgba(255, 255, 255, 0.6)">
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Year of Passing</th>
                                    <th>Name</th>
                                    <th>Program Name</th>
                                    <th>University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1</td>
                                    <td>2015</td>
                                    <td>Shankar M</td>
                                    <td>MS - Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                                <tr><td>2</td>
                                    <td>2015</td>
                                    <td>Vandhana S</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Southern California</td>
                                </tr>
                                <tr><td>3</td>
                                    <td>2015</td>
                                    <td>Abishek G</td>
                                    <td>MS - Information Security</td>
                                    <td>Carnegie Mellon University</td>
                                </tr>
                                <tr><td>4</td>
                                    <td>2015</td>
                                    <td>Arun Karthick M A M</td>
                                    <td>MS - Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                                <tr><td>5</td>
                                    <td>2015</td>
                                    <td>Dhivashini J </td>
                                    <td>MS- Software Engineering</td>
                                    <td>San Jose University</td>
                                </tr>
                                <tr><td>6</td>
                                    <td>2015</td>
                                    <td>Renuka R</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Southern California</td>
                                </tr>  
                                <tr><td>7</td>
                                    <td>2015</td>
                                    <td>Nishanthini D</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Texas Dallas</td>
                                </tr>
                                <tr><td>8</td>
                                    <td>2015</td>
                                    <td>Manoj Shankar A J</td>
                                    <td>MS - Computer Science</td>
                                    <td>Arizona State University</td>
                                </tr>
                                <tr><td>9</td>
                                    <td>2015</td>
                                    <td>Vishali S</td>
                                    <td>MS - Computer Science</td>
                                    <td>University of Southern California</td>
                                </tr>
                                <tr><td>10</td>
                                    <td>2015</td>
                                    <td>Imran Mohamed</td>
                                    <td>M.Tech - Computer Science</td>
                                    <td>IIT Roorkee</td>
                                </tr>
                                <tr><td>11</td>
                                    <td>2015</td>
                                    <td>Ponni Puviarasi</td>
                                    <td>M.Tech</td>
                                    <td>Anna University,CEG Campus</td>
                                </tr>
                            </tbody>
                        </table>     
                        </div>
                    </div>
                    <br><br>

                </div>
            </div>

        <br>
        </div>        
        <?php include 'footer.php'?>
    </div>
    </body>

</html>


