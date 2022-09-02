<?php
    $this->load->view('admin/_header');
    $this->load->view('admin/_sidebar');
 ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kullanıcı Güncelle</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=base_url()?>admin/sayfalama">Kulanıcılar</a></li>
            <li class="breadcrumb-item active">Kullanıcı Güncelle</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Kullanıcı Güncelleme Formu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?=base_url()?>admin/kullanicilar/kullanici_guncelle/<?=$veri[0]->id?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ad Soyad</label>



                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="adsoy" name="adsoy" value="<?=$veri[0]->adsoy?>" placeholder="Ad Soyad">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telefon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telefon" name="telefon" value="<?=$veri[0]->telefon?>"  placeholder="Telefon">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="<?=$veri[0]->email?>"  placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Durum</label>
                    <div class="col-sm-10">
                      <select name="durum" class="form-control">
                              <option value="<?=$veri[0]->durum?>" ><?=$veri[0]->durum?></option>
                              <option value="Aktif">Aktif</option>
                              <option value="Pasif">Pasif</option>

                            </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Görev</label>
                    <div class="col-sm-10">
                      <select name="gorev" class="form-control">
                              <option value="<?=$veri[0]->gorev?>" ><?=$veri[0]->gorev?></option>
                              <option value="Memur">Memur</option>
                              <option value="İşçi">İşçi</option>
                              <option value="Müdür">Müdür</option>
                              <option value="Müdür Yardımcısı">Müdür Yardımcısı</option>
                              <option value="Hizmetli">Hizmetli</option>
                            </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Son Güncellenme Tarihi</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tarih" name="tarih" disabled value="<?=$veri[0]->guncellenme_tarihi?>"  placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kayıt Tarihi</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tarih" name="tarih" disabled value="<?=$veri[0]->tarih?>"  placeholder="Email">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Kaydet</button>
                  <a href="<?=base_url().'admin/sayfalama'?>"<button type="submit" class="btn btn-default float-right">İptal</button></a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
    $this->load->view('admin/_footer');
 ?>
