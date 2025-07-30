<?php
class PPLG3 {
    public $nama, $kelas, $no_absen, $kehadiran;

    public function __construct($nama, $kelas, $no_absen, $kehadiran) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->no_absen = $no_absen;
        $this->kehadiran = strtolower($kehadiran);
    }

    public function statusKehadiran() {
        switch ($this->kehadiran) {
            case "alpha":
                return "<span class='status alpha'><i class='fa-solid fa-xmark-circle'></i> Alpha (chalant abies not sigma)</span>";
            case "izin":
                return "<span class='status izin'><i class='fa-solid fa-envelope-open-text'></i> Izin</span>";
            case "hadir":
                return "<span class='status hadir'><i class='fa-solid fa-check-circle'></i> Hadir</span>";
            default:
                return "<span class='status unknown'><i class='fa-solid fa-question-circle'></i> Tidak Diketahui</span>";
        }
    }

    public function profilSiswa() {
    echo "
    <div class='card'>
        <h3>$this->nama</h3>
        <p class='kelas'>$this->kelas <span class='absen'> No Absen $this->no_absen</span></p>
        <div class='kehadiran'>" . $this->statusKehadiran() . "</div>
    </div>";
}
}

$semuaSiswa = [
    new PPLG3("Agus", "XI PPLG 3", 1, "hadir"),
    new PPLG3("Alden", "XI PPLG 3", 2, "alpha"),
    new PPLG3("Annisa", "XI PPLG 3", 3, "izin"),
    new PPLG3("Depan", "XI PPLG 3", 4, "hadir"),
    new PPLG3("Krisna", "XI PPLG 3", 5, "alpha")
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kehadiran Siswa - XI PPLG 3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f1f4f9;
        }

        .main-container {
            width: 90%;
            max-width: 1200px;
            background: #ffffff;
            margin: 30px auto;
            border-radius: 30px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            padding: 5px;

        }

        .header h1 {
            margin: 0;
            font-size: 1.8em;
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 30px;
        }

        .card {
            background: #fff;
            color: #333;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.2);
        }

        .card h3 {
            margin: 10px 0;
            font-size: 1.4em;
            color: #2c3e50;
        }

        .kelas {
            color: #555;
            font-size: 1em;
            margin-bottom: 15px;
        }

        .absen {
    position: static
    color: #fff;
    font-weight: bold;
    font-size: 1em;

}

        .kehadiran {
            margin-top: 10px;
        }

        .status {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 0.9em;
        }

        .status i {
            margin-right: 5px;
        }

        .status.alpha {
            background: #ffe5e5;
            color: #e74c3c;
        }

        .status.izin {
            background: #fff3cd;
            color: #f39c12;
        }

        .status.hadir {
            background: #d4edda;
            color: #27ae60;
        }

        .status.unknown {
            background: #e2e3e5;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <img src="download-removebg-preview (1).png" alt="logo">
            <h1>Data Kehadiran Siswa XI PPLG 3</h1>
        </div>
        <div class="container">
            <?php foreach ($semuaSiswa as $siswa) $siswa->profilSiswa(); ?>
        </div>
    </div>
</body>
</html>
