<!DOCTYPE html>
<html>
<head>
<title>Konversi Bilangan ke Ejaan</title>
</head>
<body>
<form action="" method="POST">
<label for="nilai">Nilai :</label>
	<input  type="text"  id="nilai"  name="nilai"  value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>">
<button type="submit" name="submit">Konversi</button>
</form>

<?php
if (isset($_POST['submit'])) {
  $nilai = $_POST['nilai'];
  $x = strlen($nilai);

  if ($nilai == 0) {
    echo "<h2><b>Hasil: Nol</b></h2>";
  } else if ($nilai > 0 && $nilai < 10) {
    echo "<h2><b>Hasil: " . convertNumberToWord($nilai) . "</b></h2>";
  } else {
    echo "<h2><b>Nilai melebihi batas (0-9).</b></h2>";
  }
}

function convertNumberToWord($number) {
  $words = array(
    0 => 'Nol',
    1 => 'Satu',
    2 => 'Dua',
    3 => 'Tiga',
    4 => 'Empat',
    5 => 'Lima',
    6 => 'Enam',
    7 => 'Tujuh',
    8 => 'Delapan',
    9 => 'Sembilan'
  );

  if ($number < 10) {
    return $words[$number];
  }
}
?>
</body>
</html>
