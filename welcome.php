<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!-- Html and javascript code  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket TV</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="util.css">
</head>
<body>
  <div class="imageslider">
    <div class="header">
      <ul class="nav">
        <li><span>Home</span></li>
        <li><span>Categorise</span></li>
        <li><span>Contact us</span></li>
        
        <div class="search-container">
          <input type="search" class="search" placeholder = "Search">
        </div>
        <sapan class="search-icon"><img src="img/search.png" alt=""><sapan>
        
      </ul>
    </div>
    <h3 style="z-index:6; position: absolute;right: 10px;top: 5px;"><?php echo "Welcome ". $_SESSION['username']?>! Start fun with POCKET TV </h3><br>
      <a class="nav-link" href="logout.php" style="z-index: 6; position: absolute; right: 102px; top: 42px; font-size: x-large; color: yellowgreen; text-decoration: none; text-decoration-color: white;">  <?php echo "Logout !". $_SESSION['username']?></a>
      <img style="    z-index: 6; position: absolute; right: 50px; top: 37px;" src="https://img.icons8.com/fluency/48/000000/test-account.png"/>
    <div class="img-slider">          
      <div class="slide active">
        <img src="img/1.jpg" alt="">
        <div class="info">
          <h2>Prem Geet</h2>
          <p>Prem (Pradeep Khadka) is a salesman from Kathmandu who lives with his mother. One day, while traveling to Kagbeni, he meets Geet (Aaslesha Thakuri) and starts following her to learn more about her. When they get to know each other, they agree to act as partners, as they are being pressured by their parents to marry each other. However, while pretending, they actually fall in love with each other..</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/2.jpg" alt="">
        <div class="info">
          <h2>K.G.F:2</h2>
          <p>K.G.F: Chapter 2 is an upcoming Indian Kannada-language period drama action film written and directed by Prashanth Neel, and produced by Vijay Kiragandur under the banner Hombale Films. The second installment of the two-part series, it is a sequel to the 2018 film K.G.F: Chapter 1. The film stars Yash, Sanjay Dutt, Srinidhi Shetty, Raveena Tandon and Prakash Raj.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/3.jpg" alt="">
        <div class="info">
          <h2>Dracula</h2>
          <p>Dracula Untold is a 2014 American dark fantasy action film directed by Gary Shore in his feature film debut and written by Matt Sazama and Burk Sharpless.[4] A reboot of the Dracula film series, the plot creates an origin story for the titular character, rather than using the storyline of Bram Stoker's 1897 novel. In this adaptation, Dracula is the monster alter ego of historical figure Vlad III "the Impaler" Drăculea. Luke Evans portrays the title character, with Sarah Gadon, Dominic Cooper, Art Parkinson, and Charles Dance cast in supporting roles. Principal photography began in Northern Ireland on August 5, 2013.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/4.jpg" alt="">
        <div class="info">
          <h2>Avengers</h2>
        <p>Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). Directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, the film features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the destruction caused by Thanos in Infinity War.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/5.jpg" alt="">
        <div class="info">
          <h2>Slide 05</h2>
          <p>Lorem ipsum dolor sit amet, consectetuadipisicingelit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>
  </div>
  <div class="trending-container">
    <div class="cat-title">
      <h2>Trending Now</h2>
      <div class="cat-list">
        <ul class="list-img">
          <li class="tr"><img src="img/aarya.jpg" alt=""></li>
          <img src="media/play.png" class="play-btn" onclick="playVideo('media/vid1.mp4')">
          <li class="tr"><img src="img/falcon.jpg" alt=""></li>
          <img style="left: 314px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid3.mp4')">
          <li class="tr"><img src="img/bigbull.jpg" alt=""></li>
          <img style="left: 527px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid2.mp4')">
          <li class="tr"><img src="img/hostage.jpg" alt=""></li>
          <img style="left: 745px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid3.mp4')">
          <li class="tr"><img src="img/humbhi akele tum bhi akele.jpg" alt=""></li>
          <img style="left: 955px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid3.mp4')">
          <li class="tr"><img src="img/laxmi.jpg" alt=""></li>
          <img style="left: 1178px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid3.mp4')">
          <li class="tr"><img src="img/ok.jpg" alt=""></li> 
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cat-title">
      <h2>Live Now</h2>
      <div class="cat-list">
        <ul class="list-img">
          <li class="tr"><img src="img/kantipur.jpg" alt=""></li>
          <img src="media/play.png" class="play-btn" onclick="location.href='http://103.232.155.35:8081/token/kantipur2_ird_hd.stream/chunks.m3u8?nimblesessionid=134116803&wmsAuthSign=c2VydmVyX3RpbWU9OS8yNi8yMDIxIDM6MjQ6MjAgUE0maGFzaF92YWx1ZT05TEFidTVhWG9GTGl6SzFCOS92MTRBPT0mdmFsaWRtaW51dGVzPTEmaWQ9MTIwNTg3';">
          <li class="tr"><img src="img/falcon.jpg" alt=""></li>
          <img style="left: 314px;" src="media/play.png" class="play-btn" onclick="playVideo('media/vid1.mp4')">
          <li class="tr"><img src="img/bigbull.jpg" alt=""></li>
          <li class="tr"><img src="img/hostage.jpg" alt=""></li>
          <li class="tr"><img src="img/humbhi akele tum bhi akele.jpg" alt=""></li>
          <li class="tr"><img src="img/laxmi.jpg" alt=""></li>
          <li class="tr"><img src="img/ok.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cat-title">
      <h2>Movies</h2>
      <div class="cat-list">
        <ul class="list-img">
          <li class="tr"><img src="img/aarya.jpg" alt=""></li>
          <li class="tr"><img src="img/falcon.jpg" alt=""></li>
          <li class="tr"><img src="img/bigbull.jpg" alt=""></li>
          <li class="tr"><img src="img/hostage.jpg" alt=""></li>
          <li class="tr"><img src="img/humbhi akele tum bhi akele.jpg" alt=""></li>
          <li class="tr"><img src="img/laxmi.jpg" alt=""></li>
          <li class="tr"><img src="img/ok.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cat-title">
      <h2>Serise</h2>
      <div class="cat-list">
        <ul class="list-img">
          <li class="tr"><img src="img/aarya.jpg" alt=""></li>
          <li class="tr"><img src="img/falcon.jpg" alt=""></li>
          <li class="tr"><img src="img/bigbull.jpg" alt=""></li>
          <li class="tr"><img src="img/hostage.jpg" alt=""></li>
          <li class="tr"><img src="img/humbhi akele tum bhi akele.jpg" alt=""></li>
          <li class="tr"><img src="img/laxmi.jpg" alt=""></li>
          <li class="tr"><img src="img/ok.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="cat-title">
      <h2>favorite</h2>
      <div class="cat-list">
        <ul class="list-img">
          <li class="tr"><img src="img/aarya.jpg" alt=""></li>
          <li class="tr"><img src="img/falcon.jpg" alt=""></li>
          <li class="tr"><img src="img/bigbull.jpg" alt=""></li>
          <li class="tr"><img src="img/hostage.jpg" alt=""></li>
          <li class="tr"><img src="img/humbhi akele tum bhi akele.jpg" alt=""></li>
          <li class="tr"><img src="img/laxmi.jpg" alt=""></li>
          <li class="tr"><img src="img/ok.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer1">
      <h2>Contact us</h2>
      <P>
        Prakash Chand Kushwaha <br>
        mobile no 98xxxxxxxx <br>
        Rupesh Maharjan <br>
        mobile no 98xxxxxxxx <br>
        jibaxx Thakur <br>
        mobile no 98xxxxxxxx <br>
      </P>
    </div>
    <hr class="vert">
    <div class="footer1">
      <h2>
        About us
      </h2>
      <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Sed quos ullam,,<br> iste consequuntur dolor cumque nostrum <br> for more details Contact our <br> <a href="http://facebook.com/dipukush">Pocket Tv Teams</a></p>
    </div>
    <hr class="vert">
    <div class="footer1">
      <h2>we are on</h2>
      Facebook <br>
      Twitter <br>
      Telegram <br>
    </div>
  </div>
  <div class="foooter-credit" style=" position: relative; top: 310px; text-align: center;"> 
    <div class="name">
     <hr style=" border: 5px solid green; border-radius: 2px;"> 
    <h3 ><br> Thankyou For Visiting Pocket tv hope you tuned soon </h3>
</div>
    
  </div>

    <!-- Video uploaing area -->
  
  <div class="video-player" id="videoPlayer">
    <video width="100%" controls autoplay id="myVideo">
      <source url="media/vid1" type="video/mp4">
    </video>
    <img src="media/close.png" class="close-btn" onclick="stopVideo()">
    
  </div>
  <!-- <div class="video-player" id="videoPlayer">
    <video width="100%" controls autoplay id="myVideo">
      <source src="media/vid2.mp4" type="video/mp4">
    </video>
    <img src="media/close.png" class="close-btn" onclick="stopVideo()">
    
  </div> -->

  <script>
    var videoPlayer = document.getElementById("videoPlayer");
    var myVideo = document.getElementById("myVideo");

    function stopVideo(){
      videoPlayer.style.display = "none"
    }
    function playVideo(file){
      myVideo.src = file;
      videoPlayer.style.display ="block"
    }


  </script>

<script type="text/javascript">
  var slides = document.querySelectorAll('.slide');
  var btns = document.querySelectorAll('.btn');
  let currentSlide = 1;

  // Javascript for image slider manual navigation
  var manualNav = function(manual){
    slides.forEach((slide) => {
      slide.classList.remove('active');

      btns.forEach((btn) => {
        btn.classList.remove('active');
      });
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
  }

  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      manualNav(i);
      currentSlide = i;
    });
  });

  // Javascript for image slider autoplay navigation
  var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
      setTimeout(function(){
        [...active].forEach((activeSlide) => {
          activeSlide.classList.remove('active');
        });

      slides[i].classList.add('active');
      btns[i].classList.add('active');
      i++;

      if(slides.length == i){
        i = 0;
      }
      if(i >= slides.length){
        return;
      }
      repeater();
    }, 10000);
    }
    repeater();
  }
  repeat();
  </script>

  
</body> 
<script src="script.js"></script> 
</html>
