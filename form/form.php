<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h1 class="text-center">Formulir Pendataan Mahasiswa</h1>
    <hr>
    <!-- NIM -->
    <div class="form-group">
        <label for="nim">NIM</label>
        <input class="form-control" name="nim" required type="text" placeholder="V3420028" minlength="8" maxlength="8" title="Karakter pertama harus huruf kemudian diikuti angka sesuai format NIM!" pattern="^[A-Z]{1}[0-9]{7}">
    </div>
    <!-- Nama -->
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input class="form-control" name="nama" required type="text" placeholder="Devi Anggita Ambarwati" minlength="3" title="Isi sesuai dengan nama Anda. Isian tidak mengandung angka atau simbol!" pattern="(^[a-zA-Z-' ]*$)">
    </div>
    <!-- Kata Sandi -->
    <div class="form-group">
        <label for="passwrd">Kata Sandi</label>
        <input class="form-control" name="passwrd" required type="password">
    </div>
    <!-- Tanggal Lahir -->
    <div class="form-group">
        <label for="birthdate">Tanggal Lahir</label>
        <input type="date" name="birthdate" class="form-control" required>
    </div>
    <!-- Jenis Kelamin -->
    <div class="form-check form-check-inline mb-3">
        <input type="radio" name="gender" class="form-check-input" value="Pria" required>
        <label class="form-check-label mr-3" for="male">Pria</label>
        <input type="radio" name="gender" class="form-check-input" value="Wanita">
        <label class="form-check-label" for="female">Wanita</label>
    </div>
    <!-- Jurusan -->
    <div class="form-group">
        <label for="prodi">Program Studi</label>
        <select class="custom-select" name="prodi" required>
            <option value="Teknik Informatika">D3 Teknik Informatika</option>
            <option value="Teknik Elektro">D3 Teknik Elektro</option>
            <option value="Teknik Mesin">D3 Teknik Mesin</option>
        </select>
    </div>
    <!-- Warga Negara -->
    <div class="form-group">
        <label for="warga_negara">Warga Negara</label>
        <br />
        <input type="checkbox" value="WNI" name="warga_negara[]"> WNI
    </div>
    <!-- Status -->
    <div class="form-group">
        <input class="form-control" name="statuss" required type="hidden" value="Mahasiswa Aktif">
    </div>
    <!-- Keterangan -->
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" name="keterangan" required></textarea>
    </div>

    </br>
    <button class="btn btn-primary" type="reset" name="reset" href="index.php">Reset</button>
    <button class="btn btn-success" type="submit" name="submit" href="/admin/halaman.php">Submit</button>
</form>