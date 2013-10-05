<?
session_start();
		if(isset( $_SESSION['name'] ) ){
		$msg = $_POST['msg'];

		$xml = simplexml_load_file("msg1.xml");
		$xml->addChild($_SESSION['name'],$msg);
		
		$xml->asXML('msg1.xml');

		//$xml->addChild($id,$msg);
/*			
		$writer = new XMLWriter();  
		$writer->openURI('msg1.xml');  
		$writer->startDocument('1.0','UTF-8');
		$writer->startElement('root'); 
			$writer->writeElement($id,$msg);  
		$writer->endElement(); 
		$writer->endDocument();   
		$writer->flush();*/
		}
?>