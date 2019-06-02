<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cert-iT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>

<style>

</style>

</head>

<body style="background-color:#F5F5F5;background-image:url('images/wood.png');">

<?php
//phpinfo();

// require user authentication
require "admin_login.php";

//retrieve session variables
$username = $_SESSION["username"];
$accessLevel = $_SESSION["accessLevel"];

//add dbconnection
include('dbinfo.php');

$prodCode = $_GET['id'];
$prodDesc = $_GET['desc'];

//create query for product specifiaction
$query = "SELECT * FROM product_specification WHERE ItemCode='$prodCode'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

//create query for product specifiaction
$queryName = "SELECT * FROM inventory_master WHERE ItemCode='$prodCode'";
$resultName = mysqli_query($db, $queryName);
$rowName = mysqli_fetch_assoc($resultName);


$prodName 						= $rowName['Description'];
$prodClass 						= $rowName['ProductClass'];
$prodDescription 				= $row['prodDescription'];
$prodLegalDescription 			= $row['prodLegalDescription'];
$prodIntendedUse 				= $row['prodIntendedUse'];
$prodProcAids 					= $row['prodProcAids'];
$prodSelectOption 				= $row['prodSelectOption']; //option for produce of or Made in
$prodCountry 					= $row['prodCountry'];
$prodVulneSuita		 			= $row['prodVulneSuita'];
$prodMicroRedHeat	 			= $row['prodMicroRedHeat'];
$prodMicroRedHeatSpec	 		= $row['prodMicroRedHeatSpec'];
$prodSteamSter					= $row['prodSteamSter'];
$prodSteamSterSpec				= $row['prodSteamSterSpec'];
$prodIonRad						= $row['prodIonRad'];
$prodIonRadSpec					= $row['prodIonRadSpec'];
$prodEthOxi						= $row['prodEthOxi'];
$prodEthOxiSpec					= $row['prodEthOxiSpec'];
$prodOtherFum					= $row['prodOtherFum'];
$prodOtherFumSpec				= $row['prodOtherFumSpec'];
$prodOtherFumIng				= $row['prodOtherFumIng'];
$halaalCert						= $row['halaalCert'];
$kosherCert						= $row['kosherCert'];
$organicCert					= $row['organicCert'];
$hinduCert						= $row['hinduCert'];
$storageAndHandling 			= $row['storageAndHandling'];
$prodSlFrozen					= $row['prodSlFrozen']; //unopened
$prodSlFrozenOpen				= $row['prodSlFrozenOpen'];
$shelfLifeBaked 				= $row['shelfLifeBaked'];
$prodTrans 						= $row['prodTrans'];
$prodPrepBake 					= $row['prodPrepBake'];
$prodAbuse 						= $row['prodAbuse'];
$prodRecInstr 		 			= $row['prodRecInstr'];
$prodPackType 		 			= $row['prodPackType'];
$prodSeal 		 				= $row['prodSeal'];
$prodDblBag 		 			= $row['prodDblBag'];
$barcodeOuter					= $row['prodBarcOut'];
$barcodeInner 					= $row['prodBarIn'];
$prodPackSize 					= $row['prodPackSize'];
$prodMassMin 					= $row['prodMassMin'];
$prodMassAvg 					= $row['prodMassAvg'];
$prodMassMax 					= $row['prodMassMax'];
$pickingNumber 					= $row['pickingNumber'];
$prodDateCoding 				= $row['prodDateCoding'];
$innerPack 						= $row['innerPack'];
$innerPackQty 					= $row['innerPackQty'];
$outerPack 						= $row['outerPack'];
$outerPackQty 					= $row['outerPackQty'];
$boxesPerLayer 					= $row['boxesPerLayer'];
$boxLayerPerPallet 				= $row['boxLayerPerPallet'];
$prodLengthMin					= $row['prodLengthMin'];
$prodLengthAvg					= $row['prodLengthAvg'];
$prodLengthMax					= $row['prodLengthMax'];
$prodWidthMin					= $row['prodWidthMin'];
$prodWidthAvg					= $row['prodWidthAvg'];
$prodWidthMax					= $row['prodWidthMax'];
$prodThickMin					= $row['prodThickMin'];
$prodThickAvg					= $row['prodThickAvg'];
$prodThickMax					= $row['prodThickMax'];
$prodTestMeth					= $row['prodTestMeth'];
$prodBakedLengthMin				= $row['prodBakedLengthMin'];
$prodBakedLengthAvg				= $row['prodBakedLengthAvg'];
$prodBakedLengthMax				= $row['prodBakedLengthMax'];
$prodBakedWidthMin				= $row['prodBakedWidthMin'];
$prodBakedWidthAvg				= $row['prodBakedWidthAvg'];
$prodBakedWidthMax				= $row['prodBakedWidthMax'];
$prodBakedThickMin				= $row['prodBakedThickMin'];
$prodBakedThickAvg				= $row['prodBakedThickAvg'];
$prodBakedThickMax				= $row['prodBakedThickMax'];
$prodBakedTestMeth				= $row['prodBakedTestMeth'];
$prodBakedMassMin 				= $row['prodBakedMassMin'];
$prodBakedMassAvg 				= $row['prodBakedMassAvg'];
$prodBakedMassMax 				= $row['prodBakedMassMax'];
$prodProofTemp					= $row['prodProofTemp'];
$prodProofTime					= $row['prodProofTime'];
$prodProofHum					= $row['prodProofHum'];
$prodBakeTemp					= $row['prodBakeTemp'];
$prodBakeTime					= $row['prodBakeTime'];
$prodFrozenPic					= $row['prodFrozenPic'];
$prodBakedPic					= $row['prodBakedPic'];
$testEcoli						= $row['testEcoli'];
$testStaphAureus				= $row['testStaphAureus'];
$testColiforms					= $row['testColiforms'];
$testFaeccalColiforms			= $row['testFaeccalColiforms'];
$testClostridiumPerfringens		= $row['testClostridiumPerfringens'];
$testSalmonella					= $row['testSalmonella'];
$testListriaMono				= $row['testListriaMono'];
$testBacillusCerus				= $row['testBacillusCerus'];
$testEnterobac					= $row['testEnterobac'];
$testTMA						= $row['testTMA'];
$testYeastMould					= $row['testYeastMould'];
$limitEcoli						= $row['limitEcoli'];
$limitStaphAureus				= $row['limitStaphAureus'];
$limitColiforms					= $row['limitColiforms'];
$limitFaeccalColiforms			= $row['limitFaeccalColiforms'];
$limitClostridiumPerfringens	= $row['limitClostridiumPerfringens'];
$limitSalmonella				= $row['limitSalmonella'];
$limitListriaMono				= $row['limitListriaMono'];
$limitBacillusCerus				= $row['limitBacillusCerus'];
$limitEnterobac					= $row['limitEnterobac'];
$limitTMA						= $row['limitTMA'];
$limitYeastMould				= $row['limitYeastMould'];



//function for looking up micro limits and test methods
function microSelect($currentValue,$testName,$microSpecName,$DBConn){
?>

					<div class="input-group">
						<label>Specification</label></br>
						<select class="form-control" id="<?php echo $microSpecName; ?>" style="width:250px;" name="<?php echo $microSpecName; ?>">
							<option value="<?php echo $currentValue; ?>"><?php echo $currentValue; ?></option>
							<?php

							//select for source
							$microSpecquery = "SELECT DISTINCT `spec` FROM micro_limits WHERE microTest = '$testName' ORDER BY `spec`";
							$microSpecresult = mysqli_query($DBConn,$microSpecquery);
							$microSpecoptions = ' ';


							while ($microSpecoptions = mysqli_fetch_array($microSpecresult))
							{ ?>

							<option value="<?php echo $microSpecoptions['spec']; ?>"><?php echo $microSpecoptions['spec']; ?></option>';
							<?php
							}
							?>
						</select>
					</div>
					<br>
					<?php
						//create query for Ecoli
						$queryTestMethod = "SELECT * FROM micro_specification_tests WHERE microTest='$testName'";
						$resultTestMethod = mysqli_query($DBConn, $queryTestMethod);
						$rowTestMethod = mysqli_fetch_assoc($resultTestMethod);
					?>
					<div class="input-group" >
						<label>Test Method</label>
						</br>
						<p><?php echo $rowTestMethod['microTestMethod']; ?></p>
					</div>



<?php
}



				$packDimquery = "SELECT * FROM packaging_dimensions";
				$packDimresult = mysqli_query($db,$packDimquery);
				$packDimrow = mysqli_fetch_assoc($packDimresult);




?>





<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
		<img src="certItLogo.png" alt="logo" width="50" height="50" style="border-radius: 20%;">
    </div>
    <ul class="nav navbar-nav">
		<li class="active"><a href="ProductIndex.php">Product Index</a></li>
		<li><a href="newProductIndex.php">New Product Index</a></li>
		<li><a href="newProductFormAdd.php">Add New Product</a></li>
		<li><a href="rmIndex.php">RM Index</a></li>
		<li><a href="wipIndex.php">WIP Index</a></li>
	</ul>

	<button class="btn btn-danger navbar-btn" style="float:right;"><a href="auth.php?id='logout'" class="button" style="text-decoration:none; color:white;" onclick="return confirm('Are you sure you want to log out?')"><span class="glyphicon glyphicon-log-out"></span> Log out</a></button>

  </div>
</nav>



<div class="container bg-primary" style=" padding:20px; background-image:url('images/graphite.png'); width:580px;margin-top:50px; border-style: solid; border-color:white; border-width:2px; border-radius:12px">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
			  <li ><a href="productIndex.php?id=<?php echo $prodCode; ?>">Product Index</a></li>
			  <li ><a href="productView.php?id=<?php echo $prodCode; ?>&desc=<?php echo $prodDesc; ?>">View Product</a></li>
			  <li class="active"><a href="#">Edit Product Spec<span></a></li>
			</ul>
		</div>
	</nav>

	<h1 style="color:white;text-align:center; font-size:30pt;"><strong>Edit Product Specification</strong></h1>
	<hr>

	<div class="row">

		<div class="col-md-12">

			<form role="form" action="productSpecUpdate.php" method="POST" enctype="multipart/form-data" >


				<div class="input-group">
					<label>Product Code</label></br>
					<input type="text" name="prodCode" value="<?php echo $prodCode; ?>" readonly class="form-control" style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Product Name</label></br>
					<input type="text" name="prodName" value="<?php echo $prodName; ?>" required class="form-control" maxlength='100' style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Product Class</label></br>
					<input type="text" name="prodCat" value="<?php echo $prodClass; ?>" required class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group hidden-print">
					<label>Frozen Product Picture</label></br>
					<input type="file" name="prodFrozenPic" accept="image/*" value="<?php echo $prodFrozenPic; ?>"  maxlength='100'  style="width:500px;" capture="camera">
				</div>
				</br>

				<div class="input-group hidden-print">
					<label>Baked Product Picture</label></br>
					<input type="file" name="prodBakedPic" accept="image/*" value="<?php echo $prodBakedPic; ?>"  maxlength='100'  style="width:500px;" >
				</div>
				</br>

				<div class="input-group">
					<label>Product description (physical and Technological)</label></br>
					<textarea rows="4" cols="65" maxlength='300' name="prodDescription"  id="prodDescription" class="form-control"  style="width:500px;"><?php echo $prodDescription; ?></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Product description (legal and suggested labeling description)</label></br>
					<textarea rows="4" cols="65" maxlength='300' name="prodLegalDescription"  id="prodLegalDescription" class="form-control"  style="width:500px;"><?php echo $prodLegalDescription; ?></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Intended use</label></br>
					<textarea rows="4" cols="65" maxlength='300' name="prodIntendedUse"  id="prodIntendedUse" class="form-control"  style="width:500px;"><?php echo $prodIntendedUse; ?></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Processing Aids</label></br>
					<textarea rows="4" cols="65" maxlength='300' name="prodProcAids"  id="prodProcAids" class="form-control"  style="width:500px;"><?php echo $prodProcAids; ?></textarea>
				</div>
				</br><hr>
				<h4>Country of Origin</h4>

				<div class="input-group">
					<label>Select option</label></br>
					<input type="radio" name="prodSelectOption" id="produceOf" 	value="Produce of" 	<?php if ($prodSelectOption == "Produce of"){ echo "checked";} ?> >Produce of</br>
					<input type="radio" name="prodSelectOption" id="madeIn" 	value="Made in" 	<?php if ($prodSelectOption == "Made in"){ echo "checked";} ?>		>Made in</br>
					<br>
					<label>Country Name</label></br>
					<input type="text" name="prodCountry"  id="prodCountry" value="<?php echo $prodCountry; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div><hr>

				<h3>Dietary Suitability</h3>
				<div class="input-group">
					<label>Halaal Certified</label></br>
					<input type="radio" name="halaalCert"  	value="No" 		<?php if ($halaalCert == "No"){ echo "checked";} ?> >No</br>
					<input type="radio" name="halaalCert" 	value="Yes" 	<?php if ($halaalCert == "Yes"){ echo "checked";} ?>>Yes</br>
					<br>
					<label>Kosher Certified</label></br>
					<input type="radio" name="kosherCert"  	value="No" 		<?php if ($kosherCert == "No"){ echo "checked";} ?> >No</br>
					<input type="radio" name="kosherCert" 	value="Yes" 	<?php if ($kosherCert == "Yes"){ echo "checked";} ?>>Yes</br>
					<br>
					<label>Organic Certified</label></br>
					<input type="radio" name="organicCert"  value="No" 		<?php if ($organicCert == "No"){ echo "checked";} ?>  >No</br>
					<input type="radio" name="organicCert" 	value="Yes" 	<?php if ($organicCert == "Yes"){ echo "checked";} ?>>Yes</br>
					<br>
					<label>Hindu Certified</label></br>
					<input type="radio" name="hinduCert"  	value="No" 		<?php if ($hinduCert == "No"){ echo "checked";} ?> 	>No</br>
					<input type="radio" name="hinduCert" 	value="Yes" 	<?php if ($hinduCert == "Yes"){ echo "checked";} ?>>Yes</br>
					<br>
				</div>
				<hr>

				<div class="input-group">
					<label>Vulnerability And Suitability</label></br>
					<textarea rows="4" cols="65" maxlength='980' name="prodVulneSuita" id="prodVulneSuita" class="form-control"  style="width:500px;"><?php echo $prodVulneSuita; ?></textarea>
				</div>
				</br><hr>

				<h4>Food Irradiation / Sterilisation / Microbial reduction steps</h4>

				<label>Has this product or any of its compnents been treated with:</label>
				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Microbial reduction heating</label></br>
								<input type="radio" name="prodMicroRedHeat" value="No" <?php if ($prodMicroRedHeat == "No"){ echo "checked";} ?>  	  		onchange='document.getElementById("hideprodMicroRedHeatSpec").hidden=true;document.getElementById("prodMicroRedHeatSpec").required=false;'>No</br>
								<input type="radio" name="prodMicroRedHeat" value="Yes" <?php if ($prodMicroRedHeat == "Yes"){ echo "checked";} ?> 					onchange='document.getElementById("hideprodMicroRedHeatSpec").hidden=false;document.getElementById("prodMicroRedHeatSpec").required=true;'>Yes</br>
							</div>
						</td>
					</tr>
				</table>

				<div <?php if ($prodMicroRedHeat == "No" OR $prodMicroRedHeat == ""){ echo "hidden";} ?> id="hideprodMicroRedHeatSpec">
					<div class="input-group" >
						<textarea rows="4" cols="65" maxlength='199' name="prodMicroRedHeatSpec" id="prodMicroRedHeatSpec" class="form-control" placeholder="If 'Yes', please specify time and temperature." style="width:500px;"><?php echo $prodMicroRedHeatSpec; ?></textarea>
					</div>
				</div>

				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Steam Serilisation</label></br>
								<input type="radio" name="prodSteamSter" value="No" <?php if ($prodSteamSter == "No"){ echo "checked";} ?>  	 	onchange='document.getElementById("hideprodSteamSterSpec").hidden=true;document.getElementById("prodSteamSterSpec").required=false;'>No</br>
								<input type="radio" name="prodSteamSter" value="Yes" <?php if ($prodSteamSter == "Yes"){ echo "checked";} ?> 				onchange='document.getElementById("hideprodSteamSterSpec").hidden=false;document.getElementById("prodSteamSterSpec").required=true;'>Yes</br>
							</div>
						</td>
					</tr>
				</table>

				<div <?php if ($prodSteamSter == "No" OR $prodSteamSter == ""){ echo "hidden";} ?> id="hideprodSteamSterSpec">
					<div class="input-group" >
						<textarea rows="4" cols="65" maxlength='199' name="prodSteamSterSpec" id="prodSteamSterSpec" class="form-control" placeholder="If 'Yes', please specify treated ingredient/s." style="width:500px;"><?php echo $prodSteamSterSpec; ?></textarea>
					</div>
				</div>

				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Ionising Radiation</label></br>
								<input type="radio" name="prodIonRad" value="No" <?php if ($prodIonRad == "No"){ echo "checked";} ?>   		onchange='document.getElementById("hideprodIonRadSpec").hidden=true;document.getElementById("prodIonRadSpec").required=false;'>No</br>
								<input type="radio" name="prodIonRad" value="Yes" <?php if ($prodIonRad == "Yes"){ echo "checked";} ?> 				onchange='document.getElementById("hideprodIonRadSpec").hidden=false;document.getElementById("prodIonRadSpec").required=true;'>Yes</br>
							</div>
						</td>
					</tr>
				</table>

				<div <?php if ($prodIonRad == "No" OR $prodIonRad == ""){ echo "hidden";} ?> id="hideprodIonRadSpec">
					<div class="input-group" >
						<textarea rows="4" cols="65" maxlength='199' name="prodIonRadSpec" id="prodIonRadSpec" class="form-control" placeholder="If 'Yes', please specify treated ingredient/s." style="width:500px;"><?php echo $prodIonRadSpec; ?></textarea>
					</div>
				</div>

				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Ethylene Oxide</label></br>
								<input type="radio" name="prodEthOxi" value="No" <?php if ($prodEthOxi == "No"){ echo "checked";} ?>   		onchange='document.getElementById("hideprodEthOxiSpec").hidden=true;document.getElementById("prodEthOxiSpec").required=false;'>No</br>
								<input type="radio" name="prodEthOxi" value="Yes" <?php if ($prodEthOxi == "Yes"){ echo "checked";} ?> 				onchange='document.getElementById("hideprodEthOxiSpec").hidden=false;document.getElementById("prodEthOxiSpec").required=true;'>Yes</br>
							</div>
						</td>
					</tr>
				</table>

				<div <?php if ($prodEthOxi == "No" OR $prodEthOxi == ""){ echo "hidden";} ?> id="hideprodEthOxiSpec">
					<div class="input-group" >
						<textarea rows="4" cols="65" maxlength='199' name="prodEthOxiSpec" id="prodEthOxiSpec" class="form-control" placeholder="If 'Yes', please specify treated ingredient/s." style="width:500px;"><?php echo $prodEthOxiSpec; ?></textarea>
					</div>
				</div>

				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Other fumigants or sterilants</label></br>
								<input type="radio" name="prodOtherFum" value="No" <?php if ($prodOtherFum == "No"){ echo "checked";} ?>  		onchange='document.getElementById("hideotherFum").hidden=true;document.getElementById("prodOtherFumSpec").required=false;document.getElementById("prodOtherFumIng").required=false;'>No</br>
								<input type="radio" name="prodOtherFum" value="Yes" <?php if ($prodOtherFum == "Yes"){ echo "checked";} ?> 				onchange='document.getElementById("hideotherFum").hidden=false;document.getElementById("prodOtherFumSpec").required=true;document.getElementById("prodOtherFumIng").required=true;'>Yes</br>
							</div>
						</td>
					</tr>
				</table>
				<div style="padding:10px;" <?php if ($prodOtherFum == "No" OR $prodOtherFum == ""){ echo "hidden";} ?> id="hideotherFum">
					<div class="input-group">
						<textarea rows="4" cols="65" maxlength='199' name="prodOtherFumSpec" id="prodOtherFumSpec" class="form-control" placeholder="Specify fumigant/s or sterilant/s." style="width:500px;"><?php echo $prodOtherFumSpec; ?></textarea>
					</div><br>
					<div class="input-group">
						<textarea rows="4" cols="65" maxlength='199' name="prodOtherFumIng" id="prodOtherFumIng" class="form-control" placeholder="Specify treated ingredient/s." style="width:500px;"><?php echo $prodOtherFumIng; ?></textarea>
					</div>
				</div>

				<hr>
				<h3>Preperation, Storage Packaging & Coding Information</h3>
				<br>
				<h4>Storage and Transportation</h4>
				<hr>
				<br>
				<div class="input-group">
					<label>Recommended storage Conditions</label></br>
					<textarea rows="4" cols="65" maxlength='200' placeholder="Specify storage conditions for opened and unopened product." name="storageAndHandling" id="storageAndHandling" class="form-control"  style="width:500px;"><?php echo $storageAndHandling; ?></textarea>
				</div>
				</br>


				<div class="input-group">
					<label>Shelf Life Frozen Unopened (Days)</label></br>
					<input type="number" name="prodSlFrozen" value="<?php echo $prodSlFrozen; ?>" placeholder="Days" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Shelf Life Frozen Opened (Days)</label></br>
					<input type="number" name="prodSlFrozenOpen" value="<?php echo $prodSlFrozenOpen; ?>" placeholder="Days" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Shelf Life Baked (Days)</label></br>
					<input type="number" name="shelfLifeBaked" value="<?php echo $shelfLifeBaked; ?>" placeholder="Days" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Recommended transportation requirements</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="prodTrans" id="prodTrans" class="form-control"  style="width:500px;"><?php echo $prodTrans; ?></textarea>
				</div>
				</br>

				<hr>
				<div class="input-group">
					<label>Product handling / baking instructions</label></br>
					<textarea rows="14" cols="65" maxlength='800' name="prodPrepBake" id="prodPrepBake" placeholder="Specify:&#10;Panning/Tray &#10;Defrosting &#10;Baking Instruction &#10;Oven temperature &#10;Baking time &#10;Steam &#10;Damper&#10;Post baking finishing" class="form-control"  style="width:500px;"><?php echo $prodPrepBake; ?></textarea>
				</div>
				</br>

				<table class="table">
				<thead>
				<th>Process</th>
				<th>Temp (°C)</th>
				<th>Time (Min)</th>
				<th>Humidity (%)</th>
				</thead>
				<tbody>
					<tr style="padding:50px;">
						<td>Proofing</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" name="prodProofTemp" value="<?php if($prodProofTemp == ""){echo "0";} else {echo $prodProofTemp;} ?>" class="form-control" min="0" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" name="prodProofTime" value="<?php if($prodProofTime == ""){echo "0";} else {echo $prodProofTime;} ?>" class="form-control" min="0" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" name="prodProofHum" value="<?php if($prodProofHum == ""){echo "0";} else {echo $prodProofHum;} ?>" class="form-control" min="0" max="100" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Baking</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" name="prodBakeTemp" value="<?php if($prodBakeTemp == ""){echo "0";} else {echo $prodBakeTemp;} ?>" class="form-control" min="0" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" name="prodBakeTime" value="<?php if($prodBakeTime == ""){echo "0";} else {echo $prodBakeTime;} ?>" class="form-control" min="0" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;"></td>
					</tr>
				</tbody>
				</table>
				<hr>
				<div class="input-group">
					<label>Possible abuse</label></br>
					<textarea rows="4" cols="65" maxlength='980' name="prodAbuse" id="prodAbuse" class="form-control"  style="width:500px;"><?php echo $prodAbuse; ?></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Receiving Instructions</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="prodRecInstr" id="prodRecInstr" class="form-control"  style="width:500px;"><?php echo $prodRecInstr; ?></textarea>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<h4>Packaging</h4>
				<hr>

				<?php



				?>
				<ul>
					<li>Inner bags are green in colour.</li>
					<li>Potential foreign objects  such as staples are avoided in packaging.</li>
					<li>The packaging does not contain any recycling symbols.</li>
				</ul>
				<br>
				<div class="input-group">
					<label>Pack Type</label></br>
					<input type="text" name="prodPackType" value="<?php echo $prodPackType; ?>" class="form-control" placeholder="Single / Bulk" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Sealing method</label></br>
					<input type="text" name="prodSeal" value="<?php echo $prodSeal; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<table>
					<tr>
						<td style="width:auto;padding:10px;">
							<div class="input-group">
								<label>Is the Product Double bagged</label></br>
								<input type="radio" name="prodDblBag" value="No" <?php if ($prodDblBag == "No"){ echo "checked";} ?>   >No</br>
								<input type="radio" name="prodDblBag" value="Yes" <?php if ($prodDblBag == "Yes"){ echo "checked";} ?> >Yes</br>
							</div>
						</td>
					</tr>
				</table>

				<div class="input-group">
					<label>Inner packaging Code And Description</label></br>
					<select class="form-control" id="innerPack" style="width:250px;" name="innerPack">
						<option value="<?php echo $innerPack; ?>"><?php echo $innerPack; ?></option>
						<?php

						//select for source
						$innerPackquery = "SELECT * FROM bill_of_materials WHERE ParentPart = '$prodCode' AND Sequence = '000005' ORDER BY `Component`";
						$innerPackresult = mysqli_query($db,$innerPackquery);
						$innerPackoptions = ' ';

						while ($innerPackoptions = mysqli_fetch_array($innerPackresult))
						{ ?>

							<option value="<?php echo $innerPackoptions['Component']; ?>"><?php echo $innerPackoptions['Component']; ?></option>';
							<?php
						}
							?>
					</select>
				</div>
				</br>

<?php

				$packDimquery = "SELECT * FROM packaging_dimensions WHERE itemCode='$innerPack'";
				$packDimresult = mysqli_query($db,$packDimquery);
				$packDimrow = mysqli_fetch_assoc($packDimresult);



?>
				<p><?php echo $packDimrow['dimensions']; ?></p>
				<br>
				<div class="input-group">
					<label>Inner packaging Qty</label></br>
					<input type="number" name="innerPackQty" value="<?php if($innerPackQty == ""){echo "0";} else {echo $innerPackQty;} ?>" class="form-control" maxlength='6' style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Outer packaging Code And Description</label></br>
					<select class="form-control" id="outerPack" style="width:250px;" name="outerPack">
						<option value="<?php echo $outerPack; ?>"><?php echo $outerPack; ?></option>
						<?php

						//select for source
						$outerPackquery = "SELECT * FROM bill_of_materials WHERE ParentPart = '$prodCode' AND Sequence = '000005' ORDER BY `Component`";
						$outerPackresult = mysqli_query($db,$outerPackquery);
						$outerPackoptions = ' ';

						while ($outerPackoptions = mysqli_fetch_array($outerPackresult))
						{ ?>

							<option value="<?php echo $outerPackoptions['Component']; ?>"><?php echo $outerPackoptions['Component']; ?></option>';
							<?php
						}
							?>
					</select>
					<p>
				</div>
				</br>

				<div class="input-group">
					<label>Outer packaging Qty</label></br>
					<input type="number" name="outerPackQty" value="<?php if($outerPackQty == ""){echo "0";} else {echo $outerPackQty;} ?>" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Boxes Per Layer</label></br>
					<input type="number" name="boxesPerLayer" value="<?php if($boxesPerLayer == ""){echo "0";} else {echo $boxesPerLayer;} ?>" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Box Layers Per Pallet</label></br>
					<input type="number" name="boxLayerPerPallet" value="<?php if($boxLayerPerPallet == ""){echo "0";} else {echo $boxLayerPerPallet;} ?>" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>



				<h4>General Coding</h4>

				<hr>
				<ul>
					<li>Type of Code: Production date & Best Before Date</li>
					<li>Method of Coding: Printed adhesive label</li>
					<li>Format of Code: Production date and Best Before date is printed dd/mm/yyyy format. Batch number a numerically assigned number.</li>
					<li>The coding ink is not in contact with the product.</li>
					<li>Every box will have a product label fixed to the outside of the box which will reflect; Date of manufacture & Best Before Date.</li>
				</ul>
				<br>
				<div class="input-group">
					<label>Date Coding</label></br>
					<input type="text" name="prodDateCoding" value="<?php echo $prodDateCoding; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Barcode Outer</label></br>
					<input type="text" name="prodBarOut" value="<?php echo $barcodeOuter; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Barcode Inner</label></br>
					<input type="text" name="prodBarIn" value="<?php echo $barcodeInner; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Picking Number</label></br>
					<input type="text" name="pickingNumber" value="<?php echo $pickingNumber; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>

				<div class="input-group">
					<label>Pack Size</label></br>
					<input type="number" name="prodPackSize" value="<?php echo $prodPackSize; ?>" placeholder="Units per box" class="form-control" min="1" maxlength='100'  style="width:500px;">
				</div>

				</br>

				<h4>Physical Specifications</h4>

				<hr>
				<h5><u>Raw Frozen</u></h5>
				<table class="table">
				<thead>
				<th>Description</th>
				<th>UOM</th>
				<th>Min</th>
				<th>Avg</th>
				<th>Max</th>
				</thead>
				<tbody>
					<tr style="padding:50px;">
						<td>Weight</td>
						<td>kg</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodMassMin" value="<?php if($prodMassMin == ""){echo "0";} else {echo $prodMassMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodMassAvg" value="<?php if($prodMassAvg == ""){echo "0";} else {echo $prodMassAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodMassMax" value="<?php if($prodMassMax == ""){echo "0";} else {echo $prodMassMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Length</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodLengthMin" value="<?php if($prodLengthMin == ""){echo "0";} else {echo $prodLengthMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodLengthAvg" value="<?php if($prodLengthAvg == ""){echo "0";} else {echo $prodLengthAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodLengthMax" value="<?php if($prodLengthMax == ""){echo "0";} else {echo $prodLengthMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Width</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodWidthMin" value="<?php if($prodWidthMin == ""){echo "0";} else {echo $prodWidthMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodWidthAvg" value="<?php if($prodWidthAvg == ""){echo "0";} else {echo $prodWidthAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodWidthMax" value="<?php if($prodWidthMax == ""){echo "0";} else {echo $prodWidthMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Thickness</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodThickMin" value="<?php if($prodThickMin == ""){echo "0";} else {echo $prodThickMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodThickAvg" value="<?php if($prodThickAvg == ""){echo "0";} else {echo $prodThickAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodThickMax" value="<?php if($prodThickMax == ""){echo "0";} else {echo $prodThickMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr>
						<td>Test Method</td>
						<td colspan="4"><input type="text" name="prodTestMeth" value="<?php if($prodTestMeth == ""){echo "0";} else {echo $prodTestMeth;} ?>" class="form-control" maxlength='100' ></td>
					</tr>
				</tbody>
				</table>

				<hr>
				<h5><u>Baked</u></h5>
				<table class="table">
				<thead>
				<th>Description</th>
				<th>UOM</th>
				<th>Min</th>
				<th>Avg</th>
				<th>Max</th>
				</thead>
				<tbody>
					<tr style="padding:50px;">
						<td>Weight</td>
						<td>kg</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodBakedMassMin" value="<?php if($prodBakedMassMin == ""){echo "0";} else {echo $prodBakedMassMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodBakedMassAvg" value="<?php if($prodBakedMassAvg == ""){echo "0";} else {echo $prodBakedMassAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="number" step="0.01" name="prodBakedMassMax" value="<?php if($prodBakedMassMax == ""){echo "0";} else {echo $prodBakedMassMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Length</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedLengthMin" value="<?php if($prodBakedLengthMin == ""){echo "0";} else {echo $prodBakedLengthMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedLengthAvg" value="<?php if($prodBakedLengthAvg == ""){echo "0";} else {echo $prodBakedLengthAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedLengthMax" value="<?php if($prodBakedLengthMax == ""){echo "0";} else {echo $prodBakedLengthMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Width</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedWidthMin" value="<?php if($prodBakedWidthMin == ""){echo "0";} else {echo $prodBakedWidthMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedWidthAvg" value="<?php if($prodBakedWidthAvg == ""){echo "0";} else {echo $prodBakedWidthAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedWidthMax" value="<?php if($prodBakedWidthMax == ""){echo "0";} else {echo $prodBakedWidthMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr style="padding:50px;">
						<td>Thickness</td>
						<td>mm</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedThickMin" value="<?php if($prodBakedThickMin == ""){echo "0";} else {echo $prodBakedThickMin;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedThickAvg" value="<?php if($prodBakedThickAvg == ""){echo "0";} else {echo $prodBakedThickAvg;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
						<td style="width:140px;padding:10px;">
							<div class="input-group">
								<input type="float" name="prodBakedThickMax" value="<?php if($prodBakedThickMax == ""){echo "0";} else {echo $prodBakedThickMax;} ?>" class="form-control" style="width:80px;">
							</div>
						</td>
					</tr>
					<tr>
						<td>Test Method</td>
						<td colspan="4"><input type="text" name="prodBakedTestMeth" value="<?php echo $prodBakedTestMeth; ?>" class="form-control" maxlength='100' ></td>
					</tr>
				</tbody>
				</table>
				<hr>

				<h4>Chemical Specifications</h4>
				<br>
				<p>None</p>
				<br>
				<hr>

				<h4>Microbiological Specifications</h4>
				<br>


				<div class="input-group">
					<label>Test for Ecoli</label></br>
					<input type="radio" name="testEcoli" value="No" <?php if ($testEcoli == "No" OR $testEcoli == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestEcoli").hidden=true; document.getElementById("limitEcoli").required=false;'>No</br>
					<input type="radio" name="testEcoli" required value="Yes" <?php if ($testEcoli == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestEcoli").hidden=false; document.getElementById("limitEcoli").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testEcoli == "No" OR $testEcoli == ""){ echo "hidden";} ?> id="hidetestEcoli">
					<?php microSelect($limitEcoli,"Ecoli",'limitEcoli',$db); ?>
				</div>

				<hr>

				<div class="input-group">
					<label>Test for Staph Aureus</label></br>
					<input type="radio" name="testStaphAureus" value="No" <?php if ($testStaphAureus == "No" OR $testStaphAureus == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestStaphAureus").hidden=true;document.getElementById("limitStaphAureus").required=false;'>No</br>
					<input type="radio" name="testStaphAureus" required value="Yes" <?php if ($testStaphAureus == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestStaphAureus").hidden=false; document.getElementById("limitStaphAureus").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testStaphAureus == "No" OR $testStaphAureus == ""){ echo "hidden";} ?> id="hidetestStaphAureus">
					<?php microSelect($limitStaphAureus,"Staph Aureus",'limitStaphAureus',$db); ?>
				</div>
				<hr>


				<div class="input-group">
					<label>Test for Coliforms</label></br>
					<input type="radio" name="testColiforms" value="No" <?php if ($testColiforms == "No" OR $testColiforms == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestColiforms").hidden=true; document.getElementById("limitColiforms").required=false;'>No</br>
					<input type="radio" name="testColiforms" required value="Yes" <?php if ($testColiforms == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestColiforms").hidden=false; document.getElementById("limitColiforms").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testColiforms == "No" OR $testColiforms == ""){ echo "hidden";} ?> id="hidetestColiforms">
					<?php microSelect($limitColiforms,"Coliforms",'limitColiforms',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Faeccal Coliforms</label></br>
					<input type="radio" name="testFaeccalColiforms" value="No" <?php if ($testFaeccalColiforms == "No" OR $testFaeccalColiforms == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestFaeccalColiforms").hidden=true; document.getElementById("limitFaeccalColiforms").required=false;'>No</br>
					<input type="radio" name="testFaeccalColiforms" required value="Yes" <?php if ($testFaeccalColiforms == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestFaeccalColiforms").hidden=false; document.getElementById("limitFaeccalColiforms").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testFaeccalColiforms == "No" OR $testFaeccalColiforms == ""){ echo "hidden";} ?> id="hidetestFaeccalColiforms">
					<?php microSelect($limitFaeccalColiforms,"Faeccal Coliforms",'limitFaeccalColiforms',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Clostridium Perfringens</label></br>
					<input type="radio" name="testClostridiumPerfringens" value="No" <?php if ($testClostridiumPerfringens == "No" OR $testClostridiumPerfringens == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestClostridiumPerfringens").hidden=true; document.getElementById("limitClostridiumPerfringens").required=false;'>No</br>
					<input type="radio" name="testClostridiumPerfringens" required value="Yes" <?php if ($testClostridiumPerfringens == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestClostridiumPerfringens").hidden=false; document.getElementById("limitClostridiumPerfringens").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testClostridiumPerfringens == "No" OR $testClostridiumPerfringens == ""){ echo "hidden";} ?> id="hidetestClostridiumPerfringens">
					<?php microSelect($limitClostridiumPerfringens,"Clostridium Perfringens",'limitClostridiumPerfringens',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Salmonella</label></br>
					<input type="radio" name="testSalmonella" value="No" <?php if ($testSalmonella == "No" OR $testSalmonella == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestSalmonella").hidden=true; document.getElementById("limitSalmonella").required=false;'>No</br>
					<input type="radio" name="testSalmonella" required value="Yes" <?php if ($testSalmonella == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestSalmonella").hidden=false; document.getElementById("limitSalmonella").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testSalmonella == "No" OR $testSalmonella == ""){ echo "hidden";} ?> id="hidetestSalmonella">
					<?php microSelect($limitSalmonella,"Salmonella",'limitSalmonella',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Listeria Mono</label></br>
					<input type="radio" name="testListriaMono" value="No" <?php if ($testListriaMono == "No" OR $testListriaMono == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestListriaMono").hidden=true; document.getElementById("limitListriaMono").required=false;'>No</br>
					<input type="radio" name="testListriaMono" required value="Yes" <?php if ($testListriaMono == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestListriaMono").hidden=false; document.getElementById("limitListriaMono").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testListriaMono == "No" OR $testListriaMono == ""){ echo "hidden";} ?> id="hidetestListriaMono">
					<?php microSelect($limitListriaMono,"Listria Mono",'limitListriaMono',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Bacillus Cerus</label></br>
					<input type="radio" name="testBacillusCerus" value="No" <?php if ($testBacillusCerus == "No" OR $testBacillusCerus == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestBacillusCerus").hidden=true; document.getElementById("limitBacillusCerus").required=false;'>No</br>
					<input type="radio" name="testBacillusCerus" required value="Yes" <?php if ($testBacillusCerus == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestBacillusCerus").hidden=false; document.getElementById("limitBacillusCerus").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testBacillusCerus == "No" OR $testBacillusCerus == ""){ echo "hidden";} ?> id="hidetestBacillusCerus">
					<?php microSelect($limitBacillusCerus,"Bacillus Cerus",'limitBacillusCerus',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Enterobac</label></br>
					<input type="radio" name="testEnterobac" value="No" <?php if ($testEnterobac == "No" OR $testEnterobac == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestEnterobac").hidden=true; document.getElementById("limitEnterobac").required=false;'>No</br>
					<input type="radio" name="testEnterobac" required value="Yes" <?php if ($testEnterobac == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestEnterobac").hidden=false; document.getElementById("limitEnterobac").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testEnterobac == "No" OR $testEnterobac == ""){ echo "hidden";} ?> id="hidetestEnterobac">
					<?php microSelect($limitEnterobac,"Enterobac",'limitEnterobac',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for TMA</label></br>
					<input type="radio" name="testTMA" value="No" <?php if ($testTMA == "No" OR $testTMA == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestTMA").hidden=true; document.getElementById("limitTMA").required=false;'>No</br>
					<input type="radio" name="testTMA" required value="Yes" <?php if ($testTMA == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestTMA").hidden=false; document.getElementById("limitTMA").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testTMA == "No" OR $testTMA == ""){ echo "hidden";} ?> id="hidetestTMA">
					<?php microSelect($limitTMA,"TMA",'limitTMA',$db); ?>
				</div>
				<hr>

				<div class="input-group">
					<label>Test for Yeast and Mould</label></br>
					<input type="radio" name="testYeastMould" value="No" <?php if ($testYeastMould == "No" OR $testYeastMould == ""){ echo "checked";} ?>   onchange='document.getElementById("hidetestYeastMould").hidden=true; document.getElementById("limitYeastMould").required=false;'>No</br>
					<input type="radio" name="testYeastMould" required value="Yes" <?php if ($testYeastMould == "Yes"){ echo "checked";} ?> onchange='document.getElementById("hidetestYeastMould").hidden=false; document.getElementById("limitYeastMould").required=true;'>Yes</br>
				</div>
				<br>
				<div <?php if ($testYeastMould == "No" OR $testYeastMould == ""){ echo "hidden";} ?> id="hidetestYeastMould">
					<?php microSelect($limitYeastMould,"Yeast and Mould",'limitYeastMould',$db); ?>
				</div>
				<hr>


				<div class="form-group">
					<input type="hidden" name="ItemCode" value="<?php echo $prodCode; ?>" />
					<input type="hidden" name="login" value="login" />
					<button type="submit" class="btn btn-info hidden-print"  value="Log In" style="width:110px; background-color:#3399ff; border-color: lilac;" >Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>



</tbody>
