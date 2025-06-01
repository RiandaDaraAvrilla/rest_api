function SearchMovie() {
    $('#movie-list').html(''); // Bersihkan hasil sebelumnya

    $.ajax({
        url: 'http://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '66805201',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True") {
                let movies = result.Search;

                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
            <div class="col-md-4">
              <div class="card mb-3">
                <img src="${data.Poster}" class="card-img-top" alt="${data.Title}">
                <div class="card-body">
                  <h5 class="card-title">${data.Title}</h5>
                  <p class="card-text">${data.Year}</p>
                  <a href="#" class="btn btn-primary see-detail" data-toggle="modal" data-target="#exampleModal" data-id="${data.imdbID}">See Detail</a>
                </div>
              </div>
            </div>
          `);
                });

            } else {
                $('#movie-list').html(`
          <div class="col">
            <h1 class="text-center">${result.Error}</h1>
          </div>
        `);
            }

            // Kosongkan input setelah pencarian
            $('#search-input').val('');
        }
    });
}

// Klik tombol Search
$('#search-button').on('click', function () {
    SearchMovie();
});

// Tekan Enter di input
$('#search-input').on('keyup', function (e) {
    if (e.key === 'Enter') {
        SearchMovie();
    }
});

// Klik tombol detail (event delegation)
$(document).on('click', '.see-detail', function () {
    let imdbID = $(this).data('id');

    $.ajax({
        url: 'http://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '66805201',
            'i': imdbID
        },
        success: function (movie) {
            if (movie.Response === "True") {
                $('.modal-title').text(movie.Title);
                $('.modal-body').html(`
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <img src="${movie.Poster}" class="img-fluid">
              </div>
              <div class="col-md-8">
                <ul class="list-group">
                  <li class="list-group-item"><strong>Released:</strong> ${movie.Released}</li>
                  <li class="list-group-item"><strong>Genre:</strong> ${movie.Genre}</li>
                  <li class="list-group-item"><strong>Director:</strong> ${movie.Director}</li>
                  <li class="list-group-item"><strong>Actors:</strong> ${movie.Actors}</li>
                  <li class="list-group-item"><strong>Plot:</strong> ${movie.Plot}</li>
                </ul>
              </div>
            </div>
          </div>
        `);
            }
        }
    });
});
