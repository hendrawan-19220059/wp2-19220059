<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
        <div class="container my-5">
        <h1 class="fw-bold text-center"> Form Input Data Mata Kuliah</h1>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post" class="row g-3 my-3">
                <div class="col-md-6">
                    <label for="kode_mtk" class="form-label">Kode MTK</label>
                    <input type="text" class="form-control" id="kode_mtk" name="kode_mtk">
                </div>
                <div class="col-md-6">
                    <label for="nama_mtk" class="form-label">Nama MTK</label>
                    <input type="text" class="form-control" id="nama_mtk" name='nama_mtk'>
                </div>
                
                <div class="col-md-4">
                    <label for="sks" class="form-label">SKS :</label>
                    <select id="sks" class="form-select" name="sks">
                    <option selected>Pilih SKS...</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    
                    </select>
                </div>

                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
</body>
</html>