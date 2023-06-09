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
            <th>Option</th>
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
                <td>
                    <a href="<?php echo base_url('product/update/') ?><?= $product->id_barang ?>">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </button>
                    </a>
                    <a onclick="if(confirm('Are you sure want to delete this data ??')){ location.href='<?= base_url() ?>product/delete/<?= $product->id_barang; ?>' }">
                        <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </button>
                    </a>
                </td>
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
            <th>Option</th>
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