<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Obat</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add New </button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span> 
            This week
        </button>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Harga Beli</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Qty</th>
            <th scope="col">Aksi</th>
        </tr>    
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Panadol</td>
            <td>Rp. 5000</td>
            <td>Rp. 6000</td>
            <td>50</td>
            <td>Edit | Delete</td>
        </tr>
    </tbody>
</table>

<?= $this->include('obat/form_obat'); ?>


