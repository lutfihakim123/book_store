<div class="col-2">
</div>
<div class="col-6 ml-5">
    <br>
    <h4>Form Add Buku</h4>
    <form action="<?= base_url('buku/add_buku'); ?>" method="post">
        <table class="table">
            <tr>
                <td>Book Title</td>
                <td><input type="text" class="form form-control" name="book_title"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" class="form form-control" name="author"></td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td><input type="text" class="form form-control" name="publisher"></td>
            </tr>
            <tr>
                <td>Book Category</td>
                <td><input type="text" class="form form-control" name="book_category"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" class="form form-control" name="price"></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary float-right" value="tambah data"></td>
            </tr>
        </table>
    </form>
</div>