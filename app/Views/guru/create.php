<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<section class="section">
  <div class="card">
    <form action="/dataguru/store" method="POST" class="p-3">
      <?php csrf_field() ?>
      <div class="form-group">
          <label for="basicInput">Nama</label>
          <input type="text" class="form-control" name="nama">
      </div>
      <div class="form-group">
          <label for="basicInput">Nomer Induk Pegawai</label>
          <input type="number" class="form-control" name="nip">
      </div>
      <div class="form-group mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat Rumah</label>
          <textarea class="form-control" rows="3" name="alamat"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
  </div>
</section>
<?= $this->endSection('content') ?>