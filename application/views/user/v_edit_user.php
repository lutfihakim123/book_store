<div class="col-2">
</div>
<div class="col-5 ml-5">
    <br>
    <h4>Form Edit User</h4>
    <form action="<?= base_url('user/edit_user'); ?>" method="post">
        <table class="table">
            <input type="text" hidden name="user_id" value="<?= $records[0]->user_id; ?>">
            <tr>
                <td>Username</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->username; ?>" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form form-control" value="<?= $records[0]->password; ?>" name="password"></td>
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
                <td><input type="submit" class="btn btn-primary float-right" value="Edit data"></td>
            </tr>
        </table>
    </form>
</div>