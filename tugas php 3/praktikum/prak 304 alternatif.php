<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 303</title>
    <style>
        img {
            height: 80px;
            width: 80px;
        }
    </style>
</head>
<body>
    <?php
    $star = isset($_POST['star']) ? intval($_POST['star']) : 0;
    if (isset($_POST['tambah'])) {
        $star++;
    } elseif (isset($_POST['kurang']) && $star > 0) {
        $star--;
    }
    $pict = "http://localhost/tugas%20php%203/praktikum/Opening_Ceremony_Held_in_the_Classroom_T.jpg";
    ?>

    <?php for ($i = 0; $i < $star; $i++): ?>
        <img src="<?= htmlspecialchars($pict); ?>" width="80" height="80">
    <?php endfor; ?>

    <?php if ($star == 0): ?>
        <form action="" method="POST">
            Jumlah waifu: <input type="number" name="star" min="0" required><br>
            <button type="submit">Submit</button><br>
        </form>
    <?php else: ?>
        <form action="" method="POST">
            <button type="submit" name="tambah">
                <img src="<?= htmlspecialchars($pict); ?>" alt="Tambah kan waifu" height="30" width="30">
                Tambah kan waifu
            </button>
            <input type='hidden' name='star' value='<?= htmlspecialchars($star); ?>'>
            <button type="submit" name="kurang">
                <img src="<?= htmlspecialchars($pict); ?>" alt="Kurang kan waifu" height="30" width="30">
                Kurang kan waifu
            </button>
        </form>
    <?php endif; ?>
</body>
</html>
