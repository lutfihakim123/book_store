<br>

<br>
<div class="col-12">
    <div class="col-2">

    </div>
    <div class="col-10">
        <form action="<?= base_url('v_user/cari_buku_user'); ?>" method="post" class="form-inline float-left">
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
                </tr>

            <?php
            }
            ?>
        </table>
    </div>
</div>