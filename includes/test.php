<?php


/*$phpvqus = array(1 => 'Getting started with PHP', 'Variables', 'HTML Forms');

$phpadv = array(1 => 'Advanced PHP Techniques', 'Developing web applications', 'Advanced database concepts');

$phpmysql = array(1 => 'Intro to PHP', 'Programming for PHP', 'Creating dynamic websites');

$books = array(
	'PHP VQS' => $phpvqus,
	'PHP Advanced VQP' => $phpadv,
	'PHP and MySQL VQP' => $phpmysql
);

foreach ($books as $title => $chapters) {
	print "<h3>{$title}</h3>";
	foreach ($chapters as $number => $chapter) {
		print "<br/>Chapter {$number} is {$chapter}";
	}
}*/


$row0 = array(1, 2, 3);
$row1 = array(4, 5, 6);
$row2 = array(5, 6, 7);

$multi = array($row0, $row1, $row2);

print $multi[2][0];

echo '<pre>';
print_r($multi);
echo '</pre>';


$translation = array(
	'title' => 'Translations',
	'summary' => 'Get your legal documents translated including birth certificates, divorce documents and many more.', 
	'img' => 'ICONE'
);
$accounting = array(
	'title' => 'Accounting',
	'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 
	'img' => 'Icon'
);

$services = array($translation, $accounting);


echo '<pre>';
print_r($services);
echo '</pre>';


?>