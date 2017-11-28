<?php

    $cidade = $_POST['cidade'];
    $result_explode = explode('|', $cidade);

    $local = $result_explode[0];
    $turma = $result_explode[1];

 		$soapClient = new SoapClient("http://www.mira.senac.br/wsAM/wsMira.asmx?wsdl",
            array( 
                  "trace"      => 1,
                  "exceptions" => 0,
                  "cache_wsdl" => 0,
                  'soap_version'=> SOAP_1_2,
                  'encoding'=>'UTF-8')
                  );

        $service_param = [ 
                  'Area' => '0',
                  'Localidade' => 'Manaus', 
                  'CodigoTurma' => '0',
                  'Curso' => '0',
                  'Ano' => 2017,
                  'Situacao' => 1
        ];

    $response = $soapClient->__call("pesquisaDadosDeTurmasParaPublicarNaInternetParametros", 
             array($service_param));

    $xml = new SimpleXMLElement(str_replace("&#x0;","", $soapClient->__getLastResponse()));

    $mira = $xml->xpath("//Table");

    // echo "<pre/>";
    // print_r($mira);
		
?>
		<option selected="selected">Selecione o curso:</option>
		<?php foreach ($mira as $miras): ?>
          <?php if($miras->CODIGOUO == $turma): ?>
	         <option value="<?= $miras->CODIGOUO ?>|<?= $miras->CODIGOTURMA ?>">
	          <b>TURMA</b> <?= $miras->CODIGOTURMA ?> - <?= $miras->TURMA ?>
          </option>
          <?php endif ?>
	    <?php endforeach ?>


