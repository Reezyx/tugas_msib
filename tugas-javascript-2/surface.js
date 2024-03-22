/*
    1. Cobalah untuk membuat sebuah function untuk menghitung Luas Permukaan sebuah balok (nama function bebas)
    2. function tersebut menerima 3 parameter yaitu: panjang, lebar, tinggi
    3. Rumus luas permukaan balok: 2 x ((panjang x tinggi) + (panjang x lebar) + (lebar x tinggi))
    4. Kamu dapat mencari luas permukaan balok di internet agar lebih jelas
    5. Setelah selesai melakukan kalkulasi maka kembalikan value tersebut dengan return pada function
    6. Terakhir, Panggil Function tersebut lalu tampilkan hasilnya pada terminal (bisa di setor ke variabel atau langsung)
*/
function luasPermukaanBalok(panjang, lebar, tinggi) {
  var luasPermukaan = 2 * (panjang * lebar + panjang * tinggi + lebar * tinggi);
  return luasPermukaan;
}
var panjang = 5;
var lebar = 2;
var tinggi = 4;
var luasPermukaan = luasPermukaanBalok(panjang, lebar, tinggi);

console.log(
  "Luas Permukaan Balok dengan panjang = ",
  panjang,
  "lebar = ",
  lebar,
  "dan tinggi = ",
  tinggi,
  "adalah:",
  luasPermukaan
);
