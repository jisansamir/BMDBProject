<?php include('connect.php');
$name = $_GET['name'];

?>

<?php include('header.php');?>
<br><br><br>
<div class="row">

<?php
	   $sql = "SELECT * FROM movie where Name like '%$name%'";
$result = mysqli_query($conn, $sql);

$i=1;
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
		?>
		<div>

<div class="col-md-12">
<br><br><b>Title: <a href="viewinfo.php?id=<?php echo $row["id"]; ?>&im=<?php echo $i; ?>"><?php echo $row["Name"]; ?></a></b>

<br><b>Genre:<?php 
	   $sql1 = "SELECT * FROM moviecategory where MovieID ='$id'";
	   
$result1 = mysqli_query($conn, $sql1);

$j=1;
    while($row1 = mysqli_fetch_assoc($result1)) {
		echo $row1["Name"]." ,";
		
		
		$j++;
	}


 ?> </b>
 </div>
</div> 
	<?php $i++;} ?>
</div>
<?php include('footer.php');?>