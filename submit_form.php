<?php 
include('header.php');
?>
   <?php 
   //echo $_SESSION["uid"];
   if(isset($_SESSION['uid']))
   {
	   /*include('connect.php');
	   $id=$_SESSION['uid'];
	   $sql = "SELECT * FROM user where ID = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["Name"];
		

   }
}*/
?>
<div class="row"><ul>
   <br><br><br><br>
		
			<form role="form" action="submit_movie_db.php" method="POST">
			<div class="col-md-6">
				<div class="form-group">
					<label for="usr">Title:</label>
					<input type="text" class="form-control" name="title" required>
				</div>
			
				<div class="form-group">
					<label for="usr">Release Date:</label>
					<input type="date" class="form-control" name="date" required>
				</div>
				
				<div class="form-group">
					<label for="usr">Duration:</label>
					<input type="number" class="form-control" name="duration" required> (Minutes)
				</div>
				
				<div class="form-group">
					<label for="usr">Director:</label>
					<input type="text" class="form-control" name="director" required>
				</div>
				
				<div class="form-group">
					<label for="usr">Writer:</label>
					<input type="text" class="form-control" name="writer" required>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="usr">Plot:</label>
					<textarea rows="4" cols="50" class="form-control" name="plot" required></textarea> 
				</div>
				
				<div class="form-group">
					<label for="usr">Starring:</label>
					<input type="text" class="form-control" name="actor" required>
				</div>
				
				<div class="form-group">
					<label for="usr">Genre:</label><br>
					<input type="checkbox" name="cat[]" value="Action"> Action  
					<input type="checkbox" name="cat[]" value="Adventure"> Adventure  
					<input type="checkbox" name="cat[]" value="Comedy"> Comedy 
					<input type="checkbox" name="cat[]" value="Crime"> Crime 
					<input type="checkbox" name="cat[]" value="Documentary"> Documentary <br>
					<input type="checkbox" name="cat[]" value="Drama"> Drama 
					<input type="checkbox" name="cat[]" value="Family"> Family 
					<input type="checkbox" name="cat[]" value="History"> History 
					<input type="checkbox" name="cat[]" value="Liberation War"> Liberation War
					<input type="checkbox" name="cat[]" value="Mystery"> Mystery  <br>
					<input type="checkbox" name="cat[]" value="Religious"> Religious 
					<input type="checkbox" name="cat[]" value="Romantic"> Romantic 
					<input type="checkbox" name="cat[]" value="Short film"> Short film 
					<input type="checkbox" name="cat[]" value="Thriller"> Thriller 
					<input type="checkbox" name="cat[]" value="Tragedy"> Tragedy
				</div>
				
				<br>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" name="submit" value="Submit" >
				</div>
		</div>
				
		</form>
		
		
		</div>
<?php
   }
else
{
	
	header("Location: sign.php");
}
   ?>

<?php include('footer.php');
?>