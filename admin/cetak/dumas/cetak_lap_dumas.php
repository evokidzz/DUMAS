<?php
require_once('../fpdf/fpdf.php');
include '../../../inc/koneksi.php';

session_start();
if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $nama= $_SESSION['nama'];
    $syntax = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE nama_pengguna = '$nama'");
    $syntax = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$userid'");
    $online = mysqli_fetch_array($syntax);
}else {

class PDF extends FPDF
{


    function Header()
    {
        // Logo
        $this->Image('../../../dist/img/logo_propam.png', 73, 10, 23);
        // Arial bold 15
        $this->SetFont('Arial', '', 15);
        // Move to the right
        $this->Cell(25);

        // Title
        $this->text(104, 15, 'KEPOLISIAN DAERAH KALIMANTAN SELATAN');

        $this->SetFont('Arial', 'B', 20);
        $this->text(98, 22, 'BIDANG PROFESI DAN PENGAMANAN');


        // Alamat
        $this->SetFont('Arial', '', 12);
        $this->text(130, 28, 'Jl. S. Parman No.16, Antasan Besar ');
        $this->text(129, 33, 'Kalimantan Selatan Kode Pos 70123');
        // $this->SetFont('Arial', 'B', 12);
        // $this->text(103, 38, 'Telepon (0511) 4721358, Faksimile (0511) 4721027');

        // Line break
        $this->Ln(20);
        $this->SetLineWidth(1);

        //garis
        $this->Line(8, 43, 288, 43);
        $this->SetLineWidth(0);
        $this->Line(8, 44, 288, 44);
    }

    // Halaman
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-18);
        // Arial italic 8
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


// Instanciation of inherited class
$pdf = new PDF('L', 'mm', array(230, 297));
$pdf->AddPage();


$yi = 53;
$ya = 55;;

$pdf->SetFont('Arial', 'B', 15);
$pdf->Text(100, 50, 'LAPORAN DATA BERKAS LAPORAN PERKEMBANGAN DUMAS');



$pdf->SetFont('Arial', 'B', 8);
$pdf->setFillColor(222, 222, 222);
$pdf->setXY(3, 53);
$pdf->CELL(10, 6, 'NO', 1, 0, 'C', 1);
$pdf->CELL(27, 6, 'NO.DUMAS', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'TANGGAL', 1, 0, 'C', 1);
$pdf->CELL(35, 6, 'PERIHAL', 1, 0, 'C', 1);
$pdf->CELL(25, 6, 'NAMA PELAPOR', 1, 0, 'C', 1);
$pdf->CELL(45, 6, 'NAMA TERLAPOR', 1, 0, 'C', 1);
$pdf->CELL(45, 6, 'PANGKAT', 1, 0, 'C', 1);
$pdf->CELL(45, 6, 'ASAL DINAS', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'URAIAN', 1, 0, 'C', 1);
$pdf->CELL(30, 6, 'KETERANGAN', 1, 0, 'C', 1);



$query = "select * from tb_dumas";
$sql = mysqli_query($koneksi, $query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while ($data = mysqli_fetch_array($sql)) {
    $pdf->setXY(3, $ya);
    $pdf->setFont('Times', '', 8);
    $pdf->setFillColor(255, 255, 255);
    $pdf->CELL(10, 6, $no, 1, 0, 'C', 1);
    $pdf->CELL(27, 6, $data['no_dumas'], 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['tanggal'], 1, 0, 'C', 1);
    $pdf->CELL(35, 6, $data['perihal'], 1, 0, 'C', 1);
    $pdf->CELL(25, 6, $data['nama_pelapor'], 1, 0, 'C', 1);
    $pdf->CELL(45, 6, $data['nama_terlapor'], 1, 0, 'C', 1);
    $pdf->CELL(45, 6, $data['pangkat_terlapor'], 1, 0, 'C', 1);
    $pdf->CELL(45, 6, $data['asal_dinas'], 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['uraian'], 1, 0, 'C', 1);
    $pdf->CELL(30, 6, $data['ket'], 1, 0, 'C', 1);

    $ya = $ya + $row;
    $no++;
}

// $query = "select * from tb_pengguna where level = 'Administrator' ";
// $sql = mysqli_query($koneksi, $query);
// while ($data = mysqli_fetch_array($sql)) {
//     $pdf->setFont('Times', 'B', 9);
//     $pdf->Text(250, 80, $data['nama_pengguna']);
// }





$bln_list = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);



# footer
$pdf->Ln();
$pdf->SetFont('Times', '', 12);
$pdf->SetX(118);

$pdf->MultiCell(250, 12, 'Banjarmasin, ' . date('d') . ' ' . $bln_list[date('m')] . ' ' . date('Y'), 0, 'C');

    $pdf->setFont('Times', '', 12);
    $pdf->MultiCell(465, 0, 'Pembuat data,', 0, 'C');
    $pdf->MultiCell(465, 30, 'SUBBAG YANDUAN', 0, 'C');

$pdf->AliasNbPages();
ob_clean();
$pdf->Output('I', 'Laporan Data Perkembangan Dumas.PDF');
}