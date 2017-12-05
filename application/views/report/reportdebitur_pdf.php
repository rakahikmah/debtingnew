<?php
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'debtingfix.png';
        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 15);
        // Title
        $this->Cell(0, 15, 'Bukti Pembayaran Angsuran ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Copyright Debting', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Debting');
$pdf->SetTitle('Report Admin');
$pdf->SetSubject('Report');
$pdf->SetKeywords('Reporn Debting');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 12);

// add a page
$pdf->AddPage();
// setting variabel debitur

$id_debitur         = $detaildebitur['id_debitur'];
$nama               = $detaildebitur['nama'];
$email              = $detaildebitur['email'];
$tanggal_bayar      = date('d-M-Y',strtotime($historybayar['tgl_bayar']));
$jumlah_bayar       = number_format($historybayar['jumlah_bayar']);
$nama_barang        = $detailbarang['nama_barang'];
$total_hargabarang  = number_format($detailbarang['total_hargabarang']);


$html = '<!DOCTYPE html><html><head><title></title></head><body>';

$html .='<br><br><br><br>';
$html .='<table cellspacing="20">';
$html .='<tr>';
$html .='<td>Id Debitur  </td><td>:'.$id_debitur.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Nama Debitur  </td><td>:'.$nama.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Email  </td><td>:'.$email.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Nama Barang </td><td>:'.$nama_barang.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Total Harga Barang  </td><td>:Rp '.$total_hargabarang.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Tanggal Bayar  </td><td>:'.$tanggal_bayar.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Jumlah Bayar  </td><td>:Rp '.$jumlah_bayar.'</td>';
$html .='</tr>';

$html .='<tr>';
$html .='<td>Angsuran Ke  </td><td>:'.$angsuran_ke.'</td>';
$html .='</tr>';

$html .='<br><br><br><br><br><br><br><br><br><br><br><br><br>';
$html .='Demikian ini adalah bukti pembayaran angsuran yang sah (resmi) dari pihak kreditur'; 
$html .='<br><br><br><br><br>';
$html .='<p align="right">Mengetahui</p>';
$html .='<p align="right">Kreditur</p>';

$html .='</body></html>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+