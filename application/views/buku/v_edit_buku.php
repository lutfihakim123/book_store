<div class="col-2">
</div>
<div class="col-6 ml-5">
    <br>
    <h4>Form Edit Buku</h4>
    <form action="<?= base_url('buku/edit_buku'); ?>" method="post">
        <table class="table">
            <input type="text" name="book_id" value="<?= $records[0]->book_id; ?>" hidden>
            <tr>
                <td>Book Title</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->book_title; ?>" name="book_title"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->author; ?>" name="author"></td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->publisher; ?>" name="publisher"></td>
            </tr>
            <tr>
                <td>Book Category</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->book_category; ?>" name="book_category"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->price; ?>" name="price"></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary float-right" value="Edit data"></td>
            </tr>
        </table>
    </form>
</div>