<?php include "top_bit.php"; ?>

		<!-- Main Content -->
		<main class="box">
			<h2>Alberton House General Costs and Open times</h2>
			
				<h3>General Opening Hours:</h3>  
				
			<p>
				Wednesday - Sunday 
				<br>
				10:30 am - 4:30 pm
				<br>
				Closed Christmas Day and Good Friday. 
			</p>
			<p>
				If you are going in general times then you won't be hiring and simply entry cost are $10 for an adult and free for children.
			</p>
			
			<!-- Images and grid set up -->
			<div class="opentimeimages">
				<div class="teacups">
					<img class="allround" src="images/tea_cups_op.jpg" alt="Image of Ballroom in Alberton House" width="250" height="250">
				</div>

				<div class="cabinets">
					<img class="allround" src="images/cabinets_stuff_op.jpg" alt="Image of mirror with statue and glasses" width="250" height="250">
				</div>
				
			</div>
			
			<p>
				For hiring as a venue please contact  (09) 846 7367 or email alberton@heritage.org.nz.
			</p>
		</main>
		
		<!-- Aside Content -->
		<aside class="box">
		
			<h2>For more info:</h2>
			
			<!-- list of extra info -->
			<ul>
				<li> <a href="http://www.heritage.org.nz/places/places-to-visit/auckland-region/alberton"> Heritage page on Alberton House </a></li>
				<li> Contact: 
					<ul>
						<li>+64 9 846 7367</li>
						<li><b>Email:</b></li>
						<li>alberton@heritage.org.nz</li>
					</ul>
				</li>
			</ul>
		
			<!-- Poll Code -->
			<script>
				function getVote(int) {
				  if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				  } else {  // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
					  document.getElementById("poll").innerHTML=this.responseText;
					}
				  }
				  xmlhttp.open("GET","polls/cost_opentimes_poll.php?vote="+int,true);
				  xmlhttp.send();
				}
			</script>
			
			<div id="poll">
			
				<h3>Was this page helpful?</h3>
				
				<form>
				Yes:
				<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
				<br>No:
				<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
				</form>
				
			</div>
			
		</aside>
		
<?php include "bottom_bit.php"; ?>

