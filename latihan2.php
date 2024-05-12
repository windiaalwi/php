<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $data) { ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['jurusan']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
