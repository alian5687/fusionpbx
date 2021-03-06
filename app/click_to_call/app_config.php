<?php

	//application details
		$apps[$x]['name'] = "Click to Call";
		$apps[$x]['uuid'] = "eb221c9b-cb13-5542-9140-dff924816dc4";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Originate calls with a URL.";
		$apps[$x]['description']['es-cl'] = "Genera llamadas con un URL.";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "Appeler à partir d'une URL";
		$apps[$x]['description']['fr-ca'] = "Appeller avec d'URL";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Originar chamadas com um URL.";
		$apps[$x]['description']['pt-br'] = "Gera chamadas a partir de um URL";

	//permission details
		$apps[$x]['permissions'][0]['name'] = "click_to_call_view";
		$apps[$x]['permissions'][0]['menu']['uuid'] = "f862556f-9ddd-2697-fdf4-bed08ec63aa5";
		$apps[$x]['permissions'][0]['groups'][] = "user";
		$apps[$x]['permissions'][0]['groups'][] = "admin";
		$apps[$x]['permissions'][0]['groups'][] = "superadmin";

		$apps[$x]['permissions'][1]['name'] = "click_to_call_call";
		$apps[$x]['permissions'][1]['groups'][] = "user";
		$apps[$x]['permissions'][1]['groups'][] = "admin";
		$apps[$x]['permissions'][1]['groups'][] = "superadmin";

?>