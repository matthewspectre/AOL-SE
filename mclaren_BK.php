<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar-container {
  display: flex;
  justify-content: center;
  background-color: #f3f3f3;
  border: 1px solid #e7e7e7;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #A39B99;
}

.slideshow-container {
  position: relative;
  max-width: 800px;
  margin: auto;
  margin-top: 20px;
}

.mySlides {
  display: none;
}

img {
  width: 100%;
  height: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.thumbnail-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.thumbnail-container img {
  width: 100px;
  height: auto;
  margin: 0 5px;
  cursor: pointer;
  transition: transform 0.2s;
}

.thumbnail-container img:hover {
  transform: scale(1.1);
}

.car-name {
  text-align: center;
  font-weight: bold;
  margin-top: 10px;
  font-size: 32px; 
}

.car-details {
  margin: 20px auto;
  max-width: 600px;
}

.detail-item {
  border: 1px solid rgba(0, 0, 0, 0.2); 
  padding: 10px;
  margin-bottom: 10px;
  background-color: rgba(255, 255, 255, 0.7); 
}

.detail-item p {
  margin: 5px 0;
  font-weight: bold;
}

.footer {
  background-color: #fff; 
  color: #000; 
  text-align: center;
  padding: 20px 0;
  position: fixed;
  width: 100%;
  bottom: 0;
  box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.1); 
}

.footer p {
  margin: 0;
}

.footer-text {
  text-align: left;
  float: left;
  margin-left: 20px;
}

.footer-text strong {
  font-weight: bold;
  font-size: 24px; 
}

.footer-phone {
  text-align: center;
  font-weight: bold;
  font-size: 50px; 
}

</style>
</head>
<body>

<div class="navbar-container">
  <ul>
    <li><a href="home.php">HOME</a></li>
    <li><a href="bodykit.php">BODY KIT</a></li>
    <li><a href="stockcar.php">STOCK CAR</a></li>
    <li><a href="autoparts.php">AUTO PARTS</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>
</div>

<div class="slideshow-container">

  <div class="mySlides">
    <img src="mclaren650s.jpg" alt="Countach" width="800" height="500">
  </div>

  <div class="mySlides">
    <img src="mclaren650s2.jpg" alt="Another Image" width="800" height="500">
  </div>
  <div class="mySlides">
    <img src="mclaren650s3.jpg" alt="Another Image" width="800" height="500">
  </div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div class="car-name">Mclaren 650S</div>

<div class="thumbnail-container">
  <img src="mclaren650s.jpg" alt="Countach" onclick="currentSlide(1)">
  <img src="mclaren650s2.jpg" alt="Another Image" onclick="currentSlide(2)">
  <img src="mclaren650s3.jpg" alt="Another Image" onclick="currentSlide(3)">
</div>

<div class="car-details">
  <div class="detail-item">
    <p>Front Bumper / Front Diffuser / Rear Diffuser / Rear Wing / Duct Bonnet Hood / Wide Fender</p>
    <hr>
    <p>$6,578</p>
  </div>
  <div class="detail-item">
    <p>Singels Item</p>
    <hr>
    <p>Front Bumper</p>
    <p>$1,650</p>
    <hr>
    <p>Front Diffuser </p>
    <p>$1,430</p>
    <hr>
    <p>Rear Diffuser</p>
    <p>$880</p>
    <hr>
    <p>Rear Wing</p>
    <p>$1,023</p>
    <hr>
    <p>Duct Bonnet Hood</p>
    <p>$3,850</p>
    <hr>
    <p>AlphaRex LED Headlights ［LB Model］</p>
    <p>$2,400</p>
  </div>
  <br><br><br>
</div>





<div class="footer">
  <div class="footer-text">
    <p><strong>PASSION OF WHEELS</strong> | Customer Service</p>
  </div>
  <div class="footer-phone">
    <p><strong>0895-3832-85489</strong></p>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
