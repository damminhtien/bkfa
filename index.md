<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=565933070461786&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

# BKFA

## Welcome to BKFA.com GitHub pages :sparkles: :sparkles: :sparkles:

### We are BKFA from HUST 

<b>Party with us</b>

<img src="https://octodex.github.com/images/yaktocat.png">

<img src="https://i.ytimg.com/vi/NLSue7sTDMo/maxresdefault.jpg">

<i> Our team </i>

<img src="https://media.giphy.com/media/1ZtmZoLRtnfjBW1giN/giphy.gif">

<img src="https://media.giphy.com/media/5wFUxatvUMXJ9JhpVp/giphy.gif">

<img src="https://media.giphy.com/media/1lwtswtRpqDBcn9UVI/giphy.gif">

<img src="https://media.giphy.com/media/d5qqj1zFg3Z3uLS2xS/giphy.gif">

<img src="https://media.giphy.com/media/3XA0mnQR0zhD7OZAbG/giphy.gif">

<i>Want music ? :bouquet: </i>

<iframe width="560" height="315" src="https://www.youtube.com/embed/dvntgt7IsOg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

# About BKFA.com
### Purpose

<p align="justify" >BKFA.com is a project of the BKFA team from HUST for the purpose of bringing the academic materials of the subjects / institutes to a storage facility. From there, students at the school and abroad can easily search and review the subjects within the framework of Hanoi University of Technology. In addition, people can update the study news, confession, tips from us. The project has been developed since February 2018.
</p>

<p align="center"><img src="https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAUmAAAAJDU0OTRjMjQ0LTU3MWMtNDJmOS05NzllLTU2Y2M2ZGFlOTZhYQ.jpg"></p>

### Technology

- Laravel framework (LAMP stack)
- Bootstrap 4.0 + Jquery
- Social plugin
- Another stylesheet css sources

### About BKFA

We are students of HUST   
- damminhtien
- trantrongbinh
- assassin881997
- 0henri0

with love <3

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img_fjords_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://hoc24h.vn//files/news/2018/03/06/bach%20khoa.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://vtv1.mediacdn.vn/thumb_w/650/2017/dh-bach-khoa-hn-1497407682437-1498352051118.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://thocuchuoi.com/wp-content/uploads/2016/10/c1bachkhoa-16x9.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://i.ytimg.com/vi/qM3jH3SoT9c/maxresdefault.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://image.vtc.vn/resize/720x480/files/news/2016/07/29/dh-bach-khoa-ha-noi-cong-bo-diem-san-xet-tuyen-nam-2016-194803.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="http://125.235.37.56//medias12/2015/10/15/ac253b5437b0ad320e03aa88de2dd134ee42c15a.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<div class="fb-share-button" data-href="https://damminhtien.github.io/bkfa/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdamminhtien.github.io%2Fbkfa%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
<div class="fb-like" data-href="https://damminhtien.github.io/bkfa/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
<div class="fb-comments" data-href="https://damminhtien.github.io/bkfa/" data-numposts="5"></div>
