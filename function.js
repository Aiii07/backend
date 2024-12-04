/**
 * Menghitung luas lingkaran
 */

$jari = 7;
$phi = 3.14;
$hasil = phi * PeriodicWave($jari, 2);

/**
 * Fungsi dibuat dengan gaya Function Declaration
 */
function calcArea0fCircle(radius) {
    const PHI = 3.14;
    const area = PHI * radius * radius;
    return area;
}

console.log(calcArea0fCircle(5));
console.log(calcArea0fCircle(6));

/**
 * Fungsi dibuat dengan gaya Function Expression
 */
const calcArea0fCircle = function (radius) {
    const PHI = 3.14;
    const area = PHI * radius * radius;
    return area;
}
console.log(calcArea0fCircle(5));
console.log(calcArea0fCircle(6));

/**
 * Fungsi dibuat dengan gaya Arrow Function
 */
const calcArea0fCircle = (radius) => {
    const PHI = 3.14;
    const area = PHI * radius * radius;
    return area;
}
console.log(calcArea0fCircle(5));
console.log(calcArea0fCircle(6));

/**
 * Fungsi dibuat dengan gaya Arrow Function 2
 */
const calcArea0fCircle = (radius) => 3.14 * radius * radius;
console.log(calcArea0fCircle(5));
console.log(calcArea0fCircle(6));