<?
session_start();
		
		if(isset( $_SESSION['name'] ) ){
		$id = $_POST['id'];
		$msg = $_POST['msg'];
		$writer = new XMLWriter();  
		$writer->openURI('msg1.xml');  
		$writer->startDocument('1.0','UTF-8');
		$writer->startElement('root'); 
		$writer->startElement($id,$msg);  
		$writer->endElement(); 
		$writer->endDocument();   
		$writer->flush();
		}
?>