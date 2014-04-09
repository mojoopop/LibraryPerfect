<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style=" background-color:#2E75B6; background-repeat:no-repeat;">




        <div id="mainContainer"style=" position:relative;width:1024px;height:750px;margin-left:auto; margin-right:auto; margin-top:200px;background-color:#fff;">


            <div id="schoolLogo" style="background-color: #0C6; background-image: url(images/greenbackground.jpg); background-repeat:repeat; position: absolute; left: 0px; top: -200px; font-weight: bold; color: #000; height: 200px; width: 1024px;  text-align:left; font-family:KBKids;"> 

                <p id="welcomeInfo" style="padding-left:20px; font-size: 96px; position:absolute; top:-50px; " >Teacher Page</p></div>

            <h1 id="homeTitle" style=" width:1024px; height: 45px; position:absolute; top:-21px;background-color:#800080; color:#FFF; font-family: SegoePrint; font-size: 28px; "> <p id="teacherName" style=" position:absolute; top: -30px; left:15px">No Name Available!</p></h1>

            <div> 
                <p id="teacherPicture" style="width: 275px; height: 183px; background-image: url(images/teacher.jpg); background-repeat: no-repeat; position: relative; left: 25px; top: 90px;"></p>
            </div>

            <script>
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
                        "Hello " + xmlDoc.getElementsByTagName("teacherName")[0].childNodes[0].nodeValue + ", Welcome To Your Class Viewer";

                function showDiv() {
                    document.getElementById('emailDiv').style.display = "block";
                }
                
                function showDiv2() {
                    document.getElementById('teacherForm').style.display = "block";
                }

            </script>

            <div id="teacherForm" style="background-color: #2E75B6; width: 500px; height: 85%; position: absolute; right: 25px; top: 80px; border: 5px solid black; border-radius: 2px; ">
                <div id="libViewer" style="display: none;" class="libView">
                <h2 id="libraries" style="font-family: KBKids; font-weight: bold; position: relative; left: 15px; font-size: 25px;">Library Management</h2>
                <form>
                    <select name="libraryList" style="width: 300px; left: 25px; position: relative; border: 2px solid black;" onchange="alert(this.value)">
                        <option>Available Libraries</option>
                        <option value="lib1">lib 1</option>
                        <option value="lib2">lib 2</option>
                        <option value="lib3">lib 3</option>
                        <option value="lib4">lib 4</option>
                        <option value="lib5">lib 5</option>
                    </select>
                </form>
                
                </div>
                
                <input type="button" name="emails" value="Email a Parent" onclick="showDiv()" style="width: 200px; left: 25px; position: relative; border: 2px solid black;" />

                <h4 id="emailToParent" style="font-family: KBKids; font-weight: bold; position: relative; left: 15px; font-size: 25px;">Email a Parent</h4>

                <div id="emailDiv" style="display: none;" class="emailParent">

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
                                    $message = $_POST["message"];
                                    $email = $_POST("emails");
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
