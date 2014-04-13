 /*
  * Author: Derek Fantin
  * Purpose: Javascript for the Teachers Page. The teachers page is where the 
  * teacher can manage classes and students to find out who owes books and what
  * is signed out. Also shows a picture of the teacher and hovering over the pic
  * gives you a brief description. 
  * 
  */

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
                
                function showDiv2() {
                    document.getElementById('teacherForm').style.display = 
                            "block";
                }
               
               
                var c = document.getElementById("myCanvas");
                var ctx = c.getContext("2d");
                ctx.fillStyle = "#FF0000";
                ctx.fillRect(0,0,150,75);


