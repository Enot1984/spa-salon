<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 40px;
  font-family: 'Courier New', Courier, monospace;
  font-weight: bolder;
  margin-top: 0px;
}
</style>
</head>
<body>
<p id="demo"></p>
<script>
let limit = new Date();
limit.setHours(limit.getHours() + 24);
let countDownDate = limit.getTime();
let x = setInterval(function() {
  let now = new Date().getTime();
  var distance = countDownDate - now;
  var distance = localStorage.getItem("countDownDate") - now;
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = hours + ":" + minutes + ":" + seconds;
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
if(!localStorage.getItem("countDownDate") || countDownDate - localStorage.getItem("countDownDate") > 24 * 60 * 60 * 1000) localStorage.setItem("countDownDate", countDownDate);
</script>
</body>
</html>