<?php
$star = isset($_POST['star']) ? intval($_POST['star']) : 0;
if (isset($_POST['tambah'])) {
    $star++;
} elseif (isset($_POST['kurang']) && $star > 0) {
    $star--;
}
$pict = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
?>

<?php for ($i = 0; $i < $star; $i++): ?>
    <img src="<?= htmlspecialchars($pict); ?>" width="80" height="80">
<?php endfor; ?>

<!-- Form handling based on the count of stars -->
<?php if ($star == 0): ?>
    <form action="" method="POST">
        Jumlah bintang: <input type="number" name="star" min="0" required><br>
        <button type="submit">Submit</button><br>
    </form>
<?php else: ?>
    <form action="" method="POST">
        <button type="submit" name="tambah">
            <img src="<?= htmlspecialchars($pict); ?>" alt="Tambah Bintang" height="30" width="30">
            Tambah Bintang
        </button>
        <input type='hidden' name='star' value='<?= htmlspecialchars($star); ?>'>
        <button type="submit" name="kurang">
            <img src="<?= htmlspecialchars($pict); ?>" alt="Kurang Bintang" height="30" width="30">
            Kurang Bintang
        </button>
    </form>
<?php endif; ?>
