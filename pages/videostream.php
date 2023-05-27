<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatable" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<center><tittle> display stream</tittle></center>
<style>
h1{
font-family: sans-serif;
color :#333;
}
body{
margin :50px;
}
#container {
margin : 0px auto;
width :500px;
height:375px;
bordee : 10px #333 solid:
}
#videoElement {
width : 500px;
height:375px;
background-color:#666;
}
<select id="myselect">
 require("videostream.php");
</select>

<br /><br />
<button onclick="toggle(this)">Hide Select</button>

<script>
  let toggle = button => {
     let element = document.getElementById("myselect");
     let hidden = element.getAttribute("hidden");
    
     if (hidden) {
        element.removeAttribute("hidden");
        button.innerText = "Hide Select";
     } else {
        element.setAttribute("hidden", "hidden");
        button.innerText = "Show Select";
     }
  }
</script>

</style>
</head>
<body>
<div id="container">
<video autoplay="true" id="videoElement">
</video>
</div>
<script>
let video = document.querySelector("#videoElement");
if(navigator.mediaDevices.getUserMedia) {
navigator.mediaDevices.getUserMedia({ video : true})
.then(function (stream) {
video.srcObject = stream;
})
.catch (function(error) {
console.log("somethimg went wrong");
})
} else{
console.log("grtusermedia not supported");
}
</script>
</body>
</html>
