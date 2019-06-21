<?php  
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

?>
<div class="row"> 
<div class="top-bar" id="example-menu">
  <?php if (!$loggedin&&!$startGame) { ?>
<div class="top-bar-left">
        <li class="menu-text"><a href="index.php">Team | Ball</a></li>
  <div class="row small-centered">
     <div class="button success full">
    <a class="full" href="<?php echo $actual_link ?>?page=login">Login</a>
    </div>
    <div class="button warning">
    <a href="<?php echo $actual_link ?>?page=register"><span class='success'>Register</span></a>
  </div>
  </div>
  </div>
 
 <?php }else{ ?>
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="has-submenu">
        <a href="#"><span class="secondary badge"><i class="fi-power"></i></span></a>
        <ul class="submenu menu vertical" data-submenu>

          <li><a onclick='quitGame();' >MatchUp!</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">three</a></li>
        </ul>
      </li>
      </li>
      <li><a href="#" onclick='showPlayerForm();'><span class="primary badge"><i class="fi-plus"></i></span></a></li>
    <li>
  
    </li>
    </ul>
    </div>

<?php } ?>
    <!--<div class="top-bar-right">-->
      <div id='resptxt'></div>
  <?php if ($loggedin) { ?>
       <!-- <div id='NEWTEST'></div> -->
    <div class="alert button full"> 
      <a href="<?php echo $actual_link ?>?page=logout">Logout</a>
    </div>

    <?php 
    if($startGame){
    ?>
    <div class="top-bar-right">

<h4><?php echo $_SESSION['teamName']; ?> <strong>vs.</strong> <?php echo $_SESSION['opponentName']; ?></h4>

</div>
    <?php } ?>

  <?php }else{ 
  ?>
 
 
  <?php } ?>
</div>
</div>
</div>
