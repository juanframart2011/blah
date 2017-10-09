<?

include "../conn.php";

$type_contact = $_POST["type_contact"];

if( $type_contact == 2 ){

	$contactName = $_POST["nombre"];
	$company = $_POST["company"];
	$phone2 = $_POST["phone2"];
	$contactEmail = $_POST["mail2"];

	if( !empty( $contactName ) && !empty( $phone2 ) && !empty( $contactEmail ) ){

		if( filter_var( $contactEmail, FILTER_VALIDATE_EMAIL ) ){

			$data_contact["contact_name"] = $contactName;
			$data_contact["contact_email"] = $contactEmail;
			$data_contact["contact_company"] = $company;
			$data_contact["contact_phone"] = $phone2;
			$data_contact["contact_creationDate"] = date( "Y-m-d H:i:s" );

			$db->insert( "contact", $data_contact );

			$mail = "El contacto " . $contactName . "  de la empresa " . $company . " con el telefono <b> " . $phone2 . "</b> se quiere contactar contigo";
			//Titulo
			$titulo = "Blah: interesados en contactar";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			//dirección del remitente 
			$headers .= "From: Contacto " . $contactEmail . " < contacto >\r\n";
			//Enviamos el mensaje a tu_dirección_email 
			$bool = mail( "msabau@gmail.com", $titulo, $mail, $headers );

			echo json_encode( array( 'result' => 1, 'message' => 'Gracias, pronto nos pondremos en contacto con usted.' ) );
		}
		else{

			echo json_encode( array( 'result' => 2, 'message' => 'El campo email debe estar en un formato válido' ) );
		}
	}
	else{

		echo json_encode( array( 'result' => 2, 'message' => 'Todos los campos son obligatorios' ) );
	}
}
elseif( $type_contact == 1 ){

	$contactName = $_POST["mail"];
	$phone2 = $_POST["phone"];

	if( !empty( $contactName ) && !empty( $phone2 ) ){

		if( filter_var( $contactName, FILTER_VALIDATE_EMAIL ) ){

			$data_contact["contact_email"] = $contactName;
			$data_contact["contact_phone"] = $phone2;
			$data_contact["contact_creationDate"] = date( "Y-m-d H:i:s" );

			$db->insert( "contact", $data_contact );

			$mail = "El contacto " . $contactName . "  con el telefono <b> " . $phone2 . "</b> se quiere contactar contigo";
			//Titulo
			$titulo = "Blah: interesados en contactar";
			//cabecera
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			//dirección del remitente 
			$headers .= "From: Contacto " . $contactName . " < contacto >\r\n";
			//Enviamos el mensaje a tu_dirección_email 
			$bool = mail( "msabau@gmail.com", $titulo, $mail, $headers );

			echo json_encode( array( 'result' => 1, 'message' => 'Gracias, pronto nos pondremos en contacto con usted.' ) );
		}
		else{

			echo json_encode( array( 'result' => 2, 'message' => 'El email debe ser un formato válido' ) );
		}
	}
	else{

		echo json_encode( array( 'result' => 2, 'message' => 'Todos los campos son obligatorios' ) );
	}
}