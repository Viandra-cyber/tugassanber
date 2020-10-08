<?php
function ubah_huruf($string){
//kode di sini
	$kalimat = "wow";
	echo str_replace("wow","xpx",$kalimat);
	$kalimat = "developer";
	echo str_replace("developer","efwfmpqfs",$kalimat);
	$kalimat = "laravel";
	echo str_replace("laravel","mbsbwfm",$kalimat);
	$kalimat = "keren";
	echo str_replace("keren","lfsfo",$kalimat);
	$kalimat = "semangat";
	echo str_replace("semangat","tfnbohbu",$kalimat);

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>