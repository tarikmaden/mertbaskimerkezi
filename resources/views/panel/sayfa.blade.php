<?php echo View::make('panel/includes/head'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $data->baslik }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active">{{ $data->baslik }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{ route('update', $data->id) }}" class="form-horizontal form-label-left input_mask"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Genel</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Sayfa Adı</label>
                                <input type="text" id="inputName" name="baslik" value="{{ $data->baslik }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Text1</label>
                                <input type="text" id="inputName" name="text1" value="{{ $data->text1 }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Text2</label>
                                <input type="text" id="inputName" name="text2" value="{{ $data->text2 }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Text3</label>
                                <input type="text" id="inputName" name="text3" value="{{ $data->text3 }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Özet</label>
                                <textarea name="ozet" id="editor1" rows="10" cols="80">{{ $data->ozet }}</textarea>
                            </div>
                            <script type="text/javascript">
                                CKEDITOR.replace("editor1");
                            </script>
                            <div class="form-group">
                                <label for="inputDescription">İçerik</label>
                                <textarea name="icerik" id="editor2" rows="10" cols="80">{{ $data->icerik }}</textarea>
                            </div>
                            <script type="text/javascript">
                                CKEDITOR.replace("editor2");
                            </script>
                            <div class="form-group">
                                <label for="inputProjectLeader">Resim</label>
                                <img class="img-fluid" src="<?= url('uploads') ?>/{{ $data->gosterim_resmi }}"
                                    alt="">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Resim</label>
                                <input type="file" name="dosya" id="inputProjectLeader" class="form-control">
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
        <form method="get" action="{{ route('seo_sayfa_update', $data->id) }}"
            class="form-horizontal form-label-left input_mask">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Seo</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Title</label>
                                <input type="text" id="inputName" name="title" value="{{ $data->title }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <input type="text" id="inputName" name="desc" value="{{ $data->desc }}"
                                    class="form-control">
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
        <form action="{{ route('sayfa_resim_update') }}" enctype="multipart/form-data" method="post">
            @csrf <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Resim</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="{{ $data->id }}" />

                            <div class="row">
                                <?php

                                $resimler = DB::table("pages_uploads")->where("gelen_id", $data->id)->get();
                                if ($resimler) {
                                    foreach ($resimler as $row) { ?>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div style="display: block;height: 150px;overflow: overlay;">
                                            <img style="width:100%" class="img-fluid"
                                                src="<?= url('uploads') ?>/<?= $row->dosya ?>" />
                                        </div>
                                        <a href="<?= url('panel/resmi_sil') ?>/<?= $row->id ?>"
                                            style="display: flex;margin-top:5px" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </a>
                                    </div>
                                </div>

                                <?php }
                                } ?>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div>
                                            <label for="inputDescription">Resim</label>
                                            <input type="file" name="dosya" id="inputName"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
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
        <form action="{{ route('alt_kategori_ekle') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Alt kategori/sayfa oluştur</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $data->id }}" id="inputName"
                            class="form-control">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Sayfa Adı</label>
                                <input type="text" name="baslik" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-secondary">Vazgeç</a>
                                <input type="submit" value="Ekle" class="btn btn-success">
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Alt kategoriler</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>

                                <tr>
                                    <th style="width: 1%">
                                        ID
                                    </th>
                                    <th>
                                        Sayfa Adı
                                    </th>
                                    <th>
                                        Sayfa URL
                                    </th>
                                    <th>
                                        İşlemler
                                    </th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach ($alt_data as $itemPage)
                                <tr>
                                    <td>
                                        {{ $itemPage->id }}
                                    </td>
                                    <td>
                                        {{ $itemPage->baslik }}
                                    </td>
                                    <td>
                                        {{ $itemPage->slug }}
                                    </td>

                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="<?= url(""); ?>/panel/sayfa/<?= $itemPage->id; ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Düzenle
                                        </a>
                                        <a href="<?= url("panel/sayfalari_sil"); ?>/<?= $itemPage->id; ?>" onclick="return confirm('Silme işlemini onayladığınızda tüm alt kategorideki resim ve verilerde silinecektir. Bu kategoriyi silmeyi yine de onaylıyor musunuz?')"
                                            class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php echo View::make('panel/includes/footer'); ?>
