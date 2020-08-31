<?php
    include_once('pdf.php');
    $InvoiceHTML = $_POST['InvoiceHTML'];
    $fileName = "1024.pdf";
    $pdf = new Pdf();
    $pdf->load_html($InvoiceHTML);
	$pdf->render();
	$file = $pdf->output();
    file_put_contents('invoiceFiles/'.$fileName, $file);
?>