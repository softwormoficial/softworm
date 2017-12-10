<?php
	if  isset('spwenviar'){
			if isset('spwnombre') && !empty('spwnombre'){
				if isset('spwapellido') && !empty('spwapellido'){
					if isset('spwcorreo') && !empty('spwcorreo'){
						if isset('spwasunto') && !empty('spwasunto'){
							$nombre = $_GET('spwnombre')
							$apellido = $_GET('spwapellido')
							$correo = $_GET('spwcorreo')
							$asunto = $_GET('spwasunto')
							$servicioweb = fopen('servicioweb.dat', 'a')
							fputs ($servicioweb, )
						}
					}
				}
			}
	}
?>