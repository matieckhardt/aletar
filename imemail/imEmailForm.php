<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre ', $_POST['imObjectForm_5_1'], '', false);
	$form->setField('Apellido ', $_POST['imObjectForm_5_2'], '', false);
	$form->setField('Telefono ', $_POST['imObjectForm_5_3'], '', false);
	$form->setField('E-mail ', $_POST['imObjectForm_5_4'], '', false);
	$form->setField('Mensaje', $_POST['imObjectForm_5_5'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'jsactive' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_5_4'] != "" ? $_POST['imObjectForm_5_4'] : 'aletar@aletar.com.ar', 'aletar@aletar.com.ar', '', '', false);
		@header('Location: ../contacto.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file