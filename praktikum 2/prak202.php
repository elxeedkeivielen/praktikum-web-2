<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
<style>
.error {color: red;}
</style>
</head>
<body>
<?php
// Function to display error messages with HTML escaping
function displayError($message) {
  echo "<span class='error'>* " . htmlspecialchars($message) . "</span><br>";
}

$fullNameError = $nimError = $genderError = "";

if (isset($_POST['submit'])) {
  $fullName = trim($_POST['nama']);
  $nim = trim($_POST['nim']);
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

  // Validate name (example: allow only letters and spaces)
  if (empty($fullName) || !preg_match("/^[a-zA-Z ]+$/", $fullName)) {
    $fullNameError = "Nama tidak boleh kosong dan hanya boleh mengandung huruf dan spasi.";
  }

  // Validate NIM (example: enforce specific format)
  if (empty($nim) || !preg_match("/^\d{13}$/", $nim)) {
    $nimError = "NIM tidak boleh kosong dan harus terdiri dari 13 digit angka.";
  }

  // Validate gender selection
  if (empty($gender)) {
    $genderError = "Jenis kelamin harus dipilih.";
  }
}
?>

<h1>Student Registration Form</h1>

<form action="" method="POST">
  <div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" class="form-control" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>">
    <?= displayError($fullNameError); ?>
  </div>

  <div class="form-group">
    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" class="form-control" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
    <?= displayError($nimError); ?>
  </div>

  <div class="form-group">
    <label for="gender">Jenis Kelamin:</label>
    <?= displayError($genderError); ?>
    <br>
    <input type="radio" name="gender" id="laki" value="Laki-laki" <?= (isset($_POST["gender"]) && $_POST["gender"] == "Laki-laki") ? "checked" : "" ?>>Laki-laki<br>
    <input type="radio" name="gender" id="perempuan" value="Perempuan" <?= (isset($_POST["gender"]) && $_POST["gender"] == "Perempuan") ? "checked" : "" ?>>Perempuan<br>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($_POST['submit']) && empty($fullNameError) && empty($nimError) && empty($genderError)) {
  echo "<h2>Data Pendaftaran:</h2>";
  echo "<p>Nama Lengkap: " . $fullName . "</p>";
  echo "<p>NIM: " . $nim . "</p>";
  echo "<p>Jenis Kelamin: " . $gender . "</p>";
}
?>
</body>
</html>
