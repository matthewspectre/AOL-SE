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

.title {
  text-align: center;
  font-size: 32px;
  font-weight: bold;
  margin-top: 20px;
}

.image-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.image-wrapper {
  position: relative;
  margin: 10px;
  width: calc(30% - 20px); 
}

.image-wrapper img {
  max-width: 100%;
  height: auto;
  display: block;
  cursor: pointer; 
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
  pointer-events: none; 
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
    <li><a class="active" href="bodykit.php">BODY KIT</a></li>
    <li><a href="stockcar.php">STOCK CAR</a></li>
    <li><a href="autoparts.php">AUTO PARTS</a></li>
    <li><a href="login.php">LOGIN</a></li>
  </ul>
</div>

<div class="title">Body Kit</div>
<br><hr>

<div class="image-container">
  <div class="image-wrapper">
    <a href="fairlady.php">
      <img src="fiarlady.jpg" alt="Nissan Silvia Supper-Silhouette">
      <div class="text-overlay">lb★nation NISSAN Fairlady Z RZ34 (400Z)</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="s15_BK.php">
      <img src="s15.jpg" alt="Pandem GR86">
      <div class="text-overlay">LB-WOKRS Ferrari 488</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="countach_BK.php">
      <img src="countach2.jpg" alt="Pandem GR86">
      <div class="text-overlay">LB-WORKS COUNTACH</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="mclaren_BK.php">
      <img src="mclaren650s.jpg" alt="Pandem GR86">
      <div class="text-overlay">Mclaren 650S</div>
    </a>
  </div>
  <div class="image-wrapper">
    <a href="nsx.php">
      <img src="NSX.jpg" alt="Pandem GR86">
      <div class="text-overlay">Honda NSX (C1)</div>
    </a>
  </div>

<div class="footer">
  <div class="footer-text">
    <p><strong>PASSION OF WHEELS</strong> | Customer Service</p>
  </div>
  <div class="footer-phone">
    <p><strong>0895-3832-85489</strong></p>
  </div>

</body>
</html>
