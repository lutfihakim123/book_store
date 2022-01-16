<br>

<br>
<div class="col-12">
    <div class="col-2">

    </div>
    <div class="col-11">

        <form action="<?= base_url('buku/cari_buku'); ?>" method="post" class="form-inline float-left">
            <h4>Data Buku</h4>
            <input type="text" name="keyword" class="form form-control ml-2" autofocus autocomplete="off">
            <input type="submit" name="submit" class="btn btn-primary ml-2" value="Cari Data" autocomplete="off">
        </form>
        <br> <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Book Title</th>
                <th>Autor</th>
                <th>Publisher</th>
                <th>Book Category</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($records as $r) {
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $r->book_title; ?></td>
                    <td><?= $r->author; ?></td>
                    <td><?= $r->publisher; ?></td>
                    <td><?= $r->book_category; ?></td>
                    <td><?= "Rp " . $r->price; ?></td>
                    <td><a href="<?php echo base_url('buku/v_edit_buku/' . $r->book_id); ?>" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('buku/delete_buku/' . $r->book_id); ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
        <a href="<?= base_url('buku/v_add_buku'); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
</div>