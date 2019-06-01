<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cert-iT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
</head>

<body style="background-color:#F5F5F5;background-image:url('images/wood.png');">

<?php

//add dbconnection
include('dbinfo.php');

$prodCode = $_GET['id'];

//create query

$query = "SELECT * FROM new_product WHERE prodCode='$prodCode'";

$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);


$prodName 						= $row['prodName'];
$prodCat 						= $row['prodCat'];
$prodDescription 				= $row['prodDescription'];
$barcodeOuter					= $row['prodBarOut'];
$barcodeInner 					= $row['prodBarIn'];
$prodPackSize 					= $row['prodPackSize'];
$prodUnitWeightMin 				= $row['prodMassMin'];
$prodUnitWeightavg 				= $row['prodMassAvg'];
$prodUnitWeightMax 				= $row['prodMassMax'];
$pickingNumber 					= $row['pickingNumber'];
$shelfLifeFrozen 				= $row['shelfLifeFrozen'];
$shelfLifeBaked 				= $row['shelfLifeBaked'];
$dateCoding 					= $row['dateCoding'];
$receivingInstructions 			= $row['receivingInstr'];
$storageAndHandling 			= $row['storageAndHandling'];
$vulnaSuitability	 			= $row['vulnaSuitability'];
$boxType 						= $row['boxType'];
$innerPack1 					= $row['innerPack1'];
$innerPackQty1 					= $row['innerPackQty1'];
$innerPack2 					= $row['innerPack2'];
$innerPackQty2 					= $row['innerPackQty2'];
$boxesPerLayer 					= $row['boxesPerLayer'];
$boxLayerPerPallet 				= $row['boxLayerPerPallet'];
?>





<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
		<img src="certItLogo.png" alt="logo" width="50" height="50" style="border-radius: 20%;">
    </div>
    <ul class="nav navbar-nav">
		<li><a href="ProductIndex.php">Product Index</a></li>
		<li><a href="newProductIndex.php">New Product Index</a></li>
		<li class="active"><a href="newProductFormAdd.php">Add New Product</a></li>
		<li><a href="rmIndex.php">RM Index</a></li>
		<li><a href="wipIndex.php">WIP Index</a></li>
	</ul>

	<button class="btn btn-danger navbar-btn" style="float:right;"><a href="login.html" class="button" style="text-decoration:none; color:white;" onclick="return confirm('Are you sure you want to log out?')"><span class="glyphicon glyphicon-log-out"></span> Log out</a></button>
  
  </div>
</nav>



<div class="container bg-primary" style=" padding:20px; background-image:url('images/graphite.png'); width:580px;margin-top:50px; border-style: outset; border-color:white; border-width:2px; border-radius:12px">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
			  <li ><a href="newProductIndex.php?id=<?php echo $prodCode; ?>">New Product Index</a></li>
			  <li class="active"><a href="#">Edit Product<span></a></li>
			</ul>
				<div class="dropdown" style="float:right;">
					<a href="Pallet_Ticket_Print.php?id=<?php echo $prodCode;?>"><button class="btn btn-default dropbtnheader" style="width:110px;color:black; margin-top:6px;"><span class="glyphicon glyphicon-print"> Print</button></span></a>

				</div>
		</div>
	</nav>




	<h1 style="color:white;text-align:center; font-size:30pt;"><strong>Edit New Product</strong></h1> 
	<hr>

	<div class="row">

		<div class="col-md-12">

			<form role="form" action="newProductUpdate.php" method="post" >

				
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
					<label>Product Category</label></br>
					<input type="text" name="prodCat" value="<?php echo $prodCat; ?>" required class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Product description</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="prodDescription" required id="proddesc" class="form-control"  style="width:500px;"><?php echo $prodDescription; ?></textarea>
				</div>
				</br>
				
				
				<h3>Product Information</h3>
				<hr>
				<div class="input-group">
					<label>Barcode Outer</label></br>
					<input type="text" name="barcodeOuter" value="<?php echo $barcodeOuter; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Barcode Inner</label></br>
					<input type="text" name="barcodeInner" value="<?php echo $barcodeInner; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Pack Size</label></br>
					<input type="number" name="prodPackSize" value="<?php echo $prodPackSize; ?>" placeholder="Units per box" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Unit weigth Min</label></br>
					<input type="float" name="prodUnitWeightMin" value="<?php echo $prodUnitWeightMin; ?>" class="form-control" maxlength='100'  style="width:80px;">
					</br>
					<label>Kg</label></br>
				</div>
				</br>
				
				<div class="input-group">
					<label>Unit weigth Avg</label></br>
					<input type="float" name="prodUnitWeightavg" value="<?php echo $prodUnitWeightavg; ?>" class="form-control" maxlength='100'  style="width:80px;">
					
					<label>Kg</label></br>
				</div>
				</br>
				
				<div class="input-group">
					<label>Unit weigth Max</label></br>
					<input type="float" name="prodUnitWeightMax" value="<?php echo $prodUnitWeightMax; ?>" class="form-control" maxlength='100'  style="width:80px;">
					
					<label>Kg</label></br>
				</div>
				</br>
				
				<div class="input-group">
					<label>Picking Number</label></br>
					<input type="text" name="pickingNumber" value="<?php echo $pickingNumber; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
			
				<div class="input-group">
					<label>Shelf Life Frozen (Days)</label></br>
					<input type="number" name="shelfLifeFrozen" value="<?php echo $shelfLifeFrozen; ?>" placeholder="Days" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>
			
				<div class="input-group">
					<label>Shelf Life Baked (Days)</label></br>
					<input type="number" name="shelfLifeBaked" value="<?php echo $shelfLifeBaked; ?>" placeholder="Days" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>
			
				<div class="input-group">
					<label>Date Coding</label></br>
					<input type="text" name="dateCoding" value="<?php echo $dateCoding; ?>" class="form-control" maxlength='100'  style="width:500px;">
				</div>
				</br>
			
				<div class="input-group">
					<label>Receiving Instructions</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="receivingInstructions" id="receivingInstructions" class="form-control"  style="width:500px;"><?php echo $receivingInstructions; ?></textarea>
				</div>
				</br>
				<div class="input-group">
					<label>Storage And Handling</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="storageAndHandling" id="storageAndHandling" class="form-control"  style="width:500px;"><?php echo $storageAndHandling; ?></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Vulnerability And Suitability</label></br>
					<input type="text" name="vulnaSuitability" value="<?php echo $vulnaSuitability; ?>" class="form-control" maxlength='200'  style="width:500px;">
				</div>
				</br>
				
				
				<h3>Packaging</h3>
				<hr>
				
				<div class="input-group">
					<label>Box Code And Description</label></br>
					<input type="text" name="boxType" value="<?php echo $boxType; ?>" class="form-control" placeholder="If new specify dimensions in mm (W) x (L) x (H) and proposed code"maxlength='200'  style="width:500px;">
				</div>
				</br>				

				
				<div class="input-group">
					<label>Inner packaging Code And Description (1)</label></br>
					<input type="text" name="innerPack1" value="<?php echo $innerPack1; ?>" class="form-control" placeholder="If new specify dimensions in mm (W) x (L) x (T) and proposed code"maxlength='200'  style="width:500px;">
				</div>
				</br>	
				
				<div class="input-group">
					<label>Inner packaging Qty (1)</label></br>
					<input type="number" name="innerPackQty1" value="<?php echo $innerPackQty1; ?>" class="form-control" maxlength='6'  style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Inner packaging Code And Description (2)</label></br>
					<input type="text" name="innerPack2" value="<?php echo $innerPack2; ?>" class="form-control" placeholder="If new specify dimensions in mm (W) x (L) x (T) and proposed code"maxlength='200'  style="width:500px;">
				</div>
				</br>	
				
				<div class="input-group">
					<label>Inner packaging Qty (2)</label></br>
					<input type="number" name="innerPackQty2" value="<?php echo $innerPackQty2; ?>" class="form-control" maxlength='6' required style="width:80px;">
				</div>
				</br>					
				
				<div class="input-group">
					<label>Boxes Per Layer</label></br>
					<input type="number" name="boxesPerLayer" value="<?php echo $boxesPerLayer; ?>" class="form-control" maxlength='6' required style="width:80px;">
				</div>
				</br>

				<div class="input-group">
					<label>Box Layers Per Pallet</label></br>
					<input type="number" name="boxLayerPerPallet" value="<?php echo $boxLayerPerPallet; ?>" class="form-control" maxlength='6' required style="width:80px;">
				</div>
				</br>
				
				<hr>
				
				<div class="form-group">
					<input type="hidden" name="login" value="login" />
					<button type="submit" class="btn btn-info"  value="Log In" style="width:110px; background-color:#3399ff; border-color: lilac;" >Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>


</tbody>