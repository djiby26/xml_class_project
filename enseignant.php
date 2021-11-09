<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Test Ajout Champs</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 
</head>
<body>
<nav aria-labelledby="primary-navigation"><h2>FORMULAIRE POUR CREER UN EXAMEN EN FORMAT XML<h2></nav>
 
<form method="post" action="traitement.php">
    


<br> 
    Nom du fichier:
    <input name="fichier" size="20" type="text" />
    </br>
    <br>
    Nom de l'examen:
    <input name="examen" size="20" type="text" />
    </br>
    <br>
    Date://
         Mois:
    <input name="mois" size="20" type="text" />
         annees:
    <input name="annees" size="20" type="number" />
   </br>  
   <br>
    Code du Cours
    <input name="code_cours" size="20" type="number" />
    </br>
   <div> 
    <fieldset>
    <label >QUESTION1</label></br>
<td><label>Parties:</label></br>
<textarea type="text" name="partie1"  ></textarea></br>
<textarea type="text" name="partie2"   /></textarea></br>
<textarea type="text" name="partie3"   /></textarea></br>
<textarea type="text" name="partie4"   /></textarea></br>
</div>

<div>
<label >QUESTION2</label></br>
<td><label>Parties:</label></br>
<textarea type="text" name="partie5"   /></textarea></br>
<textarea type="text" name="partie6"   /></textarea></br>
<textarea type="text" name="partie7"   /></textarea></br>
<textarea type="text" name="partie8"   /></textarea></br>
</div>

<div>
<label >QUESTION3</label></br>
<td><label>Parties:</label></br>
<textarea type="text" name="partie9"   /> </textarea></br>
<textarea type="text" name="partie10"   /></textarea></br>
<textarea type="text" name="partie11"   /></textarea></br>
<textarea type="text" name="partie12"   /></textarea></br>
</div>

<div>
<label >QUESTION4</label></br>
<td><label>Parties:</label></br>
<textarea type="text" name="partie13"   /></textarea></br>
<textarea type="text" name="partie14"   /></textarea></br>
<textarea type="text" name="partie15"   /></textarea></br>
<textarea type="text" name="partie16"   /></textarea></br>
<div>
</fieldset>'


    <input type="submit"  value="CREER FICHIER XML" class="btn" />
 
</form>
</body>
</html>
