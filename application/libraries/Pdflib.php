<?php 
require_once 'tcpdf/tcpdf.php';

class Pdflib extends TCPDF 
{
	function __construct(){
		parent::__construct();
	}
}