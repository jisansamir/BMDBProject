<?php include('connect.php');
$id = $_GET['id'];
$im = $_GET['im'];
?>

<?php include('header.php');?>
<br><br><br>
<div class="row">
<?php
	   $sql = "SELECT * FROM movie where id ='$id'";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
      
		?>
<div class="col-md-4">

<img src="Bangla Movie Posters/<?php echo $im; ?>.png" style="width:194px;height:260px;"></img>
</div>
<div class="col-md-6">
<br><br><b>Title: <?php echo $row["Name"]; ?></b>
<br><b>Release Date: <?php echo $row["ReleaseDate"]; ?> </b>
<br><b>Duration: <?php echo $row["Duration"]; ?> </b>
<br><b>Director: <?php echo $row["Director"]; ?> </b>
<br><b>Writer: <?php echo $row["Writer"]; ?> </b>
<br><b>Plot: <?php echo $row["Plot"]; ?> </b>
<br><b>Starring: <?php echo $row["Actor"]; ?> </b>
<br><b>Genre:<?php
	   $sql1 = "SELECT * FROM moviecategory where MovieID ='$id'";
	   
$result1 = mysqli_query($conn, $sql1);

$i=1;
    while($row1 = mysqli_fetch_assoc($result1)) {
		echo $row1["Name"]." ";
		
		
		$i++;
	}


 ?> </b>
</div> 
	<?php } ?>
</div>
<?php include('footer.php');?>