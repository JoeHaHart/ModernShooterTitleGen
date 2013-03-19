<!DOCTYPE html>
<html>

<head>

<?php
$title = $_GET["title"];
$img = $_GET["img"];

?>
  <meta charset="UTF-8">

  <title>Generic Modern Shooter Video Game Title Generator - By Joe Hart</title>
  <meta name="viewport" content="initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <meta name="description" content="Do you work at Activision? EA? Or any other big publisher? Is all that money you're rolling in making it difficult to think? Well don't worry! I've made a tool that will generate the name of your new modern-warfare-online-multiplayer-clustfuck-game for you!">
    <meta name="author" content="Joe Hart">
      <meta property="og:image" content="http://www.joehart.co.uk/modernshootertitlegen/img/mwcover.jpg"/>
    <meta property="og:site_name" content="Generic Modern Shooter Video Game Title Generator"/>
    <meta property="og:description" 
  content="Do you work at Activision? EA? Or any other big publisher? Is all that money you're rolling in making it difficult to think? Well don't worry! I've made a tool that will generate the name of your new modern-warfare-online-multiplayer-clustfuck-game for you!" />
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <link rel="apple-touch-startup-image" href="img/splash.png" />  
  <link rel="apple-touch-startup-image"
      media="(device-width: 320px)
         and (device-height: 568px)
         and (-webkit-device-pixel-ratio: 2)"
      href="img/apple-touch-startup-image-640x1096.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple.png" />


</head>

<body>

<div id="space">
  <div id="poster">
  <div id="title"><h1>
    <?php if($title!=""){
      echo $title;
}else{
    echo "GENERIC MODERN SHOOTER TITLE";
  }
  ?>

  </h1></div>
  </div>
</div>

<button onclick="run();">Generate</button>
<h2>Share this title: <input id="share" type="text" onclick="this.select();" value="<?php if($title!=''){echo "http://www.joehart.co.uk/modernshootertitlegen/?title=".urlencode($title);}else{echo "http://www.joehart.co.uk/modernshootertitlegen/";}?>"></input></h2>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://raw.github.com/davatron5000/FitText.js/master/jquery.fittext.js"></script>
<script>
var first = [ "Call",
             "Moment",
             "Mission",
             "Medal",
             "Heroes",
             "Sword",
             "Fires",
             "Right",
             "Rise" ,
             "Guns",
             "Men",
             "Douchebags",
             "Soldier"];

var second = ["War",
              "America",
              "Germany",
              "Russia",
              "Duty",
              "Honour",
              "Arms",
              "Vengeance",
              "Fury",
              "Fire",
              "the People"];

function run() {
  var firstIndex = Math.floor(Math.random()*first.length);
  var secondIndex = Math.floor(Math.random()*second.length);
  var number = Math.floor(Math.random()*5)+1;
  if (number == 1)
  {
    var title = first[firstIndex] + " of " + second[secondIndex];
  }
  else 
  {
    var title = first[firstIndex] + " of " + second[secondIndex] + " " + number.toString();
  }

  //generate cover number
  var coverIndex = Math.floor(Math.random()*7);
    $('#title h1').text(title);
    $('#poster').css('background-image', 'url(http://www.joehart.co.uk/modernshootertitlegen/img/covers/' + coverIndex + '.jpg)');
    document.getElementById("share").value = "http://www.joehart.co.uk/modernshootertitlegen/?title=" + encodeURI(title) + "&img=" + coverindex;

}
  $('#title h1').fitText(0.5);

  </script>
  

</body>

</html>