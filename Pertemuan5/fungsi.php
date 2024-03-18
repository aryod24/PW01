<?php
// Membuat fungsi hitungUmur
function hitungUmur($thn_lahir, $thn_sekarang) {
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

// Memanggil fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
  echo $salam . ",";
  echo "Perkenalkan, nama saya " . $nama . "<br/>";

// Memanggil fungsi hitungUmur dan menampilkan hasil
echo "Saya berusia " . hitungUmur(2004, 2024) . " tahun<br/>";
echo "Senang berkenalan dengan Anda<br/>";

}

// Memanggil fungsi perkenalan
perkenalan("Aryo");
?>
