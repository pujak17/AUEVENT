<?php include('index.php') ?>

<div class="main">
<div class="buttons"><br>
                <div class="button btn-group-lg" align="center">
                        <a href="index.php" class="btn btn-primary btn-lg active"> Recent Events </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="pastevents.php" class="btn btn-default btn-lg active"> Past Events</a>
                        <br>
                        <br>
   
                </div>           
        </div>
        <div class ="box text-center">
        <div class="row">
                <div class="column">
                    <span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Freshy Night</span><br>
                    <span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Entertainment</span><br>
                    <span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
                    <span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
                    <span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
                    to eat, enjoy the show and also dance</span><br>
                    <span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
                </div>
                <div class="column">
                    <img src = "http://www.au.edu/images/gallery//gallery2017/freshy2017/freshy2017-001.JPG" alt = "waikru" style="width:50%;">
                </div>
            </div>
            <div class="button btn-group-lg" align="center"><br>
                <button type="button" value="Button Text" onclick = "myFunction()" id = "demo" class="btn btn-success"> Attend</button> &nbsp;&nbsp;&nbsp; 
                <a href = "myevent.php" class="btn btn-danger"> Not Attend</a>
            </div>
       
        </div>
        <script>
            function myFunction() {
                document.getElementById("demo").childNodes[0].nodeValue=
                "Attending";
                document.getElementById("demo").style.color = "red";
            }
        </script>
        
        <div class ="box text-center">
            <div class="row">
             <div class="column">
                <span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Career Week</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Mandatory</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">6th oct 2018</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">CL</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for all students of abac looking for jobs and internship
                    to eat, enjoy the show and also dance</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
            </div>
            <div class="column">
                <img src = "http://www.au.edu/images/image2018/careerWeek2-201701.png" alt = "waikru" style="width:50%;">
            </div>
            </div>
            <div class="button btn-group-lg" align="center"><br>
                <button type="button" value="Button Text" onclick = "myFunction1()" id = "demo1" class="btn btn-success"> Attend</button> &nbsp;&nbsp;&nbsp; 
                <a href = "myevent.php" class="btn btn-danger"> Not Attend</a>
            </div>
       </div>
       <script>
            function myFunction1() {
                document.getElementById("demo1").childNodes[0].nodeValue=
                "Attending";
                document.getElementById("demo1").style.color = "red";
            }
        </script>
       <div class ="box text-center">
       <div class="row">
             <div class="column">
                <span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Wai Kru Ceremony</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Mandatory</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">10th oct 2018</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 and teachers of ABAC</span><br>
                <span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
            </div>
            <div class="column">
            <img src = "http://www.au2014.au.edu/index.php/au-gallery-2015/image?view=image&format=raw&type=img&id=13026" alt = "waikru" style="width:302px;height:152px;border:0;">
            </div>
            </div>
            <div class="button btn-group-lg" align="center"><br>
            <button type="button" value="Button Text" onclick = "myFunction2()" id = "demo2" class="btn btn-success"> Attend</button> &nbsp;&nbsp;&nbsp; 
                <a href = "myevent.php" class="btn btn-danger"> Not Attend</a>
            </div>
        </div>    
        <script>
            function myFunction2() {
                document.getElementById("demo2").childNodes[0].nodeValue=
                "Attending";
                document.getElementById("demo2").style.color = "red";
            }
        </script>
        <div class ="box text-center">
        <div class="row">
             <div class="column">
            <span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Ethics Seminar</span><br>
            <span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Mandatory</span><br>
            <span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">15th oct 2018</span><br>
            <span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">CL14</span><br>
            <span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">Students having BG1403X needs to attend this event</span><br>
            <span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">click here for link</a></span><br><br>
            </div>
            <div class="column">
            <img src = "https://www.glurr.com/images/topic/0774975001489767079.jpg" alt = "ethics" style="width:302px;height:152px;border:0;"><br>
            </div>
            </div>
            <br><div class="button btn-group-lg" align="center">
            <button type="button" value="Button Text" onclick = "myFunction3()" id = "demo3" class="btn btn-success"> Attend</button> &nbsp;&nbsp;&nbsp; 
                <a href = "myevent.php" class="btn btn-danger"> Not Attend</a>
            </div>
       </div>
       <script>
            function myFunction3() {
                document.getElementById("demo3").childNodes[0].nodeValue=
                "Attending";
                document.getElementById("demo3").style.color = "red";
            }
        </script>
</div>