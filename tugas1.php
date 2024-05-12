
        <?php
        $dataProduk = array(
            //nama produk, merk, harga, status stok
            array("Galaxy S21", "Samsung", 19000000, true),
            array("Galaxy A71", "Samsung", 6999000, false),
            array("iPhone 12 Pro Max", "Apple", 20999000, true),
            array("iPhone 12 Mini", "Apple", 10999000, false),
        );

        foreach ($dataProduk as $produk) {
            echo "<li>";
            echo "<strong>Nama Produk:</strong> " . $produk[0] . "<br>";
            echo "<strong>Merk:</strong> " . $produk[1] . "<br>";
            echo "<strong>Harga:</strong> Rp " . number_format($produk[2], 0, ',', '.') . "<br>";
            echo "<strong>Status Stok:</strong> " . ($produk[3] ? "Tersedia" : "Tidak Tersedia") . "<br>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>