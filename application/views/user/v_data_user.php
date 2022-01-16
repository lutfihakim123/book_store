<br>

<br>
<div class="col-12">
    <div class="col-2">

    </div>
    <div class="col-10">

        <form action="<?= base_url('user/cari_user'); ?>" method="post" class="form-inline float-left">
            <h4>Data User</h4>
            <input type="text" name="keyword" class="form form-control ml-2" autofocus autocomplete="off">
            <input type="submit" name="submit" class="btn btn-primary ml-2" value="Cari Data" autocomplete="off">
        </form>
        <br> <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($records as $r) {
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $r->username; ?></td>
                    <td><?= $r->user_type; ?></td>
                    <td><a href="<?php echo base_url('user/v_edit_user/' . $r->user_id); ?>" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('user/delete_user/' . $r->user_id); ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
        <a href="<?= base_url('user/v_add_user'); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
</div>