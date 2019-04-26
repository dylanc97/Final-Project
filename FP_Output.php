<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PC Builder - Output</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script type="text/javascript" rel="script" src="FP_output.js">
    </script>
	<style><?php include 'style.css'; ?> </style>
</head>

<?php
	$servername = "dbsrv2.cs.fsu.edu";
	$user = "avaglian";
	$password = "8me5rQJNd2eN";
	$conn = new mysqli($servername, $user, $password);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	mysqli_select_db($conn, "avagliandb");
	
	$username = $_GET['username'];
	$gname = $_GET['gname'];
	
	// Get img link
	$sql = mysqli_query($conn, "SELECT link FROM game WHERE game.name='" . $gname ."';");
	$result = mysqli_fetch_row($sql);
	$imgLink = $result[0];
	
	// Get the users maxPrice
	$sql = mysqli_query($conn, "SELECT maxPrice FROM user WHERE user.userName='" . $username ."';");
	if($sql === false){
		printf("error: %s\n", mysqli_error($conn));
	}
	else{
		$result = mysqli_fetch_row($sql);
		$price = $result[0];
	}
	// Get the users preferred company
	$sql = mysqli_query($conn, "SELECT company FROM user WHERE user.userName='" . $username ."';");
	if($sql == false){
		printf("error: %s\n", mysqli_error($con));
	}
	else{
		$result = mysqli_fetch_row($sql);
		$company = $result[0]; 
	}
	
	// Get games genre
	$sql = mysqli_query($conn, "SELECT genre FROM game WHERE game.name='" . $gname ."';");
	if($sql == false){
		printf("error: %s\n", mysqli_error($con));
	}
	else{
		$result = mysqli_fetch_row($sql);
		$genre = $result[0];
	}
	
	if($genre == "Standard"){
		$flag = 1;
	}
	else if($genre == "Battle Royale"){
		$flag = 2;
	}
	else{
		$flag = 3;
	}
	
	////////////////////// Determining the parts and total price //////////////////////////////////
	// For case
	$storeArr = Array();
	$sql = mysqli_query($conn, "SELECT name FROM parts WHERE parts.category='CASE' ORDER BY price ASC;");
	$result = mysqli_fetch_row($sql);

	// For INTEL 1
	if($price > 750){
				//////////////////////////////////// MAX /////////////////////////////////////////////////////////
		if($price > 1800){
			//////////////////////////////////// 1 ///////////////////////////////////////////////////////////
		if ($flag == 1){
			if($company == "intel"){
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
			
				$cpuPrice = 365;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=365;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 780;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=780;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 215;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=215;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
			else{
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
			
				$cpuPrice = 225;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=225;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 780;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=780;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 215;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=215;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
		////////////////////////////////////////////// 2/////////////////////////////////////////////////
		else if($flag = 2){
			if($company == "intel"){
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 365;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=365;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 809;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=809;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 95;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=95;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1]; 
			}
			else{
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 225;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=225;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 809;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=809;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 95;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=95;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
		////////////////////////////////////////// 3 /////////////////////////////////////////////////
		else{
			if($company == "intel"){
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 409;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=409;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 780;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=780;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 95;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=95;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
			else{
				$casePrice = 160;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=160;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 295;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=295;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 780;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=780;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 95;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=95;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 118;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=118;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
		
	}
		///////////////////////////////////////////// MID ///////////////////////////////////////////////////
		else{
				//////////////////////////////////// 1 ///////////////////////////////////////////////////////////
			if ($flag == 1){
				if($company == "intel"){
					$casePrice = 97;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=97;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
				
					$cpuPrice = 242;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=242;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 383;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=383;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 127;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=127;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];
				}
				else{
					$casePrice = 97;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=97;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
				
					$cpuPrice = 180;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=180;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 383;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=383;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 127;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=127;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];					
				}
			}
			////////////////////////////////////////////// 2/////////////////////////////////////////////////
			else if($flag = 2){
				if($company == "intel"){
					$casePrice = 54;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
					
					$cpuPrice = 242;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=242;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 499;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=499;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 88;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=88;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];
				}
				else{
					$casePrice = 54;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
					
					$cpuPrice = 180;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=180;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 499;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=499;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 88;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=88;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];
				}
			}
			////////////////////////////////////////// 3 /////////////////////////////////////////////////
			else{
				if($company == "intel"){
					$casePrice = 97;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=97;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
					
					$cpuPrice = 265;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=265;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 383;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=383;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 88;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=88;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];
				}
				else{
					$casePrice = 97;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=97;");
					$result = mysqli_fetch_row($sql);
					$caseName = $result[0];
					$caseLink = $result[1];
					
					$cpuPrice = 178;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=178;");
					$result = mysqli_fetch_row($sql);
					$cpuName = $result[0];
					$cpuLink = $result[1];
					
					$gpuPrice = 383;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=383;");
					$result = mysqli_fetch_row($sql);
					$gpuName = $result[0];
					$gpuLink = $result[1];
					
					$ramPrice = 88;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=88;");
					$result = mysqli_fetch_row($sql);
					$ramName = $result[0];
					$ramLink = $result[1];
					
					$storagePrice = 78;
					$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=78;");
					$result = mysqli_fetch_row($sql);
					$storageName = $result[0];
					$storageLink = $result[1];
				}
			
			}
		}
	}
	/////////////////////////////////////// LOW /////////////////////////////////////////////////////////////////
	else{
		//////////////////////////////////// 1 ///////////////////////////////////////////////////////////
		if ($flag == 1){
			// Low
			if($company == "intel"){
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
			
				$cpuPrice = 180;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=180;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 280;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=280;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 84;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=84;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
			else{
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
			
				$cpuPrice = 149;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=149;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 280;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=280;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 84;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=84;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
		////////////////////////////////////////////// 2/////////////////////////////////////////////////
		else if($flag = 2){
			if($company == "intel"){
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 180;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=180;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 299;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=299;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 52;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=52;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
			else{
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 149;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=149;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 299;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=299;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 52;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=52;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
		////////////////////////////////////////// 3 /////////////////////////////////////////////////
		else{
			if($company == "intel"){
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 213;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=213;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 280;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=280;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 52;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=52;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
			else{
				$casePrice = 54;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CASE' AND parts.price=54;");
				$result = mysqli_fetch_row($sql);
				$caseName = $result[0];
				$caseLink = $result[1];
				
				$cpuPrice = 164;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='CPU' AND parts.price=164;");
				$result = mysqli_fetch_row($sql);
				$cpuName = $result[0];
				$cpuLink = $result[1];
				
				$gpuPrice = 280;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='GPU' AND parts.price=280;");
				$result = mysqli_fetch_row($sql);
				$gpuName = $result[0];
				$gpuLink = $result[1];
				
				$ramPrice = 52;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='RAM' AND parts.price=52;");
				$result = mysqli_fetch_row($sql);
				$ramName = $result[0];
				$ramLink = $result[1];
				
				$storagePrice = 58;
				$sql = mysqli_query($conn, "SELECT name, link FROM parts WHERE parts.category='STORAGE' AND parts.price=58;");
				$result = mysqli_fetch_row($sql);
				$storageName = $result[0];
				$storageLink = $result[1];
			}
		}
	}
	$totalPrice = $casePrice + $cpuPrice + $gpuPrice + $ramPrice + $storagePrice;
?>

<body onload="onload();">

<div>
    <div class="column" style="float: left">
        <div>
            <h1> <?php echo $username?>'s game:</h1>
        </div>
        <div>
            <img id="imageid" src="../<?php echo $imgLink ?>" alt="Cover of chosen game">
        </div>
        <h2 id="gName"><?php echo $gname ?></h2>
    </div>
	
	
    <div class="column" style="float: left">
		<h1>Your cost: $<?php echo $totalPrice?></h1>
        <div class="parts">
            <h2>CASE:</h2>
            <div class="parts">
                <p id="case"><?php echo $caseName?>: $<?php echo $casePrice?></p>
                <a href="<?php echo $caseLink ?>" id="case_link">
                    BUY HERE
                </a>
            </div>
            <h2>CPU:</h2>
            <div class="parts">
                <p id="cpu"><?php echo $cpuName?>: $<?php echo $cpuPrice?></p>
                <a href="<?php echo $cpuLink ?>" id="cpu_link">
				BUY HERE
                </a>
            </div>
            <h2>GPU:</h2>
            <div class="parts">
                <p id="gpu"><?php echo $gpuName?>: $<?php echo $gpuPrice?></p>
                <a href="<?php echo $gpuLink ?>" id="gpu_link">
				BUY HERE
                </a>
            </div>
            <h2>RAM:</h2>
            <div class="parts">
                <p id="ram"><?php echo $ramName?>: $<?php echo $ramPrice?></p>
                <a href="<?php echo $ramLink ?>" id="ram_link">
				BUY HERE
                </a>
            </div>
            <h2>STORAGE:</h2>
            <div class="parts">
                <p id="storage"><?php echo $storageName?>: $<?php echo $storagePrice?></p>
                <a href="<?php echo $storageLink ?>" id="storage_link">
				BUY HERE
                </a>
            </div>
        </div>
    </div>
	
</div>


</body>
</html>