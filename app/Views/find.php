<!DOCTYPE html>
<html>

<head>
    <title>Find Place</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
    <div style="max-width: 700px; margin: auto;">
        <a href="<?= BASE_URL ?>">Home</a>

        <br>

        <h1>Find Place</h1>

        <form action="">
            <input type="text" name="keyword" value="<?= $request->param("keyword") ?>" placeholder="Search ...">
            <button type="submit" class="btn success">Search</button>
        </form>

        <br>

        <table border="1" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Description</th>
                <th>WhatsappNumber</th>
            </tr>
            <?php foreach ($tirePatches as $tirepatch) : ?>
                <tr>
                    <td><?= $tirepatch->getName() ?></td>
                    <td><?= $tirepatch->getAddress() ?></td>
                    <td><?= $tirepatch->getDescription() ?></td>
                    <td>
                        <a href="https://wa.me/<?= $tirepatch->getWhatsappNumber() ?>">
                            <?= $tirepatch->getWhatsappNumber() ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>