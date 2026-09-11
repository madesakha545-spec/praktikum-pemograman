 <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../koneksi/koneksi.php";

$ipk_terakhir = rand(29,34  )/10;
$disabled ="";

    if ($ipk_terakhir <3) {
        $disabled = "disabled";
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action="../hasil/hasil.php" method="post" enctype="multipart/form-data" style="display: flex; justify-content: center; margin-top: 50px;" >
         <table style="border: 1px solid black; width: 50%; background-color: #53ABED;" >
            <!-- membuat table header -->
            <th>
                <td style="border: 1px solid black; background-color: #172D5C; color: white; text-align: center;" >Pilih Beasiswa</td>
                <td style="border: 1px solid black; background-color: #172D5C; color: white; text-align: center;" >
                    <a href="../user/index.php?aksi=daftar-beasiswa">Daftar</a>
                </td>
                <td style="border: 1px solid black; background-color: #172D5C; color: white; text-align: center;" >
                      <a href="../hasil/hasil.php?aksi=hasil-beasiswa">Hasil</a>
                </td>
            </th>
            <!-- end table header -->
                    <!-- membuat tr untuk judul -->
                    <tr>
                        <td colspan="4">
                            <h1 style="text-align: center; background-color: #172D5C; color: white; padding: 10px;">Daftar Beasiswa</h1>
                        </td>
                    </tr>
                    <!-- end tr untuk judul -->
                     
                    <!-- membuat tr untuk input nama -->
                    <tr>
                        <td colspan="2" style="color: white;">Masukkan Nama</td>
                        <td><input type="text" name="nama" style="width: 100%;" placeholder="Masukkan Nama"></td>
                    </tr>
                    <!-- end tr untuk input nama -->
                    <!-- membuat tr untuk input email -->
                    <tr>
                        <td colspan="2" style="color: white;">Masukkan Email</td>
                        <td><input type="email" name="email" style="width: 100%;" placeholder="Cheatninjasharpshooter@gmail.com"></td>
                    </tr>
                    <!-- end tr untuk input email -->
                    <!-- membuat tr untuk input nomor hp -->
                    <tr>
                        <td colspan="2" style="color: white;">Masukkan Nomor Hp</td>
                        <td><input type="text" name="nomor_hp" style="width: 100%;" placeholder="081234567890"></td>
                    </tr>
                    <!-- end tr untuk input nomor hp -->
                    <!-- membuat tr untuk input semester -->
                    <tr>
                        <td colspan="2" style="color: white;">Masukkan Semester</td>
                        <td>
                            <select name="semester" id="semester" style="width: 100%" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </td>
                    </tr>
                    <!-- end tr untuk input semester -->
                    <!-- membuat tr untuk input ipk terakhir -->
                    <tr>
                        <td colspan="2" style="color: white;">Masukkan Ipk Teakhir</td>
                        <td><input type="text" name="ipk_terakhir" readonly value="<?php echo $ipk_terakhir?>" style="width: 100%;"></td>
                    </tr>

                    <tr>
                        <td colspan="2" style="color: white;">Pilih Beasiswa</td>
                        <td>
                            <select name="beasiswa" id="beasiswa" <?php echo $disabled ?> style="width: 100%">
                                <option value="beasiswa_nasional">beasiswa nasional</option>
                                <option value="beasiswa_internasional">beasiswa internasional</option>
                            </select>
                        </td>
                    </tr>
                    <!-- membuat tr untuk upload berkas -->
                    <tr>
                        <td colspan="2" style="color: white;">Upload Berkas File</td>
                        <td><input type="file" name="upload_berkas" <?php echo $disabled ?> style="width: 100%;"></td>
                    </tr>
                    <!-- end tr untuk upload berkas -->
                    <!-- membuat tr untuk submit -->
                    <tr>
                        <td colspan="2"></td>
                        <td>
                            <input type="submit" name="submit" <?php echo $disabled ?> class="btn btn-primary mt-5;">
                            <button type="reset" name="reset" class="btn btn-danger mt-5;">reset</button>
                        </td>

                    </tr>
            <!-- end tr untuk submit -->
            

</table>
    </form>
</body>
</html>