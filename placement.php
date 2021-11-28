<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='./CSS/main.css'>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    </head>
    <body>
    <div class='site'>
        <?php include 'header.php'?>
        <div id="test" class="background">	
            <div class="card">
                <div class="photo"></div>
                <h2>STEPS</h2>
                <p>THIS WEEK</p>
                <div class="chart">
                    <div class="bar bar1" data-to="40" year-placed="2019"><span>20,000</span></div>
                    <div class="bar bar2" data-to="10000" year-placed="2019"><span>10,000</span></div>
                    <div class="bar bar3" data-to="15000" year-placed="2019"><span>15,000</span></div>
                    <div class="bar bar4" data-to="24000" year-placed="2019"><span>24,000</span></div>
                    <div class="bar bar5" data-to="7000" year-placed="2019"><span>7,000</span></div>
                    <div class="bar bar6" data-to="7000" year-placed="2019"><span>7,000</span></div>
                    <div class="bar bar7" data-to="10000" year-placed="2019"><span>10,000</span></div>
                </div>
                <h3>93,000</h3>
            </div> 
                       
        </div>  
        <?php include 'footer.php'?>
    </div>
    </body>
    <script>
            var body=document.getElementById('test');
            let tilted = false;

            let toggleTilt = function()
            {
                tilted = !tilted;
                
                if(tilted) body.classList.add('details');
                else body.classList.remove('details');
            }
            document.getElementById('test').onclick=()=>{toggleTilt()};
            //body.addEventListener('click', toggleTilt);
           // body.addEventListener('touchstart', toggleTilt);
            //if(location.pathname.match(/fullcpgrid/i)) setTimeout(toggleTilt, 1000);
        </script>

</html>


