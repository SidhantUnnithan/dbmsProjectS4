<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/914f58546c.js" crossorigin="anonymous"></script>
	<title>
		Booking
	</title>
	<link rel = "icon" href = "https://freepngimg.com/download/popcorn/23057-2-popcorn-transparent-image.png">
</head>
<body style="background: rgb(255, 194, 195);">
	
	
	<div style="margin-left: 70px; margin-top: 10px; margin-right: 70px";>
		<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><strong>Enter Your Details</strong></h3>
		<form action="dbmsprojdet1.php" method="get">
 			 <div class="row">
 			    <div class="col">
 			     <input type="text" class="form-control" placeholder="First name" name="f_name">
 			    </div>
                
                <div class="col">
 			     <input type="text" class="form-control" placeholder="Last name" name="l_name">
 			    </div>
			  </div>
			  
			  <label class="my-2 mr-2" for="inlineFormCustomSelectPref">Email</label>
			<br>
				<input type="email" class="form-control" name="email_id" placeholder="example@example.com"> 
			</br>
              
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Movie</label>
  			<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="movie">
  			  <option selected>Select a Movie</option>
  			  <option value="Parasite" <?= $_GET['movie'] == "Parasite" ? "selected = selected" : ""; ?>>Parasite</option>
  			  <option value="ZombieLand Double Tap" <?= $_GET['movie'] == "Zombie" ? "selected = selected" : ""; ?>>ZombieLand 2 : Double Tap</option>
  			  <option value="1917" <?= $_GET['movie'] == "1917" ? "selected = selected" : ""; ?>>1917</option>
  			  <option value="Joker" <?= $_GET['movie'] == "Joker" ? "selected = selected" : ""; ?>>Joker</option>
  			</select>
              
  	
			<label class="my-1 mr-2" for="inlineFormCustomSelectPref">No of Tickets</label>
			<br>
				<input type="number" class="form-control" min="1" max="10" name="NoT">
			</br>
  		

			<div style="margin-top: 20px;">
 				<input type="submit" class="btn btn-primary" value="Submit">			
 			</div> 
  			</div>
  			</div>

  			
		</form>

		<?php
			
    	?> 
	</div>	

</body>
</html>