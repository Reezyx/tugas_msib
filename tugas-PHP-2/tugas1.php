<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Table</title>
    <style>
        body {
            display: grid;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 500px;
            border: solid;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: solid;
        }

        tr.table-menu {
            border: black;
            background-color: aquamarine;
        }

        
        tr:not(.table-menu):hover {
            background-color: grey; 
            cursor: pointer;
        }

        tr.hover-even {
            background-color: #ddd; 
        }

        tr.hover-odd {
            background-color: #fff; 
        }
    </style>

</head>

<body>
    <?php
    $lists = [
        [
            "nama_makanan" => "Sate Ayam",
            "harga" => 5000
        ],
        [
            "nama_makanan" => "Sate Padang",
            "harga" => 15000
        ],
        [
            "nama_makanan" => "Nasi Padang",
            "harga" => 25000
        ],
        [
            "nama_makanan" => "Sate Kambing",
            "harga" => 20000
        ],
        [
            "nama_makanan" => "Bakso",
            "harga" => 13000
        ],
    ];

    ?>
    <h1>List Harga Makanan</h1>
    <table>
        <tr class="table-menu">
            <th>No</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
        </tr>
        <?php
        $no = 1;
        foreach ($lists as $list) {
            $row_class = ($no % 2 == 0) ? "hover-even" : "hover-odd";
        ?>
            <tr class="table-row <?php echo $row_class; ?>">
                <td><?php echo $no++; ?></td>
                <td><?php echo $list['nama_makanan']; ?></td>
                <td><?php echo "Rp " . number_format($list['harga'], 0, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
