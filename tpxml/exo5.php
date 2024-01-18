<?php
$chaine= <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<LesComptes>

<Compte>
<login>adil</login>
<organisation>Turgot</organisation>
<budget>125</budget>
</Compte>

<Compte>
<login>alexandre</login>
<organisation>Hautil</organisation>
<budget>35</budget>
</Compte>

<Compte>
<login>caroline</login>
<organisation>Turgot</organisation>
<budget>5</budget>
</Compte>

</LesComptes>
XML;
$xml=new SimpleXMLElement($chaine);
foreach ($xml->children() as $child) {
    echo $child->login," ",
    $child->organisation," ",
    $child->budget," ",PHP_EOL;
}
