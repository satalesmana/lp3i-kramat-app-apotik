<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Obat</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#formObatModal"> Add New </button>
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
        <?php foreach ($obat as $key => $value) { ?>
        <tr>
            <td><?php echo $key+1; ?> </td>
            <td><?php echo $value['nama_obat']; ?></td>
            <td><?php echo $value['harga_beli']; ?></td>
            <td><?php echo $value['harga_jual']; ?></td>
            <td><?php echo $value['qty']; ?></td>
            <td>
                <button onclick="editData('<?php echo $value['id']; ?>')" class="btn btn-sm btn-outline-info">Edit</button>

                <button onclick="deleteData('<?php echo $value['id']; ?>')" class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?= $this->include('obat/form_obat'); ?>

<script type="text/javascript">

    function deleteData(id) {
        fetch('<?php echo site_url('admin/obat/'); ?>'+id, {
           method: 'DELETE', 
           headers: {
             'Content-Type': 'application/json'
           },
           body: null
        }).then( res =>{
            window.location.reload(false);
        });
    }

    
    function editData(id){
        const formModal = new bootstrap.Modal(
            document.getElementById('formObatModal'), {
                keyboard: false
            });

        fetch('<?php echo site_url('admin/obat'); ?>/'+id, {
           method: 'GET', 
           headers: {
             'Content-Type': 'application/json'
           },
           body: null
        }).then(response => response.json())
          .then(response => {
            document.getElementsByName('nama_obat')[0].value = response.nama_obat;
            document.getElementsByName('harga_jual')[0].value = response.harga_jual;
            document.getElementsByName('harga_beli')[0].value = response.harga_beli;
            document.getElementsByName('qty')[0].value = response.qty;

            formModal.toggle();
        });
    }
</script>


