<?php
	$email = $_POST['firstName'];
	$senha = $_POST['lastName'];
	
	// Database conectaection
	$conecta = new mysqli('localhost','postgres','Na130495','concentra');
	if($conecta->conectaect_error){
		echo "$conecta->conectaect_error";
		die("conectaection Failed : ". $conecta->conectaect_error);
	} else {
		$stmt = $conecta->prepare("INSERT INTO login (email, senha) VALUES (?, ?)");
		$stmt->bind_param("ss", $email, $senha);
		$execval = $stmt->execute();
		echo $execval;
		echo "Login efetuado com sucesso";
		$stmt->close();
		$conecta->close();
	}
?>