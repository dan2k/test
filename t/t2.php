<?php 




	include '../vendor/autoload.php'; 
	use mPDF; //mPDF ???????? key index ?? autoload_classmap.php 
	$mpdf = new mPDF(); 
	$mpdf->WriteHTML(' Hallo World '); 
	$mpdf->Output(); 
?>