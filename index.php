
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        function printQuestions($question){
            $output = "";
            for ($i=0; $i < count($question) ; $i++) { 
                $output .= '<h5>Partie '.$i+1 .':</h5>';
                $output .= '<p>'.$question->partie[$i].'</p>';
               
            }
            return $output;
        }

        if (file_exists('./xml/examen.xml')) {
            $xml = simplexml_load_file('./xml/examen.xml');
            $xml1 = simplexml_load_file('./xml/examplxml.xml');
    

            echo '<div class="container">
                    <h1 class="title">Matiere:<span> '.($xml->titre).' </span></h1>
                    <h3 class="code">Code cours: <span>'.($xml[0]['codeCours']).' </span></h3>
                    <h6 class="date">'.($xml->date['mois']).'-'.($xml->date['annee']).'</h6>';

                   echo '<div class="questions">';

                   for ($i=0; $i < count($xml1->questions->question) ; $i++) { 
                    echo "<div class='question'>\n";
                    echo '<h4>Question '.$i+1 .':</h4>';
                    echo printQuestions($xml1->questions->question[$i]);
                    echo "</div>\n";
                }

                //    foreach ($xml1->questions->question as $p ) {
                //         echo printQuestions($p);
                //    }
                echo '</div>';
            
        } else {
            exit('Echec lors de l\'ouverture du fichier test.xml.');
        }
    ?>
</body>
</html>

