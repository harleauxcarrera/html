


<!DOCTYPE html>
<html>
<head>

  <title>Carlos Herrera</title>
  <link rel="icon" href="./Pics/icon.png"><!--tab icon-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main1.css">

</head>

<body>



<!-- Navbar (sit on top!) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <!--not needed?   removed: href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"-->
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" ></a>
    <a href="#home" class="w3-bar-item w3-button w3-hide-small">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#experience" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> EXPERIENCE</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <!--Social media links on the right side of the navbar-->

   <a href="https://www.facebook.com/profile.php?id=100009838722180"> <i class="fa fa-facebook fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="http://facebook.com" > <i  class="fa fa-instagram fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="https://twitter.com/HarleauxCarrera"> <i class="fa fa-twitter fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;" ></i></a>
    <a href="https://www.linkedin.com/in/carlos-herrera-a1580676/"> <i class="fa fa-linkedin fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>
    <a href="https://www.youtube.com/harleauxcarrera"> <i class="fa fa-youtube fa-3x w3-bar-item w3-hover-opacity w3-right" style = "color: grey;"></i></a>


  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">

    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#experience" class="w3-bar-item w3-button" onclick="toggleFunction()">EXPERIENCE</a>
    <a href="#" class="w3-bar-item w3-button"> SEARCH </a>


  </div>
</div>

<!-- First Parallax Image with Logo Text removed from class:w3-display-container -->
<div class="bgimg-1" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small"></span> CARLOS HERRERA</span>
  </div>
</div>


<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>1. cre·a·tion - the action or process of bringing something into existence.<br>
  2. cre·ate - to evolve from one's own thought or imagination, as a work of art or an invention.</em>
  </p>
  <p>I've always been fascinated by the idea of creation. There is nothing better than being able to see, touch, feel and even taste a finished product.
    I remember making bracelets and necklaces made out of hemp back in the day when I was in elementary school which followed into middle school. Once I got to
    highschool I got into creating music and blah blah blah
  </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <!--PROFILE PIC-->
      <img id = "profilePic" src="./Pics/me.png" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6  w3-padding-large " >
      <p id = "pexperience" class = "w3-round" >I am currently a senior at the University of Texas at El Paso pursuing a
      degree in Computer Science and will be graduating in May of 2018 with a minor in media production. I am looking for challenging opportunities
    to put my skillset to use. I am mainly interested in web and mobile application development but am open to other areas.
    My media production background has helped me with various aspects of front-end development including graphics and animation.
    Take a look at my portfolio to get a feel for some of the work that I have created. Some of the things I like to do include doing
    this and doin that and really im just filling in the rest of the contatiner so it looks equal heigth to the profile pic that I have
    right next to this container. lets see if that does it </p>
    </div>
  </div>

</div>

<div class="bgimg-4 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">

  </div>
</div>



<!-- Container (Experience Section) -->
<div class="w3-content w3-container " id="experience" >
  <h3 class="w3-center">EXPERIENCE</h3>


  <p class="w3-large w3-center w3-padding-16">Technical Skills:</p>

  <!--COLUMN 1 OF PROGRESS BAR SKILLS-->
<div class = col-md-4>
	<ul>
    <!--JAVA-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 70%">Java</div>
    </div>

      <!--JavaScript-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 40%" aria-valuemax="100">JavaSCript</div>
    </div>

       <!--HTML-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 60%" aria-valuemax="100">HTML</div>
    </div>

  </ul>
</div>


  <!--COLUMN 2 OF PROGRESS BAR SKILLS-->
<div class = col-md-4>
	<ul>
        <!--PHP-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 40%" aria-valuemax="100">PHP</div>
    </div>

        <!--Mysql-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 40%" aria-valuemax="100">Mysql</div>
    </div>

        <!--Nodejs-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 30%" aria-valuemax="100">Nodejs</div>
    </div>

  </ul>
</div>
<!--COLUMN 3 OF PROGRESS BAR SKILLS-->
<div class = col-md-4>
	<ul>
    <!--MongoDB-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 30%" aria-valuemax="100">MongoDB</div>
    </div>

  	    <!--React-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 30%" aria-valuemax="100">React</div>
    </div>

        <!--CSS-->
    <div class="progress">
    <div class="progress-bar" id="myProgressBarz" role="progressbar" style="width: 50%" aria-valuemax="100">CSS</div>
    </div>
  </ul>

</div>

</div>



<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="./Skeleton.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
    </div>

    <div class="w3-col m3">
      <img src="./Logo.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>

  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> El Paso, TX<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 915.920.3948<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: harleauxcarrera@gmail.com<br>
      </div>

                 <!--CONTACT FORM-->
      <p> Contact me:</p>
      <form action="./welcome.php" method="get">

        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">

          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name"  name="name">
          </div>

          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email"  name="email">
          </div>

           <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Message"  name="message">
          </div>


          <button class="w3-button w3-black w3-right w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND
          </button>



      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 ">
  <!--SOCIAL MEDIA CONCACT ICONS-->
  <a href="https://www.facebook.com/profile.php?id=100009838722180"> <i class="fa fa-facebook fa-2x w3-hover-opacity"></i></a>
  <a href="http://facebook.com"> <i class="fa fa-instagram fa-2x w3-hover-opacity"></i></a>
  <a href="http://twitter.com/harleauxcarrera"> <i class="fa fa-twitter fa-2x w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/carlos-herrera-a1580676/"> <i class="fa fa-linkedin fa-2x w3-hover-opacity"></i></a>
  <a href="https://www.youtube.com/harleauxcarrera"> <i class="fa fa-youtube fa-2x  w3-hover-opacity"></i></a>
</footer>



<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(31.7708544, -106.50462160000001);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--created API key for javascript in google API console to be able to use the google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqBZyEr4W2HKhbljzC6NMJy2o9ewZdgJY&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>