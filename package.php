<?php 
session_start();
error_reporting(0);
include('includes/config.php');
?>



<?php include('includes/header.php'); ?>


<div class="breadcrumb breadcrumb-style-one">
  <div class="container">
    <div class="col-lg-12 text-center">
      <h2 class="breadcrumb-title">Tour Package</h2>
      <ul class="d-flex justify-content-center breadcrumb-items">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item active">Tour Packages</li>
      </ul>
    </div>
  </div>
</div>

<div class="package-wrapper pt-80">
  <div class="container">
    <div class="row">
    <?php $sql = "SELECT * from tbltourpackages order by rand()";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
			foreach($results as $result)
			{	?>
      <div class="col-lg-4 col-md-6">
        <div class="package-card-alpha" style="margin-bottom: 48px;">
          <div class="package-thumb">
            <a href="package-details.html"><img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt=""></a>
            <p class="card-lavel">
              <i class="bi bi-clock"></i> <span><?php echo htmlentities($result->PackageType);?></span>
            </p>
          </div>
          <div class="package-card-body">
            <h3 class="p-card-title"><a href="package-detailsp.php?pkgid=<?php echo htmlentities($result->PackageId);?>"><?php echo htmlentities($result->PackageName);?></a></h3>
            <div class="p-card-bottom">
              <div class="book-btn">
                <a href="package-detailsp.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
              </div>
              <div class="p-card-info">
                <span>From</span>
                <h6><?php echo htmlentities($result->PackagePrice);?><span>Per Person</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }} ?>
    </div>
  </div>
</div>

<?php include('includes/footer.php');?>