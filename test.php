<html>
<body>
    <style >
        button{
            
            
            width: 200px;
            height: 50px;
            border-radius: 10px;
            border:2px solid black;
            font-size: 30px;
        }
    </style>

<h1 style="font-size: 50px;" id="p2">Learn webdevelopment ITdesignerspk.com </h1>
<button style="background-color: blue; color: white;"  onclick="Blue()">Blue</button>
<button style="background-color: red; color: white;" onclick="Red()">Red</button>
<button style="background-color: green; color: white;" onclick="Green()">Green</button>
<button style="background-color: yellow; " onclick="Yellow()">Yellow</button>
<script>
    function Blue()
    {
document.getElementById("p2").style.color = "blue";

}
function Red()
    {
document.getElementById("p2").style.color = "red";

}
function Green()
    {
document.getElementById("p2").style.color = "green";

}
function Yellow()
    {
document.getElementById("p2").style.color = "yellow";

}
</script>



</body>
</html>