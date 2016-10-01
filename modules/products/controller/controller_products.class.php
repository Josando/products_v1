<?php

	
	if (isset($_POST['submit'])) {
		$_SESSION=$_POST;

		$callback="index.php?module=products&view=results_products";
		//die('<script>window.location.href="'.$callback .'";</script>');index.php?module=products&view=
		//die('<script>window.location.href="'.$callback .'";</script>');
		redirect($callback);
	}		
	include 'modules/products/view/create_products.php';