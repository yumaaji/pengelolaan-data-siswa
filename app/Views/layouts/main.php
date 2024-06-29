<!DOCTYPE html>
<html lang="en">
  <?= $this->include('layouts/header') ?>
  <body>
    <script src="<?= base_url('dist/assets/static/js/initTheme.js') ?>"></script>
    <div id="app">
      <div id="sidebar">
        <?= $this->include('layouts/sidebar') ?>
      </div>
      <div id="main">
        <?= $this->include('layouts/navbar') ?>
        <div class="page-content">
          <?= $this->renderSection('content') ?>
        </div>
        <?= $this->include('layouts/footer') ?>
      </div>
    </div>
    <?= $this->include('layouts/bottom') ?>
    <h1>test</h1>
  </body>
</html>
