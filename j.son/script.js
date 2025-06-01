// mengubah objek ke JSON
// let mahasiswa = {
//     nama : "rianda",
//     nim : "2217020007",
//     email : "riandadara24@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));



// mengubah dari Json ke objek dengan menggunakan Json parse
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();


$.getJSON('coba.json', function (data) {
    console.log(data);
});