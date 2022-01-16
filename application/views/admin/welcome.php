<br>
<h4 class="ml-5" style="color: black;">Selamat Datang <b><?= $_SESSION['username']; ?></b> </h4>
<br>
<div class="row">
    <div class="col-3 ml-5">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title" style="color: black;"> Lihat Daftar Buku </h5>
                <a href="<?= base_url('buku'); ?>" class="btn btn-success">Daftar Buku <i class="fas fa-arrow-circle-right"></i> </a>
            </div>
        </div>
    </div>
    <div class="col-3 ">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title" style="color: black;"> Lihat Daftar User </h5>
                <a href="<?= base_url('user'); ?>" class="btn btn-warning">Daftar User <i class="fas fa-arrow-circle-right"></i> </a>
            </div>
        </div>
    </div>
    <div class="col-3 ">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title" style="color: black;">Lihat Daftar Transaksi</h5>
                <a href="<?= base_url('transaction'); ?>" class="btn btn-info">Daftar Transaksi <i class="fas fa-arrow-circle-right"></i> </a>
            </div>
        </div>
    </div>
</div>