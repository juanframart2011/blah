<?
include( "../../conn.php" );
$ruta_cliente = "../../img/cliente/";

$data_client["client_name"] = $_POST["client_name"];
$data_client["client_description"] = $_POST["client_description"];

$cliente_hero = $ruta_cliente . basename( $_FILES['client_hero']['name'] );
move_uploaded_file( $_FILES['client_hero']['tmp_name'], $cliente_hero );

$data_client["client_media"] = $_FILES['client_hero']['name'];
$data_client["client_creationDate"] = date( "Y-m-d H:i:s" );

$db->insert( "client", $data_client );

header( 'Location: ../client.php' );
?>