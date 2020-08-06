    <div class="container-fluid">
        <form role="form" action="<?=base_url("kullanicilar/kullaniciGuncelle")?>/<?=$kullanici['kullanici_id']?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" name="kullaniciAdi" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı girin" value="<?=$kullanici["kullanici_adi"]?>">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>

    </div><!-- /.container-fluid -->