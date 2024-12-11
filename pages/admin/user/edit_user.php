<!-- Modal -->
<div class="modal fade" id="edituser" tabindex="-1" aria-labelledby="edituser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../../controller/admin/user_control.php?action=edit" method="post">
                    <div class="form_group">
                        <label for="exampleInputtext1" class="form_label">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="textHelp" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1" class="form_label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="textHelp" name="username" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1" class="form_label">Password</label>
                        <input type="password" class="form-control" id="" aria-describedby="textHelp" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="">Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Guru</option>
                            <option value="3">User</option>
                        </select>
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

    