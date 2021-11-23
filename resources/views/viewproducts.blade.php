<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Product List</h1>   
            <table border="1">
                <thead style="font-weight: bold;">
                    <td style="width: 150px;">Name</td>
                    <td style="width: 200px;">Description</td>
                    <td>Count</td>
                    <td>Price</td>
                </thead>
                <tbody>
                    @foreach ($allProducts as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td class="inner-table">{{ $product->description }}</td>
                        <td class="inner-table">{{ $product->count }}</td>
                        <td class="inner-table"><?php echo 'Rp' . number_format($product->price); ?></td>
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