<!-- Modal -->
<div class="modal fade" id="editpenyakit" tabindex="-1" aria-labelledby="editjenis" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Penyakit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../../controller/admin/jenis_penyakit_control.php?action=edit" method="post">
                    <div class="form_group">
                        <label for="exampleInputtext1" class="form_label">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp" name="nama" placeholder="Nama" required>
                    </div>
            </div>
            <div class="modal-footer">
                    <input type="hidden" id="id" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    