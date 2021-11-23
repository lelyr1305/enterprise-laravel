<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Mahasiswa</title>
    <!-- Styles etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>List Mahasiswa</h1>   
            <table border="1">
                <thead style="font-weight: bold;">
                    <td style="width: 150px;">Nama</td>
                    <td style="width: 200px;">Alamat</td>
                    <td>Tanggal Lahir</td>
                </thead>
                <tbody>
                    @foreach ($allMahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td class="inner-table">{{ $mahasiswa->alamat }}</td>
                        <td class="inner-table"><?php echo date('F d, Y', strtotime($mahasiswa->tanggal_lahir)); ?></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<style>
    td {
        text-align: center;
        vertical-align: middle;
    }
</style>