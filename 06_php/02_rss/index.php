<?php

$new1 = array(
	'title'           => 'Une éclipse solaire demain vers 10h30 !',
	'link'            => 'http://feedproxy.google.com/~r/LeJournalDuGeek/~3/m3LxVksYbPU/',
	'comments'        => 'http://www.journaldugeek.com/2015/03/19/eclipse-solaire-20-mars-10h30/#comments',
	'pubDate'         => 'Thu, 19 Mar 2015 11:36:31 +0000',
	'author'           => 'Greg',
	'categories'      => 'Science, eclipse, Geek',
	'description'     => 'C&#8217;est dans le ciel français demain, entre 9 h 45 (8 h 45 GMT) et 11 h 15,
		    		      que la lune passera devant le soleil et le dissimulera. Cette éclipse...',
	'content'         => '<p>
		  	    	        <strong>C&rsquo;est dans le ciel français demain, entre 9 h 45 (8 h 45 GMT) et 11 h 15, 
		  	    	        que la lune passera devant le soleil et le dissimulera.</strong> 
		  	    	        Cette éclipse solaire pourra normalement être observée si le ciel le permet, 
		  	    	        et atteindra 80% d’occultation du soleil dans le nord de la France vers 10 h 30. 
		  	    	        Pour ceux qui s&rsquo;en souviennent, la dernière éclipse totale qui avait pu être 
		  	    	        observée de la sorte remonte au 11 août 1999.</p><p>Cette éclipse solaire pourra être observée avec 
		  	    	        des lunettes spéciales éclipses qui protègent l’œil des rayons ultraviolets et infrarouges 
		  	    	        (dispo dans certains magazines de science, les pharmacies, opticiens ou encore Nature et Découvertes),
		  	    	         attention surtout n&rsquo;utilisez pas vos lunettes de soleil ! 
		  	    	         Si malheureusement vous ne pouvez pas voir ce phénomène, il faudra patienter jusqu&rsquo;en 2020 pour
		  	    	          la prochaine éclipse partielle et 2081 pour l&rsquo;éclipse totale&#8230;
		  				  </p>
					  	  <p>
					  	   	<a href="http://www.journaldugeek.com/files/2015/03/eclipse20mars.jpg">
					  	   		<img src="http://www.journaldugeek.com/files/2015/03/eclipse20mars-374x540.jpg" 
					  	   			 alt="eclipse20mars" width="374" height="540" class="aligncenter size-medium wp-image-266783" />
					  	   	</a>
					  	  </p> 
					  	  <img src="//feeds.feedburner.com/~r/LeJournalDuGeek/~4/m3LxVksYbPU" height="1" width="1" alt=""/>',
	'guid'            => 'http://www.journaldugeek.com/?p=266782',
	'guidIsPermalink' => "false",
	'enclosureUrl'    => 'http://medias.lequipe.fr/img-photo-jpg/halilhodzic-vahid/1500000000/0:126,2048:1159-665-335-70/47b05.jpg',
	'enclosureLength' => '50000000',
	'enclosureType'   => 'image/jpeg'
);


$new2 = array();
$new2['title'] =  '[Départementales] Les personnalités politiques les plus actives sur Twitter';
$new2['link'] =  'http://feedproxy.google.com/~r/LeJournalDuGeek/~3/D-fhncDauq0/';
$new2['comments'] =  'http://www.journaldugeek.com/2015/03/19/departementales-personnalites-politiques-plus-actives-twitter/#comments';
$new2['pubDate'] =  'Thu, 19 Mar 2015 11:13:03 +0000';
$new2['author'] =  'Elodie';
$new2['categories'] =  'Sur le web, Classement, Départementales, personnalités, politique, Twitter';
$new2['description'] =  'Les départementales approchent et les politiques s’activent. Sur le terrain, 
						 mais surtout sur les réseaux sociaux. La communication, c’est la clé. Lire la suite..';
$new2['content'] =  '<p>
						<strong>Les départementales approchent et les politiques s’activent. 
						Sur le terrain, mais surtout sur les réseaux sociaux. La communication, c’est la clé.</strong>
					</p>
					<p>
						<img src="http://www.journaldugeek.com/files/2015/03/départementales_classement_politiques_plus_actifs_twitter-600x389.jpg" 
						    alt="départementales_classement_politiques_plus_actifs_twitter" width="600" height="389" class="aligncenter size-medium wp-image-266779" /> 
						<a href="http://www.journaldugeek.com/2015/03/19/departementales-personnalites-politiques-plus-actives-twitter/">
							Lire la suite..
						</a>
					</p> 
					<img src="//feeds.feedburner.com/~r/LeJournalDuGeek/~4/D-fhncDauq0" height="1" width="1" alt=""/>';
$new2['guid'] =  'http://www.journaldugeek.com/?p=266773';
$new2['guidIsPermalink'] = "false";
$new2['enclosureUrl'] = 'http://medias.lequipe.fr/img-photo-jpg/halilhodzic-vahid/1500000000/0:126,2048:1159-665-335-70/47b05.jpg';
$new2['enclosureLength'] = '50000000';
$new2['enclosureType'] = 'image/jpeg';

$wantedProperties = array('title', 'description', 'pubDate');

function  buildHtmlRowFor($news, $wantedProperties) 
{

	$html = '<tr>';
	foreach ($wantedProperties as $property) {
		$html .= '<td>' . $news[$property] . '</td>';
	}
	$html .= '</tr>';

	return $html;
}


function buildHtmlTableFor($multiNews, $wantedProperties)
{
	$html = '<table>';
	foreach ($multiNews as $news) {
		$html .= buildHtmlRowFor($news, $wantedProperties);
	}
	$html .= '</table>';

	return $html;
}

$news = array($new1, $new2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo buildHtmlTableFor($news, $wantedProperties); ?>
</body>
</html>

