
<div class='row'>
	<!-- AJAX and PHP generated homeTeamList -->
	<div class="columns small-2">
			<h5><?php echo $_SESSION['teamName']; ?> Player List</h5>

		<div id='homeList'>
	 <ul id='homeTeamList' class='vertical menu' data-accordion-menu data-multi-open='false'>

	 </ul>
	 </div>
	 </div>
	<div class="small-8 columns">
		<div id='courtImage'>
		<img id="court" src="img/BasketballCourt.png" alt="">
		
		<!-- Event Pop-up -->
<!--<div class="row">-->
<!--  <div class="columns small-4">-->
    <div class='infobox' id='shotbox'>
    	<div class="row">
    	<!-- Made shot button  #2 -->
    	<div class="columns small-12">
		<button onclick='pickPlayer();targetPlayer("made")'><span name='shotMade'class='shotboxBtn badge success'><i class='fi-check'></i></span></button>
		<!-- missed shot button  #0 -->
		<button onclick='pickPlayer();targetPlayer("miss")'><span name='shotMiss'class='shotboxBtn badge alert'><i class='fi-x'></i></span></button>
		<!-- cancle button #-->
		<button onclick='cancle()'><span id='cancle'class='shotboxBtn badge secondary'><i class='fi-loop'></i></span></button>
		<!-- Traveling button #10-->
		<span onclick='pickPlayer();targetPlayer("travel")' id=''class='shotboxBtn badge warning'><i id=''class='fi-alert'></i></span>
		<!-- Shot Block #4-->
		<span onclick='pickPlayer();targetPlayer("block")'id=''class='shotboxBtn badge warning'><i id=''class='fi-pause'></i></span>
		<!-- assists button #6 -->
		<span onclick='pickPlayer();targetPlayer("assist")'id=''class='shotboxBtn badge'><i id=''class='fi-torsos'></i></span>	
		<!-- turnover #8 -->
		<span onclick='pickPlayer();targetPlayer("rebound")'id=''class='shotboxBtn badge warning'><i id=''class='fi-arrow-down'></i></span>
		<!-- foul #9-->
		<span onclick='pickPlayer();targetPlayer("foul")'id=''class='shotboxBtn badge warning'><i id=''class='fi-skull'></i></span>

		<!-- freethrow #1 -->
		<span onclick='pickPlayer();targetPlayer("freethrow")'id=''class='shotboxBtn badge'><i id=''class='fi-marker'></i></span>
		<!-- steal #5 -->
		<span onclick='pickPlayer();targetPlayer("steal")'id=''class='alert shotboxBtn badge'><i id=''class='fi-shuffle'></i></span>
		<!-- three pointer #3 -->
		<span onclick='pickPlayer();targetPlayer("three")'id=''class='shotboxBtn badge'><i id=''class='fi-css3'></i></span>
		</div>
		</div>
	</div>
<!--  </div>-->
<!--</div>-->

		<!-- Event Pop-up -->
<!--<div class="row">-->
<!--  <div class="columns small-4">-->
 <!--   <div class='infobox' id='shotbox'>-->
 <!--   	<div class="row">-->
    	<!-- Made shot button  #2 -->
 <!--   	<div class="columns small-12">-->
	<!--	<button onclick='$event("fi-check", "green", "made was clicked event FUNCTION", "made")'><span name='shotMade'class='shotboxBtn badge success'><i class='fi-check'></i></span></button>-->
		<!-- missed shot button  #0 -->
	<!--	<button onclick='$event("fi-x", "red", "X was clicked for a missed shot", "miss")'><span name='shotMiss'class='shotboxBtn badge alert'><i class='fi-x'></i></span></button>-->
		<!-- cancle button #-->
	<!--	<button onclick='cancle()'><span id='cancle'class='shotboxBtn badge secondary'><i class='fi-loop'></i></span></button>-->
		<!-- Traveling button #10-->
	<!--	<span onclick='$event("fi-alert", "yellow", "Travel was clicked for a traveling call", "travel")' id=''class='shotboxBtn badge warning'><i id=''class='fi-alert'></i></span>-->
		<!-- Shot Block #4-->
	<!--	<span onclick='$event("fi-pause", "yellow", "Block was clicked for a Blocked Shot", "block")'id=''class='shotboxBtn badge warning'><i id=''class='fi-pause'></i></span>-->
		<!-- assists button #6 -->
	<!--	<span onclick='$event("fi-torsos", "#088da5", "Nice pass for the Assist! ", "assist")'id=''class='shotboxBtn badge'><i id=''class='fi-torsos'></i></span>	-->
		<!-- turnover #8 -->
	<!--	<span onclick='$event("fi-down", "#ff3300", "Nice Rebound!!! ", "rebound")'id=''class='shotboxBtn badge warning'><i id=''class='fi-arrow-down'></i></span>-->
		<!-- foul #9-->
	<!--	<span onclick='$event("fi-skull", "#ff3300", "Foul called on this", "foul")'id=''class='shotboxBtn badge warning'><i id=''class='fi-skull'></i></span>-->

		<!-- freethrow #1 -->
	<!--	<span onclick='$event("fi-marker", "#08a56f", "And one!! ", "freethrow")'id=''class='shotboxBtn badge'><i id=''class='fi-marker'></i></span>-->
		<!-- steal #5 -->
	<!--	<span onclick='$event("fi-shuffle", "#a52008", "Like taking candy from a baby! ", "steal")'id=''class='alert shotboxBtn badge'><i id=''class='fi-shuffle'></i></span>-->
		<!-- three pointer #3 -->
	<!--	<span onclick='$event("fi-css3", "#a5088d", "Three pointer from DOWNTOWN!!! ", "three")'id=''class='shotboxBtn badge'><i id=''class='fi-css3'></i></span>-->
	<!--	</div>-->
	<!--	</div>-->
	<!--</div>-->
<!--  </div>-->
<!--</div>-->
		
		
		
		
	</div>
	</div>
	
	
	
	
	
	
	
<!--	<div class="columns small-2">-->
<!--		<h5><?php echo $_SESSION['opponentName']; ?> Player List</h5>-->
		<!--<div id='visitorList'>-->
		<!--	<ul id='visitorTeamList'>-->
		<!--</div>-->
<!--hi-->
<!--	</ul>-->
<!--	</div>-->
	
	<!--////////  ADD PLAYER FORM  //////////////-->
	
	 <div id='addPlayerForm'>
    <a href="#" onclick="hide();" title="Close" class="close">X</a>

  <form action=""method=''>
<input type="text" id='cacheControl' value='<?php echo Date('Y m/d h:i a'); ?>' >
 <input type="text" name='teamId' id='teamIdTag' value="<?php echo $_SESSION['teamId']; ?>">
  <div class="row">
     <div class="small-5 columns large-2">
       <label>First Name
         <input type="text" name='firstName'id='firstName'placeholder="First Name">
       </label>
     </div>
     <div class="medium-5 columns">
       <label>Last Name
         <input type="text" name='lastName'id='lastName'placeholder="Last Name">
       </label>
     </div>
     <div class="medium-2 columns">
      <label>
        Player #
        <input type="number" name='playerNumber'id='playerNumber'value="10">
      </label>
     </div>
   </div>
   <div class="row">
    <div class="columns medium-6">
      <label>
         Player Notes
        <textarea name='playerNotes'id='playerNotes' placeholder="None"></textarea>
      </label>
    </div>
    <div class="columns medium-6">
      <label>Select Position
        <select name='playerPosition'id='playerPosition'>
          <option value="Point Guard">Point Guard</option>
          <option value="Shooting Guard">Shooting Guard</option>
          <option value="Small Forward">Small Forward</option>
          <option value="Power Forward">Power Forward</option>
          <option value="Center">Center</option>
        </select>
      </label>
    </div>
   </div>
   <div class="row">
     <fieldset class="large-4 columns">
       <legend>Starter</legend>
       <input aria-describedby="starterHelpText" type="radio" name="starter" value="yes" id="starter" required><label for="starter">Yes</label>
       <input type="radio" name="starter" value="no" id="nostart"><label for="nostart">No</label>
     </fieldset>
 <p class="help-text" id="starterHelpText">Is this player going to start?</p>
  <div class="column small-6">
  	<a href="#close">
  	<a href="#" onclick="hideAddPlayerForm();" title="" class="button alert">Cancle</a>
    <input class='button' onClick='sendRoster();hideAddPlayerForm();'name='addplayer'id='addPlayerBtn' value='Add Player'></a>
  
  </form>
 </div>
</div>
</div>
<!--  End player form   -->
</div>



<div class="row ">
	<div class="columns text-justify small-12">
		<div class="row">
			
			<div id='homeTeamEvents' class="columns small-4">
				
				<div class="row collapse">
					<div class="colums small-12">
							
					</div>
				</div>
			</div>
				

				
				<div id="gameClock"class="small-4 columns">
				  	<div class="row">
				  		<div class="columns small-3">
				  			<ul>
				  				<li><span id='minusMinuteBtn'class='clockButtons badge primary'><i class='fi-minus'></i></span></li>
				  				<li><span id='plusMinuteBtn'class='clockButtons badge primary'><i class='fi-plus'></i></span></li>
				  			</ul>
				  		</div>
				  		<div class="columns small-6"><span id='gameTime'>00:02</span>
				  		</div>
						<div class="columns small-3">
							<ul>
								<li><span id='minusSecondBtn'class='clockButtons badge primary'><i class='fi-minus'></i></span></li>
								<li><span id='plusSecondBtn' class='clockButtons badge primary'><i class='fi-plus'></i></span></li>
							</ul>
						</div>
				  	</div>
				  	<div class="row">
				  		<div class="subButtons columns small-12 text-justify">
				  			<span id='rewindClockBtn'class='playButtons badge primary'><i class='fi-rewind'></i></span>
				  			<span id='playClockBtn' class='playButtons badge success'><i class='fi-play'></i></span>
				  			<span id='stopClockBtn' class='playButtons badge alert'><i class='fi-stop'></i></span>
				  			<span id='pauseClockBtn'class='playButtons badge secondary'><i class='fi-pause'></i></span>
				  			<span id='fastForwardClockBtn'class='playButtons badge primary'><i class='fi-fast-forward'></i></span>
				  		</div>
				  	</div>
				  	</div>
			Visitor Event List
		
				<div id='visitorTeamEvents' class="columns small-4">
					<div class="row collapse">
						<div class="colums small-12">
						</div>
					</div>
				</div>
				</div>
			</div>



		</div>
	</div>
	
 <?php
//  include 'connection/database.php';
// global $db;
// $sql = "SELECT * FROM teams WHERE teamName = '$_SESSION[teamName]'";
// $rsd = mysqli_query($db, $sql) or trigger_error(mysqli_error($db)." in ".$sql);
// while($row = mysqli_fetch_assoc($rsd)) { 
// $teamId=$row['teamId'];
//  } ?>

		<input id='shotId'type="hidden" name='shotId' value=''>
		<input id='eventCoordsX'type="hidden" name='eventCoordsX' value=''>
		<input id='eventCoordsY'type="hidden" name='eventCoordsY' value=''>
		<input id='playerId'type="hidden" name='playerId' value=''>
		<input id='player'type="hidden" name='player' value=''>
		<input id='foundIcon'type="hidden" name='foundIcon' value=''>
		<input id='iconColor'type="hidden" name='iconColor' value=''>
		<!--<input id='teamId' type="hidden" name='teamId' value='<?php //echo $_SESSION['teamId']; ?>'>-->

		<button class='hidden'onClick='javascript:sendStats();'id='submitEvent'name='eventSubmit'>Submit</button>



 



