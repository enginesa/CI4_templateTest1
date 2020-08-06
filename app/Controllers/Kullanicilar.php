<?php namespace App\Controllers;

class Kullanicilar extends BaseController
{
    protected $kullanicilarModel;

    public function __construct()
    {
        $this->kullanicilarModel = model('KullanicilarModel');
    }


    public function index()
    {
        $viewData = array("kullanicilar" => $this->kullanicilarModel->getAll());
        return view('kullanicilar/liste/liste', $viewData);
    }

    public function yeniKullanici()
    {
        return view('kullanicilar/yeni_kullanici/yeni_kullanici');
    }

    public function yeniKullaniciEkle()
    {


        $fotoName = "";
        //gerekli kontroller sağlanıyor kullaniciFoto inputtan gelen name
        $validated = $this->validate(['kullaniciFoto' => ['uploaded[kullaniciFoto]', 'mime_in[kullaniciFoto,image/jpg,image/jpeg,image/gif,image/png,image]', 'max_size[kullaniciFoto,4096]']]);

        if ($validated) {
            
            $foto = $this->request->getFile('kullaniciFoto');

            $fotoName = $foto->getRandomName();
//            $fotoName = $foto->getName();

            //WRITEPATH constant var_dump yazdıdırrsan yolu gösterir
            //2. paramtetre dosyanın ismini dğewiştirir
            $foto->move(ROOTPATH . 'public/assets/uploads/kullanicilar', $fotoName);

        }
        else {
            echo $this->validator->getError();
        }


        $kullaniciAdi = xss_clean($this->request->getPost("kullaniciAdi"));
        $this->kullanicilarModel->add(array("kullanici_adi" => $kullaniciAdi, "kullanici_avatar" => $fotoName));

        return redirect()->to(base_url("kullanicilar/yeni-kullanici"));

    }

    public function banDurumuDegistir()
    {
        $kullaniciId = $this->request->getPost("kullaniciId");
        $banDurumu = $this->request->getPost("banDurumu");

        $banDurumu = $banDurumu == "true" ? 1 : "0";

        echo $this->kullanicilarModel->updateRow(array("kullanici_id" => $kullaniciId), array("ban" => $banDurumu));

    }

    public function kullaniciDuzenle($kullaniciId)
    {
        $viewData = array("kullanici" => $this->kullanicilarModel->getOne("", array("kullanici_id" => $kullaniciId)));
        return view('kullanicilar/duzenle/duzenle', $viewData);
    }

    public function kullaniciGuncelle($kullaniciId)
    {
        $kullaniciAdi = $this->request->getPost("kullaniciAdi");
        echo $this->kullanicilarModel->updateRow(array("kullanici_id" => $kullaniciId), array("kullanici_adi" => $kullaniciAdi));
        return redirect()->to(base_url());


    }


}
