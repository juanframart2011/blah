<?
include( "../../conn.php" );
$action = $_POST["brand_action"];
$event = $_POST["brand_id"];

$db->where( "brand_id", $event );
$db->update( "brand", array( "brand_lastModification" => date( "Y-m-d H:i:s" ), "estatus_id" => $action ) );

header( 'Location: ../brand.php' );
?>