<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Create Product | Product Store</title>
    <!-- styling etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="{{ config('app.url')}}/products">
                {{ csrf_field() }}
                <h1> Create New Product</h1>

                <table>
                    <tr class="form-input">
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>

                    <tr class="form-input">
                        <td>Description</td>
                        <td>
                            <input type="text" name="description">
                        </td>
                    </tr>

                    <tr class="form-input">
                        <td>Count</td>
                        <td>
                            <input type="number" name="count">
                        </td>
                    </tr>

                    <tr class="form-input">
                        <td>Price</td>
                        <td>
                            <input type="number" name="price">
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