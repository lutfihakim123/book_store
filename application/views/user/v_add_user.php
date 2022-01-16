<div class="col-2">
</div>
<div class="col-5 ml-5">
    <br>
    <h4>Form Add User</h4>
    <form action="<?= base_url('user/add_user'); ?>" method="post">
        <table class="table">
            <tr>
                <td>Username</td>
                <td><input type="text" class="form form-control" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form form-control" name="password"></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td><select name="user_type" class="form-control">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary float-right" value="tambah data"></td>
            </tr>
        </table>
    </form>
</div>