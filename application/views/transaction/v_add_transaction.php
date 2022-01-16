<div class="col-2">
</div>
<div class="col-6 ml-5">
    <br>
    <h4>Form Add Transaction</h4>
    <form action="<?= base_url('transaction/add_transaction'); ?>" method="post">
        <table class="table">
            <tr>
                <td>Date</td>
                <td><input type="date" class="form form-control" name="date"></td>
            </tr>
            <tr>
                <td>Book id</td>
                <td>
                    <select name="book_id" class="form-control">
                        <?php
                        foreach ($data_buku as $db) {
                        ?>
                            <option value="<?= $db->book_id; ?>"><?= $db->book_id; ?> -- <?= $db->book_title; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" class="form form-control" name="quantity"></td>
            </tr>
            <tr>
                <td>price</td>
                <td> <select name="price" class="form-control" name="price">
                        <?php
                        foreach ($data_buku as $db) {
                        ?>
                            <option value="<?= $db->price; ?>"> <?= $db->price; ?> -- <?= $db->book_title; ?> </option>
                        <?php
                        }
                        ?>
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