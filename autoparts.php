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
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.image-item {
  margin: 10px;
  text-align: center;
}

.image-item img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.image-item p {
  margin-top: 10px;
  font-size: 16px;
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
    <li><a class="active" href="#autoparts">AUTO PARTS</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>
</div>

<div class="image-container">
  <div class="image-item">
    <img src="1.jpg" alt="">
    <p>Chase Bays Hydro Handbrake</p>
    <p>¥42,750</p>
  </div>
  <div class="image-item">
    <img src="2.jpg" alt="">
    <p>Chase Bays Dual Piston Brake Booster Delete With Bolt-On 6:1 Pedal Ratio</p>
    <p>¥104,500</p>
  </div>
  <div class="image-item">
    <img src="3.jpg" alt="">
    <p>URAS SILVIA/180SX SIDE BRAKE ASSIST LEVER</p>
    <p>¥12,000</p>
  </div>
  <div class="image-item">
    <img src="4.jpg" alt="">
    <p>Rays Limited Edition Gramlights 57DR 17x9J+12</p>
  </div>
  <div class="image-item">
    <img src="5.jpg" alt="">
    <p>Thrash Racing Suede Steering wheel Blue/Black</p>
    <p>¥12,000</p>
  </div>
  <div class="image-item">
    <img src="6.jpg" alt="">
    <p>Alpha (AP Racing) Driving Gloves Light Blue/Purple Logo</p>
    <p>¥10,000</p>
  </div>
  <div class="image-item">
    <img src="7.jpg" alt="">
    <p>Alpha (AP Racing) Driving Gloves Pink/Purple Logo</p>
    <p>¥10,000</p>
  </div>
  <div class="image-item">
    <img src="8.jpg" alt="">
    <p>Alpha (AP Racing) Driving Gloves Blue/Purple Logo</p>
    <p>¥10,000</p>
  </div>
  <div class="image-item">
    <img src="9.jpg" alt="">
    <p>Thrash Racing Pro Spec Sigma Blue/Black FRP</p>
    <p>¥110,000</p>
  </div>
  <div class="image-item">
    <img src="10.jpg" alt="">
    <p>Thrash Racing Circuit Spec Omega Red/Black FRP</p>
    <p>¥105,000</p>
  </div>
  <div class="image-item">
    <img src="11.jpg" alt="">
    <p>Thrash Racing Race Spec Nu Black/Black FRP FIA Legal</p>
    <p>¥143,000</p>
  </div>
  <div class="image-item">
    <img src="12.jpg" alt="">
    <p>D-Max GT Wing Racing Spec Ver Set</p>
    <p>¥165,000</p>
  </div>
  <div class="image-item">
    <img src="13.jpg" alt="">
    <p>D-Max Silvia S14/S15 FRONT LOWER ARM with TENSION ROD Set</p>
    <p>¥99,000</p>
  </div>
  <div class="image-item">
    <img src="14.jpg" alt="">
    <p>ORIGIN LABO Silvia S13/180SX Front High Angle Tension Rod Offset Type 2</p>
    <p>¥22,000</p>
  </div>
  <div class="image-item">
    <img src="15.jpg" alt="">
    <p>TRUST/GREDDY TD06S L2-20RX 8/10CM TURBO</p>
    <p>¥233,000Price</p>
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
</body>
</html>
