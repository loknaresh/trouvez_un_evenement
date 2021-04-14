<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=trouvez_votre_evenement', 'root', 'root');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO evenement 
 (titre, date_debut, date_fin) 
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>
