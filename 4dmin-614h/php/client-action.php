<?
include( "../../conn.php" );
$action = $_POST["client_action"];
$event = $_POST["client_id"];

$db->where( "client_id", $event );
$db->update( "client", array( "client_lastModification" => date( "Y-m-d H:i:s" ), "estatus_id" => $action ) );

header( 'Location: ../client.php' );
?>