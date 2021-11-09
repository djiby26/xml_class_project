
<?php

$exam= $_POST['examen'];
$nomfile= $_POST['fichier'];
$mois=$_POST['mois'];
$annee= $_POST['annees'];
$codC= $_POST['code_cours'];

if (isset($_POST['partie1']) && isset($_POST['partie2']) && isset($_POST['partie3']) && isset($_POST['partie4'])){
    $q1 = array($_POST['partie1'], $_POST['partie2'],$_POST['partie3'], $_POST['partie4']);
  
  }
  elseif(!(isset($_POST['partie1'])) && isset($_POST['partie2'])  && isset($_POST['partie3'])){
    $q1 = array( $_POST['partie2'],$_POST['partie3'], $_POST['partie4']);
  }
  elseif(!(isset($_POST['partie2'])) && isset($_POST['partie1'])  && isset($_POST['partie3'])){
    $q1 = array( $_POST['partie1'],$_POST['partie3'], $_POST['partie4']);
  }
  elseif(!(isset($_POST['partie3']))&& isset($_POST['partie2'])  && isset($_POST['partie1'])){
    $q1 = array( $_POST['partie1'],$_POST['partie2'], $_POST['partie4']);
  }
  elseif(!(isset($_POST['partie4']))&& isset($_POST['partie2'])  && isset($_POST['partie3'])){
    $q1 = array( $_POST['partie1'],$_POST['partie2'], $_POST['partie3']);
  }
  
 if (isset($_POST['partie5']) && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie8'])){
 $q2 = array($_POST['partie5'], $_POST['partie6'],$_POST['partie7'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie5']))  && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie8']) ){
 $q1 = array( $_POST['partie6'],$_POST['partie7'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie6']))  && isset($_POST['partie5']) && isset($_POST['partie7']) && isset($_POST['partie8'])){
 $q1 = array( $_POST['partie5'],$_POST['partie7'], $_POST['partie8']);
  }
 elseif(!(isset($_POST['partie7'])) && isset($_POST['partie6']) && isset($_POST['partie5']) && isset($_POST['partie8'])){
 $q1 = array( $_POST['partie5'],$_POST['partie6'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie8'])) && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie5'])){
 $q1 = array( $_POST['partie5'],$_POST['partie6'], $_POST['partie7']);
     }
  else{

    $q1=array();
  }
    
    
 if (isset($_POST['partie5']) && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie8'])){
 $q2 = array($_POST['partie5'], $_POST['partie6'],$_POST['partie7'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie5']))  && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie8'])){
 $q2 = array( $_POST['partie6'],$_POST['partie7'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie6']))  && isset($_POST['partie5']) && isset($_POST['partie7']) && isset($_POST['partie8'])){
 $q2 = array( $_POST['partie5'],$_POST['partie7'], $_POST['partie8']);
 }
  elseif(!(isset($_POST['partie7']))  && isset($_POST['partie6']) && isset($_POST['partie5']) && isset($_POST['partie8'])){
 $q2 = array( $_POST['partie5'],$_POST['partie6'], $_POST['partie8']);
 }
 elseif(!(isset($_POST['partie8']))  && isset($_POST['partie6']) && isset($_POST['partie7']) && isset($_POST['partie5'])){
 $q2 = array( $_POST['partie5'],$_POST['partie6'], $_POST['partie7']);
 }

 else{

  $q2=array();
}

 
 if (isset($_POST['partie9']) && isset($_POST['partie10']) && isset($_POST['partie11']) && isset($_POST['partie12'])){
    $q3 = array($_POST['partie9'], $_POST['partie10'],$_POST['partie11'], $_POST['partie12']);
    }
    elseif(!(isset($_POST['partie9'])) && isset($_POST['partie10']) && isset($_POST['partie11']) && isset($_POST['partie12']) ){
    $q3 = array( $_POST['partie10'],$_POST['partie11'], $_POST['partie12']);
    }
    elseif(!(isset($_POST['partie10']))  && isset($_POST['partie9']) && isset($_POST['partie11']) && isset($_POST['partie12'])){
   $q3 = array( $_POST['partie9'],$_POST['partie11'], $_POST['partie12']);
    }
     elseif(!(isset($_POST['partie11']))  && isset($_POST['partie10']) && isset($_POST['partie9']) && isset($_POST['partie12'])){
   $q3 = array( $_POST['partie9'],$_POST['partie10'], $_POST['partie12']);
    }
    elseif(!(isset($_POST['partie12']))  && isset($_POST['partie10']) && isset($_POST['partie11']) && isset($_POST['partie9'])){
    $q3 = array( $_POST['partie9'],$_POST['partie10'], $_POST['partie11']);
    }
    else{

      $q3=array();
    }


    if (isset($_POST['partie13']) && isset($_POST['partie14']) && isset($_POST['partie15']) && isset($_POST['partie16'])){
      $q4 = array($_POST['partie13'], $_POST['partie14'],$_POST['partie15'], $_POST['partie16']);
    }
        elseif(!(isset($_POST['partie13']))  && isset($_POST['partie14']) && isset($_POST['partie15']) && isset($_POST['partie16'])){
        $q4 = array( $_POST['partie14'],$_POST['partie15'], $_POST['partie16']);
        }
        elseif(!(isset($_POST['partie14']))  && isset($_POST['partie13']) && isset($_POST['partie15']) && isset($_POST['partie16'])){
       $q4 = array( $_POST['partie13'],$_POST['partie15'], $_POST['partie16']);
        }
         elseif(!(isset($_POST['partie15']))  && isset($_POST['partie14']) && isset($_POST['partie13']) && isset($_POST['partie16'])){
       $q4 = array( $_POST['partie13'],$_POST['partie14'], $_POST['partie16']);
        }
        elseif(!(isset($_POST['partie16']))  && isset($_POST['partie14']) && isset($_POST['partie15']) && isset($_POST['partie13'])){
        $q4 = array( $_POST['partie13'],$_POST['partie14'], $_POST['partie15']);
        }
        else{

          $q2=array();
        }
    /*    echo "q1 commenc3";
      foreach($q1 as $s){
        echo $s;
      }
      echo "q2 commenc3";
      foreach($q2 as $s){
        echo $s;
      }
      echo "q3 commenc3";
      foreach($q3 as $s){
        echo $s;
      }
        echo "q4 commenc3";
     
      foreach($q4 as $s){
        echo $s;
      }*/

        include 'xml.php';
?>
 