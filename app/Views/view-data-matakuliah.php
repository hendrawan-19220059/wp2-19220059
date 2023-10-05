<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .container{
            width: 450px;
        }

    </style>
</head>
<body>
    <div class="container">

        <h1 class="fw-bold text-center my-3">Data Mata Kuliah</h1>
        
        <ol class="list-group list-group-numbered my-3">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">Kode MTK</div>
                <?= $kode_mtk; ?>
            </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">Nama MTK</div>
                <?= $nama_mtk; ?>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">SKS</div>
                <?= $sks; ?>
                </div>
            </li>
        </ol>
    </div>
</body>
</html>