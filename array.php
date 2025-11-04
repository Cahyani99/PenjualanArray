
<?php
// Commit 1 – Setup awal
$kode_barang = ["BRG001", "BRG002", "BRG003", "BRG004", "BRG005"];
$nama_barang = ["Teh Pucuk", "Sukro", "Sprite", "Chitato", "Oreo"];
$harga_barang = [5000, 1000, 4000, 8000, 6000];

echo "<b>--POLGAN MART--</b><br>";
echo "Daftar Pembelian<br><br>";

// Commit 2 – Logika pembelian
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// Acak jumlah variasi produk yang dibeli (misal 3 dari 5)
$variasi = rand(2, 5);

for ($i = 0; $i < $variasi; $i++) {
    $pilih = rand(0, count($nama_barang) - 1); // acak produk
    $beli[$i] = [
        'kode' => $kode_barang[$pilih],
        'nama' => $nama_barang[$pilih],
        'harga' => $harga_barang[$pilih],
        'jumlah' => rand(1, 5)
    ];
    $beli[$i]['total'] = $beli[$i]['harga'] * $beli[$i]['jumlah'];
    $grandtotal += $beli[$i]['total'];
}

// Commit 3 – Perhitungan total dan tampilan
foreach ($beli as $item) {
    echo "Kode Barang : " . $item['kode'] . "<br>";
    echo "Nama Barang : " . $item['nama'] . "<br>";
    echo "Harga Barang : " . $item['harga'] . "<br>";
    echo "Jumlah Beli : " . $item['jumlah'] . "<br>";
    echo "Total Harga : " . $item['total'] . "<br><br>";
}
// Commit 4 – Output akhir
echo "------------------------------<br>";
echo "Total Belanja : <b>$grandtotal</b><br>";


?>
