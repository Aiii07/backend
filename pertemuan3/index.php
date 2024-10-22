<?php 
// Variabel
/**
 * Aturan penulisan variabel:
 * - Tidak boleh dimulai dengan angka
 * - Tidak boleh mengandung spasi
 * - Tidak boleh menggunakan karakter khusus selain underscore (_)
 */

$a = 10;
// Variabel menggunakan snake case
$nama_lengkap = "Aisyah Nurul Fitriah";

// Tipe Data
/**
 * String
 * Integer
 * Float
 * Boolean
 */

$name = "L";
$nilai = 90;
$phi = 3.14;
$benar = true;
$salah = false; // Penulisan boolean harus lowercase di PHP

// Percabangan
if ($nilai > 90) {
    echo "Rating Anda A";
} else if ($nilai >= 90) {
    echo "Rating Anda B";
} else {
    echo "Rating Anda tidak A";
}

// Perulangan
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}

// Foreach
$fruit1 = "Apple";
$fruit2 = "Melon";
$fruit3 = "Mangga";

// Menggunakan array
$fruits = ["Apple", "Melon", "Mangga"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

// Menambah item ke array
array_push($fruits, "Durian");
echo "<br>";
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

// Mengedit nilai array
$fruits[0] = "Manggis";
echo "<br>";
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

// Menghapus item dari array
unset($fruits[0]);
echo "<br>";
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

// Fungsi
$a = 0;
$b = 6;
$total = $a + $b;
echo $total;

function sum($a, $b) {
    return $a + $b;
}

function greet() {
    return "Hello World";
}

echo "<br>" . greet();
echo "<br>";

$jumlah = sum(0, 6);
$jumlah1 = sum(10, 6);
echo $jumlah;
echo "<br>";
echo $jumlah1;

// OOP
class Fruit {
    // Property
    public $fruits;

    // Constructor
    public function __construct($fruits) {
        $this->fruits = $fruits;
    }

    // Method untuk menampilkan semua buah
    public function index() {
        foreach ($this->fruits as $fruit) {
            echo $fruit;
            echo "<br>";
        }
    }

    // Method untuk menambah buah
    public function tambahBuah($fruit) {
        array_push($this->fruits, $fruit);
    }

    // Method untuk mengedit buah
    public function editBuah($index, $fruit) {
        $this->fruits[$index] = $fruit;
    }

    // Method untuk menghapus buah
    public function hapusBuah($index) {
        unset($this->fruits[$index]);
    }
}

// Menggunakan OOP
$fruits = new Fruit(["Apple", "Anggur", "Manggis"]);
echo "<br>";
$fruits->index();

$fruits->tambahBuah("Jeruk");
echo "<br>";
$fruits->index();

$fruits->editBuah(0, "Durian");
echo "<br>";
$fruits->index();

$fruits->hapusBuah(2);
echo "<br>";
$fruits->index();

?>
