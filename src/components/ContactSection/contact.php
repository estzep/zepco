<?php
try {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $initParams = http_build_query([
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'telFijo' => $_POST['telFijo'],
			'telCelular' => $_POST['telCelular'],
			'service' => $_POST['service'],
			'message' => $_POST['message'],
			'contactMethod' => $_POST['contactMethod']
		]);

        $servicesData = json_decode(file_get_contents(__DIR__ . '/../../data/services.json'), true);
        $services = $servicesData['services'] ?? [];
		
		$name = $_POST['name'] ?? throw new Exception("name");
		$email = $_POST['email'] ?? throw new Exception("email");
		$telFijo = $_POST['telFijo'] ?? throw new Exception("telFijo");
		$telCelular = $_POST['telCelular'] ?? throw new Exception("telCelular");
        $serviceId = $_POST['service'] ?? throw new Exception("service");
		$message = $_POST['message'] ?? throw new Exception("message");
		$contactMethod = $_POST['contactMethod'] ?? throw new Exception("contactMethod");

		// Find the service by ID
		$service = null;
		foreach ($services as $s) {
			if ($s['id'] == $serviceId) {
				$service = $s;
				break;
			}
		}
		if (!$service) {
			throw new Exception("service");
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("email");
		}

		$zepcoEmail = "die-tae@hotmail.com";
		$cmReason = $service['title'];
		$cmMessage = $message;
		$cmName = $name;
		$cmTelFijo = $telFijo ?? '';
		$cmTelCelular = $telCelular ?? '';
		$cmEmail = $email;
		$cmContactMethod = $contactMethod;
		$cmMail = str_replace(
			[
				'{{service}}',
				'{{message}}',
				'{{name}}',
				'{{telFijo}}',
				'{{telCelular}}',
				'{{email}}',
				'{{contactMethod}}'
			],
			[$cmReason, $cmMessage, $cmName, $cmTelFijo, $cmTelCelular, $cmEmail, $cmContactMethod],
			file_get_contents('../../components/ContactMail.html')
		);

		$zepcoMail = [
			'to' => $zepcoEmail,
			'subject' => $cmReason . ' - ' . $cmName,
			'headers' => implode("\r\n", [
				'MIME-Version: 1.0',
				'Content-Type: text/html; charset=UTF-8',
				'From: ' . $email,
				'X-Mailer: PHP/' . phpversion()
			]),
			'message' => $cmMail
		];

		if (mail($zepcoMail['to'], $zepcoMail['subject'], $zepcoMail['message'], $zepcoMail['headers'])) {
			header("Location: /#contact?mail=sent&mailMsg=Mensaje enviado exitosamente. Gracias por tu interés, pronto nos comunicaremos.");
			exit();
		}

		throw new Exception("error");
	} else {
		throw new Exception("error");
	}
} catch (Exception $e) {
	header("Location: /#contact?" . $initParams . "&mail=error");
	exit();
}
?>