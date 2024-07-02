<?php
// Panggil file konfigurasi dan fungsi-fungsi
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Pastikan user sudah login
redirect_if_not_logged_in();

// Ambil data negara dan klasemen dari database
$countries = get_countries();
$standings = get_standings();

// Nama file PDF yang akan dihasilkan
$pdf_filename = 'klasemen_uefa_2024.pdf';

// Set header untuk membuat file PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $pdf_filename . '"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

// Buat objek PDF menggunakan FPDF
require('fpdf/fpdf.php'); // Sesuaikan dengan lokasi file FPDF Anda

$pdf = new FPDF();
$pdf->AddPage();

// Tambahkan judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Klasemen UEFA 2024', 0, 1, 'C');

// Tambahkan daftar negara UEFA
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Daftar Negara UEFA', 0, 1, 'L');
foreach ($countries as $country) {
    $pdf->Cell(0, 10, $country['name'], 0, 1, 'L');
}

// Tambahkan klasemen UEFA 2024
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Klasemen UEFA 2024', 0, 1, 'L');
$pdf->Cell(30, 10, 'Group', 1, 0, 'C');
$pdf->Cell(60, 10, 'Negara', 1, 0, 'C');
$pdf->Cell(30, 10, 'Menang', 1, 0, 'C');
$pdf->Cell(30, 10, 'Seri', 1, 0, 'C');
$pdf->Cell(30, 10, 'Kalah', 1, 0, 'C');
$pdf->Cell(30, 10, 'Poin', 1, 1, 'C');
foreach ($standings as $standing) {
    $pdf->Cell(30, 10, $standing['group_name'], 1, 0, 'C');
    $pdf->Cell(60, 10, $standing['country_name'], 1, 0, 'C');
    $pdf->Cell(30, 10, $standing['wins'], 1, 0, 'C');
    $pdf->Cell(30, 10, $standing['draws'], 1, 0, 'C');
    $pdf->Cell(30, 10, $standing['losses'], 1, 0, 'C');
    $pdf->Cell(30, 10, $standing['points'], 1, 1, 'C');
}

// Output file PDF
$pdf->Output('D', $pdf_filename);
?>
