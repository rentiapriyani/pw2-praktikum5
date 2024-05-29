<?php
// File: daftar_mahasiswa.php

include 'class_mahasiswa.php';
$daftar_mahasiswa = [];

// Menambahkan objek Mahasiswa ke dalam array
$daftar_mahasiswa[] = new Mahasiswa("0110123113", "Rafael struick");
$daftar_mahasiswa[0]->prodi = "Sistem Informasi";
$daftar_mahasiswa[0]->thn_angkatan = 2023;
$daftar_mahasiswa[0]->ipk = 3.8;

$daftar_mahasiswa[] = new Mahasiswa("0110123046", "Noah");
$daftar_mahasiswa[1]->prodi = "Sistem Informasi";
$daftar_mahasiswa[1]->thn_angkatan = 2023;
$daftar_mahasiswa[1]->ipk = 3.9;

$daftar_mahasiswa[] = new Mahasiswa("0110123226", "Azizah");
$daftar_mahasiswa[2]->prodi = "Sistem Informasi";
$daftar_mahasiswa[2]->thn_angkatan = 2023;
$daftar_mahasiswa[2]->ipk = 3.7;

$daftar_mahasiswa[] = new Mahasiswa("0110123188", "Arhan pratama");
$daftar_mahasiswa[3]->prodi = "Sistem Informasi";
$daftar_mahasiswa[3]->thn_angkatan = 2023;
$daftar_mahasiswa[3]->ipk = 3.5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar_mahasiswa as $mahasiswa): ?>
                <tr>
                    <td><?php echo $mahasiswa->nama; ?></td>
                    <td><?php echo $mahasiswa->nim; ?></td>
                    <td><?php echo $mahasiswa->prodi; ?></td>
                    <td><?php echo $mahasiswa->thn_angkatan; ?></td>
                    <td><?php echo $mahasiswa->ipk; ?></td>
                    <td><?php echo $mahasiswa->predikat_ipk(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>