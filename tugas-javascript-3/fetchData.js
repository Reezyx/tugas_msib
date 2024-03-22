/*
    1. Jalankan sebuah function fetch (dapat menggunakan then atau async await) untuk mengambil data pada URL berikut:
    https://api.amandemy.co.id/api/tugas
    2. Kamu akan mendapatkan data list makanan beserta harganya.
    3. Setelah berhasil mendapatkan data dari server, coba lakukan filter dengan ketentuan harga makanan yang >= 15000
    4. Tampilkan hasil filter tersebut pada terminal
    tips: caranya mirip seperti yang ada di materi, namun dengan tambahan filter
*/

async function getData() {
  try {
    const response = await fetch("https://api.amandemy.co.id/api/tugas", {
      headers: {
        Accept: "application/json",
      },
    });
    const result = await response.json();
    const filter = result.filter((makanan) => makanan.harga >= 15000);
    console.log("`Daftar Makanan dengan harga >=15000");
    filter.forEach((makanan) => {
      console.log(`${makanan.nama_makanan} : ${makanan.harga}`);
    });
  } catch (error) {
    console.log(error);
  }
}

getData();
