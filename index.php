<?php getenv('adminkey'); ?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #CCCCCC
  }
  .navbarmain {
  overflow: hidden;
  background-color: #333;
  width: 100%;
  }
  .navbar {
  overflow: hidden;
  background-color: #333;
  text-align: center;
  margin-left: auto;
  margin-right: auto;

  }
  
  .navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  }
  
  .dropdown {
  float: left;
  overflow: hidden;
  }
  
  .dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
  }
  
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }
  
  .dropdown-content .ahref12 {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  }
  
  .dropdown-content a:hover {
  background-color: #ddd;
  }
  .dropdown:hover .dropdown-content {
  display: block;
  }
</style>
  </head>
  <body>
  <div class="navbarmain">
  <div class="navbar">
  <a href="docs/directory.html">Docs</a>
  <a href="changelog.html">Change Log</a>
  <a href="maps.html">DEADMATH Maps</a>
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <p id="copynotice"></p>
      <a class="ahref12" href="managelicense.php">Manage License</a>
      <a class="ahref12" href="https://discord.com/channels/932047378616291329/968523555878895616" target="_blank">Get License Key</a>
      <a class="ahref12" href="#endsession">Log Out</a>
    </div>
  </div>
  </body>
  </html>