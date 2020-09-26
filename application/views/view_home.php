<!DOCTYPE html>
<html>
<head>
	<title>My Biodata</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/home-default.css">
<body>
	<aside>
		<h1>Bayu</h1>
		<div id="profil_img">
			<img src="assets/pic/pp.jpeg" alt="my Picture">
		</div>

		<?php
		if($profil->num_rows() > 0 )
		$profil=$profil->row(); ?>
		<div class="title">
			<h2>Tentang saya</h2>
			<table>
				<tr>
					<td><img src="assets/pic/icon-default/baby.png"></td>
					<td><?= date_format(date_create($profil->ttl),'d F Y'); ?></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/location.png"></td>
					<td><?= $profil->alamat; ?></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/religion.png"></td>
					<td><?= $profil->agama; ?></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/mail.png"></td>
					<td><a href="mailto:<?= $profil->email; ?>"><?= $profil->email; ?></a></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/phone.png"></td>
					<td><?= $profil->hp; ?></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/web.png"></td>
					<td><a href="<?= $profil->website; ?>"><?= $profil->website; ?></a></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/facebook.png"></td>
					<td><a href="<?= $profil->facebook; ?>"><?= $profil->facebook; ?></a></td>
				</tr>
				<tr>
					<td><img src="assets/pic/icon-default/instagram.png"></td>
					<td><a href="<?= $profil->instagram; ?>"><?= $profil->instagram; ?></a></td>
				</tr>
			</table>
		</div>

		<div class="title">
			<h2>Keterampilan</h2>
			<table>
				<?php
				foreach ($skill->result() as $row) {
				?>
				<tr>
					<td><?= $row->nama_skill; ?></td>
					<td>
						<div class="bar">
							<span style="width: <?= $row->level."%"; ?>;background: <?= $row->warna; ?>">
								<?= $row->level ?>% &nbsp;
							</span>
						</div>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>

		<div class="title">
			<h2>Hobi</h2>
			<ul>
				<?php
				foreach ($hobi->result() as $row) {
				?>
				<li><?= $row->hobi; ?></li>
				<span><?= $row->deskripsi; ?></span>
				<?php } ?>
			</ul>
		</div>
	</aside>

	<main>
		<div class="title">
			<h2>Riwayat Pendidikan</h2>
			<ul>
				<?php
				foreach ($sekolah->result() as $row) {
					?>
				<li><?= $row->sekolah; ?></li>
				<span><?= $row->deskripsi; ?></span>
				<?php } ?>
			</ul>
		</div>

		<div class="title">
			<h2>Riwayat Pekerjaan</h2>
			<ul>
				<?php
				foreach($kerja->result() as $row){
				?>
				<li><?= $row->kerjaan; ?></li>
				<span><?= $row->deskripsi ?></span>
				<?php } ?>
			</ul>
		</div>

		<div class="title">
			<h2>Riwayat Organisasi</h2>
			<ul>
				<?php
				foreach($organisasi->result() as $row){
				?>
				<li><?= $row->organisasi; ?></li>
				<span><?= $row->deskripsi ?></span>
				<?php } ?>
			</ul>
		</div>

		<div class="title">
			<h2>Sertifikat</h2>
			<ul>
				<?php
				foreach($sertifikat->result() as $row){
				?>
				<li><?= $row->sertifikat; ?></li>
				<span><?= $row->deskripsi ?></span>
				<?php } ?>
			</ul>
		</div>
	</main>

	<footer></footer>

</body>
</html>
