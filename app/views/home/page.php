<div class="container">
    <div class="card" style="width: 18rem;">
      <img src="<?=BASE_URL?>/img/<?= $data['foto'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Profil Anda</h5>
        <p class="card-text">
            Nama : <?= $data['nama']?>
            <br>
            Pekerjaan : <?= $data['pekerjaan']?>
        </p>
        <a href="<?=BASE_URL?>/home/index" class="btn btn-primary">Kembali</a>
      </div>
    </div>
</div>