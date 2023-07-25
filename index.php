<?php
$json1 = file_get_contents("http://103.226.55.159/json/data_rekrutmen.json");
$json1 = json_decode($json1);
$json1 = $json1->{'Form Responses 1'};

$json2 = file_get_contents("http://103.226.55.159/json/data_attribut.json");
$json2 = json_decode($json2);

$new = [];
foreach ($json1 as $k => $v) {
	$x = [];

	foreach($v as $xx => $yy) {
		$x[$xx] = $yy;
	}

	foreach ($json2 as $k2 => $v2) {
		if ($v2->id_pendaftar == $v->id) {
			$x[$v2->jenis_attr] = $v2->value;
		}
	}

	$new[] = $x;
}
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
	<title>Test Programmer MA</title>
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark mb-3">
		<a class="navbar-brand" href="#">Test Programmer MA - Danang Teguh Sri Hatmoko (199105142020121004)</a>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered table-striped">
					<thead>
						<tr class="table-success">
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
							<th class="align-middle text-center">Nilai T1</th>
							<th class="align-middle text-center">Nilai T2</th>
							<th class="align-middle text-center">Nilai T3</th>
							<th class="align-middle text-center">File</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($new as $k): ?>
						<tr>
							<td class="align-middle text-center"><?php echo $k['id']; ?></td>
							<td class="align-middle"><?php echo $k['timestamp']; ?></td>
							<td class="align-middle"><?php echo $k['nama']; ?></td>
							<td class="align-middle"><?php echo $k['nip']; ?></td>
							<td class="align-middle"><?php echo $k['satuan_kerja']; ?></td>
							<td class="align-middle"><?php echo $k['posisi_yang_dipilih']; ?></td>
							<td class="align-middle"><?php echo $k['bahasa_pemrograman_yang_dikuasai']; ?></td>
							<td class="align-middle"><?php echo $k['framework_bahasa_pemrograman_yang_dikuasai']; ?></td>
							<td class="align-middle"><?php echo $k['database_yang_dikuasai']; ?></td>
							<td class="align-middle"><?php echo $k['tools_yang_dikuasai']; ?></td>
							<td class="align-middle text-center"><?php echo $k['pernah_membuat_mobile_apps']; ?></td>
							<td class="align-middle text-center"><?php echo isset($k['nilai_t1']) && $k['nilai_t1'] != '' ? $k['nilai_t1'] : '-'; ?></td>
							<td class="align-middle text-center"><?php echo isset($k['nilai_t2']) && $k['nilai_t2'] != '' ? $k['nilai_t2'] : '-'; ?></td>
							<td class="align-middle text-center"><?php echo isset($k['nilai_t3']) && $k['nilai_t3'] != '' ? $k['nilai_t3'] : '-'; ?></td>
							<td class="align-middle text-center">
								<?php if(isset($k['url_file']) && $k['url_file'] != ''): ?>
								<a class="btn btn-primary btn-sm" href="<?php echo $k['url_file']; ?>" target="_blank" download>Download</a>
								<?php else: ?>
								<a class="btn btn-secondary btn-sm disabled" href="#" disabled>Download</a>
								<?php endif;?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<footer class="bg-dark text-center py-3 mb-0">
		<p class="text-light mb-0">&copy; Danang Teguh Sri Hatmoko</p>
	</footer>
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>