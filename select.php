<?

  $xml=simplexml_load_file("msg1.xml");
          foreach($xml->children() as $child){
            echo "<h3>". $child->getName() . "：<p>　" . $child . "</p></h3>";
           }

?>