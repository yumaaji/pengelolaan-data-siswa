<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="section">
  <?php if(session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif ?>
  <div class="card">
      <div class="card-header d-flex justify-content-between">
          <h5 class="card-title">
              Data Guru
          </h5>
          <a href="<?= base_url('/dataguru/create') ?>"><button class="btn btn-sm rounded-pill btn-primary">Tambah Data</button></a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table" id="table1">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>NIP</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach($dataGuru as $guru) : ?>
                    <tr>
                        <td><?= $guru['nama'] ?></td>
                        <td><?= $guru['nip'] ?></td>
                        <td>
                          <a href="/dataguru/detail/<?= $guru['id'] ?>"><button class="btn btn-sm rounded-pill btn-primary">Detail</button></a>
                          <a href="/dataguru/edit/<?= $guru['id'] ?>"><button class="btn btn-sm rounded-pill btn-primary">Edit</button></a>
                          <form action="/dataguru/delete/<?= $guru['id'] ?>" method="post" class="d-inline">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                        </form>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
<?= $this->endSection('content') ?>