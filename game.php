<?php
echo "Welcome To My Game\n";
while(true){
	echo "===== Game Tebak Angka =====\n";
	echo "tebak sebuah angka antara 1 dan 9!\n";
	$randomNum = rand(1,9);
	echo "Masukkan Tebakanmu : ";
	$getNumInput = trim(fgets(STDIN));
	if($getNumInput == $randomNum) {
		echo "Menang. Angka komputer: $randomNum \n";
		exit;
	}else{
		echo "Kalah. Angka komputer: $randomNum \n";
	}
}