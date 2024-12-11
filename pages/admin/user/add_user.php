<!-- Modal -->
<div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../../controller/admin/user_control.php?action=add" method="post">
                    <div class="form_group">
                        <label for="exampleInputtext1" class="form_label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1" class="form_label">Username</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1" class="form_label">Password</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1" class="form_label">Status</label>
                        <select name="role" class="form-select" aria-label="Default select example" id="status">
                            <option selected>Pilih Status</option>
                            <option value="1">Admin</option>
                            <option value="2">Guru</option>
                            <option value="3">User</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    