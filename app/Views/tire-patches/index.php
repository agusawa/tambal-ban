<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.....</title>
</head>

<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>WhatsappNumber</th>
        </tr>
        <?php foreach ($tirePatches as $tirepatch) : ?>
            <tr>
                <td><?= $tirepatch->getName() ?></td>
                <td><?= $tirepatch->getAddress() ?></td>
                <td><?= $tirepatch->getWhatsappNumber() ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>