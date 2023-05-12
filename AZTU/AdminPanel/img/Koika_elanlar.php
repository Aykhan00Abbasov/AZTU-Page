<?

@include 'Connect.php';

session_start();

if(isset($_POST['Elanlar'])){

	header('location:Koika_elanlar.php');

};

if(isset($_POST['Şəxsi_məlumatlar'])){

	header('location:Koika_şəxsi_məlumatlar.php');
};

if(isset($_POST['Dərs_cədvəli'])){

	header('location:Koika_cədvəl.php');
};

if(isset($_POST['exit'])){
	
	header('location:index.php');
	exit;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cədvəl</title>

    <link rel="shortcut icon" href="" >
    <link rel="stylesheet" href="css/StyleKoika.css">
	
	<!-- bootstrap -->
	<link href="Bcss/demo-page.css" rel="stylesheet" media="all">
	<link href="Bcss/hover.css" rel="stylesheet" media="all">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	
	
</head>
<body>

		<div class="box_up">
			<h1 class="user_name"> 
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 14 14"> 
				<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
				</svg> 
				<?php echo $_SESSION['Name'] ?> <?php echo $_SESSION['Surname'];?>
					
					<form action="" Method="POST">
						<button type="submit" name="exit" class="exit_button"> 
								Çıxış edin
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 12">
									  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
									  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
								</svg>
						</button>
					</form>	
			</h1>
		</div>

    <div class="box_left">
	
        <img class="logo" src="img/logo.png">
	
		<form action="" Method="POST">
			
				<button type="submit" name="Elanlar" class="text"  > Elanlar 
						<svg xmlns="http://www.w3.org/2000/svg" class="icons" width="16" height="16"  viewBox="0 0 16 16">
						  <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
						</svg> 
				</button>

				<button type="submit" name="Şəxsi_məlumatlar" class="text" > Şəxsi məlumatlar 
						<svg xmlns="http://www.w3.org/2000/svg" class="icons" width="16" height="16">
						  <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
						</svg> 
				</button>

				<button type="submit" name="Dərs_cədvəli" class="text" > Dərs cədvəli
						 <svg xmlns="http://www.w3.org/2000/svg" class="icons" width="16" height="16">
						  <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
						</svg> 
				</button>
				
		</form>
		
		<div class="dropdown">
				<button onclick="myFunction()" class="button">Fənlər</button>
			<div class="fənn">
				<ul>
					<li>
						<ul id="myDropdown">
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 1</a></li>
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 2</a></li>
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 3</a></li>
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 4</a></li>
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 5</a></li>
							<li><a href="#" class="hvr-overline-from-center" >Fənn adı 6</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		
    </div>

	<div class="box_center_elanlar" >
	
		<h1 class="text_center" > Elanlar </h1>

			<table class="table">
			
				<tr class="tr" >
					<th class="th">Nömrə</th>
					<th class="th">Bölmə</th>
					<th class="th">Mövzu</th>
					<th class="th">Müəllif</th>
					<th class="th">Tərtib tarixi</th>
					<th class="th">Ətraflı</th>
				</tr>
				
				<?
				@include "Connect.php";
				$sql="SELECT * FROM user";
				$result=$conn->query($sql);

				if(!$result){
					
					die('failed');
					
				};

				while($row=$result->fetch_assoc()) {
					
				echo"
					
				<tr>
				<td class='th td' >$row[Nömrə]</td>
				<td class='th td'>$row[Bölmə]</td>
				<td class='th'>$row[Mövzu]</td>
				<td class='th td'>$row[Müəllif]</td>
				<td class='th td'>$row[Tərtib_tarixi]</td>
				<td class='th td'> <a href='#'> Link </a> </td>
				</tr>

				";

				}

				?>
				
			</table>
		
	</div>
	
	
<script>
	function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
</script>

</body>
</html>