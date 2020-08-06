<div class="container-fluid">
    <form role="form" action="<?= base_url("kullanicilar/yeniKullaniciEkle") ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group">
                <label for="customFile">Kullanıcı Resmi</label>
                <br>
                <input type="file" name="kullaniciFoto">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kullanıcı Adı</label>
                <input type="text" name="kullaniciAdi" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı girin">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ekle</button>
        </div>
    </form>

</div><!-- /.container-fluid -->