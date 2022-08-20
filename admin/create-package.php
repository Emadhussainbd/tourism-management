<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$pname=$_POST['packagename'];
$pduration=$_POST['packageduration'];
$ptype=$_POST['packagetype'];
$pgrpsize=$_POST['packagegrpsize'];	
$ptourguide=$_POST['packagetourguide'];
$plocation=$_POST['packagelocation'];
$pprice=$_POST['packageprice'];	
$pfeatures=$_POST['packagefeatures'];
$pdetails=$_POST['packagedetails'];	
$pimage=$_FILES["packageimage"]["name"];
$pdestination=$_POST['packagedestination'];
$pdepaturetime=$_POST['packagedepaturetime'];
$preturntime=$_POST['packagereturntime'];
$pincluded=$_POST['packageincluded'];
$pexcluded=$_POST['packageexcluded'];
$tpdayonetit=$_POST['tplandayonetit'];
$tpdayonedes=$_POST['tplandayonedes'];
$tpdaytwotit=$_POST['tplandaytwotit'];
$tpdaytwodes=$_POST['tplandaytwodes'];

move_uploaded_file($_FILES["packageimage"]["tmp_name"],"pacakgeimages/".$_FILES["packageimage"]["name"]);
$sql="INSERT INTO TblTourPackages(PackageName,Duration,PackageType,GroupSize,TourGuide,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage,Destination,	DepatureTime,ReturnTime,Included,Excluded,TPDay1Tittle,TPDay1Des,TPDay2Tittle,TPDay2Des) VALUES(:pname,:pduration,:ptype,:pgrpsize,:ptourguide,:plocation,:pprice,:pfeatures,:pdetails,:pimage,:pdestination,:pdepaturetime,:preturntime,:pincluded,:pexcluded,:tpdayonetit,:tpdayonedes,:tpdaytwotit,:tpdaytwodes)";
$query = $dbh->prepare($sql);
$query->bindParam(':pname',$pname,PDO::PARAM_STR);
$query->bindParam(':pduration',$pduration,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':pgrpsize',$pgrpsize,PDO::PARAM_STR);
$query->bindParam(':ptourguide',$ptourguide,PDO::PARAM_STR);
$query->bindParam(':plocation',$plocation,PDO::PARAM_STR);
$query->bindParam(':pprice',$pprice,PDO::PARAM_STR);
$query->bindParam(':pfeatures',$pfeatures,PDO::PARAM_STR);
$query->bindParam(':pdetails',$pdetails,PDO::PARAM_STR);
$query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
$query->bindParam(':pdestination',$pdestination,PDO::PARAM_STR);
$query->bindParam(':pdepaturetime',$pdepaturetime,PDO::PARAM_STR);
$query->bindParam(':preturntime',$preturntime,PDO::PARAM_STR);
$query->bindParam(':pincluded',$pincluded,PDO::PARAM_STR);
$query->bindParam(':pexcluded',$pexcluded,PDO::PARAM_STR);
$query->bindParam(':tpdayonetit',$tpdayonetit,PDO::PARAM_STR);
$query->bindParam(':tpdayonedes',$tpdayonedes,PDO::PARAM_STR);
$query->bindParam(':tpdaytwotit',$tpdaytwotit,PDO::PARAM_STR);
$query->bindParam(':tpdaytwodes',$tpdaytwodes,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Package Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}

	?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Package Creation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Update Package </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Create Package</h3>
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tour Duration</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageduration" id="packageduration" placeholder="Tour Duration" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Type</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family Package / Couple Package" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Group Size</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagegrpsize" id="packagegrpsize" placeholder="How much people will go for the trip" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Number Of Tour Guide</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagetourguide" id="packagetourguide" placeholder="How much tour guide will guide the people" required>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location" required>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Price in USD</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price is USD" required>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Package Features Eg-free Pickup-drop facility" required>
									</div>
								</div>		


								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required></textarea> 
									</div>
								</div>															
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
									<div class="col-sm-8">
										<input type="file" name="packageimage" id="packageimage" required>
									</div>
								</div>	

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tour Destination</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagedestination" id="packagedestination" placeholder="Tour Destination" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Depature Time</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagedepaturetime" id="packagedepaturetime" placeholder="Depature Time" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Return time</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagereturntime" id="packagereturntime" placeholder="Create Package" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Included</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageincluded" id="packageincluded" placeholder="Which items are included with this package" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Excluded</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageexcluded" id="packageexcluded" placeholder="Which items are not included with this package" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Day 1 Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tplandayonetit" id="tplandayonetit" placeholder="Tour plan: Day one title" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Day 1 Description</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tplandayonedes" id="tplandayonedes" placeholder="Tour plan: Day one description" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Day 2 Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tplandaytwotit" id="tplandaytwotit" placeholder="Tour plan: Day two title" required>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Day 2 Description</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tplandaytwodes" id="tplandaytwodes" placeholder="Tour plan: Day two description" required>
									</div>
								</div>

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Create</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
					<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php } ?>