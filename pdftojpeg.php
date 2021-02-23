<?php

if(!isset($_REQUEST["file"])){
  
  echo "Varíavel vazia";
  die;
  
}

$url="uploads/pdf/".$_REQUEST["file"].".pdf";

// $quality = isset($_REQUEST["quality"])?$_REQUEST["quality"]:"60";
// $image   = new Imagick();

// //$url="https://suite8files.com.br/uploads/pdf/".$_REQUEST["file"].".pdf";

// $image->readimage($url); 
// $image = $image->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);

// $image->setImageCompressionQuality($quality); 
// $image->setImageFormat('jpeg');

// header('Content-Type: image/jpeg');

// echo $image;

// $image->clear(); 
// $image->destroy();

include("classes/pdf-to-image-master/Pdf.php");

$pdf = new Spatie\PdfToImage\Pdf($url);
$pdf->setCompressionQuality(70);

$pdf->setPage(1)->saveImage("teste.jpg");

?>