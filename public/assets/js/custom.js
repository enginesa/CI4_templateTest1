$(document).ready(function () {

    var base_url = $(".base_url").text();


    $(".switchBan").click(function () {
        var isChecked = $(this).is(":checked");
        var kullaniciId=$(this).data("id");

        $.post(base_url+"/Kullanicilar/banDurumuDegistir", {"banDurumu": isChecked,"kullaniciId":kullaniciId}, function (data) {

        });

    })

})