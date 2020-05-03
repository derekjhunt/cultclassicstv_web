<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CultClassics.TV</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<style type="text/css">
<!--
body{
color: #000;
background: url(images/<?php echo $selectedBg; ?>) no-repeat;
background-size: cover;
}
-->
</style>
<div class="container"> <p class="s48" style="font-size: 48px;">CultClassics.TV</p></div>

<div class="container">
    <div class="your-centered-div">
      <iframe width="560" height="315" src="//cultclassics.tv:5080/LiveApp/play.html?name=556336427398358095038757&autoplay=false" frameborder="0" allowfullscreen margin="auto" align="middle"></iframe>
    </div>
</div>

<div class="container"> <p class="s48" style="font-size: 48px;">Underground TV For The Infected.</p></div>
<div class="container"> <p class="s48" style="font-size: 24px;"><a href="CCTV-debug.apk">Download for Android and Android TV</a></p></div>
<div class="container"> <p class="s48" style="font-size: 24px;"><a href="https://my.roku.com/add/P5JCRM">Roku Channel</a></p></div>

</body>
</html>

