$(document).ready(function () {
    var base_url = $(".base_url").text();


    let textMessage = {
        "popupBaslikDikkat": "Dikkat!",
        "popupBaslikBasarili": "Başarılı!",
        "silAciklama": "Silmek istediğinize emin misiniz?",
        "silAlertAciklama": "Silme işlemi başarılı."
    }


    $(".switchBan").click(function () {
        var isChecked = $(this).is(":checked");
        var kullaniciId = $(this).data("id");
        $.post(base_url + "/Kullanicilar/banDurumuDegistir", {"banDurumu": isChecked, "kullaniciId": kullaniciId},);
    })

    $(".kullaniciSil").click(function () {
        var kullaniciId = $(this).data("id");

        var $this = $(this);

        $.confirm({
            title: textMessage["popupBaslikDikkat"],
            content: textMessage["silAciklama"],
            buttons: {
                confirm: function () {
                    $.post(base_url + "/Kullanicilar/kullaniciSil", {"kullaniciId": kullaniciId}, (response) => {
                        if (response) {
                            $this.parent().parent().remove();
                            $.alert({
                                title: textMessage["popupBaslikBasarili"],
                                content: textMessage["silAlertAciklama"],
                            });
                        }
                    });
                },
                cancel: function () {

                }

            }
        });


    })


})