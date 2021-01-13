<!DOCTYPE html>
<html>

<head>
    <title>Tire Patches</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/css/style.css' ?>">
</head>

<body>
    <div style="max-width: 700px; margin: auto;">
        <a href="<?= BASE_URL . "/account/edit" ?>">Ubah Profil</a> |
        <a href="<?= BASE_URL . "/account/change-password" ?>">Ubah Password</a> |
        <a href="<?= BASE_URL . "/logout" ?>">Log out</a>

        <br><br><br>

        <a href="<?= BASE_URL . "/tire-patches/add" ?>" class="btn success">Tambah data</a>

        <br><br>

        <?php if ($success) : ?>
            <div class="alert success">
                <?= $success ?>
            </div>
        <?php endif ?>

        <?php if ($error) : ?>
            <div class="alert danger">
                <?= $error ?>
            </div>
        <?php endif ?>

        <table border="1" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Description</th>
                <th>Whatsapp Number</th>
                <th>Action</th>
            </tr>
            <?php foreach ($tirePatches as $tirePatch) : ?>
                <tr>
                    <td><?= $tirePatch->getName() ?></td>
                    <td><?= $tirePatch->getAddress() ?></td>
                    <td><?= $tirePatch->getDescription() ?></td>
                    <td><?= $tirePatch->getWhatsappNumber() ?></td>
                    <td>
                        <a href="<?= BASE_URL . "/tire-patches/edit?id=" . $tirePatch->getId() ?>">Edit</a> |
                        <a href="<?= BASE_URL . "/tire-patches/delete?id=" . $tirePatch->getId() ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>