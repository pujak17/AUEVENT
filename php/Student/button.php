

<button type="button" id="myButton2" onclick = "myFunction()">Button </button>
<script>
    function myFunction() {
        document.getElementById("myButton2").innnerHTML=
        "New Button Text using innerHTML";
    }
</script>

<!DOCTYPE html>
<html>
<body>

<button id="demo" onclick="myFunction()">Click me to change my text color.</button>

<script>
function myFunction() {
    document.getElementById("demo").childNodes[0].nodeValue=
   "New Button";
}
</script>

</body>
</html>
