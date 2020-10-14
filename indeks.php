<?php 
$judul1 = "Hi, I’m Nur Eza Imandayanti";
$judul2 = "Mahasiswa In UPN Veteran Jawa Timur. ";
$tentang = "Tanggal lahir saya 19 Mei 2000,umur saya sekarang 20 tahun, tempat tinggal saya di Jl.Tropodo 1 No.297 Tropodo,Kecamatan Waru Kabupaten Sidoarjo.
Saya diterima di UPN melalui jalur SNMPTN dan Sekarang saya m masih menempuh semester 5, Keseharian saya dirumah ialah membantu merawat adik-adik keponakan saya yang masih balita.Selain itu saya juga bekerja part time disebuah perusahaan konsultasi IT & ISO PT Delta Sinergi Prima.Posisi saya sebagai dokumen kontrol membantu konsultan, administrasi IT dan support";
$button = "Email Me"; 
$judul3 = "Academic Resume";
$sd = "MINU TROPODO";
$smp = "SMP BUANA WARU";
$smk ="SMK SENOPATI";
$kuliah = "UPN VETEREAN JAWA TIMUR";
$hiasan = "Resume";
$judul4 = "Interest";
$belajar = "Belajar";
$desain = "UI/UX Design";
$isiint = "Mengembangkan web dengan desain yang bisa memanjakan mata user tetapi tidak menghilangkan fungsi dari web tersebut. Memperoleh bidang kerja yang baik.";
$hobbi = "Hobbies";
$skil = "Skills";
$fot = "Get In Touch";
$ig = "ezaimnd";
$wa ="089675561722";
$email="ezaimnd19@gmail.com";
$yt ="Eza Imandayanti";

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

		<div class="navigator">	
		<nav>
			<ul>
				<li><a href="a">HOME</a></li>
				<li><a href="a">RESUME</a></li>
				<li><a href="a">INTEREST</a></li>
				<li><a href="a">HOBBIES</a></li>
				<li><a href="a">SKILLS</a></li>
				<li><a href="a">CONTACT</a></li>
			</ul>
		</nav>
	</div>
	<div class="sapaan">
		<p class="bold"><?php echo $judul1 ?></p>
	</div>
	<div class="Mahasiswa">
		<p class="bold"><?php echo $judul2 ?></p>
	</div>
	<div class="tentang">
		<p class="bold"><?php echo $tentang ?></p>
	</div>
	<div class="garis1">
		<br>
	</div>
	<div class="gambar1">
		<img src="assets\img\profile.png">
	</div>
	<div class="tombol">
		<p class="bold"><?php echo $button ?></p>
	</div> 
	<div class="imgtombol">
		<img src="assets\img\mail.png">
	</div>	
	<div class="judul3">
		<p class="bold"><?php echo $judul3 ?></p>
	</div>
	<div class="sd">
		<p class="bold"><?php echo $sd ?></p>
	</div>
	<div class="smp">
		<p class="bold"><?php echo $smp ?></p>
	</div>
	<div class="smk">
		<p class="bold"><?php echo $smk ?></p>
	</div>
	<div class="kuliah">
		<p class="bold"><?php echo $kuliah ?></p>
	</div>
	<div class="hiasan">
		<p class="bold"><?php echo $hiasan ?></p>
	</div>
	<div class="judul4">
		<p class="bold"><?php echo $judul4 ?></p>
	</div>
	<div class="gambar2">
		<img src="assets\img\Interest.png">
	</div>
	<div class="belajar">
		<p class="bold"><?php echo $belajar ?></p>
	</div>
	<div class="desain">
		<p class="bold"><?php echo $desain ?></p>
	</div>
	<div class="isiint">
		<p class="bold"><?php echo $isiint ?></p>
	</div>
	<div class="hobbi">
		<p class="bold"><?php echo $hobbi?></p>
	</div>

	<div class="isihobi">
		<ul>
		<li>Bersepeda</li>
		<li>Badminton</li>
		<li>Joging</li>
		</ul>
	</div>
	<div class="isihobi2">
		<ul>
		<li>Dance</li>
		<li>Nonton Film</li>
		<li>Main Game</li>
		</ul>
	</div>
	<div class="skil">
		<p class="bold"><?php echo $skil?></p>
	</div>
	<div class="isiskil">
		<ul>
		<li>MS OFFICE</li>
		<li>C++</li>
		<li>VB NET</li>
		</ul>
	</div>
	<div class="isiskil2">
		<ul>
		<li>JAVA</li>
		<li>ORACLE</li>
		<li>HTML & CSS</li>
		</ul>
	</div>
	<div class="fot">
		<p class="bold"><?php echo $fot?></p>
	</div>
	<div class="igimg">
		<img src="assets\img\ig.png">
	</div>
	<div class="ig">
		<p class="bold"><?php echo $ig?></p>
	</div>
	<div class="waimg">
		<img src="assets\img\wa.png">
	</div>
	<div class="wa">
		<p class="bold"><?php echo $wa?></p>
	</div>
	<div class="emailimg">
		<img src="assets\img\mail.png">
	</div>
	<div class="email">
		<p class="bold"><?php echo $email?></p>
	</div>
	<div class="ytimg">
		<img src="assets\img\yt.png">
	</div>
	<div class="yt">
		<p class="bold"><?php echo $yt?></p>
	</div>
</body>
</html>