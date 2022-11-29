
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHOTO</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
  

  <div class="camera-container">
    
    <form action="..\email\email.php"method = "POST" >
      <div class="heading">
        
       <?php      
      
       $inome = $_POST['inome'];
       $imotor = $_POST['imotor'];
       $icarretaA = $_POST['icarretaA'];
        $icarretaB = $_POST['icarretaB'];  
       echo "$inome, $imotor, $icarretaA, $icarretaB";     
       
       ?>
       
      </div>
      <button class="photobtns" type="submit" >ENVIAR PARA EMAIL</button>
    </form>

    <div class="screen"><canvas class="cameraScreen"></canvas></div>
    <video class="camera"></video>
    <div class="controls"><button class="photobtn"><div class="inner-circle"></div></button></div>
    <div class="pic"></div>
  </div>

  <audio class="sound" src="camera-shutter-click-08.mp3" hidden></audio>

  <script src="./script.js"></script>
  <TABle></TABle>
  

</body>
</html>
