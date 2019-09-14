<?php
echo "<fieldset>"; 
echo "<legend><h1>Ian Book Store</h1></legend>";
if (isset($_POST['sbm'])) {
    $nama =$_POST['nama'];
    $almt =$_POST['almt'];
    $jk =$_POST['jk'];
    $tgl =$_POST['tgl'];
    $jb =$_POST['jml'];
    $jdl = $_POST['jdl'];
    $kode=$_POST['kode'];
    $pengarang=$_POST['pengarang'];
    $jns=$_POST['jns'];
    $hrg = $_POST['hrg'];
    $nomer = 0;?>    
    <table>
        <tr>
            <td><b>Nama : </b></td>
            <td><?php echo $nama;?></td>
        </tr>    
        <tr>    
            <td><b>Alamat : </b></td>
            <td><?php echo $almt;?></td><br>
        </tr>
        <tr>
            <td><b>Jenis Kelamin : </b></td>
            <td><?php echo $jk;?></td><br>
        </tr>
        <tr>
            <td><b>Tanggal Pembelian : </b></td>
            <td><?php echo $tgl;?></td><br>
        </tr>
        <tr>
            <td><b>Jumlah Buku : </b></td>
            <td><?php echo $jb;?></td><br>
        </tr>
    </table>
    <?php       
    echo "<hr>";
    echo "<h4>Daftar Buku Yang Dibeli</h4>";
    echo "<pre>"; 
    foreach ($jdl as $key => $value) {
        echo "<b>Judul Buku     :      ". $jdl[$key] ."</b><br>".
             "<b>Kode Buku      :      ". $kode[$key] ."</b><br>".
             "<b>Pengarang      :      ". $pengarang[$key] ."</b><br>".
             "<b>Jenis Buku     :      ". $jns[$key] ."</b><br>".
             "<b>Harga Buku     :      ". $hrg[$key] ."</b><br>";
        echo "<hr>";
    }
    echo "</pre>";
    echo "<hr>";
    echo "<h4>Total Pembayaran</h4>";
    for ($i=0; $i < count($hrg) ; $i++) { 
       $hsl=$hrg[$i]+$hsl;
    }
    echo "<pre>";
    echo "<b>Subtotal         : $hsl </b><br>";
    if ($jb >= 5) {
        $dsc = $hsl * 0.1;
        $ttl = $hsl - $dsc;
        echo "<b>Diskon (5%)      : $dsc </b><br>";
        echo "<b>Total Pembayaran : $ttl</b><br>";
    }elseif ($jb >= 3) {
        $dsc1 = $hsl * 0.05;
        $ttl1 = $hsl - $dsc1;
        echo "<b>Diskon (10%)     : $dsc1 </b><br>";
        echo "<b>Total Pembayaran : $ttl1</b><br>";
    }else {
        $n = 0;
        echo "<b>Diskon (0%)      : $n </b><br>";
        echo "<b>Total Pembayaran : $hsl</b>";
    }
    echo "</pre>";

}
echo "</fieldset>";
?>