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
          <h1>Kullanıcı Listesi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kullanıcılar</a></li>
            <li class="breadcrumb-item active">Kullanıcı Listesi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="<?=base_url()?>admin/kullanicilar/ekle"><button type="button" class="btn btn-block btn-outline-success">Kullanıcı Ekle</button></a></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card">
                <div class="card-header">
                  <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                      <li class="page-item"><a class="page-link" href="#">«</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Ad Soyad</th>
                        <th>E-Mail</th>
                        <th>Görev</th>
                        <th>Telefon</th>
                        <th>Durum</th>
                        <th>Güncele</th>
                        <th>Sil</th>

                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    //foreach döngüsü ile kullanıcılar tablosundan glen verileri döndürüyoruz
                    $i =1;
                    foreach ($veriler as $rs) {?>
                      <tr>
                        <td><?=$i?></td>
                        <td><?=$rs->adsoy?></td>
                        <td><?=$rs->email?></td>
                        <td><?=$rs->gorev?></td>
                        <td><?=$rs->telefon?></td>
                        <td><?=$rs->durum?></td>
                        <td><a href="<?=base_url()?>admin/kullanicilar/guncelle/<?=$rs->id?>"><button type="button" class="btn btn-block btn-outline-info">Güncelle</button></a></td>
                        <td><a href="<?=base_url()?>admin/kullanicilar/sil/<?=$rs->id?>"><button type="button" class="btn btn-block btn-outline-danger">Sil</button></a></td>
                      </tr>
                    <?php  $i++; }?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
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
