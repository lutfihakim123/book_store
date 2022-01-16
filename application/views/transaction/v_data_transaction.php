<br>

<br>
<div class="col-12">
    <div class="col-2">

    </div>
    <div class="col-10">

        <form action="<?= base_url('transaction/cari_transaction'); ?>" method="post" class="form-inline float-left">
            <h4>Data Transaksi</h4>
            <input type="text" name="keyword" class="form form-control ml-2" autofocus autocomplete="off">
            <input type="submit" name="submit" class="btn btn-primary ml-2" value="Cari Data" autocomplete="off">
        </form>
        <br> <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Book Title (Book Id)</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($records as $r) {
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $r->date; ?></td>
                    <td><?= $r->book_title . "<b> (" . $r->book_id . ")</b> ";   ?></td>
                    <td><?= $r->quantity; ?></td>
                    <td><?= "Rp " . $r->price; ?></td>
                    <td><?= "Rp " . $r->Total_price; ?></td>
                    <td><a href="<?php echo base_url('transaction/v_edit_transaction/' . $r->transaction_id); ?>" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('transaction/delete_transaction/' . $r->transaction_id); ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
        <a href="<?= base_url('transaction/v_add_transaction'); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
</div>