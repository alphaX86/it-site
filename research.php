<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    </head>
    <style>
        /* Style the tab */
        
        .tab {
            display: inline-block;
            position: relative;
            left: 0%;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 350px;
        }
        /* Style the buttons inside the tab */
        
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of buttons on hover */
        
        .tab button:hover {
            background-color: #ddd;
        }
        /* Create an active/current "tab button" class */
        
        .tab button.active {
            background-color: #ccc;
        }
        /* Style the tab content */
        
        .tabcontent {
            display: inline-block;
            position: relative;
            left: 30%;
            top: -30%;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 400px;
            overflow: scroll;
        }
        
        table {
            border-collapse: separate;
            width: 100%;
            border: 1px solid #ddd;
        }
        
        th,
        td {
            text-align: center;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <h2>
        <center>Research</center>
    </h2>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'sponsor')" id="defaultOpen">Sponsored Projects</button>
        <button class="tablinks" onclick="openCity(event, 'ctdt')">CTDT Projects</button>
        <button class="tablinks" onclick="openCity(event, 'scholar')">Scholars</button>
        <button class="tablinks" onclick="openCity(event, 'project')">Project Report</button>
    </div>
    <div id="sponsor" class="tabcontent">
        <h3>
            <center>Sponsored Projects</center>
        </h3>
        <table>

        </table>
        <script>
            const note = document.querySelector('.note');
            let sponsored_projects = [{
                SerialNo: "1",
                Project_Title: "Intelligent Remote health monitoring system in sensor cloud environment",
                Sponsor_Agency: "DST NRDMS",
                Amount: "16.80",
                Duration_in_Months: "24",
                Investigator: "Dr. V. Vaidehi, Dr. D. Sangeetha"
            }, {
                SerialNo: "2",
                Project_Title: "Center for Advance Computing Research and Education",
                Sponsor_Agency: "DIT-MCIT New Delhi",
                Amount: "4.6 Cr",
                Duration_in_Months: "5",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "3",
                Project_Title: "Multi Sensor Data and Image Fusion in sensor Network",
                Sponsor_Agency: "TCS",
                Amount: "15",
                Duration_in_Months: "-",
                Investigator: "Prof.V. Vaidehi"
            }, {
                SerialNo: "4",
                Project_Title: "Power Optimization in Wireless Sensor Network",
                Sponsor_Agency: "TCS",
                Amount: "10",
                Duration_in_Months: "-",
                Investigator: "Prof.V. Vaidehi"
            }, {
                SerialNo: "5",
                Project_Title: "Development of S and F Payload software for Anusat",
                Sponsor_Agency: "ISRO",
                Amount: "5 Cr",
                Duration_in_Months: "-",
                Investigator: "Prof.V. Vaidehi"
            }, {
                SerialNo: "6",
                Project_Title: "Design and Development of a Semantic Intrusion Detection System and Semantic Caching in Query Based Networks",
                Sponsor_Agency: "Xambala Chennai",
                Amount: "9",
                Duration_in_Months: "12",
                Investigator: "Prof. V. Vaidehi N.Srinivasan M.R. Sumalatha"
            }, {
                SerialNo: "7",
                Project_Title: "Development of Trust Component for Secured Commercial Grid Services",
                Sponsor_Agency: "DIT-MCIT New Delhi",
                Amount: "45",
                Duration_in_Months: "24",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "8",
                Project_Title: "Development of front end tools for Grid Services",
                Sponsor_Agency: "CDAC Bangalore",
                Amount: "11",
                Duration_in_Months: "12",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "9",
                Project_Title: "Development of Knowledge Based Wind Tunnel test Data Management System",
                Sponsor_Agency: "DRDL Hyderabad",
                Amount: "9.9",
                Duration_in_Months: "15",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "10",
                Project_Title: "Design and Development of enhanced OS for a flow solver series of parallel processor having flow switch",
                Sponsor_Agency: "CSIR New Delhi",
                Amount: "15",
                Duration_in_Months: "36",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "11",
                Project_Title: "Missile Defense and Interceptor Allocation by RBF Neural Networks",
                Sponsor_Agency: "DRDO New Delhi",
                Amount: "12",
                Duration_in_Months: "24",
                Investigator: "Prof.S. Thamarai Selvi"
            }, {
                SerialNo: "12",
                Project_Title: "Development of University Micro-satellite",
                Sponsor_Agency: "ISRO",
                Amount: "4",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "13",
                Project_Title: "Design and Development of Enhanced OS for a Flosolver series of Parallel Processor having Floswitch",
                Sponsor_Agency: "CSIR",
                Amount: "15",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "14",
                Project_Title: "Development of Front End Tools for Grid Services",
                Sponsor_Agency: "CDAC",
                Amount: "12",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "15",
                Project_Title: "Missile Defence and Interceptor allocations by RBF Neural Networks",
                Sponsor_Agency: "DRDO",
                Amount: "12",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "16",
                Project_Title: "Development of knowledge based Wind Tunnel Test Data Management Systems",
                Sponsor_Agency: "DRDL",
                Amount: "9.9",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "17",
                Project_Title: "Development of Trust Components for Secured Commercials Grids",
                Sponsor_Agency: "DIT",
                Amount: "45",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "18",
                Project_Title: "Multi Sensor Image and Data Fusion",
                Sponsor_Agency: "TCS",
                Amount: "15",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "19",
                Project_Title: "Development of an Intrusion Detection System and Development of Semantic Cache in Query Processing",
                Sponsor_Agency: "XAMBALA Inc",
                Amount: "8.8",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "20",
                Project_Title: "Virtual Grids & Intelligent Grid Load Distribution System.(CONSULTANCY WORK)",
                Sponsor_Agency: "Honeywell Technology Solutions",
                Amount: "6",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "21",
                Project_Title: "Mobile & Pervasive Computing _ Infrastructure development",
                Sponsor_Agency: "UGC_BSR",
                Amount: "20",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "22",
                Project_Title: "NRC - FOSS – National Resource Centre Free Open Source Software – Phase II",
                Sponsor_Agency: "MCIT,GOI",
                Amount: "1.95 Cr",
                Duration_in_Months: "-",
                Investigator: "Dr. V. Vaidehi"
            }, {
                SerialNo: "23",
                Project_Title: "FIST Setting up Sensor Network and Cloud Computing Lab",
                Sponsor_Agency: "DST",
                Amount: "51",
                Duration_in_Months: "-",
                Investigator: "Dr. V. Vaidehi Dr.P.Varalakshmi Dr.M.R.Sumalatha"
            }, {
                SerialNo: "24",
                Project_Title: "DIT – Secured Object Detection and Tracking System using Wireless Multimedia Sensor Networks",
                Sponsor_Agency: "DIT",
                Amount: "72.94",
                Duration_in_Months: "-",
                Investigator: "Dr. V. Vaidehi"
            }, {
                SerialNo: "25",
                Project_Title: "NRDMS Complex Event Processing for Sensor Network",
                Sponsor_Agency: "DST",
                Amount: "26",
                Duration_in_Months: "-",
                Investigator: "Dr. V. Vaidehi"
            }, {
                SerialNo: "26",
                Project_Title: "Mobile & Pervasive computing	",
                Sponsor_Agency: "UGC-DRS-SAP",
                Amount: "32.5",
                Duration_in_Months: "-",
                Investigator: ""
            }, {
                SerialNo: "27",
                Project_Title: "Video streaming using Telemedicine applications in 3G",
                Sponsor_Agency: "UGC",
                Amount: "8.91",
                Duration_in_Months: "-",
                Investigator: "Dr. Dhananjay Kumar"
            }];

            function generateTableHead(table, data) {
                let thead = table.createTHead();
                let row = thead.insertRow();
                for (let key of data) {
                    let th = document.createElement("th");
                    let text = document.createTextNode(key);
                    th.appendChild(text);
                    row.appendChild(th);
                }
            }

            function generateTable(table, data) {
                for (let element of data) {
                    let row = table.insertRow();
                    for (key in element) {
                        let cell = row.insertCell();
                        let text = document.createTextNode(element[key]);
                        cell.appendChild(text);
                    }
                }
            }

            let table = document.querySelector("table");
            let data = Object.keys(sponsored_projects[0]);
            generateTableHead(table, data);
            generateTable(table, sponsored_projects);
        </script>
    </div>
    <div id="ctdt" class="tabcontent">
        <h3>
            <center>CTDT Projects</center>
        </h3>
        <table>
            <tr>
                <th>Year</th>
                <th>Number of Projects</th>
                <th>Funds</th>
            </tr>

            <tr>
                <td>2019-2020</td>
                <td>5 Projects</td>
                <td>50,000/-</td>
            </tr>
            <tr>
                <td>2018-2019</td>
                <td>12 Projects</td>
                <td>1,65,000/-</td>
            </tr>
            <tr>
                <td>2017-2018</td>
                <td>12 Projects</td>
                <td>1,65,000/-</td>
            </tr>
            <tr>
                <td>2016-2017</td>
                <td>5 Projects</td>
                <td>1,00,000/-</td>
            </tr>

            <tr>
                <td>2015-2016</td>
                <td>12 Projects</td>
                <td>3,00,000/-</td>
            </tr>
            <tr>
                <td>2014-2015</td>
                <td>6 Projects</td>
                <td>1,25,000/-</td>
            </tr>
            <tr>
                <td>2013-2014</td>
                <td>10 Projects</td>
                <td>2,50,000/-</td>
            </tr>
            <tr>
                <td>2012-2013</td>
                <td>8 Projects</td>
                <td>2,00,000/-</td>
            </tr>
            <tr>
                <td>2011-2012</td>
                <td>3 Projects</td>
                <td>75,000/-</td>
            </tr>
            <tr>
                <td>2010-2011</td>
                <td>3 Projects</td>
                <td>75,000/-</td>
            </tr>
            <tr>
                <td>2009-2010</td>
                <td>2 Projects</td>
                <td>50,000/-</td>
            </tr>

        </table>
        <h3>
            <center>CTDT Student projects for the year 2019-2020</center>
        </h3>
        <table>
            <tr>
                <th>S.No.</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Dhinushiya. S Sashi Rekha K</td>
                <td>Dr.P Kola Sujatha</td>
                <td>Design And Implementation Of Sign Language To Text/Speech Conversion For Deaf And Dump People</td>
                <td>Rs.10000/- (II- Installment)</td>
            </tr>
            <tr>
                <td>2</td>
                <td> Karmuhil L.R Padmavathi S Yeshwanthi. K.M</td>
                <td>Dr.S.Umamaheshwari</td>
                <td>Smart Agriculture System Based On IOT</td>
                <td>Rs.10000/- (II- Installment)</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Kristhika.N Sruthi Sreeram Jyothi Prasanth D R </td>
                <td>Dr.S.Umamaheshwari</td>
                <td>Smart Agriculture Using IOT And Block chain</td>
                <td>Rs.10000/- (II- Installment)</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Karthik.P Hemanth Kumar.M Sanchana.R
                </td>
                <td>Dr.G.Rajesh</td>
                <td>Virtual Proctoring System Using IOT</td>
                <td>Rs.10000/- (II- Installment)</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Abisha Anto Ignatious.L Jeevitha.S Madhurambigai.M
                </td>
                <td>Ms.M.Hemalatha</td>
                <td>Personalized Image Captioning With CNN-LSTM Based Approach</td>
                <td>Rs.10000/- (II- Installment)</td>
            </tr>
        </table>
        <h3>
            <center>CTDT Student projects for the year 2018-2019</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount Rs.</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Tamilselvan M<br> Mohankumar S G<br> Krishnamurthi

                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Effective Blood Bank Management System</td>
                <td>Rs.20,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Salma S<br> Shanthini R

                </td>
                <td>Dr.M.R.Sumalatha<br> Mr.Pugazhendi E
                </td>
                <td>Automatic Letter Generator System Using Android (Algs)</td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>3</td>
                <td>Prem Balaji B<br> Priyadharshni M<br> Raaj A

                </td>
                <td>Dr.M R Sumalatha <br>Mrs.Lakshmi Harika P </td>
                <td>Secure Online Voting System Using Bio-Metrics </td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>4</td>
                <td>Venkata Rathnam <br> Vignesh R<br> Jitta Sai Chaitanya

                </td>
                <td>Dr.D Sangeetha</td>
                <td>Medidrone - A Drone Assisted Health Service</td>
                <td>Rs.15,000/-
                    <td>
            </tr>
            <tr>
                <td>5</td>
                <td>Vishwa S S K M<br> Siddharth R V<br> Nivethan N
                </td>
                <td>Dr.Dhananjay Kumar <br> Mr.Premanand V
                </td>
                <td>Geo-Location Of Large Image Databases Using Self Organising Maps</td>
                <td>Rs.15,000/
                    <td>
            </tr>
            <tr>
                <td>6</td>
                <td>Ragavinodini M <br> Tharshini Ma <br> Visali Al

                </td>
                <td>Dr.Kola Sujatha
                </td>
                <td>Hyper Spectral Image Processing For Detecting Toxic Element In A Fruit</td>
                <td>Rs.15,000/-
                    <td>
            </tr>
            <tr>
                <td>7</td>
                <td>Roshini.R <br> Rajalakshmi.V <br> Anetha Swarthiga.S

                </td>
                <td>Dr.D.Sangeetha
                </td>
                <td>Smart Traffic Controller With Emergency Vehicle Detection</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>8</td>
                <td>M.Hemalatha <br> J.Sandhya <br> V.Srinidhi



                </td>
                <td>Dr.Dhananjay Kumar
                </td>
                <td>Automated Human Behaviour Analysis In Video Surveillance Systems</td>
                <td>Rs.10,000/-
                    <td>
            </tr>

            <tr>
                <td>9</td>
                <td>Srinithi K <br> Prathika V

                </td>
                <td>Dr.Dhananjay Kumar
                </td>
                <td>Human Activity Analysis To Detect Littering In Public Places Using Ip Camera In Outdoor Environment</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>10</td>
                <td>Aravind R <br> Saktheeswaran J <br> Ajay Kumar S
                </td>
                <td>Dr.Radha Senthilkumar</td>
                <td>Air Pollutants Detection And Estimation In Hyper Spectral Images Using Deep Learning</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>11</td>
                <td>Aswin Kumar R <br> Jegadheesan N <br> Devesh R Modale
                </td>
                <td>Dr.P. Kola Sujatha</td>
                <td>Retinal Image Analysis Using Machine Learning</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>12</td>
                <td>Karunya <br> Boornachandrika Sou <br> Devimani
                </td>
                <td>Dr.Radha Senthilkumar <br> Mrs.Monisha Devi</td>
                <td>Gas Detection And Monitoring System</td>
                <td>Rs.10,000/-
                    <td>
            </tr>

        </table>
        <h3>
            <center>CTDT Student projects for the year 2017-2018</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount Rs.</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Tamilselvan M<br> Mohankumar S G<br> Krishnamurthi

                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Effective Blood Bank Management System</td>
                <td>Rs.20,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Salma S<br> Shanthini R

                </td>
                <td>Dr.M.R.Sumalatha<br> Mr.Pugazhendi E
                </td>
                <td>Automatic Letter Generator System Using Android (Algs)</td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>3</td>
                <td>Prem Balaji B<br> Priyadharshni M<br> Raaj A

                </td>
                <td>Dr.M R Sumalatha <br>Mrs.Lakshmi Harika P </td>
                <td>Secure Online Voting System Using Bio-Metrics </td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>4</td>
                <td>Venkata Rathnam <br> Vignesh R<br> Jitta Sai Chaitanya

                </td>
                <td>Dr.D Sangeetha</td>
                <td>Medidrone - A Drone Assisted Health Service</td>
                <td>Rs.15,000/-
                    <td>
            </tr>
            <tr>
                <td>5</td>
                <td>Vishwa S S K M<br> Siddharth R V<br> Nivethan N
                </td>
                <td>Dr.Dhananjay Kumar <br> Mr.Premanand V
                </td>
                <td>Geo-Location Of Large Image Databases Using Self Organising Maps</td>
                <td>Rs.15,000/
                    <td>
            </tr>
            <tr>
                <td>6</td>
                <td>Ragavinodini M <br> Tharshini Ma <br> Visali Al

                </td>
                <td>Dr.Kola Sujatha
                </td>
                <td>Hyper Spectral Image Processing For Detecting Toxic Element In A Fruit</td>
                <td>Rs.15,000/-
                    <td>
            </tr>
            <tr>
                <td>7</td>
                <td>Roshini.R <br> Rajalakshmi.V <br> Anetha Swarthiga.S

                </td>
                <td>Dr.D.Sangeetha
                </td>
                <td>Smart Traffic Controller With Emergency Vehicle Detection</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>8</td>
                <td>M.Hemalatha <br> J.Sandhya <br> V.Srinidhi



                </td>
                <td>Dr.Dhananjay Kumar
                </td>
                <td>Automated Human Behaviour Analysis In Video Surveillance Systems</td>
                <td>Rs.10,000/-
                    <td>
            </tr>

            <tr>
                <td>9</td>
                <td>Srinithi K <br> Prathika V

                </td>
                <td>Dr.Dhananjay Kumar
                </td>
                <td>Human Activity Analysis To Detect Littering In Public Places Using Ip Camera In Outdoor Environment</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>10</td>
                <td>Aravind R <br> Saktheeswaran J <br> Ajay Kumar S
                </td>
                <td>Dr.Radha Senthilkumar</td>
                <td>Air Pollutants Detection And Estimation In Hyper Spectral Images Using Deep Learning</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>11</td>
                <td>Aswin Kumar R <br> Jegadheesan N <br> Devesh R Modale
                </td>
                <td>Dr.P. Kola Sujatha</td>
                <td>Retinal Image Analysis Using Machine Learning</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
            <tr>
                <td>12</td>
                <td>Karunya <br> Boornachandrika Sou <br> Devimani
                </td>
                <td>Dr.Radha Senthilkumar <br> Mrs.Monisha Devi</td>
                <td>Gas Detection And Monitoring System</td>
                <td>Rs.10,000/-
                    <td>
            </tr>
        </table>
        <h3>
            <center>CTDT Student projects for the year 2016-2017
            </center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount Rs.</th>

            </tr>


            <tr>
                <td>1</td>
                <td>Abi Vignesh K<br> Sethu Bargavi M<br> Shalini B
                </td>
                <td>Dr.S.Umamehswari</td>
                <td>An IoT based misplaced object locating system</td>
                <td>Rs.20,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Govinda Raj S S<br> Ms.Roshini C<br> Vignesh A
                </td>
                <td>Mrs.J.Dhalia Sweetlin</td>
                <td>Metro Bus Transit Frequency Regulation System using Prediction Algorithm</td>
                <td>Rs.15,000/-
                    <td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bhuvaneswari G<br> Monisha S
                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Library Book Locator App</td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>4</td>
                <td>Aravind J<br> Ms.Subha R<br> Mr.Vigneshwaran Santhalingam
                </td>
                <td>Mrs.J.Dhalia Sweetlin</td>
                <td>Drowsy and Drunken Driving Detection System by Analysing and Classifying Brain Waves</td>
                <td>Rs.20,000/-
                    <td>
            </tr>
            <tr>
                <td>5</td>
                <td>Nikhil Badam<br> Srivatsan N<br> Swetha C
                </td>
                <td>Dr.Dhananjay Kumar</td>
                <td>Message Passing and Surveillance using Drone Technology</td>
                <td>Rs.25,000/
                    <td>
            </tr>

        </table>
        <h3>
            <center>CTDT Student projects for the year 2015-2016</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount Rs.</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Kavyashri R<br> Swetha S<br> Vignesh S

                </td>
                <td>Mrs.D.Sangeetha</td>
                <td>Know Your Law – Mobile Application about laws using neural networks and natural language processing</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Aswin Raaj R.I<br> Umar Mohiadeen L<br> Vijayakumar G

                </td>
                <td>Dr.Dhananjay Kumar<br> Ashwinth J
                </td>
                <td>Digital Out-Pass System</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>3</td>
                <td>Divya Parvathe C B<br> Ishwarya S<br> Kathiravan T

                </td>
                <td>Mr.G.Rajesh</td>
                <td>Fuzzy based classification and health monitoring of leaves </td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>4</td>
                <td>Preethi A<br> Dhanusha R<br> Pravin E

                </td>
                <td>Dr.S.Umamehswari</td>
                <td>Integrating Scheduled Hydroponic System</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>5</td>
                <td>Aswini V<br> Fathima Sheeja M<br> Muthuselvi K

                </td>
                <td>Dr.P.Kola Sujatha<br> Mr.C.Sunil Retminraj
                </td>
                <td>Soil Classification Based on Image Processing Techniques</td>
                <td>Rs.25,000/
                    <td>
            </tr>
            <tr>
                <td>6</td>
                <td>Akash P<br> Priyanka E<br> Vignesh S

                </td>
                <td>Dr.B.Vinayaga Sundaram<br> Mr.M.Gokuldhev
                </td>
                <td>Health care support scheme using refined content and information from social media</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>7</td>
                <td>Hemachandar Ravi<br> Sudharshan V<br> Sri Anjana


                </td>
                <td>Ms.M.Hemalatha
                </td>
                <td>Location Inference using Predictive analytics in social media users for emergency detection</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>8</td>
                <td>Shravan N<br> Remo Antony R<br> Raghul Vaikundan R



                </td>
                <td>Mrs.D.Sangeetha
                </td>
                <td>A cloud based Remote Health Monitoring System</td>
                <td>Rs.25,000/-
                    <td>
            </tr>

            <tr>
                <td>9</td>
                <td>E.Pavithradevi<br> J.G.Reshma
                    <br> T.Tharunikasri

                </td>
                <td>Dr.M.R.Sumalatha
                </td>
                <td>Content Based Image Analysis in Social Media for Disaster Response</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>10</td>
                <td>Surrendar S<br> Suseetha Bhavani P<br> Keerthana K
                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Fraud Detection Using Data Analytics in the healthcare Industry</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>11</td>
                <td>Niveditha.M<br> Harine.S
                    <br> Dharani Dharan.S
                </td>
                <td>Dr.S.Umamaheswari</td>
                <td>An IoT Based Vehicular Emergency Response System</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>12</td>
                <td>Christopher Selvaraj B<br> Vamsi Krishna C<br> Jayvardan P
                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Enhancing Mobile Phone Signal during critical situations by Signal Routing through Mobile Nodes</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
        </table>
        <h3>
            <center>CTDT Student projects for the year 2014-2015</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount Rs.</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Haripriya V<br> Jayasudha V<br> Aarthi M
                </td>
                <td>Vinayagasundaram</td>
                <td>Detection of Traffic Violation using Image processing</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Vinobalan R<br> Pradeep P<br> Vengat A
                </td>
                <td>Mr.G.Rajesh</td>
                <td>Automated Car Using Acoustic Sensor Networks</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>3</td>
                <td>P.Shrinath<br> Pranab Batsa<br> Abhishek Sinha
                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>Geo distributed Assistance system to monitoring distress calls and provide the necessary assistance</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pavithra E<br> Avinash V<br> Vignesh C
                </td>
                <td>Dr.Radha Senthilkumar</td>
                <td>Drowsiness and drunken driver detection system</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
            <tr>
                <td>5</td>
                <td>R.Venkatasubramaniam<br> R.Vignesh
                    <br> Rahul Mallik
                </td>
                <td>Dr.Dhananjay Kumar</td>
                <td>Intrusion detection in inferared video</td>
                <td>Rs.25,000/
                    <td>
            </tr>
            <tr>
                <td>6</td>
                <td>N.Ahana Priyanka<br> R.Vignesh
                    <br> Rahul Mallik
                </td>
                <td>Dr.Dhananjay Kumar</td>
                <td>Streaming and storing of live video through mobile to Cloud</td>
                <td>Rs.25,000/-
                    <td>
            </tr>
        </table>
        <h3>
            <center>CTDT Student projects for the year 2013-2014</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Year</th>
                <th>Title of the Projects</th>

            </tr>

            <tr>
                <td>1</td>
                <td>Dasa Vignesh.K<br> Narayanan.U
                    <br> Ranjan Mohan</td>
                <td>Dr.Radha Senthil Kumar</td>
                <td>B.Tech.(5/8)</td>
                <td>Vehicle Detection Based on Video for Traffic Surveillance on Road</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Harshini.B<br> Sarunya.D
                    <br> Shree Nandhini.S</td>
                <td>Mrs.D.Sangeetha</td>
                <td>B.Tech.(5/8)</td>
                <td>Secure Mobile Payment System via Trusted Computing for POS application</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Archana.K<br> Amirtha Shri.K<br> Sushmita.S (CT)</td>
                <td>Dr.V.Vaidehi</td>
                <td>B.Tech.(5/8)</td>
                <td>Predicting Abnormal behavioral pattern among users of Social Networks using Big Data Framework</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Avinash.S<br> Gnana Guru.S<br> Sivakumar.S
                </td>
                <td>Dr.M.R.Sumalatha</td>
                <td>B.Tech.(5/8)</td>
                <td>Development of Intelligent Forensic Investigations Tool in Cloud Computing Environments.</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ruba.V (CT)<br> Rubika.S
                    <br> Saipriya.D
                </td>
                <td>Mrs.S.Uma Maheswari</td>
                <td>B.Tech.(5/8)</td>
                <td>Non-Invasive Estimation of Hemoglobin in Blood</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Viswanath.M<br> Rudra Kishore.L<br> Joshi Antony.J</td>
                <td>Dr.Dhananjay Kumar</td>
                <td>B.Tech.(5/8)</td>
                <td>Enhancing the Performance of Mobile Device using Cloud</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Ganesh.R<br> Manickam.T
                    <br> Virshnu Mohan.T</td>
                <td>Dr.Dhananjay Kumar</td>
                <td>B.Tech.(5/8)</td>
                <td>Automated Tele Video Surveillance Over Internet</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Padmavathy.M<br> Vandhana.S
                    <br> Vishali.S
                </td>
                <td>Dr.P.Varalakshmi</td>
                <td>B.Tech.(5/8)</td>
                <td>Water Quality Assessment using Sensors in Mobile Cloud</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Ramanath.M<br> Mohammed Asrar Zaman<br> Vaidyanathan.P.K
                </td>
                <td>Dr.P.Varalakshmi</td>
                <td>B.Tech.(5/8)</td>
                <td>Accident Detection System using Wireless Sensor Networks and Mobile Cloud</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Arun Karthick.M.A.M.<br> Parthasarathy.G
                    <br> Prasanth.M
                </td>
                <td>Mr.M.Thangavel</td>
                <td>B.Tech.(5/8)</td>
                <td>EPPAMS: Enhancing Privacy Preservation for Academic Management System</td>
            </tr>
        </table>
        <h3>
            <center>CTDT Student projects for the year 2012-2013</center>
        </h3>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>Name of the students</th>
                <th>Faculty Guide</th>
                <th>Title of the Projects</th>
                <th>Amount (in lakhs)</th>

            </tr>

            <tr>
                <td>1</td>
                <td>N.Gayathri<br>A.Asiya<br>N.Ishwaraya</td>
                <td>M.R.Sumalatha</td>
                <td>Multicloud deployment of Computing clusters for MTC Health Care System</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Prabakaran.B<br> Balakrishnan.R
                    <br> Aswath Narayan.MK
                </td>
                <td>Dr.V.Vaidehi</td>
                <td>Human Health Abnormality Detection using Accelerometer Sensor and Video Alert Generation on Android Platform</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Arun Lakshmanan.R<br> Hariprasad.L
                    <br> Chandramouli.R
                </td>
                <td>Mr.G.Rajesh</td>
                <td>Smart Crib</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ashok.R<br> Karthik.C
                    <br> Kumareshwaran.S
                </td>
                <td>Dhananjay Kumar</td>
                <td>Hand-Mouse: Human Computer Interaction Using Hand Gestures</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ajitha.S<br> Jayadharini.J
                    <br> Divya.T
                </td>
                <td>Dr.V.Vaidehi</td>
                <td>Foreign Object Detection in Airport Runway using Camera Sensor Network</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Gowtham.G<br> Anirudh.S
                    <br> Hemalatha.S
                </td>
                <td>Radha Senthilkumar</td>
                <td>I-Cars: Effective Path Tracing and Accident Occurrence Detection</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Mukdund Murali<br> Sarath Kumar.B<br> Shiva Prakash.G

                </td>
                <td>Dr.P.Varalakshmi</td>
                <td>Mitigating Denial of Service in the Presence of Clock Drifts and Preventing Selective Jamming Attacks in Cloud</td>
                <td>Rs.25,000/-</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Nithya.K<br> Priya.T
                    <br> Sathya.D
                </td>
                <td>Dr.P.Varalakshmi</td>
                <td>Attaining Personalization by means of Web Prediction: Boosting and Bagging Techniques</td>
                <td>Rs.25,000/-</td>
            </tr>
        </table>
        <h3>
            <center>CTDT Best project award</center>
        </h3>
        <p>2012 – 2013 - Mr.Mukund Murali, B.Sarath Kumar, G.Sivaprakash Guide Dr.P.V.Varalakshmi project titled “Mitigating Denial of Service in the presence of Clock drift and preventing selective jamming attacks in cloud.</p>

        <p>2011 – 2012 Mr.R.Prasanna, Mr.V.Prashanth and Mr.A.Srinivas Guide Dr.P.Varalakshmi project titled “Student Attendance Tracking system using IPv6.</p>
    </div>

    <div id="scholar" class="tabcontent">
        <h3>
            <center>Research scholars completed PhD through the Department</center>
        </h3>
        <table>
            <tr>
                <th>S.No.</th>
                <th>Name of the Scholar</th>
                <th>Ph.D / MS</th>
                <th>Guide Name</th>
                <th>Title</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Sanjay Kumar Suman</td>
                <td>271441970</td>
                <td>Ph.D</td>
                <td>Dr.Dhananjay Kumar</td>
                <td>A Game Theoretic Approach for Power Management and Interference Reduction in Wireless AdHoc Networks</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kalai Selvi</td>
                <td>1125438102</td>
                <td>MS</td>
                <td>Dr.Dhananjay Kumar</td>
                <td>Machine Learning based Efficient Resource Planning in Cognitive Radio System</td>
            </tr>
            <tr>
                <td>3</td>
                <td>G.Rajesh</td>
                <td>2912439735</td>
                <td>Ph.D</td>
                <td>Dr.B.Vinaygasundaram</td>
                <td>Trust based temporal data aggregation for energy constrained wireless sensor networks</td>
            </tr>
            <tr>
                <td>4</td>
                <td>M.Anitha</td>
                <td>2824419140</td>
                <td>Ph.D</td>
                <td>Dr. V. RhymendUthariaraj</td>
                <td>Applying game theory for co-operation of Nodes in Adhoc Networks</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ms.B.Lydia Elizabeth</td>
                <td>2824419701</td>
                <td>Ph.D</td>
                <td>Dr. V. RhymendUthariaraj</td>
                <td>A Novell Method for detecting and Isolating malicious nodes in Mobile Adhoc Networks</td>
            </tr>
        </table>
        <h3>
            <center>Research scholars on roll in the Department</center>
        </h3>
        <table>
            <tr>
                <th>S.No</th>
                <th>Name of the Scholar</th>
                <th>Reg.No</th>
                <th>Title </th>
                <th>Status</th>
                <th>Guide Name</th>
            </tr>


            <tr>
                <td>1</td>
                <td>Ms. Kishori (JS)</td>
                <td>20107012002</td>
                <td>A study to identify factors contributing success and failure of the employees in cross cultural work environment</td>
                <td>Confirmation</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Chitra Devi.D</td>
                <td>1223419101</td>
                <td>Load Balancing Algorithm for Cloud Environment</td>
                <td>Confirmation</td>
                <td>Dr. V. RhymendUthariaraj</td>

            </tr>
            <tr>
                <td>3</td>
                <td>P.S.Abi</td>
                <td>1213419897</td>
                <td>Coalescing QoS with Fortification of MANET against Security Hazards</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>4</td>
                <td>S.Mary Virgil Nithya</td>
                <td>1423419285</td>
                <td>Integrity of Shared Data in the Cloud</td>
                <td>Confirmation</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>5</td>
                <td>N.Thilagavathi</td>
                <td>1424419786</td>
                <td>Energy Efficiency in Cloud Computing</td>
                <td>Confirmation</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>6</td>
                <td>S.Sridevi</td>
                <td>1525419581</td>
                <td>Efficient Load Balancig Scheme for Bigdata Analytics</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>7</td>
                <td>R.Madhura</td>
                <td>1522419958</td>
                <td>Resource Management and Security</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>8</td>
                <td>DeepikaRoselind</td>
                <td>1523419982</td>
                <td>Marine Environment Monitoring -Analysis of an Adaptive,Scalable and an Energy Efficiency WSN System</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Arun Prem Santh J (JS)</td>
                <td>1514419736</td>
                <td>Energy Efficient and Secure UAV guiding mechanism in Military Sensor Networks</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Subha M (JS)</td>
                <td>1523419737</td>
                <td>Vision for All : Artificial Wireless Retina System to Restore Vision for blind retinas</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Irene </td>
                <td>1624419317</td>
                <td>Human Activity Recognition System using Video Analytics</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Sathya Priya </td>
                <td>16254197192</td>
                <td>Enhancing reliability for Big Data framework</td>
                <td>Course Work</td>
                <td>Dr. V. RhymendUthariaraj</td>
            </tr>
            <tr>
                <td>13</td>
                <td>A. R. Revathi</td>
                <td>1124439131</td>
                <td>Video Streaming </td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>14</td>
                <td>L. Arun Raj</td>
                <td>1114439116</td>
                <td>Video Streaming Network</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>15</td>
                <td>A. Srinivasan </td>
                <td>1112439107</td>
                <td>Video Streaming Network</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Hiran Kumar Singh </td>
                <td>1115439722</td>
                <td>Cognitive Radio Networks</td>
                <td>Thesis Submitted </td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>17</td>
                <td>L. Sindhia </td>
                <td>1122439715</td>
                <td>Video Surveillance</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>18</td>
                <td>P. Shyamala Bharathi </td>
                <td>1224339119</td>
                <td>Cognitive Radio Networks</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>19</td>
                <td>R. Saravanan </td>
                <td>1214439872</td>
                <td>Video Surveillance</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>20</td>
                <td>M. Vijaya </td>
                <td>1325438703</td>
                <td>Video Streaming Network</td>
                <td>Coursework Completed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Sudha A</td>
                <td>1424439282</td>
                <td>Cognitive Radio Networks</td>
                <td>Registration Confirmed</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Aswinth J</td>
                <td>1515439199</td>
                <td>Wireless Multimedia Sensor</td>
                <td>Coursework</td>
                <td>Dr.Dhananjay Kumar</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Parthiban. M</td>
                <td></td>
                <td>Software Testing over Cloud computing Environment</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>24</td>
                <td>P.Lakshmi Harika</td>
                <td></td>
                <td>Tracking of Suspicious Activities in public environment</td>
                <td>Coursework completed</td>
                <td>Dr. M.R.Sumalatha</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Chitharanjan.K</td>
                <td></td>
                <td>Error Tolerant Optimal Resource Allocation Technique in cloud computing</td>
                <td>Coursework </td>
                <td>Dr. Radha Senthil Kumar</td>
            </tr>

            <tr>
                <td>26</td>
                <td>Parvathi. S</td>
                <td>17254397334</td>
                <td>Energy and Power Management in Multi Core Architectures</td>
                <td></td>
                <td>Dr. S. Umamaheswari</td>
            </tr>
            <tr>
                <td>27</td>
                <td> Nivedhitha.G</td>
                <td>21224991539</td>
                <td> Smart Contracts in Agriculture Sector</td>
                <td></td>
                <td>Dr.Radha Senthilkumar</td>
            </tr>
            <tr>
                <td>28</td>
                <td>A.Yamini</td>
                <td> 21227391104</td>
                <td>Sensor Fusion Deep Learning in Health Management Systems for Hand Rehabilitation Techniques</td>
                <td></td>
                <td>Ms M.R.Sumalatha</td>
            </tr>
            <tr>
                <td>29</td>
                <td>S.Muthahara Fathima</td>
                <td>21284391566</td>
                <td>Sensitive data handling in information centric network</td>
                <td></td>
                <td>Dr.P.Anandha kumar</td>
            </tr>
            <tr>
                <td>30</td>
                <td>Ramya Laurraine U</td>
                <td>21244391166</td>
                <td>Machine Learning Models for Emotion Detection and Analysis in Social Media Networks</td>
                <td></td>
                <td>Dr. J Dhalia Sweetlin</td>
            </tr>
            <tr>
                <td>31</td>
                <td>Blessy Jenila R</td>
                <td>21244991334</td>
                <td>Pragmatic Analysis of Internet Community Activity using SIoT</td>
                <td></td>
                <td>Dr.Radha Senthilkumar</td>
            </tr>
            <tr>
                <td>32</td>
                <td>Anandi Balan</td>
                <td> 21244191157</td>
                <td>Machine Learning Techniques for Effective Land Use in Precision Agriculture</td>
                <td></td>
                <td> Dr. J Dahlia Sweetlin</td>
            </tr>
            <tr>
                <td>33</td>
                <td>Alex Luke KA</td>
                <td> 19152997233</td>
                <td>Smart Manufacturing using Digital Twin</td>
                <td></td>
                <td>Dr. P. Anandhakumar</td>
            </tr>
            <tr>
                <td>34</td>
                <td>K Poongodi</td>
                <td> 1624439248</td>
                <td>Episode Rule Mining</td>
                <td></td>
                <td> Dr. Dhananjay Kumar</td>
            </tr>
        </table>
    </div>
    <div id="project" class="tabcontent">
        <h3>
            <center>Project Reports</center>
        </h3>
        <table>

            <tr>
                <th>S.No</th>
                <th>Project Title</th>
                <th>Sponsor Agency</th>
                <th>Amount</th>
                <th>Duration</th>
                <th>Investigator</th>
            </tr>

            <tr>
                <td>1</td>
                <td><a href="https://it.mitindia.edu/research/Final%20Report%20of%20Major%20Research%20Project_V3.1.pdf" download>Video streaming using Telemedicine applications in 3G </a> </td>
                <td>UGC</td>
                <td>8.91</td>
                <td>-</td>
                <td>Dr. Dhananjay Kumar</td>
            </tr>
    </div>
    
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    </div>
    </body>

</html>
