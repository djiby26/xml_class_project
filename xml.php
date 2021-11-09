<?php

  $imp = new DOMImplementation;
  $dtd = $imp->createDocumentType('examen', '', 'examen.dtd');
  $xml=new Domdocument('1.0');

  $xml = $imp->createDocument("", "", $dtd);
$xml->formatOutput=true;
$examen=$xml->createElement("examen");
$examen->setAttribute("codeCours",$codC);
$xml->appendChild($examen);

$questions=$xml->createElement("questions");
$examen->appendChild($questions);
 
 $titre=$xml->createElement("titre",$exam);
 $questions->appendChild($titre);

$date =$xml->createElement("date");
$date->setAttribute("mois",$mois);
$date->setAttribute("annee",$annee);
$questions->appendChild($date);
  


if(count($q1) != 0){
  $question=$xml->createElement("question");
  foreach($q1 as $par){
  $partie=$xml->createElement("partie",$par);
  $question->appendChild($partie);
}
$questions->appendChild($question);
}


if((count($q2) != 0)){
  $question=$xml->createElement("question");
  foreach($q2 as $par){
  $partie=$xml->createElement("partie",$par);
  $question->appendChild($partie);
}
$questions->appendChild($question);
}



if((count($q3) != 0)){
  $question=$xml->createElement("question");
  foreach($q3 as $par){
  $partie=$xml->createElement("partie",$par);
  $question->appendChild($partie);
}
$questions->appendChild($question);
}

if((count($q3) != 0)){
  $question=$xml->createElement("question");
  foreach($q3 as $par){
  $partie=$xml->createElement("partie",$par);
  $question->appendChild($partie);
}
$questions->appendChild($question);
}







echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("xml/".$nomfile.".xml")or die("ERRRORR");
?>