<?php include("header.html") ?>

<?php require 'functions.php';

$rows = query("SELECT * FROM tb_mahasiswa");

?>
<h1>Data Mahasiswa</h1>
<p>
    <a href="/FormDataMahasiswa/index.php">
        <input type="button" class="btn btn-primary" value="Tambah Data Baru" />
    </a>
</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="align-middle">NIM</th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">Kata Sandi</th>
            <th class="align-middle">Tanggal Lahir</th>
            <th class="align-middle">Jenis Kelamin</th>
            <th class="align-middle">Program Studi</th>
            <th class="align-middle">Warga Negara</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Keterangan</th>
            <th class="align-middle">Akses</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td>
                <?php echo $row['nim']; ?>
            </td>
            <td>
                <?php echo $row['nama']; ?>
            </td>
            <td>
                <?php echo $row['passwrd']; ?>
            </td>
            <td>
                <?php
                    echo date("j F Y", strtotime($row['birthdate']));
                    ?>
            </td>
            <td>
                <?php
                    switch ($row['gender']) {
                        case 'Pria':
                            echo "Pria";
                            break;
                        case 'Wanita':
                            echo "Wanita";
                            break;
                        default:
                            echo "Error";
                            break;
                    }
                    ?>
            </td>
            <td>
                <?php
                    switch ($row['prodi']) {
                        case 'Teknik Informatika':
                            echo "Teknik Informatika";
                            break;
                        case 'Teknik Elektro':
                            echo "Teknik Elektro";
                            break;
                        case 'Teknik Mesin':
                            echo "Teknik Mesin";
                            break;
                        default:
                            echo "Error";
                            break;
                    }
                    ?>
            </td>
            <td>
                <?php echo $row['warga_negara']; ?>

            </td>

            <td>
                <?php echo $row['statuss']; ?>
            </td>

            <td>
                <?php echo $row['keterangan']; ?>
            </td>

            <td>
                <?php echo $row['time_stamp']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include("footer.html") ?>