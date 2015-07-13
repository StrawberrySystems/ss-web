<!DOCTYPE html>

<html lang="en">
<head>
  <?php
    require_once 'common_head.php';
  ?>

  <!-- Custom styles for this template -->
  <link href="/css/carousel.css" rel="stylesheet">

  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
      }
	.carousel-inner > .item > a hover {
		background-color: red;
	}
  </style>

</head>


<body>

<?php
  require_once 'common_navbar.php';
  require_once 'carousel.php';
?>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid" style="background-color:#CCFF99">
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
	<p>&nbsp;</p>
        <div class="col-lg-4">
          <img class="img-circle" src="/images/icon-big-data.png" alt="Big Data" style="height: 140px; ">
          <h2>Big Data</h2>
          <p>Are you thinking of big data?  Already implemented big data and looking for higher ROI?  See how Strawberry Systems can help.</p>
          <p><a class="btn btn-default" href="/practice-areas/big-data.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/icon-head.png" alt="Social Media Analytics" style="height: 140px;">
          <h2>Social Media Analytics</h2>
          <p>You don't need a shrink to find out what's going on in your customers' heads.  See how we can help you figure out what your customers think of your product/service.</p>
          <p><a class="btn btn-default" href="/practice-areas/social-media-analytics.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/icon-cloud-computing.png" alt="Cloud Computing" style="height: 140px;">
          <h2>Cloud Computing</h2>
          <p>Cloud Computing allows your enterprise to be more agile and reduce costs, if done right.  See how Strawberry Systems can help you achieve success with your Cloud strategies.</p>
          <p><a class="btn btn-default" href="/practice-areas/cloud-computing.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div> <!-- end container marketing -->

</div> <!-- end three columns of text -->


  <!-- START THE FEATURETTES -->

  <div>&nbsp;</div>
  <div class="container-fluid">
    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">IT Strategy <span class="text-muted">formulation and enhancement</span></h2>
          <p class="lead">Today’s evolving and disruptive technology landscape has implications for all business and IT leaders.  Our IT Strategy services help clients understand these challenges and explore innovative opportunities for growth with technology strategies that align business and IT for the most value.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/images/feature-it-strategy.png" alt="IT Strategy">
        </div>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="container-fluid">
    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-5">
          <br><br><br><img class="featurette-image img-responsive" src="/images/feature-it-architecture.png" alt="IT Architecture">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">IT Architecture <span class="text-muted">for enterprise transformation.</span></h2>
          <p class="lead">In today's highly dynamic and volatile business environment, CIOs are facing an uphill task in ensuring that predefined organizational goals such as streamlining processes, reducing costs and improving operational efficiency are addressed in the most effective manner.  Our IT Architecture consulting services enable organizations to redesign & realign their existing legacy architecture to accomplish their business strategies by identifying critical business drivers and translating them into technology blueprints.</p>
        </div>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="container-fluid">
    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">IT Project Management <span class="text-muted">for on-time and on-budget delivery.</span></h2>
          <p class="lead">A sound business strategy is essential to success.  Without disciplined execution, the same strategy renders little value.  Our certified project managers help you succeed where companies often fail – in implementation and execution.  We advise on and execute your most complex initiatives so that you realize your desired results.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/images/feature-project-mgmt.png" alt="IT Project Management">
        </div>
      </div>
    </div>
  </div>


  <!-- /END THE FEATURETTES -->


<?php
  require_once 'common_footer.php';
?>

<!-- The below script highlights the menu selection -->
<script>
  $("#menu_home").addClass("active");
</script>

</body>
</html>
