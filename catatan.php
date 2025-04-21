Fungsi mysqli_query() : digunakan unutk menjalankan  perintah sql
Fungsi mysqli_fetch_array() dalam PHP digunakan untuk mengambil baris berikutnya dari hasil query yang dieksekusi menggunakan MySQLi.

  $jum_1 = mysqli_query($conn, "SELECT SUM(jumlah) AS jumlah1 FROM transaksi WHERE id_transaksi='$data[id_transaksi]'");
                        $jum_1 = mysqli_fetch_array($jum_1);
Ini adalah perintah SQL yang digunakan untuk menghitung total (jumlah) dari kolom jumlah dalam tabel transaksi.
SUM(jumlah) adalah fungsi agregat yang menjumlahkan semua nilai dalam kolom jumlah untuk baris yang memenuhi kondisi tertentu.
AS jumlah1 memberikan alias (nama sementara) untuk hasil dari SUM(jumlah), sehingga Anda dapat mengaksesnya dengan nama jumlah1.
WHERE id_transaksi='$data[id_transaksi]' adalah kondisi yang membatasi hasil query hanya untuk baris yang memiliki id_transaksi yang sama dengan nilai dari $data['id_transaksi'].


Dalam banyak aplikasi, tabel transaksi dan barang memiliki tujuan yang berbeda. 
Tabel transaksi biasanya menyimpan ringkasan atau informasi umum tentang transaksi, 
sedangkan tabel barang menyimpan detail tentang item yang terlibat dalam transaksi tersebut.
Anda mungkin ingin menghitung total harga dari semua barang yang terlibat dalam transaksi dan juga total harga yang tercatat dalam tabel transaksi.
 Ini bisa berguna untuk memverifikasi konsistensi data atau untuk laporan keuangan.


 file tambah.php di transaksi berrfungsi untuk menambahkan produk yang ingin dibeli kepada transaksi yang sudah ada.
 tambah.php merupakanfile transaksi dari tambah_produk.php 
 sedangkan file beli.php untuk menambah transaksi baru

 hapus_list2.php?id_transaksi=<?=$id_transaksi?>&id_produk=<?=$d['id_produk']?>



 kenapa nggak ada halaman sign in
 karena saya ingin hanya admin yang bisa membuat akun karena ini sistemnya kasir maka seluruh akun kasir diberikan oleh  admin supaya tidak ada penyalahgunaan

 untuk pengurangan stok secara otomatis saya menggunakan syntax php bukan
 synatx trigger sql karena saya merasa lebih mudah menggunakan synatx php daripada SQL
 pada halaman tambah-proses.php di transaksi terdapat syntax 
 yang berguna untuk mengurangi stok secara otomatis