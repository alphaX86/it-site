<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <script>
        var yearIds = ["y1819", "y1718", "y1617", "y1516"];
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
    <div class='site'>
        <?php include 'header.php'?>
            <div class='assoc'>

                <h1>INFORMATION TECHNOLOGY ASSOCIATION</h1>

                <div class="grid-space">
                    <div class="grid-bg">
                        <br>    

                        <div class='gen-info-assoc'>
                            <div class='gen-info-content'>
                                <p>
                                    Constituted in the year 2001, Information Technology Association (ITA) comprises the students of our Department-Information Technologists. Dr. B.VinayagaSundaram, Professor & Head, Department of IT, is the current president of this association. DrDhananjay Kumar acts as the advisor for the Association. Under the able guidance of these two mentors and with the help from the teaching fraternity, The Association helps students to sharpen their talents, while also giving them the support they need to publish papers in prestigious academic journals and travel nationally and internationally to present at conferences.
                                </p>        
                            </div>
                            <div class='gen-info-pic'>
                                <img src="./Images/annaUniv.svg"  alt="Anna University LOGO" class="header-logoA"></img>
                            </div>
                        </div>
                        <br><br>

                        <h2>OFFICE BEARERS</h2>
                        <div class='office-bearers-assoc'>
                            <table class="table-striped" >
                            <thead>
                                <tr><th>Designation</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>President</td>
                                    <td>Dr. Dhananjay Kumar, Professor & Head, Dept of IT</td>
                                </tr>
                                <tr><td>Chief Advisor</td>
                                    <td>Dr. B.Lydia Elizabeth, Associate Prof., Dept of IT</td>
                                </tr>
                                <tr><td>Chairman</td>
                                    <td>Mohan Kumar S</td>
                                </tr>
                                <tr><td>Deputy Chairman</td>
                                    <td>Kaarunya M</td>
                                </tr>
                                <tr><td>General Secretary</td>
                                    <td>Venkatarathnam M</td>
                                </tr>
                                <tr><td>Treasurer</td>
                                    <td>Gowtham</td>
                                </tr>
                                <tr><td>Joint Secretary</td>
                                    <td>Sindhukavi</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <br><br>

                        <div class='assoc-act-eve'>
                            <div class='gen-info-content'>
                                <h2>Activities Conducted by The Association</h2>
                                <p>. Arranging guest lectures by experts from the software industry and other leading universities<br>
                                   . Arranging curriculum related technical seminars helping students to excel academically<br>
                                   . Arranging mock interviews, aptitude tests, group discussions to help students prepare for the placements
                                </p>
                            </div>
                            <div class='gen-info-content'>
                                <h2>Annual Events</h2>
                                <p>  MUTEX, an intra college technical festival.The main intention of MUTEX is to focus on the juniors and train them to hone their technical and analytical skills. In view of this, guest lectures on personality development and leadership will be arranged and various technical activities and events will be conducted<br><br>
                                     SAMHITA , a national-level technical symposium.. SAMHITA’19 will be a 2-day fest comprising of both onsite and online events. It will offer more than 20 events on various technological levels. It also includes workshops on the latest IT trends.
                                </p>
                            </div>
                        </div>
                        <br><br>

                        <h2>EVENTS CONDUCTED IN PREVIOUS YEARS</h2>
                        <div class='assoc-act-eve'>
                            <div class='gen-info-content'>
                                <h2>Technical Events</h2>
                                <table style="text-align:center">
                                    <tbody>
                                        <tr><td>Programing Contests</td>
                                            <td>Pursuit of Prodigies</td></tr>
                                        <tr><td>Code Obfuscation</td>
                                            <td>Bit Coding</td></tr>
                                        <tr><td>Ace the Interview</td>
                                            <td>Reverse Coding</td></tr>
                                        <tr><td>Coffee with Java</td>
                                            <td>Debugging</td></tr>
                                        <tr><td>Web Designing</td>
                                            <td>Mega Event</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class='gen-info-content'>
                                <h2>Non-Technical Events</h2>
                                <table style="text-align:center">
                                    <tbody>
                                        <tr><td>Sudoku</td>
                                            <td>Logo Quiz</td></tr>
                                        <tr><td>Mobile Games</td>
                                            <td>Connexions</td></tr>
                                        <tr><td>Crossword</td>
                                            <td>Photography</td></tr>
                                        <tr><td>Google Trotter</td>
                                            <td>Capture the Flag</td></tr>
                                        <tr><td>General Quiz</td>
                                            <td>Math O' Mania</td></tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                        <br><br>

                        <h2>ACTIVITIES CONDUCTED IN PREVIOUS YEARS</h2>
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
                            </div>

                            <div class="highers-list" id="y1819" >
                            <table class="table-striped-assoc" style="background-color: rgba(255, 255, 255, 0.6)">
                            <tbody>
                                    <tr><td>A guest Lecture on Role of IT @ CERN by Mr.S.P Mohanty was organized</td></tr>
                                    <tr><td>A guest Lecture on Ethical Hacking By Mr.Ankit Fadia, a leading ethical hacking enthusiast from India</td></tr>
                                    <tr><td>A seminar on Entrepreneurship by Mr.Suhas Gopinath, who is recognized as the World’s Youngest CEO, was held</td></tr>
                                    <tr><td>The ITA also proposes to have a Guest Lecture on Lyrics Engineering by Dr.V.Madhan Karky, Founder of Karefo Foundation</td></tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="highers-list" id="y1718" >
                            <table class="table-striped-assoc" style="background-color: rgba(255, 255, 255, 0.6)">
                            <tbody>
                                    <tr><td>A guest Lecture on Role of IT @ CERN by Mr.S.P Mohanty was organized</td></tr>
                                    <tr><td>A guest Lecture on Ethical Hacking By Mr.Ankit Fadia, a leading ethical hacking enthusiast from India</td></tr>
                                    <tr><td>A seminar on Entrepreneurship by Mr.Suhas Gopinath, who is recognized as the World’s Youngest CEO, was held</td></tr>
                                    <tr><td>The ITA also proposes to have a Guest Lecture on Lyrics Engineering by Dr.V.Madhan Karky, Founder of Karefo Foundation</td></tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="highers-list" id="y1617" >
                            <table class="table-striped-assoc" style="background-color: rgba(255, 255, 255, 0.6)">
                            <tbody>
                                    <tr><td>A guest Lecture on Role of IT @ CERN by Mr.S.P Mohanty was organized</td></tr>
                                    <tr><td>A guest Lecture on Ethical Hacking By Mr.Ankit Fadia, a leading ethical hacking enthusiast from India</td></tr>
                                    <tr><td>A seminar on Entrepreneurship by Mr.Suhas Gopinath, who is recognized as the World’s Youngest CEO, was held</td></tr>
                                    <tr><td>The ITA also proposes to have a Guest Lecture on Lyrics Engineering by Dr.V.Madhan Karky, Founder of Karefo Foundation</td></tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="highers-list" id="y1516" >
                            <table class="table-striped-assoc" style="background-color: rgba(255, 255, 255, 0.6)">
                                <tbody>
                                    <tr><td>A guest Lecture on Role of IT @ CERN by Mr.S.P Mohanty was organized</td></tr>
                                    <tr><td>A guest Lecture on Ethical Hacking By Mr.Ankit Fadia, a leading ethical hacking enthusiast from India</td></tr>
                                    <tr><td>A seminar on Entrepreneurship by Mr.Suhas Gopinath, who is recognized as the World’s Youngest CEO, was held</td></tr>
                                    <tr><td>The ITA also proposes to have a Guest Lecture on Lyrics Engineering by Dr.V.Madhan Karky, Founder of Karefo Foundation</td></tr>
                                </tbody>
                            </table>
                            </div>

                        </div>
                        <br><br>

                        <h2>ITA GALLERY</h2>
                        <div class='assoc-gallery'>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita8.JPG"></img></div>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita12.JPG"></img></div>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita13.JPG"></img></div>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita14.JPG"></img></div>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita15.JPG"></img></div>
                            <div><img src="./Images/Gallery/13_ITAGallery/ita22.JPG"></img></div>
                        </div>
                        <br><br>



                    </div>
                </div>
            <br>
            </div>
        <br>
        <?php include 'footer.php'?>
    </div>
    </body>

</html>


