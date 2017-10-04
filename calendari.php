<?php 
	$semana =0;
	for($dia=1;$dia<=date('t');$dia++) { //con el date ('t') sabemos los dias del mes
		
		$dia_semana=date('N' , strtotime(date('Y-m').'-'.$dia)); //con el date('N') sabemos que dia de la semana es (Lunes -1 , Martes -2... ) con el resto le decimos el año y el mes en el que estamos y luego le pasamos el dia con la variable $dia
		
		$calendario[$semana][$dia_semana] = $dia;
		
		if ($dia_semana==7 ){
			$semana++;
		};
	}//cuando el dia de la semana sea 7 (significará que es domingo) añadira una semana mas al calendario
			
	
?>



<!DOCTYPE html>
<html>
	<head>
		<h1>Calendario</h1>
	</head>

	<body>
		<table border="1">
		<thead>
				<tr>
					<td>Lunes</td>
					<td>Martes</td>
					<td>Miercoles</td>
					<td>Jueves</td>
					<td>Viernes</td>
					<td>Sabado</td>
					<td>Domingo</td>
				
				</tr>
		</thead>
			
		<tbody>
				<?php foreach ($calendario as $d) : ?>
					<tr>
						<?php for ($dia=1;$dia<=7;$dia++) :?>
							<td>
								<?php echo isset($d[$dia]) ? $d[$dia] : ''; ?>
								
							</td>
						<?php endfor;?>
					
					</tr>
				<?php endforeach ?>
			
		</tbody>
			
		</table>

	</body>
</html>
