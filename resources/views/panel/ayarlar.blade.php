<?php echo View::make('panel/includes/head'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ayarlar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active">Ayarlar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="get" action="{{route('kayit_guncelle',$data->id)}}" class="form-horizontal form-label-left input_mask">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ayarlar</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Email</label>
                                <input type="text" id="inputName" name="email" value="{{$data->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Şifre</label>
                                <input type="text" id="inputName" name="password" value="**********" class="form-control">
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-secondary">Vazgeç</a>
                                <input type="submit" value="Güncelle" class="btn btn-success">
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
        <form method="post" action="{{ route('logo',$data->id) }}" class="form-horizontal form-label-left input_mask" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Logo & Favicon</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <img style="width: 150px;" class="img-fluid" src="<?= url("uploads"); ?>/{{$data->logo}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Logo</label>
                                <input type="file" id="inputName" name="logo" class="form-control">
                            </div>
                            <div class="form-group">
                                <img style="width: 150px;" class="img-fluid" src="<?= url("uploads"); ?>/{{$data->logo2}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Logo 2</label>
                                <input type="file" id="inputName" name="logo2" class="form-control">
                            </div>
                            <div class="form-group">
                                <img style="width: 150px;" class="img-fluid" src="<?= url("uploads"); ?>/{{$data->favicon}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Favicon</label>
                                <input type="file" id="inputName" name="favicon" class="form-control">
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-secondary">Vazgeç</a>
                                <input type="submit" value="Güncelle" class="btn btn-success">
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

</div>
<!-- /.content-wrapper -->

<?php echo View::make('panel/includes/footer'); ?>