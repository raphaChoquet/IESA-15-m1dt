<?php

$xml = new SimpleXMLElement('http://feeds2.feedburner.com/LeJournalduGeek', NULL, TRUE);

var_dump($xml->channel);



/*foreach ($xml as $node) {
	var_dump($node);
}*/