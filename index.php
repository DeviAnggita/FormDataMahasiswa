<?php require 'tampilan/header.php'; ?>
<?php $pagename = "Form Data Mahasiswa"; ?>

<?php require 'admin/functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data BERHASIL ditambahkan');
            document.location.href = '/FormDataMahasiswa/admin/halaman.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data GAGAL ditambahkan');
            document.location.href = '/FormDataMahasiswa/admin/halaman.php';
        </script>";
    }
}
?>

<div class="container pt-md-5 pt-3 pb-3">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true) ? "img/friend.svg" : "img/friend.svg"; ?>" alt="Home Image" class="img-fluid">
        </div>
        <div class="col-md-6 pl-md-5 pr-md-5 my-auto border-left overflow-auto my-form-container" style="height: 500px;">
            <?php require 'form/form.php'; ?>
        </div>
    </div>
</div>

<?php require 'tampilan/footer.html'; ?>