// Simpan data semua menu di luar agar bisa diakses ulang
let semuaMenu = [];

// Fungsi untuk menampilkan menu berdasarkan data
function tampilkanMenu(menu) {
  let content = '';
  $.each(menu, function (i, item) {
    content += `
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          <img src="img/menu/${item.gambar}" class="card-img-top" alt="${item.nama}">
          <div class="card-body">
            <h5 class="card-title">${item.nama}</h5>
            <p class="card-text">${item.deskripsi || '-'}</p>
            <h5 class="card-title">Rp. ${item.harga.toLocaleString()}</h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>`;
  });
  $('#daftar-menu').html(content);
}

// Load JSON pertama kali
$.getJSON('data/pizza.json', function (data) {
  semuaMenu = data.menu;
  tampilkanMenu(semuaMenu); // tampilkan semua di awal
});

// Event klik navbar
$('.nav-link').on('click', function (e) {
  e.preventDefault();

  $('.nav-link').removeClass('active');
  $(this).addClass('active');

  const kategori = $(this).data('kategori'); // ambil data-kategori
  $('h1').text($(this).text()); // update heading

  // Jika all, tampilkan semua, jika tidak filter
  if (kategori === 'all') {
    tampilkanMenu(semuaMenu);
  } else {
    const filteredMenu = semuaMenu.filter(item => item.kategori === kategori);
    tampilkanMenu(filteredMenu);
  }
});
