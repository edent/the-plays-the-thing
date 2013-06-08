<?php

$file = "";
$chars = "";  
$tag = "SPEAKER"; // or TITLE

//	Read every file from a directory
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            //echo "$entry\n";

            $dom = new domDocument;
			$dom->loadXML(file_get_contents($entry));
		
			//	Get all the text from every specific tag
			$titles = $dom->getElementsByTagName($tag);
			
			for ($i=0; $i < $titles->length; $i++) { 
				$chars .= $titles->item($i)->textContent;
			}
		}
    }
    closedir($handle);
}
file_put_contents($tag.".txt", $chars);

//echo $chars;