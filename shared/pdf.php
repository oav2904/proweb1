<?php 

	require_once 'dompdf/autoload.inc.php';

	use Dompdf\Dompdf;

	class Pdf extends Dompdf{

 	public function __construct(){
  	parent::__construct();
 	}

 $dompdf = new Dompdf();

 $name = $_SESSION['name'];

 $html = file_get_contents("pdf-content.html"); 
 $dompdf->loadHtml($html); 
 
$dompdf->setPaper('A4', 'landscape'); 
  
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("CV ".$name, array("Attachment" => 1));


}
 ?>