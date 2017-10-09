<?
include( "../../conn.php" );
$ruta_brande = "../../img/marca/";

$data_brand["brand_name"] = $_POST["brand_name"];
$data_brand["brand_description"] = $_POST["brand_description"];

$brande_hero = $ruta_brande . basename( $_FILES['brand_hero']['name'] );
move_uploaded_file( $_FILES['brand_hero']['tmp_name'], $brande_hero );

$data_brand["brand_media"] = $_FILES['brand_hero']['name'];
$data_brand["brand_creationDate"] = date( "Y-m-d H:i:s" );

$db->insert( "brand", $data_brand );

header( 'Location: ../brand.php' );
?>