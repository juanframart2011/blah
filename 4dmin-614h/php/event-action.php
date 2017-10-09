<?
include( "../../conn.php" );
$action = $_POST["event_action"];
$event = $_POST["event_id"];

$db->where( "event_id", $event );
$db->update( "event", array( "event_lastModification" => date( "Y-m-d H:i:s" ), "estatus_id" => $action ) );

header( 'Location: ../eventos.php' );
?>