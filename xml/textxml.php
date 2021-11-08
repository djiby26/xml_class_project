<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Test Ajout Champs</title>
 
<script type="text/javascript">

function ajoute()
{
clone = document.getElementById("a_cloner").cloneNode(true);
document.getElementById("tab").appendChild (clone);
}
function ajoutligne()
{
var sel = document.forms[0].add;
nbChamps = sel.options[sel.selectedIndex].value;
document.getElementById("champs" ).innerHTML = "";
 
for(i=0; i<nbChamps; i++)
{
document.getElementById("champs" ).innerHTML = document.getElementById("champs" ).innerHTML+'<fieldset><p class="classic">QUESTION'+i+'</p><label for="zone_'+i+'"> </label><table id="tab"><tr id="a_cloner"><td><label>partie:</label><input type="text" name="partie[]"   /></tr></table><a href="#" onclick="ajoute();">Cliquez pour ajouter une partie"</a></fieldset>';
}
 
}
</script>
 
</head>
<body>
 
<form method="post" action="#">
    


<tr> 
    Nom du fichier:
    <input name="fichier" size="20" type="text" />
    </tr>
    <tr>
    Nom de l'examen:
    <input name="examen" size="20" type="text" />
    </tr>
    <tr>
    Date:
         Mois:
    <input name="mois" size="20" type="text" />
         annees:
    <input name="annees" size="20" type="text" />
   </tr>  
   <tr>
    Code Cours
    <input name="code_cours" size="20" type="text" />
    </tr>

    <p>Combien de Questions ?</p>
    <select name="add" onChange="ajoutligne()">
        <option value=""> </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">4</option>
        <option value="4">5</option>
        <option value="5">6</option>
        <option value="6">7</option>
        <option value="7">8</option>
        <option value="8">9</option>
    </select>
     
    <div id="champs"></div>
 
    <input type="submit" value="Confirmer" class="btn" />
 
</form>
</body>
<?php
if(isset($_POST['fichier'])){
echo "Le fichier XML est sur le ftp";
$City[] = $_POST["partie[]"];
$xmlfileName = $_POST['fichier'];

$nomexamen= $_POST['examen'];
$code_cours = $_POST['code_cours'];
$mois = $_POST['mois'];
$annees = $_POST['annees'];
$xml_dec = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>";
$rootELementStart = "<examen>";
$rootElementEnd = "</examen>";
$xml_doc= $xml_dec;
$xml_doc .= $rootELementStart;
$xml_doc .= "<fichier>";
$xml_doc .= $xmlfileName;
$xml_doc .= "</fichier>";
$xml_doc .= "<video>";
$xml_doc .= $nomexamen;
$xml_doc .= "</video>";
$xml_doc .= "<format>";
$xml_doc .= $code_cours;
$xml_doc .= "</format>";
$xml_doc .= "<monteur>";
$xml_doc .= $mois;
$xml_doc .= "</monteur>";
$xml_doc .= "<production>";
$xml_doc .= $annees;
$xml_doc .= "</production>";
$xml_doc .= $rootElementEnd;
$default_dir = "";
$default_dir .= $xmlfileName .".xml";
$fp = fopen($default_dir,'w');
$write = fwrite($fp,$xml_doc);
?>