<?php
@$n = @$_GET["n"];
@$name = str_replace(
    array("-","@","gmail.com","yahoo.com"),
    array(" ","","",""), @$n);
@$yname = str_replace(
    array(" ","@","gmail.com","yahoo.com"),
    array("-","","",""), @$n);
if(isset($_GET['n']) && (strpos($_GET['n'],'@') !== false || strpos($_GET['n'],'%40') !== false)) {
    $redirect_url = 'https://open-fast.com/wow/';
    echo '<script>window.location.href="'.$redirect_url.'";</script>';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<meta name="google" content="notranslate" />
<meta name="robots" content="noindex" />
<title><?php echo $name?> wishing you Happy Valentine's Day!</title>
    <meta property="og:type" content="Secret Message" />
    <meta property="og:title" content="<?php echo $name?> wishing you Happy Valentine's Day!" />
    <meta property="og:url" content="https://open-fast.com/wow/?n=<?php echo $yname?>" />
    <meta property="og:description" content="Secret Message" >
    <meta property="og:site_name" content="I sent you a surprise message. Open this Now" /> 
    <meta property="og:image" content="../pic2024/ogmsg.jpg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../pic2024/all/mystyle.css">
    <script src="../pic2024/all/myslide.js" type="text/javascript"></script>
<style>
#username {
  color: black;  /* Fallback: assume this color ON TOP of image */
  background: url(../pic2024/sname1.gif);
  font-family:SF Espresso Shack;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: swing 4s infinite;
  text-transform: uppercase;
  margin-bottom: 5px;
  font-size: 40px;
  padding: 0 10px;
}
#usernameb {
  color: black;  /* Fallback: assume this color ON TOP of image */
  background: url(../pic2024/sname1.gif);
  font-family:SF Espresso Shack;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: swing 4s infinite;
  text-transform: uppercase;
  margin-bottom: 5px;
  font-size: 25px;
  padding: 0 10px;
}
</style>
<script type="text/javascript">
$(document).ready(function() { $curtainopen = false; $(".rope").click(function(){ $(this).blur(); if ($curtainopen == false){ $(this).stop().animate({top: '-171%' }, {queue:false, duration:350, easing:'easeOutBounce'}); $(".leftcurtain").stop().animate({width:'0px'}, 2000 ); $(".rightcurtain").stop().animate({width:'0px'},2000 ); $curtainopen = true; }else{ $(this).stop().animate({top: '-40px' }, {queue:false, duration:350, easing:'easeOutBounce'}); document.write(''); $(".leftcurtain").stop().animate({width:'50%'}, 2000 ); $(".rightcurtain").stop().animate({width:'51%'}, 2000 ); $curtainopen = false; } return false; }); });
</script>
</head>
<body>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script>
    createjs.Sound.registerSound("../pic2024/all/en/vt/vt.mp3", "");
    setTimeout(function () {
        createjs.Sound.play("");
    }, 3000)
</script>
<div class="leftcurtain"><img src="../pic2024/curaleft.jpg" /></div>
<div class="rightcurtain"><img src="../pic2024/curaright.jpg" /></div>
<a class="rope" href="" onclick="PlaySound()">
<center><div style="font-size: 25px;text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color: red;font-weight: bold;"><br><br>Touch this<br><img src="../pic2024/arrow.gif" width="50px" height="130px"></div>
<img src="../pic2024/all/en/vt/heart-with-ribbon-symbols.png" height="130px" width="150px" style="animation: tada 4s infinite"><br>
</a></center>
<marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
</marquee>
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt1.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt2.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt3.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt4.png" height="25px" width="25px"/><br><br>
<img src="../pic2024/all/en/vt/vt5.png" height="25px" width="25px"/><br><br>
</marquee>
<main><br>
<center>
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22867408342/ca-pub-9846545295115566-tag/seeme1', [320, 50], 'div-gpt-ad-1702585229374-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /22867408342/ca-pub-9846545295115566-tag/seeme1 -->
<div id='div-gpt-ad-1702585229374-0' style='min-width: 320px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1702585229374-0'); });
  </script>
</div>
</center>
<h1 id="username"><?php echo $name?></h1>

<img src="../pic2024/all/en/wish3.png" width="50%" height="4%"style="animation: pulse 2.5s infinite">

<div style="font-size: 20px; font-weight: 800; color: black;"> 
<p id="demo"></p>
</div>

<img src="../pic2024/all/en/vt/vtmain3.png" width="85%" height="30%"style="animation: pulse 2.5s infinite"> <br><br>
<img src="../pic2024/all/en/vt/boy1.gif" width="40%" height="25%">
<img src="../pic2024/all/en/vt/girl1.gif" width="40%" height="25%">


<div class="TandiMessage"> 
<p>May your Valentine's Day </p>
<p>be filled with love, joy, and </p>
<p>unforgettable moments that </p>
<p>create cherished memories. </p>
<p>Happy Valentine's Day!</p>
</div><br>
<center>
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22867408342/ca-pub-9846545295115566-tag/see3', [300, 250], 'div-gpt-ad-1703898359246-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<!-- /22867408342/ca-pub-9846545295115566-tag/see3 -->
<div id='div-gpt-ad-1703898359246-0' style='min-width: 300px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1703898359246-0'); });
  </script>
</div>
</center>
<h1 id="usernameb"><?php echo $name?></h1>
<br>
</main>

<div class="footer">    
    <form method="post" action="ready.php">
      <input class="text" name="n" type="text" placeholder="👉 Enter your name here...." required>
      <input type="submit" class="go" value="👉 GO">
    </form>
  </div>
<script> 
// Set the date we're counting down to
var countDownDate = new Date("Feb 14, 2024 00:00:00").getTime();

// Update the count down every 01 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "<font color='#FA069A'> days,</font> " + hours + "<font color='#11680B'> hrs,</font> "
  + minutes + "<font color='#9B274C'>  min,<br></font> " + seconds + "<font color='#F47810'> sec before</font> ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "";
  }
}, 1000);
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85162156-12"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85162156-12');
</script>
</body>
</html>