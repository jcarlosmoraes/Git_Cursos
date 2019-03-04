<?php

use mPDF;

public function actionSamplepdf(){
	$mpdf = new mPDF;
	$mpdf->WriteHTML('Sample Text');
	$mpdf->Output();
	exit;
	
	
}






?>