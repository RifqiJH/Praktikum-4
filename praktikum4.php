<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4 </title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor=#FFFAFA style =  position: relative; z-index: 2;
    padding: 30px;
    text-align: center;
    font-weight: bold;
    font-family: Arial, sans-serif;>
<center> <h2>INFO KARYAWAN PERUSAHAAN</h2> </center>
 <hr />
        <p>
</body>

	<table class="table1">
    
        <th>NO</th>
        <th>NAMA</th>
        <th>TEMPAT, TANGGAL LAHIR</th>
        <th>JENIS KELAMIN</th>
        <th>LEVEL KARYAWAN</th>
        <th>STATUS</th>
        <th>GAJI (RP)</th>
    

        <?php

        class karyawan
        {
            private $nama;
            private $ttl;
            private $jenis;

            function __construct($nama, $ttl, $jenis)
            {
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->jenis = $jenis;
            }
            function get_nama()
            {
                return $this->nama;
            }
            function get_ttl()
            {
                return $this->ttl;
            }
            function get_jenis()
            {
                return $this->jenis;
            }
        }

        class Gaji extends karyawan
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji = 2000000 / 2;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000 / 2;
                } else {
                    $this->gaji = 5000000 / 2;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }
        class perhitungan extends karyawan
        {
            private $lk;
            private $stat;
            private $gaji;

            public function set_lk($lk)
            {
                if ($lk == 'Junior') {
                    $this->gaji =  2000000;
                } elseif ($lk == 'Amateur') {
                    $this->gaji = 3500000;
                } else {
                    $this->gaji = 5000000;
                }

                $this->lk = $lk;
            }

            public function get_lk()
            {
                return $this->lk;
            }

            public function set_stat($stat)
            {
                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }

        $joko = new perhitungan('joko', 'bandung 20 desember 1998', 'Laki-laki');
        $joko->set_lk('Senior');
        $joko->set_stat('Full time');
        $raihan = new perhitungan('raihan', 'Jakarta, 14 Agustus 2000', 'Laki-laki');
        $raihan->set_lk('senior');
        $raihan->set_stat('Part time');
        $lisa = new perhitungan('lisa', 'jakarta, 17 agustus 1998', 'perempuan');
        $lisa->set_lk('Junior');
        $lisa->set_stat('Full time');
        $jh = new perhitungan('Jeha', 'Jakarta, 12 Juli 2000', 'Laki-laki');
        $jh ->set_lk('Junior');
        $jh ->set_stat('Part time');
        $ibnu = new perhitungan('ibnu', 'jakarta, 20 juli 2000', 'tidak diketahui');
        $ibnu ->set_lk('Senior');
        $ibnu ->set_stat('Part time');
        $adam = new perhitungan('adam', 'jakarta,28 oktober 2000', 'laki-laki');
        $adam->set_lk('Junior');
        $adam->set_stat('Part time');

        $karyawan = array($joko, $raihan, $lisa, $jh, $ibnu, $adam);

        ?><?php
        foreach ($karyawan as $index => $value) {
        ?>
            <tr>
                <td class="num">
                    <?= $index + 1; ?>
                </td>
                <td class="tcon">
                    <?= $value->get_nama(); ?>
                </td>
                <td class="tcon">
                    <?= $value->get_ttl(); ?>
                </td>
                <td class="tcon">
                    <?= $value->get_jenis(); ?>
                </td>
                <td class="tcon">
                    <?= $value->get_lk(); ?>
                </td>
                <td class="tcon">
                    <?= $value->get_stat(); ?>
                </td>
                <td class="tcon">
                    <?= $value->get_gaji(); ?>
                </td>
            </tr>
        <?php

        }
        ?>
   
    
    </table>
</div>
    
</body>
</html>