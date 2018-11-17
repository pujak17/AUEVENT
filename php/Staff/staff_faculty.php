<?php include ('staff_index.php') ?>

<style>
.filterDiv {
	text-align: center;
	margin-left: 280px;
	display: none;
}

.show {
	display: block;
}

</style>

<body>

<div class="main" style="margin-top: 150px">
	<h2 style="margin-left: 180px">Choose Faculty</h2>

	<div id="myBtnContainer" style="margin-left: 120px;">
		<button class="btn active" onclick="filterSelection('all')"> Show all</button>
		<button class="btn" onclick="filterSelection('Architecture')"> Architecture</button>
		<button class="btn" onclick="filterSelection('Arts')"> Arts</button>
		<button class="btn" onclick="filterSelection('BBA')"> BBA</button>
		<button class="btn" onclick="filterSelection('Bio Technology')"> Bio Technology</button>
		<button class="btn" onclick="filterSelection('Communication')"> Communication Arts</button>
		<button class="btn" onclick="filterSelection('Engineering')"> Engineering</button>
		<button class="btn" onclick="filterSelection('English Studies')"> English Studies</button>
		<button class="btn" onclick="filterSelection('Laws')"> Laws</button>
		<button class="btn" onclick="filterSelection('Music')"> Music</button>
		<button class="btn" onclick="filterSelection('Nursing')"> Nursing</button>
		<button class="btn" onclick="filterSelection('Science and Tech')"> Science and Tech</button>
	</div>

	<div class ="box filterDiv Architecture">
		<div class="row">
      	<div class="column">
			<span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Architecture exhibition</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Architeture</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">10th oct 2018</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">vms 1001</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			</div>
			<div class="column">
				<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqhtIHF_L-6ksXxJE-mN2k1F-CuPANR2EpH9YBNFF8j0wUrise" alt = "waikru" style="width:100%">	
			</div>
		</div>
		</div>
		<div class ="box filterDiv Music">
		<div class="row">
      	<div class="column">
			<span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Guitar workshop</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Music</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			</div>
			<div class="column">
				<img src = "https://d3vd6twwo0fg2z.cloudfront.net/content/uploads/2018/03/2018-poster-final-flat-online.jpg" alt = "waikru" style="width:100%">	
			</div>
		</div>
		</div>
		<div class ="box filterDiv Science and Tech">
		<div class="row">
      	<div class="column">
			<span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Computer workshop</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Science and Tech</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			</div>
			<div class="column">
				<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCKZL36jTESf0fgOyq4WsNHv_0tdbSDuE8UHFq6vi3sZtokJ1G-Q" alt = "waikru" style="width:100%">
			</div>
		</div>
		</div>
		
		<div class ="box filterDiv Communications">
		<div class="row">
      	<div class="column">
			<span class = "detail"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">PR workshop</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Communication Arts</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "detail">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			</div>
			<div class="column">
				<img src = "http://www.unpad.ac.id/wp-content/uploads/2017/05/humas-unpad_2017-05-16_workshop-PR.jpeg" alt = "waikru" style="width:100%">	
			</div>
		</div>
		</div>

	<script>
		filterSelection("all")
		function filterSelection(c) {
			var x, i;
			x = document.getElementsByClassName("filterDiv");
			if (c == "all") c = "";
			for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

		function w3AddClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
			}
		}

		function w3RemoveClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);     
				}
			}
			element.className = arr1.join(" ");
		}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
</script>

</body>