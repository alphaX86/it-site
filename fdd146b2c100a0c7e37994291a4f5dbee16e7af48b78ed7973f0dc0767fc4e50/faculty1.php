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
                        <i class="fas fa-user-edit" onclick="finishUpdate()"></i>
                    </item>
                    <item onclick="editFaculty()">
                        <p>Dr Dananjay Kumar</p>
                        <i class="fas fa-user-edit"></i>
                    </item>
                    <item onclick="addNewFaculty()">
                        <p><strong>ADD</strong></p>
                        <i class="fas fa-plus" ></i>
                    </item>
                </div>
                <div class="admin-fac_display">
                    <heading>
                    <name>Dr dananjay kumar</name>
                    <i class="fas fa-clipboard-check " tooltip="Complete Update" onclick="updateFinished()" ></i>
                    </heading>
                    <img></img>
                    <info>
                        <detail>
                            <p>image :</p>
                            <input type="file" id="fImg"></input>
                        </detail>
                        <detail>
                            <p>name :</p>
                            <input type="text" id="fName"></input>
                        </detail>
                        <detail>
                            <p>destination :</p>
                            <input type="text" id="fDesig"></input>
                        </detail>
                        <detail>
                            <p>Email ID :</p>
                            <input type="text" id="fEmailID"></input>
                        </detail>
                        <detail>
                            <p>Contact No :</p>
                            <input type="tel" id="fPhone"></input>
                        </detail>
                        <detail>
                            <p>area of specification :</p>
                            <input type="text" id="fAreaOfSpec" required></input>
                        </detail>
                        <detail>
                            <p>prersonal site :</p>
                            <input type="text" id="fPersonalSite" required value="#"></input>
                        </detail>
                        <detail>
                            <p>ACOE site :</p>
                            <input type="text" id="fACOE" required value="#"></input>
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
                        <item onclick='addCol()'>
                            <p><strong>ADD</strong></p>
                            <i class="fas fa-plus" ></i>
                        </item>
                    </colList>
                    <colDisp>
                    <items id="colName">Awards</items>
                    <items onclick=''>
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