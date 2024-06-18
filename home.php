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

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
}

.image-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.image-container img {
  margin: 0 10px;
  position: relative;
  cursor: pointer; 
}

.image-wrapper {
  display: flex;
  position: relative;
}

.text-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 24px;
  font-weight: bold;
  text-shadow: 2px 2px 4px #000000;
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
.slideshow {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
  }

</style>
</head>
<body>

<div class="navbar-container">
  <ul>
    <li><a class="active" href="#home">HOME</a></li>
    <li><a href="bodykit.php">BODY KIT</a></li>
    <li><a href="stockcar.php">STOCK CAR</a></li>
    <li><a href="autoparts.php">AUTO PARTS</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>
</div>

<img src="cuntach.jpg" alt="Countach" width="800" height="500" >

<div class="image-container">
  <div class="image-wrapper">
    <a href="stockcar.php">
      <img src="s15.jpg" alt="S15" width="400" height="250">
      <div class="text-overlay">STOCK CAR</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="bodykit.php">
      <img src="86.jpg" alt="86" width="400" height="250">
      <div class="text-overlay">BODY KIT</div>
    </a>
  </div>
</div>
<div class="footer">
  <div class="footer-text">
    <p><strong>PASSION OF WHEELS</strong> | Customer Service</p>
  </div>
  <div class="footer-phone">
    <p><strong>0895-3832-85489</strong></p>
  </div>
</div>
</div>
</body>
</html>
<script>
  var images = ["cuntach.jpg", "countach2.jpg", "countach3.jpg", "countach4.jpg", "countach5.jpg"];
  var currentIndex = 0;
  var imgElement = document.querySelector('img[src="cuntach.jpg"]'); 

  function changeImage() {
    currentIndex = (currentIndex + 1) % images.length; 
    imgElement.src = images[currentIndex]; 
  }

  setInterval(changeImage, 1000); 
</script>