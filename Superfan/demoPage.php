<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SUPERFAN</title>
<meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
</head>
<!--
<header>
<a href="http://s1244.photobucket.com/user/teehuynhsama/media/superda_zpsyq9iqyrb.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/superda_zpsyq9iqyrb.png" border="0" alt=" photo superda_zpsyq9iqyrb.png"/></a>
</header>
-->
<body>
    
    
    
  <nav class="nav">
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list">
    <li class="nav__item">
      <a href="" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/user_zpskznzaxsa.png" border="0" alt=" photo user_zpskznzaxsa.png" width="25" height="25"/></a>
    </li>
    <li class="nav__item">
      <a href="" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/movie_zps9cnjiuab.png" border="0" alt=" photo movie_zps9cnjiuab.png" width="25" height="25"/></a>
    </li>
    <li class="nav__item">
      <a href="" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tv_zpsgcttyiix.png" border="0" alt=" photo tv_zpsgcttyiix.png" width="25" height="25"/></a>
    </li>
    <li onclick="loadPage();" class="nav__item">
      <a href="" target="_blank" class="nav__link c-blue"><i class="fa fa-camera-retro"></i><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/about_zps8ldpebl6.png" border="0" alt=" photo about_zps8ldpebl6.png" width="25" height="25"/></a>
    </li>
  </ul>
</nav>
<section class="panel b-blue" id="4">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-paper-plane"></i>&nbsp;SUPERFAN</h1>
      <div class="panel__block"></div>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">


        
      <div class="sign-in-htm">
        <form action="login.php" method="post">

        <div class="group">

          <label for="username" class="label">Username</label>
          <input id="username" type="text" name="username" class="input">
        </div>
          
        <div class="group">
          <label for="passsword" class="label">Password</label>
          <input id="pass" type="password" name= "password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep Me Signed In</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">

        </div>
               </form>

        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>

        </div>

      </div>

      <div class="sign-up-htm">
          <form action="newUser.php" method="post">

        <div class="group">

          <label for="username" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="password" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="password" class="label">Repeat Password</label>
          <input id="password" name= "password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Email Address</label>
          <input id="email"name="email" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">

        </div>
                          </form>

        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </div>
    </div>

  </div>
</div>
    </div>
  </article>
</section>
<section class="panel b-yellow" id="2">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-bolt"></i>&nbsp;MOVIES</h1>
      <div class="panel__block"></div>
      <p>Paleo authentic mlkshk taxidermy, vinyl meditation lomo drinking vinegar sartorial raw denim Thundercats bitters selvage listicle. Keffiyeh Williamsburg gastropub McSweeney's.</p>
    </div>
  </article>
</section>
<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;TELEVISION</h1>
      <div class="panel__block"></div>
      <p>Beard sriracha kitsch literally, taxidermy normcore aesthetic wayfarers salvia keffiyeh farm-to-table sartorial gluten-free mlkshk. Selvage normcore 3 wolf moon, umami Kickstarter artisan meggings cardigan drinking vinegar bicycle rights.</p>
    </div>
  </article>
</section>
<section class="panel b-green" id="1">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-camera-retro"></i>&nbsp;ABOUT</h1>
      <div class="panel__block"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias ducimus, eos asperiores, ab officia sint nostrum quia, corporis officiis id praesentium expedita numquam ad non error optio est in.</p>
    </div>
  </article>
</section>
<a href="http://ettrics.com/code/vertical-layout-navigation/" class="logo" target="_blank">
 <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/ettrics-logo.svg" alt="" /> 
</a>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

<script>

function loadPage(){
  alert("HI!");
}

</script>

</body>
</html>
