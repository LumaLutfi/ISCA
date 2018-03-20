<?php
include 'header.php';
?>
<link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
<link rel="stylesheet" href="css/slides.css">


<style>
    #font{
        font-variant: small-caps;
        font-weight: bold;
        font-size: 60px;
        color: black;
     }
     #test{
          font-family: 'Droid Arabic Kufi',sans-serif;
          font-size: 60px;
     }
     @font-face{
              }
      .jumbotron{
       background: linear-gradient(to right, #3399ff 0%, #ccff99 100%);
      }

    </style>

  <div class="jumbotron">
    <div class="container-fluid text-center" style="display: block;">
      <div class="col-md-12 col-xs-12 col-sm-12">
    <div id="font">Iraqi Society Club of Alberta</div>
    <div id="test" style="color: white;">النادي العراقي الاجتماعي في البرتا</div>
      </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1/10</div>
      <img src="img/flag.jpg" style="width:100% " class="img_slide">
      <div class="text">العلم العراقي</div>
    </div>

  <div class="mySlides fade">
    <div class="numbertext">2/10</div>
    <img src="img/pic1.jpg" style="width: 100% " class="img_slide">
    <div class="text"> نبوخذنصر</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3/10</div>
    <img src="img/pic2.jpg" style="width: 100%" class="img_slide">
    <div class="text"> اسد بابل</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4/10</div>
    <img src="img/pic3.jpg" style="width: 100%" class="img_slide">
    <div class="text"> بوابة عشتار</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5/10</div>
    <img src="img/pic4.jpg" style="width: 100%" class="img_slide">
    <div class="text"> جامع الامام علي</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6/10</div>
    <img src="img/pic5.jpg" style="width: 100%" class="img_slide">
    <div class="text"> كنيسة الارمن في الباب الشرقي </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7/10</div>
    <img src="img/pic6.jpg" style="width: 100%" class="img_slide">
    <div class="text">مطعم الجادرية العائم</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8/10</div>
    <img src="img/pic7.jpg" style="width: 100%" class="img_slide">
    <div class="text"> مطعم عيون بغداد</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">9/10</div>
    <img src="img/pic8.jpg" style="width: 100%" class="img_slide">
    <div class="text"> فندق بابلون</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">10/10</div>
    <img src="img/pic9.jpg" style="width: 100%" class="img_slide">
    <div class="text"> بغداد مول</div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <div class="container">
<div class="row">
  <div class="text-center">
    <h1> WELCOME TO ISCA </h1>
    <div style="font-size:30px;">
      ISCA is a Candadian non-for-profit. family-oriented organization that aims to preserve the Iraqi
      culture to foster its pride and feeling of the belonging to its culture. </div>
      <div><h3>This will be promoted by the Iraqi Canadian into our beloved Canadian community.</h3></div>
        <div><h3> ISCA is not affiliated with any prolitical or religious organizations.</h3></div>
  </div>
</div>
</div>

<script>
var slideIndex =0;
showSlides();

function showSlides(){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots= document.getElementsByClassName("dot");
  for (i = 0; i <slides.length; i++){
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i=0; i < dots.length; i++){
    dots[i].className = dots[i].className.replace(" active","");
  }
  slides[slideIndex-1].style.display="block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); //change image every 2 sconds
}
</script>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MAKE PEOPLE HAPPY AND SMILE</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">We do donate food for many Calgarian organizations and do the right integration with Canadian societies.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">BEST INTEGRATION WITH CANADA AND ALBERTA</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">We do participate in environmental activities because we love Canada.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">SOCIAL MEETUPS AND DOING THINGS TOGETHER</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">We are a social not for profit society.</div>
      </div>
    </div>
  </div>
</div><br>
<br>

<?php
include 'footer.php';
