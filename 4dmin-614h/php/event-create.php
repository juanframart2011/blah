<?
include( "../../conn.php" );
$ruta_evento = "../../img/evento/";

$data_event["event_name"] = $_POST["event_name"];
$data_event["event_description"] = $_POST["event_description"];

$evento_hero = $ruta_evento . "hero/" . basename( $_FILES['event_hero']['name'] );
move_uploaded_file( $_FILES['event_hero']['tmp_name'], $evento_hero );

$evento_media = $ruta_evento . basename( $_FILES['event_media']['name'] );
move_uploaded_file( $_FILES['event_media']['tmp_name'], $evento_media );


$data_event["event_hero"] = $_FILES['event_hero']['name'];
$data_event["event_media"] = $_FILES['event_media']['name'];
$data_event["event_creationDate"] = date( "Y-m-d H:i:s" );

$db->insert( "event", $data_event );

header( 'Location: ../eventos.php' );
?>