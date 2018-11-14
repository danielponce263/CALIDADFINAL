<?php 
include 'conexion.php';
$sql="select 
v.id_venta as venta,
concat(c.apPaterno,' ',c.apMaterno,' ',c.nombre_cliente) as nombre,
c.dni as dni,
m.nombre_maquina as maquina,
m.marca as marca,
v.total as total
from venta v 
left join cliente c
on v.id_cliente = c.id_cliente
left join maquina m 
on v.id_maquina = m.id_maquina
limit 1";
$result=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($result);
$nombre = $row["nombre"];
$maquina = $row["maquina"];
$total = $row["total"];

require("../fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"welcome {$nombre}",1,0);
$pdf->Cell(50,10,"Maquina:",1,0);
$pdf->Cell(50,10,"{$maquina}",1,0);

$pdf->Cell(50,10,"Total:",1,0);
$pdf->Cell(50,10,"{$total}",1,0);
$pdf->output();

?>