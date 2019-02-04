<?php
	include 'plantillaParaAbiertos.php';
	require 'conexion.php';
	
	$query = "SELECT ID_INCIDENTE, DOC_USUARIO, FECHA_INCIDENTE, DES_INCIDENCIA, ESTADO_INCIDENCIA, RESOLUCION, TEC_ASIGNADO FROM incidenciastbl WHERE ESTADO_INCIDENCIA='Activo'";
	$resultado = mysqli_query($conexion, $query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
    $pdf->Cell(40,6,'DOC USUARIO',1,0,'C',1);
    $pdf->Cell(20,6,'FECHA',1,0,'C',1);
    $pdf->Cell(50,6,utf8_decode('DESCRIPCIÓN'),1,0,'C',1);
    $pdf->Cell(50,6,utf8_decode('RESOLUCIÓN'),1,0,'C',1);
    $pdf->Cell(20,6,'TECNICO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	//while($row = $resultado->fetch_assoc())
	//{
	//	$pdf->WordWrap($row['DES_INCIDENCIA'],50);
	//	$pdf->Cell(10,6,utf8_decode($row['ID_INCIDENTE']),1,0,'C');
      //  $pdf->Cell(40,6,$row['DOC_USUARIO'],1,0,'C');
    //    $pdf->Cell(20,6,$row['FECHA_INCIDENTE'],1,0,'C');
     //   $pdf->Cell(50,6,$row['DES_INCIDENCIA'],1,0,'C');
     //   $pdf->Cell(50,6,$row['RESOLUCION'],1,0,'C');
	//	$pdf->Cell(20,6,utf8_decode($row['TEC_ASIGNADO']),1,1,'C');

		
	//}

	$cell_width=50;
	$cell_height=5;

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(10,10,utf8_decode($row['ID_INCIDENTE']),1,0,'C');
        $pdf->Cell(40,10,$row['DOC_USUARIO'],1,0,'C');
		$pdf->Cell(20,10,utf8_decode($row['FECHA_INCIDENTE']),1,0,'C');
	//	$pdf->Cell(50,10,$row['DES_INCIDENCIA'],1,0,'C');
			
			
		if($pdf->GetStringWidth($row['DES_INCIDENCIA'])>50){
			$start_x=$pdf->GetX();
			$current_y=$pdf->GetY();
			$current_x=$pdf->GetX();

			$pdf->MultiCell($cell_width, $cell_height, utf8_decode($row['DES_INCIDENCIA']),1,'C',false);
			$current_x+=$cell_width;
			$pdf->SetXY($current_x, $current_y);
			$current_x=$start_x;
			$current_y+=$cell_height;
	
			}else{

			$pdf->Cell(50,10,utf8_decode($row['DES_INCIDENCIA']),1,0,'C');
			}
		
		
				if($pdf->GetStringWidth($row['RESOLUCION'])>50){
					$start_x=$pdf->GetX();
					$current_y=$pdf->GetY();
					$current_x=$pdf->GetX();

					$pdf->MultiCell($cell_width, $cell_height, utf8_decode($row['RESOLUCION']),1,'C',false);
					$current_x+=$cell_width;
					$pdf->SetXY($current_x, $current_y);
					$current_x=$start_x;
					$current_y+=$cell_height;
			
					}else{

					$pdf->Cell(50,10,utf8_decode($row['RESOLUCION']),1,0,'C');
					}
	
		$pdf->Cell(20,10,utf8_decode($row['TEC_ASIGNADO']),1,1,'C');
		
		
	}

	


    $pdf->Output();
?>