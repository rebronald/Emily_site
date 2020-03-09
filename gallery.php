<?php include "top_bit.php"; ?>

		<!-- Main content -->
		<main class="box">
			<h2>Gallery</h2>
			
			<p>
				Here are a handful of images of Alberton House
			</p>
			
			<!-- Start of image and grid set up -->
			<div class="gallery">
			
				<!-- image link -->
				<div class="fronthouse">
					<img class="allround" src="images/gallery_images/front_house_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="whitegate">
					<img class="allround" src="images/gallery_images/white_gate_op.jpg" alt="Image from front of Alberton House" width="250" height="250">
				</div>
			
				<!-- image link -->
				<div class="sewing">
					<img class="allround" src="images/gallery_images/old_sewing_machine_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="teatable">
					<img class="allround" src="images/gallery_images/tea_table_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="couch">
					<img class="allround" src="images/gallery_images/red_laying_couch_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="sewingmaterial">
					<img class="allround" src="images/gallery_images/sewing_material_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="kitchen">
					<img class="allround" src="images/gallery_images/kitchen_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="quainttable">
					<img class="allround" src="images/gallery_images/quaint_table_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="statueglasses">
					<img class="allround" src="images/gallery_images/statue_glasses_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="morestuff">
					<img class="allround" src="images/gallery_images/more_stuff_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="harrysbedroom">
					<img class="allround" src="images/gallery_images/harrys_bedroom_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
				<!-- image link -->
				<div class="bedroom">
					<img class="allround" src="images/gallery_images/bed_room_op.jpg" alt="Image of front of Alberton House" width="250" height="250">
				</div>
				
			</div> 
			<!-- end of grid set up-->
			
		</main>
		
		<!-- Aside Content-->
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
		
			
			<!-- poll code -->
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
			
				<h3>Do you like these images?</h3>
				
				<form>
				Yes:
				<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
				<br>No:
				<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
				</form>
				
			</div>
			
		</aside>
		
<?php include "bottom_bit.php"; ?>

