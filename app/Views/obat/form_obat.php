<form>
  <div class="modal fade" id="formObatModal" tabindex="-1" aria-labelledby="formObatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formObatModalLabel">Form Obat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_obat">
              </div>
            </div>

            <div class="mb-3 row">
              <label  class="col-sm-3 col-form-label">Harga Jual</label>
              <div class="col-sm-9">
                 <input type="number" class="form-control" name="harga_jual">
              </div>
            </div>

            <div class="mb-3 row">
              <label  class="col-sm-3 col-form-label">Harga Beli</label>
              <div class="col-sm-9">
                 <input type="number" class="form-control" name="harga_beli" >
              </div>
            </div>

            <div class="mb-3 row">
              <label  class="col-sm-3 col-form-label">Qty</label>
              <div class="col-sm-9">
                 <input type="number" class="form-control" name="qty">
              </div>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form> 