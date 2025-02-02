<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Penjualan LARAVEL 8</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Penjualan</h1>
    <div class="container">
    
        <div class="row justify-content-center">
       <div class="col-8">
        <div class="card">
          <div class="card-body">
          <form action="/insertdata" method="POST" enctype="multipart/form-data">
            @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp">  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kategori</label>
    <select class="form-select"  name="kategori" aria-label="Default select example">
  <option selected>Pilih Kategori</option>
  <option value="laptop">laptop</option>
  <option value="printer">printer</option>
  <option value="desktop">desktop</option>
  <option value="tablet">tablet</option>
</select> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <input type="text"  name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock</label>
    <input type="number"  name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masukan Gambar</label>
    <input type="file"  name="foto" class="form-control" >  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
       </div>

        </div>

    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>