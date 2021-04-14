<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=trouvez_votre_evenement', 'root', 'root');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE evenement 
 SET titre=:title, date_debut=:start_event, date_fin=:end_event 
 WHERE evenement_id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>
