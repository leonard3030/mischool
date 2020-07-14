<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// Buffer the following html with PHP so we can store it to a variable later
ob_start();
?>
<!-- // This is where your script would normally output the HTML using echo or print -->
<div>Generate your content</div>
<table>
	<thead>
	<tr style="border: 1px black solid;">
		<th>id</th>
		<th>names</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>asdas</td>
		<td>asdas</td>
		</tr>
	</tbody>
</table>
<?php
// Now collect the output buffer into a variable
$html = ob_get_contents();
ob_end_clean();

// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
$mpdf->Output();
