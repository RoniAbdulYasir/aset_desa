<?php
//============================================================+
// File name   : example_002.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 002 for TCPDF class
//               Removing Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Removing Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// create new PDF document
$pdf = new TCPDF('L', 'mm', 'F4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BPKP');
$pdf->SetTitle('Data Aset Tanah');
$pdf->SetSubject('Data Aset Tanah');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'B', 12);

// add a page
$pdf->AddPage();
$i=0;
// set some text to print
$html1 = 'KARTU INVENTARIS TANAH';			
$html2= $this->fungsi->user_login()->Nama_Desa;
$html3 = 'TAHUN 2020';
$html4= $this->fungsi->user_login()->Nama_Kecamatan;
$html6='<table cellspacing="1" bgcolor="#666666" cellpadding="2">
        <tr bgcolor="#ffffff">
        <th width="3%" align="center">No</th>
        <th width="12%" align="center">Nama Aset</th>
        <th width="10%" align="center">Kode Aset</th>
        <th width="5%" align="center">Luas (M2)</th>
        <th width="10%" align="center">Tahun Perolehan</th>
        <th width="10%" align="center">Letak/Alamat</th>
        <th width="10%" align="center">Status Tanah</th>
        <th width="10%" align="center">Penggunaan</th>
        <th width="10%" align="center">Harga (Ribuan Rupiah)</th>
        <th width="10%" align="center">Nilai (Ribuan Rupiah)</th>
        <th width="10%" align="center">Keterangan</th>
        </tr>';
    foreach ($query->result() as $row) 
        {
        $i++;
        $html6.='<tr bgcolor="#ffffff">
        <td align="center">'.$i.'</td>
        <td>'.$row->Nama_Rincian.'</td>
        <td>'.$row->KdRek5.'</td>
        <td>'.$row->Kuantitas.'</td>
        <td>'.$row->Tahun.'</td>
        <td>'.$row->Identitas_Barang2.'</td>
        <td>'.$row->Identitas_Barang1.'</td>
        <td>'.$row->Identitas_Barang3.'</td>
        <td align="right">'.number_format($row->Hrg_Satuan,0,",",".").'</td>
        <td align="right">'.number_format($row->Nilai,0,",",".").'</td>
        <td>'.$row->AsalAset.'</td>
        </tr>';
        }
$html6.='</table>';



// print a block of text using Write()
//$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
$pdf->writeHTML($html1, true, false, true, false, 'C');
$pdf->writeHTML($html2, true, false, true, false, 'C');
$pdf->writeHTML($html3, true, false, true, false, 'C');
$pdf->writeHTML('', true, false, true, false, 'C');
$pdf->writeHTML('', true, false, true, false, 'C');
$pdf->writeHTML($html4, true, false, true, false, 'L');
$pdf->writeHTML('', true, false, true, false, 'C');
$pdf->writeHTML($html6, true, false, true, false, 'C');


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Data_Aset_Tanah.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+