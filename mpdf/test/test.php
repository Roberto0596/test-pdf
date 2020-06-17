<?php 

require_once "../../vendor/autoload.php";
require_once "plantilla.php";

// error_reporting(0);

class imprimirTest
{
	public $parametro;

	public function print()
	{
		$param = $this->parametro;
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
		$plantilla = getPlantilla($param);
		$mpdf->writeHtml($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);
		$mpdf->Output();
	}
}

$test = new imprimirTest();
$test -> parametro = $_GET["parametro"];
$test -> print();

?>