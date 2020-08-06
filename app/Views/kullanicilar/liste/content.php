<div class="card-body p-0">
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Kullanıcı Adı</th>
            <th>Engelle</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($kullanicilar as $kullanici) {
            $kullanici_id = $kullanici["kullanici_id"];
            $ban = $kullanici["ban"];
            ?>
            <tr>
                <td><img src="<?= base_url("public/assets/uploads/kullanicilar/".$kullanici["kullanici_avatar"]) ?>" style="width: 50px;height: 50px;object-fit: contain"></td>
                <td><?= htmlspecialchars($kullanici["kullanici_adi"]) ?></td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input switchBan" data-id="<?=$kullanici_id?>" id="customSwitch<?= $kullanici_id ?>"  <?=$ban=="1"?"checked":""?>>
                        <label class="custom-control-label" for="customSwitch<?= $kullanici_id ?>"></label>
                    </div>
                </td>
                <td><a href="<?=base_url("kullanicilar/kullanici-duzenle/$kullanici_id")?>">Düzenle</a></td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>
