<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>



<?php include('includes/header.php'); ?>


<div class="hero-area hero-style-three">
	<img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
	<div class="hero-main-wrapper position-relative">
		<div class="hero-social">
			<ul class="social-list d-flex justify-content-center align-items-center gap-4">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">instagram</a></li>
				<li><a href="#">Linked in</a></li>
			</ul>
		</div>
	<div class="swiper hero-slider-three ">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="slider-bg-1">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-lg-8">
								<div class="hero3-content">
									<span class="title-top">Wellcome To TuorX Pro</span>
									<h1>Journey to Explore World</h1>
									<p>Nulla facilisi. Maecenas ac tellus ut ligula interdum convallis. Nullam dapibus on erat in dolor posuere, none hendrerit lectus ornare. Suspendisse sit amet turpina sagittis, ultrices dui et, aliquam urna.</p>
									<a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide">
				<div class="slider-bg-3">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-lg-8">
								<div class="hero3-content">
									<span class="title-top">Wellcome To TuorX Pro</span>
									<h1>Enjoy Your New Adventure</h1>
									<p>Nulla facilisi. Maecenas ac tellus ut ligula interdum convallis. Nullam dapibus on erat in dolor posuere, none hendrerit lectus ornare. Suspendisse sit amet turpina sagittis, ultrices dui et, aliquam urna.</p>
									<a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
		<div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
		<div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
	</div>
	</div>
</div>










<div class="package-area package-style-two pt-110 chain">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-lg-8 col-sm-10">
				<div class="section-head-alpha">
					<h2>Package List</h2>
					<p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consectetur.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-10">
				<div class="package-btn text-lg-end">
					<a href="package.php" class="button-fill-primary all-package-btn">View All Tour</a>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center g-4">
		<?php $sql = "SELECT * from tbltourpackages order by rand() limit 6";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
			foreach($results as $result)
			{	?>
			<div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
				<div class="package-card-beta" style="margin-bottom: 32px;">
					<div class="package-thumb">
						<a href="package-details.html"><img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt=""></a>
						<p class="card-lavel">
							<i class="bi bi-clock"></i> <span><?php echo htmlentities($result->PackageType);?></span>
						</p>
					</div>
					<div class="package-card-body">
						<h3 class="p-card-title"><a href="package-detailsp.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Package Name: <?php echo htmlentities($result->PackageName);?></a></h3>
						<p>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
						<div class="p-card-bottom">
							<div class="book-btn">
								<a href="package-detailsp.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
							</div>
							<div class="p-card-info">
								<span>From</span>
								<h6><?php echo htmlentities($result->PackagePrice);?> <span>Per Person</span></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }} ?>
		</div>
		<div class="package-page-btn text-center mt-60">
			<a href="package.php" class="button-fill-round">View All</a>
		</div>
	</div>
</div>


<div class="destination-area destination-style-two pt-110 pb-110">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-sm-10 ">
				<div class="section-head-alpha text-center mx-auto">
					<h2>Top Destination</h2>
					<p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum.</p>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center g-4">
			<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds1.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="destination-details.html"><h5>Grand Switzerland</h5></a>
							<a href="destination-details.html"><h6>45 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds2.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="destination-details.html"><h5>Paris</h5></a>
							<a href="destination-details.html"><h6>35 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="assets/images/destination/top-ds3.png" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.html"><h5>Augsburg</h5></a>
<a href="destination-details.html"><h6>15 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="assets/images/destination/top-ds4.png" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.html"><h5>Paris</h5></a>
<a href="destination-details.html"><h6>34 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="assets/images/destination/top-ds5.png" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.html"><h5>Wiesbaden</h5></a>
<a href="destination-details.html"><h6>10 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="assets/images/destination/top-ds6.png" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.html"><h5>UK</h5></a>
<a href="destination-details.html"><h6>67 Place</h6></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="upcoming-tour-area pt-110 pb-110 chain">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
<div class="section-head-alpha text-lg-start text-center">
<h2 class="text-white">Upcoming Best Tours</h2>
<p class="text-white">Duis rutrum nisl urna maecenas vel libero faucibus nisi vene natis hendrerit aid lectus suspendissendt.</p>
</div>
</div>
<div class="col-lg-7 d-flex justify-content-lg-end justify-content-center">
<div class="slider-arrows text-center d-lg-flex flex-row justify-content-center d-none gap-5">
<div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
<div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
</div>
</div>
</div>
<div class="row align-items-center justify-content-center fadeffect">
<div class="col-lg-12">
<div class="swiper upcoming-tour">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package-details.html"><img src="assets/images/package/best-s1.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package-details.html">Etiam placerat dictum consequat an
Pellentesque.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package-details.html"><img src="assets/images/package/best-s2.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>5 Day & 6 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package-details.html">varius condimentum consequat frin
Aenean.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
 </div>
<div class="p-card-info">
<span>From</span>
<h6>$67.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package-details.html"><img src="assets/images/package/best-s3.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package-details.html">Praesent sed elit mi. In risus
nullaam ultricies sapien.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$88.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package-details.html"><img src="assets/images/package/best-s4.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>5 Day & 6 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package-details.html">Sed ultricies sapien arcu, sed cong
feugiat sapien dignissim. </a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$91.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package-details.html"><img src="assets/images/package/best-s5.png" alt=""></a>
 <p class="card-lavel">
<i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package-details.html">Pellentesque habitant morbi malesua
tristique senectus.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package-details.html">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$67.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row text-center d-flex justify-content-center">
<div class="col-md-4">
<a href="destination.html" class="button-outlined-primary upcoming-btn mt-50">View All Offer</a>
</div>
</div>
</div>
</div>





<div class="guide-area guide-style-one pt-110">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-sm-10">
<div class="section-head-alpha text-center mx-auto">
<h2>Tour Guide</h2>
<p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum.</p>
</div>
</div>
</div>
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="assets/images/guide/guide31.png" alt="">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.html"><h4 class="guide-name">Sebastian
Mateo</h4></a>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="assets/images/guide/guide32.png" alt="">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.html"><h4 class="guide-name">Theodore
Aiden</h4></a>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="assets/images/guide/guide33.png" alt="">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.html"><h4 class="guide-name">Lincoln
Anthony</h4></a>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/chain_fade.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/custom-swiper.js"></script>



<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>