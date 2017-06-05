<!DOCTYPE html>
<html>
<head>
<title>Bina Rehberi</title>
    <meta charset="utf-8" />
    <meta name="description" content="Anadolu Üniversitesi Açıköğretim Sınavlarında görevlilerin sınav yeri seçiminde görevli olacağı okulun binanın konumunu harita üzerinden anlık sorgulama amacı içerir.">
    <meta name="keywords" content="anadolu üniversitesi, açıköğretim, aöf, aof, gözetmen, sınav yeri">
    <meta name="author" content="İlknur Yıldırım">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	
</head>
<body>
<body>
	<div id="icerik">
		<img id="logom" src="../images/logom.png"/>
			<div id="headerust">
				<label id="headerustyazi">Anadolu Üniversitesi Açıköğretim Sınavlarında Görev Almak İsteyen Kamu Çalışanları İçin</label>
			</div>
	<div id="headeralt">
		<label id="headeraltyazi">Sınav Görevi Bina Tercih Rehberi 2016-2017</label>
	</div>
	<div id="menubar">
		<ul id="menuUl">
			<li class="menuli">
			<img class="iconpic" src="../icon/Home.png"/><a>Anasayfa</a>
			</li>
			<li class="menuli">
				<img class="iconpic" src="../icon/calendar.png"/>
				<a>Sınav Takvimi</a>
			</li>
			<li class="menuli">
				<img class="iconpic" src="../icon/prof.png"/>
				<a>A.Ü. Görevli İşlemleri</a>
			</li>
			<li class="menuli">
				<img class="iconpic" src="../icon/new.png"/>
				<a>AÖF'ten Haberler</a>
			</li>
			<li class="menuli">
				<img class="iconpic" src="../icon/telep.png"/>
				<a>İletişim</a>
			</li>
		</ul>
	</div>
	<div id="binasorgu">
		<img id="searchicon" src="../icon/search2.png"/>
		<label id="binabaslik">Bina/Okul Sorgulama</label>
		<div id="mapustu"><hr>
			
			<div id="selection">
		
		<select id="iller">
			<option value="0">İl Seçiniz</option>
		<?php
		include("connection.php");
		
		$query = mysql_query('select * from iller');
		while($il=mysql_fetch_array($query)){
			
		echo '<option value="'.$il['ID'].'">'.$il['ADI'].'</option>';
		}
		?>
		</select>
		
		<select id="ilceler">
		<option value="0">İlçe Seçiniz</option>		
		</select>
		
		<select id="okullar">
		<option value="0">Okul Seçiniz</option>		
		</select>
		
			</div><hr></div>
		
		<div id="googleMap"></div>
	
	<script>
		function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(38.963745,35.243322000000035),
			zoom:5,
	};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjN6Lp6ALfejel3_ngnsdz3m-AHxEW01c&callback=myMap"></script>
	</div>
	
	<div id="duyurular">
		<img id="bookmark" src="../icon/Bookmark2.png"/>
		<label id="duyurubaslik">Duyurular</label><hr class="duyuruline">
		<div id="duyurularalti">
			<img id="date" src="../icon/Date_and_time.png"/>
			<div>
				
				<?php
				//date_default_timezone_set('Europe/Istanbul');
				echo gmdate("d/m/Y");
				//echo gmdate("G:i");
				?>
				
				
				<script language="javascript" src="http://ic.sitekodlari.com/saat0.js"></script>
				
				
				
			</div>
		</div>
		<div><hr class="duyuruline">
			<img class="duyururesim" src="../images/exam.jpg"/>
			<label class="basliklar"><b>DUYURU 1</b></label>
			<p class="metinler">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat 
			numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden 
			beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca 
			varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye.</p>
		</div>
		<div><hr class="duyuruline">
			<img class="duyururesim" src="../images/exam7.jpg"/>
			<label class="basliklar"><b>DUYURU 2</b></label>
			<p class="metinler">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat 
			numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden 
			beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca 
			varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye.</p>
		</div>
		<div><hr class="duyuruline">
			<img class="duyururesim" src="../images/exam6.jpg"/>
			<label class="basliklar"><b>DUYURU 3</b></label>
			<p class="metinler">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat 
			numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden 
			beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca 
			varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye.</p>
		</div>
		<div><hr class="duyuruline">
			<img class="duyururesim" src="../images/exam2.jpg"/>
			<label class="basliklar"><b>DUYURU 4</b></label>
			<p class="metinler">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat 
			numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden 
			beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca 
			varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye.</p>
		</div>
		</div>
	<hr>
	<div id="footer">
	<footer>
		<i>Hazırlayan: İlknur YILDIRIM</i><br>
		<i>İletişim: <a href="mailto:ilknuryldrm@gmail.com">ilknuryldrm@gmail.com</a></i>
	</footer>
	</div>
</div>
</body>

</html>