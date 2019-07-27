<?php
echo ("--panjang--<br>");
function cetak_gambar($angka){
	$tengah = ceil($angka/2);
	for($i=1; $i<=$angka; $i++){
		for($j=1; $j<=$angka; $j++){
			if($tengah == $i){ 
				echo "* ";
			}else{
				if ($j==1) {
					echo "* ";
				}elseif ($j==$angka) {
					echo "* ";
				}else{
					echo "= ";
				}
				
			}
		}

		echo "<br/>";

	}
}
cetak_gambar(5);
?>