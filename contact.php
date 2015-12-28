<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require_once 'common_head.php';
  ?>

</head>

<body>

<?php
  require_once 'common_navbar.php';
?>


<div class="container-fluid">
  <div class="container">
        <h1>Contact Us</h1>
        <br>

        <div class="col-md-5">
          <address>
            <strong>Strawberry Systems</strong><br><br>


            <span class="glyphicon glyphicon-map-marker contact-icon" aria-hidden="true"></span><br>
	    58 Silver Saddle Ln<br>
	    Rolling Hills Estates, CA 90274<br>
            United States of America<br><br>


            <span class="glyphicon glyphicon-earphone contact-icon" aria-hidden="true"></span><br>
            <a href="tel:+15303242888">+1 (530) 324-2888</a><br><br>

            <span class="glyphicon glyphicon-envelope contact-icon" aria-hidden="true"></span><br>
            General Information: <a href="mailto:info@strawberrysys.com">info@strawberrysys.com</a><br>
	    Sales: <a href="mailto:sales@strawberrysys.com">sales@strawberrysys.com</a><br>
	    Procurement: <a href="mailto:purchasing@strawberrysys.com">purchasing@strawberrysys.com</a><br>
	    Media: <a href="mailto:mediainquiry@strawberrysys.com">mediainquiry@strawberrysys.com</a><br>
          </address>
        </div>

        <div class="col-md-7">
          <h4>Send a Message</h4>
          <form class="form-horizontal" name="contactform" method="post" action="send_contact_email.php">

          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
            </div>
          </div>


          <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="inputPhone" name="inputPhone" placeholder="Phone">
            </div>
          </div>

          <div class="form-group">
            <label for="inputMessage" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="inputMessage" name="inputMessage" placeholder="Message" rows="3" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default btn-primary">Submit</button>
            </div>
          </div>

          </form>
	</div>
  </div>
</div> <!-- end: main container-fluid -->


<?php
  require_once 'common_footer.php';
?>

<!-- The below script highlights the menu selection -->
<script>
  $("#menu_contact").addClass("active");
</script>

</body>
</html>
