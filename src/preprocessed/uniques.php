<?php

$file = "奥瑟罗.xml";
$chars = "";
//$file .= file_get_contents($entry);
            //echo file_get_contents($file);
            
  

if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            //echo "$entry\n";

            $dom = new domDocument;
			$dom->loadXML(file_get_contents($entry));
			//$doc->encoding = 'UTF-8';

			$titles = $dom->getElementsByTagName('SPEAKER');
			echo "\nlength " . $titles->length . "\n";
			
			for ($i=0; $i < $titles->length; $i++) { 
				$chars .= $titles->item($i)->textContent;
			}
		}
    }
    closedir($handle);
}
file_put_contents("SPEAKER.txt", $chars);

//echo $chars;