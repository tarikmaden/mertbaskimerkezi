<?php echo View::make('panel/includes/head'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Menu Oluştur</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
            <li class="breadcrumb-item active">Menu Oluştur</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="{{ route('sayfa_ekle') }}" method="post" class="form-horizontal form-label-left input_mask" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Sayfa Adı</label>
                <input type="text" id="inputName" name="baslik" required class="form-control">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <a href="#" class="btn btn-secondary">Vazgeç</a>
                <input type="submit" value="Oluştur" class="btn btn-success">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 15%">
                #
              </th>
              <th>
                Sayfa Adı
              </th>
              <th>
                Sil
              </th>
            </tr>
          </thead>
          <tbody>
            <?php

            $say = 1;
            foreach ($data as $sayfalar) {
              if ($sayfalar->ust_id == 0) {
            ?>
                <tr>
                  <th scope="row">
                    <?= $say; ?>
                  </th>

                  <td>
                    <?= $sayfalar->baslik; ?>
                  </td>
                  <td>
                    <a class="btn btn-danger btn-sm" href="<?= url("panel/sayfalari_sil"); ?>/<?= $sayfalar->id; ?>" onclick="return confirm('Silme işlemini onayladığınızda tüm alt kategorideki resim ve verilerde silinecektir. Bu kategoriyi silmeyi yine de onaylıyor musunuz?')">
                      <i class="fas fa-trash">
                      </i>
                      Sil
                    </a>
                  </td>
                </tr>

            <?php
                $say++;
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php echo View::make('panel/includes/footer'); ?>