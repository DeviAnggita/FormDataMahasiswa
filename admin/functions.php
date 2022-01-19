<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $passwrd = md5($data["passwrd"]);
    $birthdate = htmlspecialchars($data["birthdate"]);
    $gender = htmlspecialchars($data["gender"]);
    $prodi = htmlspecialchars($data["prodi"]);

    $warga_negara = "";
    if (empty($_POST['warga_negara'])) {
        $_POST['warga_negara'] = ["WNA"];
    }
    if (in_array('WNI', $_POST['warga_negara'])) {
        $warga_negara = "WNI";
    } elseif (in_array('WNA', $_POST['warga_negara'])) {
        $warga_negara = "WNA";
    }

    $statuss = htmlspecialchars($data["statuss"]);

    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "INSERT INTO tb_mahasiswa (nim, nama, passwrd, birthdate, gender, prodi, warga_negara, statuss ,keterangan ) 
    VALUES('$nim', '$nama', '$passwrd', '$birthdate','$gender', '$prodi' , '$warga_negara' ,  '$statuss ', '$keterangan')";



    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
