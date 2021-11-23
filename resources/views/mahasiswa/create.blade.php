<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Create New Mahasiswa</title>
    <!-- styling etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="{{ config('app.url')}}/mahasiswa">
                {{ csrf_field() }}
                <h1> Create New Mahasiswa</h1>

                <table>
                    <tr class="form-input">
                        <td>Name</td>
                        <td><input type="text" name="nama"></td>
                    </tr>

                    <tr class="form-input">
                        <td>Alamat</td>
                        <td>
                            <input type="text" name="alamat">
                        </td>
                    </tr>

                    <tr class="form-input">
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" name="tanggal_lahir">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Submit" style="background-color: green; color: white;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>