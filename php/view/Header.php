<?php
//Attribution des variables de session
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>

<body>
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      Website
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  

  <div class="nav-links">
  <?php if ($pseudo!=""){ 
        echo '<div class="centrer">'.$pseudo.'</div>
              <a href="index.php?action=deconnect">Se déconnecter</a>';
            //   header("refresh:1,url=");
        }
    ?>
   
  </div>
</div>
