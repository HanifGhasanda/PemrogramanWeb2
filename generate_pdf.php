<?php
// generate_pdf.php
require_once 'includes/functions.php';
require_once 'vendor/tcpdf/tcpdf.php';
redirect_if_not_logged_in();

$sql = "SELECT g.name as group_name, c.name as country_name, s.wins, s.draws, s.losses, s.points 
        FROM standings s
        JOIN groups g ON s.group_id = g.id
        JOIN countries c ON s.country_id = c.id";
$result = mysqli_query($conn, $sql);
$standings = mysqli_fetch_all($result, MYSQLI_ASSOC);

$pdf = new TCPDF();
$pdf->AddPage();

$html = '<h1>UEFA 2024 Standings</h1>';
$html .= '<table border="1" cellpadding="4">
            <tr>
                <th>Group</th>
                <th>Country</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Losses</th>
                <th>Points</th>
            </tr>';

foreach ($standings as $standing) {
    $html .= '<tr>
                <td>' . $standing['group_name'] . '</td>
                <td>' . $standing['country_name'] . '</td>
                <td>' . $standing['wins'] . '</td>
                <td>' . $standing['draws'] . '</td>
                <td>' . $standing['losses'] . '</td>
                <td>' . $standing['points'] . '</td>
              </tr>';
}

$html .= '</table>';

$pdf->writeHTML($html);
$pdf->Output('standings.pdf', 'I');
?>
