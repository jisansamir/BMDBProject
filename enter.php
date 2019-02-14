<?php include('header.php');
?>




<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row"><ul>
   <br><br><br><br>
		
	
	<H2 style="text-align: center; color: green">Please log in</H2>
		<li><div class="col-md-6">
			<form role="form" action="login.php" method="POST">
				<div class="form-group">
					<label for="usr">User Name:</label>
					<input type="text" class="form-control" id="usr" name="uname" required>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" required>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control"  name="submit" value="Login" class="btn-primary">
				</div>
			</form>
		</div></li></ul>
	</div><!-- /.row -->





<?php include('footer.php');
?>