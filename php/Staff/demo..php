<html>
<body>
<input type='button' id="button1" value='first button' onclick="clickMe(this)"/>
<input type='button' id="button2" value='second button' onclick="clickMe(this)"/>
<input type='button' id="button3" value='third button' onclick="clickMe(this)"/>
<input type='button' id="button4" value='fourth button' onclick="clickMe(this)"/>
 
<script>
function clickMe(e){
 
    alert("You have clicked button id = "+e.id+" and button value = "+document.getElementById(e.id).value)
 
}
</script>
<h1> 
</body>
</html>