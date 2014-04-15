
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script src="teacherPageGetName.js" type="text/javascript">
        
        if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.open("GET", "teacherConfig.xml", false);
                xmlhttp.send();
                xmlDoc = xmlhttp.responseXML;

                document.getElementById("teacherName").innerHTML =
                        "Hello " + xmlDoc.getElementsByTagName("teacherName")[0]
                        .childNodes[0].nodeValue + ", \n\
                            Welcome To Your Class Viewer";

                function showDiv() {
                    document.getElementById('emailDiv').style.display = "block";
                }     
        </script>
        
    </head>
    <body style=" background-color:#2E75B6; background-repeat:no-repeat;">

        <div id="mainContainer"style=" position:relative;width:1024px;height:750px;margin-left:auto; margin-right:auto; margin-top:200px;background-color:#fff;">


            <div id="schoolLogo" style="background-color: #0C6; background-image: url(images/greenbackground.jpg); background-repeat:repeat; position: absolute; left: 0px; top: -200px; font-weight: bold; color: #000; height: 200px; width: 1024px;  text-align:left; font-family:KBKids;"> 

                <p id="welcomeInfo" style="padding-left:20px; font-size: 96px; position:absolute; top:-50px; " >Teacher Page</p></div>

            <h1 id="homeTitle" style=" width:1024px; height: 45px; position:absolute; top:-21px;background-color:#800080; color:#FFF; font-family: SegoePrint; font-size: 28px; "> <p id="teacherName" style=" position:absolute; top: -30px; left:15px"></p></h1>

            <div> 
                <p id="teacherPicture" style="width: 275px; height: 183px; background-image: url(images/teacher.jpg); background-repeat: no-repeat; position: relative; left: 25px; top: 90px;"></p>
            </div>

            <div id="teacherForm" style="background-color: #2E75B6; width: 55%; height: 80%; position: absolute; right: 25px; top: 80px; border: 5px solid black; border-radius: 2px; ">
                
                    
                <h2 id="studentManagement" style="font-family: KBKids; font-weight: bold; position: relative; left: 15px; font-size: 25px;">Student Management</h2>
                <div id="sManage" style="width: 85px; left: 25px; position: relative; border: 2px solid black;">
                <?php           
                mysql_connect('lb2014.db.8199569.hostedresource.com', 'lb2014', 'WebDev@014');
                mysql_select_db('lb2014');

                $sql = "SELECT fName FROM student";
                $result = mysql_query($sql);

                echo "<select name='fName' >";
                while ($row = mysql_fetch_array($result)) {
                    echo "<option value='" . $row['fName'] ."'>" . $row['fName'] ."</option>";
                }
                echo "</select>";
                ?>
                </div>
                <h3 id="libManagement" style="font-family: KBKids; font-weight: bold; position: relative; left: 15px; font-size: 25px;">Library Management</h3>
                
                <div id="lManage" style="width: 137px; left: 25px; position: relative; border: 2px solid black;">
                <?php           
                mysql_connect('lb2014.db.8199569.hostedresource.com', 'lb2014', 'WebDev@014');
                mysql_select_db('lb2014');

                $sql = "SELECT libName FROM library";
                $result = mysql_query($sql);

                echo "<select library='libName'>";
                while ($row = mysql_fetch_array($result)) {
                    echo "<option value='" . $row['libName'] ."'>" . $row['libName'] ."</option>";
                }
                echo "</select>";
                ?>
                </div>
               
                
                <h4 id="emailToParent" style="font-family: KBKids; font-weight: bold; position: relative; left: 15px; font-size: 25px;">Email a Parent</h4>

                <div id="emailDiv" style="display: none;" class="emailParent">

<!--              form displayed when the email parent button is pressed-->
                    <?php
                    if (!isset($_POST["submit"])) { //if the user has not yet submited the email display this form
                        ?>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 
                            From: <input type="text" name="from" style="width: 200px; left: 25px; position: relative; border: 2px solid black;"><br>
                            Student Name: <input type="text" name="studentName" style="width: 200px; left: 25px; position: relative; border: 2px solid black;"><br>
                            Message: <textarea rows="10" cols="40" name="message" style="width: 200px; left: 25px; position: relative; border: 2px solid black;"></textarea><br>
                            Email: <input type="text" name="emails" style="width: 200px; left: 25px; position: relative; border: 2px solid black;"><br>
                            <input type="submit" name="submit" value="Send">
                        </form> 
                    
                     <?php
                        } else {
                            if (isset($_POST["from"])) {
                                $mailcheck = spamcheck($_POST["from"]);
                                if ($mailcheck == FALSE) {
                                    echo "Invalid input";
                                } else {
                                    $from = $_POST["from"]; // who is sending the email (form name = from)
                                    $subject = $_POST["studentName"]; // who the student of the email is
                                    $message = $_POST["message"]; //what message the parents are to receive
                                    $email = $_POST("emails"); //the email the message is being sent to 
                                    $message = wordwrap($message, 70);
                                    // send the email to the parent
                                    mail($emails, $studentName, $message, "From: $from\n");
                                }
                            }
                        }
                        ?>
                    
                </div>
                <input type="button" name="emails" value="Email a Parent" onclick="showDiv()" style="width: 200px; left: 25px; position: relative; border: 2px solid black;" />
            </div>
    </body>
</html>
