<?php 
session_start();

include('header.php');

?>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
   </br></br></br></br></br>
    <?php 
   //echo $_SESSION["uid"];
   if(isset($_SESSION['uid']))
   {
	   ?>
   <a href="logout.php">LOG OUT</a>
   <?php }
   else 
   {
	  ?>
	  <a href="regi.php">LOG IN</a>
<?php	  
	   
   }
   ?>
   <div class="col-md-6">
   <?php 
   //echo $_SESSION["uid"];
   if(isset($_SESSION['uid']))
   {
	   include('connect.php');
	   $id=$_SESSION['uid'];
	   $sql = "SELECT * FROM user where ID = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["Name"];
		

   }
}
   }
else
{
	
	echo "please login";
}
   ?>
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->




  <!-- /END THE FEATURETTES -->


<?php include('footer.php');
?>