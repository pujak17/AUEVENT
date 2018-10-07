<?php include ('index.php') ?>

<style>
.filterDiv {
	text-align: center;
	margin-left: 280px;
	display: none;
}

.show {
	display: block;
}

.container {
	margin-top: 20px;
	overflow: hidden;
	margin-left: 250px;
}
</style>

<body>

	<h2 style="margin-left: 280px">Filter DIV Elements</h2>

	<div id="myBtnContainer" style="margin-left: 240px;">
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
		<div class ="box filterDiv Music">
			<span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Guitar workshop</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Music</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			<div class="button btn-group-lg" align="center">
				<a href="myevent.php" class="btn btn-success"> Attending</button> &nbsp;&nbsp;&nbsp; </a>
				<a href = "myevent.php" class="btn btn-danger"> Not Attending</a>
			</div>
		</div>
		<div class ="box filterDiv Science and Tech">
			<span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Computer workshop</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Science and Tech</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			<div class="button btn-group-lg" align="center">
				<a href="myevent.php" class="btn btn-success"> Attending</button> &nbsp;&nbsp;&nbsp; </a>
				<a href = "myevent.php" class="btn btn-danger"> Not Attending</a>
			</div>
		</div>
		<div class ="box filterDiv Communications">
			<span class = "details"> &nbsp;&nbsp;&nbsp;Event name: </span><span class = "text">Computer workshop</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event type : </span><span class = "text">Faculty-Communication Arts</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Date : </span><span class = "text">5th oct 2018</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Event Venue : </span><span class = "text">John Paul XXI</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;Description: </span><span class = "text">It's a program for freshman from ID 591 where students get 
			to eat, enjoy the show and also dance</span><br>
			<span class = "details">&nbsp;&nbsp;&nbsp;link: </span><span class = "text"><a href = "https://www.w3schools.com/tags/att_input_type.asp">link</a></span><br><br>
			<div class="button btn-group-lg" align="center">
				<a href="myevent.php" class="btn btn-success"> Attending</button> &nbsp;&nbsp;&nbsp; </a>
				<a href = "myevent.php" class="btn btn-danger"> Not Attending</a>
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