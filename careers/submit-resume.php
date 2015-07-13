<!DOCTYPE html>

<html lang="en">
<head>
  <?php
    require_once '../common_head.php';
  ?>

</head>


<body>

<?php
  require_once '../common_navbar.php';
?>

  <div class="container">
    <h2>Submit Resume</h2>
	<br>
  </div>

  <div class="container">
	<div class="col-lg-5">
	  <form class="form-horizontal" name="resume_form" method="post" action="do_submit_resume.php">

	  <div class="form-group">
		<label for="firstName" class="col-sm-3 control-label">First Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
		</div>
	  </div>

	  <div class="form-group">
		<label for="lastName" class="col-sm-3 control-label">Last Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
		</div>
	  </div>

	  <div class="form-group">
		<label for="email" class="col-sm-3 control-label">E-mail</label>
		<div class="col-sm-9">
		  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
		</div>
	  </div>

	  <div class="form-group">
		<label for="phone" class="col-sm-3 control-label">Phone</label>
		<div class="col-sm-9">
		  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
		</div>
	  </div>

	  <div class="form-group">
		<label for="comments" class="col-sm-3 control-label">Comments</label>
		<div class="col-sm-9">
		  <textarea class="form-control" id="comments" name="comments" placeholder="Comments"></textarea>
		</div>
	  </div>

	  <div class="form-group">
		<label for="resume" class="col-sm-3 control-label">Resume</label>
		<div class="col-sm-9">
		  <input type="file" id="resume" name="resume" required>
		</div>
	  </div>

	  <div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
		  <button type="submit" class="btn btn-default btn-primary">Submit</button>
		</div>
	  </div>

	  </form>
	</div>

	<div class="col-lg-7">
	  <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfutjeyo4LPi-iORs6No_3Ni0LBgQUGiWMt4a0h5pGQDedwBZf" alt="Submit your Resume">
	</div>

  </div> <!-- end main container -->

<?php
  require_once '../common_footer.php';
?>

<!-- The below script highlights the menu selection -->
<script>
  $("#menu_careers").addClass("active");
  $("#menu_submit_resume").addClass("active");
</script>

</body>
</html>
