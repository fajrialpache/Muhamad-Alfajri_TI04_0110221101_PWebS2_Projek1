<?php
include '../hefut/header.php';
require "ClassBMI.php";
require "ClassBMIPasien.php";
require "ClassPasien.php";

$data = [
    [
        "id" => 1,
        "kode" => "P001",
        "tgl_periksa" => "2022-01-10",
        "nama" => "Ahmad",
        "tmp_lahir" => "Jakarta",
        "tgl_lahir" => "2000-01-01",
        "email" => "ahmad@mail.com",
        "gender" => "L",
        "berat" => 69.8,
        "tinggi" => 169,
    ],
    [
        "id" => 2,
        "kode" => "P002",
        "tgl_periksa" => "2022-01-10",
        "nama" => "Rina",
        "tmp_lahir" => "Jakarta",
        "tgl_lahir" => "2000-01-01",
        "email" => "rina@mail.com",
        "gender" => "P",
        "berat" => 100.0,
        "tinggi" => 165,
    ],
    [
        "id" => 3,
        "kode" => "P003",
        "tgl_periksa" => "2022-01-11",
        "nama" => "Lutfi",
        "tmp_lahir" => "Jakarta",
        "tgl_lahir" => "2000-01-01",
        "email" => "lutfi@mail.com",
        "gender" => "L",
        "berat" => 45.2,
        "tinggi" => 171,
    ]
];

$data_bmi = [];
foreach ($data as $d) {
    $pasien = new Pasien($d["id"], $d["kode"], $d["nama"], $d["tmp_lahir"], $d["tgl_lahir"], $d["email"], $d["gender"]);
    $bmi = new BMI($d["tinggi"], $d["berat"]);

    $data_bmi[] = new BMIPasien($d["id"], $bmi, $d["tgl_periksa"], $pasien);
}
if (isset($_POST['submit'])) {
    $id = 4;
    $tgl_lahir = "2000-02-02";
    $kode = "P004";
    $tmp_lahir = "Depok";
    $email = "user@gmail.com";
    $tgl_periksa = "2022-01-01";
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];

    $pasien = new Pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
    $bmi = new BMI($tinggi, $berat);

    $data_bmi[] = new BMIPasien($id, $bmi, $tgl_periksa, $pasien);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table>
        <h3>Daftar Nilai Siswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Berat (kg)</th>
                    <th scope="col">Tinggi (cm)</th>
                    <th scope="col">Nilai BMI</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($data_bmi as $db) {
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $db->tanggal . '</td>';
                    echo '<td>' . $db->pasien->kode . '</td>';
                    echo '<td>' . $db->pasien->nama . '</td>';
                    echo '<td>' . $db->pasien->gender . '</td>';
                    echo '<td>' . $db->bmi->berat . '</td>';
                    echo '<td>' . $db->bmi->tinggi . '</td>';
                    echo '<td>' . $db->bmi->nilaiBMI() . '</td>';
                    echo '<td>' . $db->bmi->statusBMI() . '</td>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <h1></h1>
        <?php
        if ($db->bmi->nilaiBMI() < 18.5) {
            echo "<h2 class=\"text-center\">Nilai BMI Anda adalah " . "<span class=\"text-info\">{$db->bmi->nilaiBMI()}</span>" . "</h2>";
            echo "<img class=\"d-flex justify-content-center mx-auto\"src=\"kubot.png\">";
        } elseif ($db->bmi->nilaiBMI() >= 18.5 && $db->bmi->nilaiBMI() < 25.0) {
            echo "<h2 class=\"text-center\">Nilai BMI Anda adalah " . "<span class=\"text-info\">{$db->bmi->nilaiBMI()}</span>" . "</h2>";
            echo "<img class=\"d-flex justify-content-center mx-auto\"src=\"sehat.png\">";
        } elseif ($db->bmi->nilaiBMI() >= 25.0 && $db->bmi->nilaiBMI() < 30.0) {
            echo "<h2 class=\"text-center\">Nilai BMI Anda adalah " . "<span class=\"text-info\">{$db->bmi->nilaiBMI()}</span>" . "</h2>";
            echo "<img class=\"d-flex justify-content-center mx-auto\"src=\"kelbot.png\">";
        } else {
            echo "<h2 class=\"text-center\">Nilai BMI Anda adalah " . "<span class=\"text-info\">{$db->bmi->nilaiBMI()}</span>" . "</h2>";
            echo "<img class=\"d-flex justify-content-center mx-auto\"src=\"ob1.png\">";
        }
        ?>


</body>

</html>
<?php
include '../hefut/footer.php';
?>