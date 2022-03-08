
<h1>=========== Cetak Bilangan Ganjil Genap 1-20 ===========</h1>
<?php
for ($bil = 1; $bil <= 20; $bil++){
    if( ($bil % 2) == 0){
        echo "$bil Adalah Bilangan Genap<br>";
    }else {
		echo "$bil Adalah Bilangan Ganjil<br>";
	}	
}
?>