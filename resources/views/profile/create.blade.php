<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Profile</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .form-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 style="margin-bottom: 50px;"> Create New Profile</h1>
        <form action="{{ config('app.url')}}/profile" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto Terkini</label>
                <input type="file" name="foto" id="foto">
            </div>
            <div class="col-md-12 mb-2">
                  <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                      alt="preview image" style="max-height: 250px;">
              </div>
            <div class="form-group">
                <label for="cerita">Cerita Tentang Diri</label><br>
                <textarea name="cerita" id="cerita" rows="5" cols="148"></textarea>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                <label for="perempuan">Perempuan</label><br>
                <input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" required>
                <label for="perempuan">Laki-Laki</label><br>
            </div>
            <div class="form-group">
                <label for="fakultas">Fakultas</label><br>
                <select name="fakultas" id="fakultas">
                    <option selected disabled>Choose One</option>
                    <option value="FT">Fakultas Teknik (FT)</option>
                    <option value="FEB">Fakultas Ekonomi dan Bisnis (FEB)</option>
                    <option value="Fikom">Fakultas Ilmu Komunikasi (Fikom)</option>
                    <option value="Fasilkom">Fakultas Ilmu Komputer (Fasilkom)</option>
                    <option value="FPsi">Fakultas Psikologi (FPsi)</option>
                    <option value="FDSK">Fakultas Desain dan Seni Kreatif (FDSK)</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 
<script type="text/javascript">
      
$(document).ready(function (e) {
 
   
   $('#foto').change(function(){
            
    let reader = new FileReader();
 
    reader.onload = (e) => { 
 
      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
 
    reader.readAsDataURL(this.files[0]); 
   
   });
   
});
 
</script>

</html>