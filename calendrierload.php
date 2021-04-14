<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=trouvez_votre_evenement', 'root', 'root');

$data = array();

$query = "SELECT * FROM evenement ORDER BY evenement_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["evenement_id"],
  'title'   => $row["titre"],
  'start'   => $row["date_debut"],
  'end'   => $row["date_fin"]
 );
}

echo json_encode($data);

?>