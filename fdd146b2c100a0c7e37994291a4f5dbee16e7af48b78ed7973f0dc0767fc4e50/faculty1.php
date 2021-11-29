<!DOCTYPE html>
<html lang='en'>
    <head>
        <script src="https://kit.fontawesome.com/d294cf5192.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='../CSS/main.css'>
        <script src="../Js/main.js" type="text/javascript"></script>
        
        <?php
            include '../dbConnect.php';
        ?>
    </head>
    <body>
        <div class='site'>
            <?php include 'header.php'?>
            <div class="admin-fac">
                <div class="admin-fac_staffType">
                    <item onclick="staffType('Tech')" id="Tech">
                        <p>Teaching Faculty</p>
                        <i class="fas fa-pen-square" ></i> 
                    </item>
                    <item onclick="staffType('Non-Tech')"id="Non-Tech">
                        <p>Technical Faculty</p>
                        <i class="fas fa-pen-square" ></i>
                    </item>
                    <item onclick="staffType('Office')" id="Office">
                        <p>Non-Technical Faculty</p>
                        <i class="fas fa-pen-square" ></i>
                    </item>
                </div>
                <div class="admin-fac_staffList" id="staffList">
                    <item onclick="edit('')">
                        <p>Dr dananjay Kumar</p>
                        <i class="fas fa-user-edit fa-2x"></i>
                    </item>
                    <item onclick="edit('')">
                        <p>Dr Dananjay Kumar</p>
                        <i class="fas fa-user-edit fa-2x"></i>
                    </item>
                    <item>
                        <p><strong>ADD</strong></p>
                        <i class="fas fa-plus" ></i>
                    </item>
                </div>
                <div class="admin-fac_display">
                    <name>Dr dananjay kumar</name>
                    <img></img>
                    <info>
                        <detail>
                            <p>image :</p>
                            <input type="file" name="fImg"></input>
                        </detail>
                        <detail>
                            <p>name :</p>
                            <input type="text" name="fName"></input>
                        </detail>
                        <detail>
                            <p>destination :</p>
                            <input type="text" name="fDesig"></input>
                        </detail>
                        <detail>
                            <p>Email ID :</p>
                            <input type="text" name="fEmailID"></input>
                        </detail>
                        <detail>
                            <p>Contact No :</p>
                            <input type="tel" name="fPhone"></input>
                        </detail>
                        <detail>
                            <p>area of specification :</p>
                            <input type="text" name="fAreaOfSpec" required></input>
                        </detail>
                        <detail>
                            <p>prersonal site :</p>
                            <input type="text" name="fPersonalSite" required value="#"></input>
                        </detail>
                        <detail>
                            <p>ACOE site :</p>
                            <input type="text" name="fACOE" required value="#"></input>
                        </detail>
                        <detail id="item-edit">
                        <i class="fas fa-trash " id="item-edit-delete"></i>
                        <textarea  id="editList" value=""></textarea>
                        <i class="far fa-check-square " id="item-edit-update"></i>
                        </detail>
                    </info>
                    <colList>
                        <item>Awards</item>
                        <item>Awards</item>
                        <item>Awards</item>
                        <item>Awards</item>
                        <item>
                            <p><strong>ADD</strong></p>
                            <i class="fas fa-plus" ></i>
                        </item>
                    </colList>
                    <colDisp id="colDisp">
                    <items id="colName">Awards</items>
                    <items>
                        <p><strong>ADD</strong></p>
                        <i class="fas fa-plus"></i>
                    </items>
                    </colDisp>
                </div>
                
            </div>
        </div>
    </body>
    <script src="./Js/faculty.js" type="text/javascript"></script>
</html>    