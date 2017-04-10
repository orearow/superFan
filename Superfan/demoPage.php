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
    
    <!--
    <a href="#5" class="logo" target="_blank" onclick="member/memberPage.html;">
 <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/ettrics-logo.svg" alt="" /> 
</a>
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
      
<button onclick="location.href = 'member/memberPage.html';" id="myButton" class="float-left submit-button" >Profile</button>

      <div class="panel__block"></div>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
                  <form action="login.php" method="post">

        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" type="text" name= "username" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name= "password" type="password" class="input" data-type="password">
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
          <label for="password" class="label">Email Address</label>
          <input id="pass" name="email" type="text" class="input">
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
      
            <form action="getShowByName.php" method="post">
            <b>Input Name of MOVIE:</b><br />
            <input type ="text" name = "series_name" size=40><br />
                    </form>
 
      <form action="tabber/tabActivity.html" method="get">

  <button type="submit">Other Search Options</button><br>
</form>
           <br>
      <br>
      
      <div class="panel__block"></div>
      <div id="f1_container">
      <div id="f1_card" class="shadow">
        <div class="front face">
          <img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/action_zpsjhmnddva.png" border="0" alt=" photo action_zpsjhmnddva.png" width="200" height="200"/>
        </div>
    </div>
    </div>
      <div id="f1_container2">
      <div id="f1_card2" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/ANIMATION_zpseprvl39k.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/ANIMATION_zpseprvl39k.png" border="0" alt=" photo ANIMATION_zpseprvl39k.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>
      <div id="f1_container3">
      <div id="f1_card3" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/romance_zpsgzmwrd8r.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/romance_zpsgzmwrd8r.png" border="0" alt=" photo romance_zpsgzmwrd8r.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>

      <div id="f1_container4">
      <div id="f1_card4" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/sci_zpsgkyrwxzp.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/sci_zpsgkyrwxzp.png" border="0" alt=" photo sci_zpsgkyrwxzp.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>    

      <div id="f1_container5">
      <div id="f1_card5" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/FANTASY_zps4fjpmie4.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/FANTASY_zps4fjpmie4.png" border="0" alt=" photo FANTASY_zps4fjpmie4.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container6">
      <div id="f1_card6" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/COMEDY2_zpsrtntcl8c.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/COMEDY2_zpsrtntcl8c.png" border="0" alt=" photo COMEDY2_zpsrtntcl8c.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container7">
      <div id="f1_card7" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/MYSERTY_zpsyc8qsq9s.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/MYSERTY_zpsyc8qsq9s.png" border="0" alt=" photo MYSERTY_zpsyc8qsq9s.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>    

      <div id="f1_container8">
      <div id="f1_card8" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/DRAMA_zpsg6cn4lva.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/DRAMA_zpsg6cn4lva.png" border="0" alt=" photo DRAMA_zpsg6cn4lva.png" width="200" height="200"/></a>
        </div>
      </div>
    </div>  

      <div id="f1_container9">
      <div id="f1_card9" class="shadow">
        <div class="front face">
          <a href="http://s1244.photobucket.com/user/teehuynhsama/media/horoor_zpswk5avzcg.png.html" target="_blank"><img src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horoor_zpswk5avzcg.png" border="0" alt=" photo horoor_zpswk5avzcg.png" width="200" height="200"/></a>
        </div>
      </div>
    </div> 
    </div>
  </article>
</section>
<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;TELEVISION</h1>
      <form action="getShowByName.php" method="post">
            <b>Input Name of TV SERIES:</b><br />
            <input type ="text" name = "series_name" size=40><br />
            
            <div class="field" id="searchform">

</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
            
            
            
            
            
            
            
                    </form>
      
      
      <form action="tabber/tabActivity.html" method="get">

  <button type="submit">Other Search Options</button><br>
</form>
      
      

      <div class="panel__block"></div>
        <a href="#6" onclick="newPage('6');">
        <div id="cf">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/anime1_zpswnugygzx.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/anime2_zpsogwd5wb6.png" width="200" height="200" />
        </div>
        </a>
        <a href="#7" onclick="newPage('7');">
        <div id="cf2">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/SCIFI1_zpsdswzyoam.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/SCIFI2_zpsbunpvrhy.png" width="200" height="200" />
        </div>
        </a>
        <a href="#8" onclick="newPage('8');">
        <div id="cf3">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/drama1_zpsxaxgq1tt.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/drama2_zpsnjpeyf6u.png" width="200" height="200" />
        </div>
        </a>
        <a href="#9" onclick="newPage('9');">
        <div id="cf4">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/mystery2_zps0wgtmosb.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/mystery1_zpsulhfbr5e.png" width="200" height="200" />
        </div>
        </a>
        <a href="#10" onclick="newPage('10');">
        <div id="cf5">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/fantasy2_zpsbhqyvo8i.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/fantasy1_zpsqjpxyaul.png" width="200" height="200" />
        </div>
        </a>
        <a href="#11" onclick="newPage('11');">
        <div id="cf6">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tvrom1_zpswslmrqop.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/tvrom2_zpssjonxnjq.png" width="200" height="200" />
        </div>
        </a>
        <a href="#12" onclick="newPage('12');">
        <div id="cf7">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/comedy1_zps9dkl83is.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/COMEDY2_zpsptnperfw.png" width="200" height="200" />
        </div>
        </a>
        <a href="#13" onclick="newPage('13');">
        <div id="cf8">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horror1_zpsnvjpkhix.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/horror2_zpssubvcmn5.png" width="200" height="200" />
        </div>
        </a>
        <a href="#14" onclick="newPage('14');">
        <div id="cf9">
         <img class="bottom" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/child2_zpsganyrw8r.png" width="200" height="200" />
         <img class="top" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/child1_zpsbe9y2to5.png" width="200" height="200" />
        </div>
        </a>
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

<section class="panel b-pink" id="5" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-music"></i>&nbsp;ADD A TV SHOW</h1>
      <div class="panel__block"></div>
              <form action="tv.php" method="post">

        <div class="group">
            
            
            
            
          <label for="user" class="label">Name</label>
          <input id="name" name="name" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Year</label>
          <input id="tvyear" name="tvyear" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Created By</label>
          <input id="tvcreatedby" name="created" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Number of Episodes</label>
          <input id="tvepisodes" name="tvepisodes"type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Director</label>
          <input id="tvdirector" name="tvdirector" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Writer</label>
          <input id="tvwriter" name="tvwriter" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Syndication Status</label>
          <input id="tvss" name="tvss" type="text" class="input">
        </div>      
        <div class="group">
          <label for="user" class="label">Network Exclusivity</label>
          <input id="tvne" name="tvne" type="text" class="input">
          
          
                                            <input type="submit" class="button" value=" add">

        </div>
     
                  

</form>

    </div>
  </article>
</section>

<section class="panel b-black" id="6" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;ANIME</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="7" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;SCI-FI</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="8" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;DRAMA</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="9" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;MYSTERY</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="10" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;FANTASY</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="11" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;ROMANCE</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="12" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;COMEDY</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="13" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;HORROR</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>

<section class="panel b-black" id="14" style="display:none">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline__media"><i class="fa fa-music"></i>&nbsp;CHILDREN</h1>
      <div class="panel__block__media"></div>
      <p>Hey boi</p>
    </div>
  </article>
</section>





<a href="#5" class="logo" target="_blank" onclick="newPage('5');">
 <img class="logo" src="http://i1244.photobucket.com/albums/gg568/teehuynhsama/add_zpsketqweds.png" alt="" /> 
</a>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

<script>

function newPage(i){
  document.getElementById(i).style.display="flex";
}

function grabTV(i) {
    var tvname = document.getElementById("tvname").value;
    var tvyear = document.getElementById("tvyear").value;  
    var tvcreatedby = document.getElementById("tvcreatedby").value;
    var tvepisodes = document.getElementById("tvepisodes").value; 
    var tvdirector = document.getElementById("tvdirector").value;
    var tvwriter = document.getElementById("tvwriter").value;  
    var tvss = document.getElementById("tvss").value;
    var tvne = document.getElementById("tvne").value;
    document.getElementById(i).style.display="none";
}

</script>

<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("urmom").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("urmom").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 4000);
          }

          var images = [], x = -1;
          images[0] = "http://i1244.photobucket.com/albums/gg568/teehuynhsama/banner1_zpsbax2fucm.png";
          images[1] = "http://i1244.photobucket.com/albums/gg568/teehuynhsama/banner2_zpsyomqpdzk.png";
      </script>


</body>
</html>