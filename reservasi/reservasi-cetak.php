<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_reservasi");
$html = '<center><h3>Data Reservasi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Nama</th>
                <th>Jenis Paket</th>
                <th>Durasi</th>
                <th>Total Harga</th>
            </tr>';
$no = 1;
while ($reservasi = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $reservasi['tanggal'] . "</td>
                <td>" . $reservasi['jam'] . "</td>
                <td>" . $reservasi['nama'] . "</td>
                <td>" . $reservasi['paket'] . "</td>
                <td>" . $reservasi['durasi'] . " jam</td>
                <td>Rp. " . $reservasi['total'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-reservasi.pdf');
?>