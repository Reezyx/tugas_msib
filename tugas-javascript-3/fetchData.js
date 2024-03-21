/*
    1. Jalankan sebuah function fetch (dapat menggunakan then atau async await) untuk mengambil data pada URL berikut:
    https://api.amandemy.co.id/api/tugas
    2. Kamu akan mendapatkan data list makanan beserta harganya.
    3. Setelah berhasil mendapatkan data dari server, coba lakukan filter dengan ketentuan harga makanan yang >= 15000
    4. Tampilkan hasil filter tersebut pada terminal
    tips: caranya mirip seperti yang ada di materi, namun dengan tambahan filter
*/

const getData = async () => {
  try {
    let response = await fetch("https://api.amandemy.co.id/api/tugas", {
      headers: {
        Accept: "application/json",
      },
    });
    let data = await response.json();
    let price = data.filter((a) => {
      return a.harga >= 15000;
    });
    console.log(price);
  } catch (error) {
    console.log("data tidak ditemukan");
  }
};
getData();
