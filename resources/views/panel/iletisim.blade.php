<?php echo View::make('panel/includes/head'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$data->baslik}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                        <li class="breadcrumb-item active">{{$data->baslik}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="post" action="{{ route('iletisim_update',$data->id) }}" class="form-horizontal form-label-left input_mask" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}" />
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Genel</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Sayfa Adı</label>
                                <input type="text" id="inputName" name="baslik" value="{{$data->baslik}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Text1</label>
                                <input type="text" id="inputName" name="adres" value="{{$data->adres}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Telefon 1</label>
                                <input type="text" id="inputName" name="tel1" value="{{$data->tel1}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Telefon 2</label>
                                <input type="text" id="inputName" name="tel2" value="{{$data->tel2}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Telefon 3</label>
                                <input type="text" id="inputName" name="tel3" value="{{$data->tel3}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Maps</label>
                                <input type="text" id="inputName" name="fax" value="{{$data->fax}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Email</label>
                                <input type="text" id="inputName" name="mail" value="{{$data->mail}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Facebook</label>
                                <input type="text" id="inputName" name="facebook" value="{{$data->facebook}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Twitter</label>
                                <input type="text" id="inputName" name="twitter" value="{{$data->twitter}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Instagram</label>
                                <input type="text" id="inputName" name="instagram" value="{{$data->instagram}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Google</label>
                                <input type="text" id="inputName" name="google" value="{{$data->google}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">WhatsApp</label>
                                <input type="text" id="inputName" name="whatsapp" value="{{$data->whatsapp}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Metin</label>
                                <textarea name="ar_id" id="editor2" rows="10" cols="80">{{$data->ar_id}}</textarea>
                            </div>
                            <script type="text/javascript">
                                CKEDITOR.replace("editor2");
                            </script>
                            <div class="form-group">
                                <label for="inputDescription">Resim</label>
                                <img class="img-fluid" src="<?= url("uploads"); ?>/{{$data->gosterim_resmi}}" alt="">
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
</div>
<!-- /.content-wrapper -->

<?php echo View::make('panel/includes/footer'); ?>