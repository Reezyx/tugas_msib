/*
    1. Cobalah untuk membuat sebuah function untuk menghitung Luas Permukaan sebuah balok (nama function bebas)
    2. function tersebut menerima 3 parameter yaitu: panjang, lebar, tinggi
    3. Rumus luas permukaan balok: 2 x ((panjang x tinggi) + (panjang x lebar) + (lebar x tinggi))
    4. Kamu dapat mencari luas permukaan balok di internet agar lebih jelas
    5. Setelah selesai melakukan kalkulasi maka kembalikan value tersebut dengan return pada function
    6. Terakhir, Panggil Function tersebut lalu tampilkan hasilnya pada terminal (bisa di setor ke variabel atau langsung)
*/

// rumus balok
function hitungLuasBalok(panjang, lebar, tinggi) {
  return 2 * (panjang * tinggi + panjang * lebar + lebar * tinggi);
}

// input nilai (panjang, lebar, tinggi)
var luasPermukaan = hitungLuasBalok(5, 7, 3);

// tampil terminal
console.log("Luas permukaan", luasPermukaan);
