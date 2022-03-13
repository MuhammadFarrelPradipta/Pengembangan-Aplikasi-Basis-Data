<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            padding: 5px;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    include "koneksi.php";

    $sql = "SELECT * FROM contoh1";
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
        while ($row = $hasil->fetch_assoc()) { ?>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                </tr>
                <tr>
                    <td><?php echo $row["nim"] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                </tr>
            </table>
    <?php  }
    } else {
        echo "Tidak ada data";
    }
    $conn->close(); ?>
</body>

</html>