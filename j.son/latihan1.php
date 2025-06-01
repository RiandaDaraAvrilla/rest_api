<?php 

$mahasiswa = [
    [
        "nama" => "rianda",
        "nim" => "2217020007",
        "email" => "riandadara24@gmail.com"
    ],
    [
        "nama" => "dara",
        "nim" => "2217020017",
        "email" => "riandadara@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>