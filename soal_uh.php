<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pembelian Buku</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <FORM action ="" method="POST" name="si">
            <fieldset>
            <legend align ="center"><h2>Ian Books Store</h2></legend>
    <table>
        <tr>
            <td><label>Nama : </label></td>
            <td><input type="text" name="nm" required></td>
        </tr><br>
        <tr>
            <td><label>Alamat : </label></td>
            <td><textarea name ="alm" cols="40" rows="5" checked></textarea></td><br>
        </tr><br>
        <tr>
            <td><label>Jenis Kelamin : </label></td>
            <td><input type ="radio" name="jk" value="laki-laki" checked>Laki-Laki
            <input type ="radio" name="jk" value"perempuan">Perempuan<br></td>
        </tr>
        <tr>
            <td><label>Tanggal Pembelian : </label></td>
            <td><input type="date" name="tanggal" required></td>
        </tr><br>
        <tr>
            <td><label>Jumlah Buku : </label></td>
            <td><input type="number" name="jml" required></td>
        </tr><br>
        <tr>
            <td> <input type="submit" name="Input" value="DONE">
            <td> <input type="reset" value="reset"></td></td>
        </tr>
        
    </table>
    <hr>
            </fieldset>   
        </FORM>
        <FORM ACTION="proses.php" METHOD="POST" NAME="Input">
        <fieldset>
        <?php     
        if (isset($_POST['Input'])) {
            $masukan = $_POST['jml'];
            $nma = $_POST['nm'];
            $almt = $_POST['alm'];
            $jeka = $_POST['jeka'];
            $tgl = $_POST['tanggal'];
            $jb = $_POST['jumlah'];           
            
            for ($i=0; $i < $masukan ; $i++) { ?>
    
            <input type="hidden" name="nama" value ="<?php echo $nma; ?>">
            <input type="hidden" name="almt" value ="<?php echo $almt; ?>">
            <input type="hidden" name="jk" value ="<?php echo $jeka; ?>">
            <input type="hidden" name="tgl" value ="<?php echo $tgl; ?>">
            <input type="hidden" name="jml" value ="<?php echo $jb; ?>">
                <table>
                <tr>
                    <td><label for=>Judul Buku</label></td>    
                    <td><input type="text" name="jdl[]" required></td>
                </tr>
                <tr>
                    <td><label for=>Kode Buku</label></td>     
                    <td><input type="text" name="kode[]"required></td>
                </tr>
                <tr>
                    <td><label for=>Pengarang</label></td>     
                    <td><input type="text" name="pengarang[]"required></td>
                </tr>
                <tr>
                <td><label for=>Jenis Buku</label></td>
                <td><select name="jns[]">
                <option value="Novel">Novel</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Horror">Horror</option>
                <option value="Cergam">Cergam</option>
                <option value="Komik">Komik</option></td> 
                </select>
                </tr>
                <tr>
                    <td><label for=>Harga Buku</label></td>    
                    <td><input type="number" name="hrg[]"required></td>
                </tr>
                <br>
                <br></table>
    <?php  } ?>
            <tr>
                <td><input type="submit" name="sbm" value="done"></td>
                <td><input type="reset" value="reset"></td>
            </tr>
            </fieldset>
        </FORM>
        <?php } ?>
    </body>
</html>