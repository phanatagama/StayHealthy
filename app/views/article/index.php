<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->

    <!-- /.content -->
        <!-- Main content -->
    <section class="content py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Artikel</h3>
              </div>
              <div class="row">
                <div class="col-lg-6"> 
                  <?php Flasher::flash();?>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="input-group mb-3">
                <a href="<?= BASEURL; ?>/article/create" class="btn btn-primary" role="button" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</a>

                <input type="text" class="form-control" placeholder="Cari Artikel" aria-label="Search" aria-describedby="basic-addon1" id="keyword">
              </div>
                 <table id="article" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <!-- <th>#</th> -->
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Topic</th>
                    <th>Video</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach( $data['articles'] as $article ) : ?>

                  <tr>
                    <td><?= $article["title"];?></td>
                    <td><?= $article['name'];?></td>
                    <td><?= $article['topic'];?></td>
                    <td><?= $article['video'];?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/article/update/<?=$article['id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
                      <a href="<?= BASEURL; ?>/article/hapus/<?=$article['id'];?>" class="btn btn-danger" onclick="return confirm('yakin');" role="button" title="Hapus Data"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>

                  <?php endforeach; ?>
                  </tbody>
                  
                </table> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->


