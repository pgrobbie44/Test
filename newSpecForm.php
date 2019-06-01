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

?>





<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
		<img src="certItLogo.png" alt="logo" width="50" height="50" style="border-radius: 20%;">
    </div>
    <ul class="nav navbar-nav">
		<li><a href="ProductIndex.php">Product Index</a></li>
		<li><a href="newProductIndex.php">New Product Index</a></li>
		<li class="active"><a href="newSpecForm.php">Add New Product</a></li>
		<li><a href="rmIndex.php">RM Index</a></li>
	</ul>

	<button class="btn btn-danger navbar-btn" style="float:right;"><a href="login.html" class="button" style="text-decoration:none; color:white;" onclick="return confirm('Are you sure you want to log out?')"><span class="glyphicon glyphicon-log-out"></span> Log out</a></button>
  
  </div>
</nav>



<div class="container bg-primary" style=" padding:20px; background-image:url('images/graphite.png'); width:580px;margin-top:50px; border-style: outset; border-color:white; border-width:2px; border-radius:12px">

	<h1 style="color:white;text-align:center; font-size:30pt;"><strong>Add New Product Specification</strong></h1> 
	<hr>

	<div class="row">

		<div class="col-md-12">

			<form role="form" action="specinsert.php" method="post" >

				
				<div class="input-group">
					<label>Product Code</label></br>
					<input type="text" name="prodcode" class="form-control" required style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Product Name</label></br>
					<input type="text" name="prodname" class="form-control" maxlength='100' required style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					<label>Product description</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="proddescription" id="proddesc" class="form-control" required style="width:500px;"></textarea>
				</div>
				</br>
				
				<div class="input-group">
					<label>Legal description / Suggested Labeling Description</label></br>
					<textarea rows="4" cols="65" maxlength='200' name="legaldescription" id="legaldesc" class="form-control" required style="width:500px;"></textarea>
				</div>
				</br>
				
				<div class="input-group">
					<label>Ingredient Declaration including QUID</label></br>
					<textarea rows="6" cols="65" maxlength='500' name="ingredientdeclaration" id="ingredientdecl" class="form-control" required style="width:500px;"></textarea>
				</div>
				</br>

				<div class="input-group">
					<label>Processing Aids</label></br>
					<input type="text" name="processingaids" class="form-control" maxlength='200' required style="width:500px;">
				</div>
				</br>
				<hr>
				<div class="input-group">
					  <label>Country of Origin</label></br>
					  <input type="radio" name="countryoforigin" value="produce of" checked>Produce of<br>
					  <input type="radio" name="countryoforigin" value="Made in" > Made in<br>
					  <input type="radio" name="countryoforigin" value="other" > other<br>
				</div>
				</br>

				<div class="input-group">
					<label>Country</label></br>
					<input type="text" name="countryoforiginname" class="form-control" maxlength='200' required style="width:500px;">
				</div>
				</br>
				
				<div class="input-group">
					  <label>Does the product contain meat?</label></br>
					  <input type="radio" name="Extrainfo" id="Extrainfo" onchange='document.getElementById("altinput").disabled=true;document.getElementById("hideme").hidden=true;document.getElementById("altinput").value="";document.getElementById("altinput").required=false;' value="no" checked> No<br>
					  <input type="radio" name="Extrainfo" value="yes" onchange='document.getElementById("altinput").disabled=false;document.getElementById("hideme").hidden=false;document.getElementById("altinput").focus();document.getElementById("altinput").required=true;'> Yes<br>
				</div>
				</br>

				<div hidden id="hideme">
					<div class="input-group" >
						<label>Specify (Maximum 250 characters)</label></br>
						<textarea rows="4" cols="65" name="altinput" maxlength='500' class="form-control" id="altinput" hidden style="resize: none;"></textarea>
					</div>
				</div>
				</br>
				<div class="input-group">
					<label>Use and Abuse</label></br>
					<input type="text" name="useandabuse" class="form-control" maxlength='200' required style="width:500px;">
				</div>
				</br>
				
				<hr>
				<p> &#9830; this is text;</p>
				</br>
				
				<div class="form-group">
					<input type="hidden" name="login" value="login" />
					<button type="submit" class="btn btn-info"  value="Log In" style="width:110px; background-color:#3399ff; border-color: lilac;" >Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>


</tbody>