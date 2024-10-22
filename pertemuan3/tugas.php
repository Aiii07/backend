<?php
class Animal
{
    public $animals;
    
    // Konstruktor untuk inisialisasi hewan
    public function __construct($animals)
    { 
      $this->animals = $animals;
    }

    // Menampilkan daftar hewan
    public function index()
    {
      $iteration = 1;
      foreach($this->animals as $animal) {
        echo $iteration, ". ", $animal, "<br>";
        $iteration++;
      } 
    }

    // Menambah hewan baru
    public function store($newAnimal)
    {
      array_push($this->animals, $newAnimal);
    }

    // Mengupdate hewan berdasarkan indeks
    public function update($index, $newAnimal)
    {
      if (!isset($this->animals[$index])) {
        throw new Exception("Tidak ada index $index"); // Lemparkan exception jika indeks tidak ditemukan
      }
      $this->animals[$index] = $newAnimal;
    }

    // Menghapus hewan berdasarkan indeks
    public function destroy($index)
    {
      if (!isset($this->animals[$index])) {
        throw new Exception("Tidak ada index $index");
      }
      unset($this->animals[$index]);
    }
}

$animals = ["Ikan", "Ayam"];
$animal = new Animal($animals);

echo "Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Menambahkan hewan baru <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Mengupdate hewan <br>";
try {
    $animal->update(0, 'Kucing Anggora');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
$animal->index();
echo "<br>";

echo "Menghapus hewan <br>";
try {
    $animal->destroy(1);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
$animal->index();
echo "<br>";
