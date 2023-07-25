<?php
$json1 = file_get_contents("http://103.226.55.159/json/data_rekrutmen.json");
$json1 = json_decode($json1);
$json1 = $json1->{'Form Responses 1'};

$json2 = file_get_contents("http://103.226.55.159/json/data_attribut.json");
$json2 = json_decode($json2);


foreach ($json1 as $k => $v) {
	// foreach ($json2 as $k2 => $v2) {
	// 	if ($v2 == $v->id) {
	// 		$json1[0][$v2] = $v2;
	// 	}
	// }
}
// echo json_encode($json1[0]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<title>Test</title>
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark mb-3">
		<a class="navbar-brand" href="#">Test</a>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered">
					<thead>
						<tr>
							<th class="align-middle text-center">ID</th>
							<th class="align-middle text-center">Timestamp</th>
							<th class="align-middle text-center">Nama</th>
							<th class="align-middle text-center">NIP</th>
							<th class="align-middle text-center">Satker</th>
							<th class="align-middle text-center">Posisi</th>
							<th class="align-middle text-center">Bahasa Pemrograman</th>
							<th class="align-middle text-center">Framework</th>
							<th class="align-middle text-center">Database</th>
							<th class="align-middle text-center">Tools</th>
							<th class="align-middle text-center">Dev Mobile Apps</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($json1 as $k):
						?>
						<tr>
							<td><?php echo $k->id; ?></td>
							<td><?php echo $k->timestamp; ?></td>
							<td><?php echo $k->nama; ?></td>
							<td><?php echo $k->nip; ?></td>
							<td><?php echo $k->satuan_kerja; ?></td>
							<td><?php echo $k->posisi_yang_dipilih; ?></td>
							<td><?php echo $k->bahasa_pemrograman_yang_dikuasai; ?></td>
							<td><?php echo $k->framework_bahasa_pemrograman_yang_dikuasai; ?></td>
							<td><?php echo $k->database_yang_dikuasai; ?></td>
							<td><?php echo $k->tools_yang_dikuasai; ?></td>
							<td><?php echo $k->pernah_membuat_mobile_apps; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<footer class="bg-dark text-center py-3 mb-0">
		<p class="text-light mb-0">Test</p>
	</footer>

	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>