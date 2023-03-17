<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<table id="ProductList" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Purchase price</th>
            <th>Selling price</th>
            <th>Unit</th>
            <th>Category</th>
            <th>Image</th>
            <th>Created date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product->nama ?></td>
                <td>IDR <?= number_format($product->harga_beli)  ?></td>
                <td>IDR <?= number_format($product->harga_jual)  ?></td>
                <td><?= $product->satuan ?></td>
                <td><?= $product->kategori ?></td>
                <td> <img src="<?= base_url('upload/products/') . $product->image ?>" alt="<?= $product->image ?>" class="img-thumbnail w-50" /></td>
                <td><?= $product->created_at ?></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Selling price</th>
            <th>Purchase price</th>
            <th>Unit</th>
            <th>Category</th>
            <th>Image</th>
            <th>Created date</th>
        </tr>
    </tfoot>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#ProductList').DataTable();
    });
</script>