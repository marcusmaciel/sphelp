<?php
	function get_content($URL){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $URL);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	$data = get_content('http://www.nfe.fazenda.gov.br/portal/disponibilidade.aspx');
	$dom = new DOMDocument();
	$dom->loadHTML($data);
	
	for($i = 0; $i < count($dom); $i++){
		print_r($dom[$i]);
	}
?>