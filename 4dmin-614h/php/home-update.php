<?
include( "../../conn.php" );
$banner_media = $_POST["banner_media"];
$banner_description = $_POST["banner_description"];
$banner_id = $_POST["banner_id"];

$db->where( "banner_id", $banner_id );
$db->update( "banner", array( "banner_description" => $banner_description, "banner_media" => $banner_media, "banner_lastModification" => date( "Y-m-d H:i:s" ) ) );

header( 'Location: ../home.php' );
?>