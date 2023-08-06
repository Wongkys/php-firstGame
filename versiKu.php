<?php
echo "Welcome To My Game\n";
while(true){
	$randomNum = rand(1,100);
	$bawahKKM = "Yahh nilai cebelapa imutmu dibawah KKM ;-;";
	$atasKKM = "Widihhh nilai cebelapa imutmu diatas KKM :>";
	$penentuan = "";
	echo "===== Game Cebelapa Imut Ci Aku =====\n";
	echo "Mulai? (Y/N)\n";
	$getVerifInput = trim(fgets(STDIN));
	
	if($randomNum >= 75){
		$penentuan = $atasKKM;
	}else{
		$penentuan = $bawahKKM;
	}
	
	if($getVerifInput == "Y") {
		echo "$penentuan\nKetik (Y) untuk melihat nilai imutmu \n";
		$seeValue = trim(fgets(STDIN));
	}else if ($getVerifInput == "N"){
		echo "Program dihentikan. \n";
		exit;
	}
	
	if($seeValue == "Y") {
		echo "Nilai cebelapa imutmu adalah $randomNum\n";
		exit;
	}
}