<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->

    <!-- /.content -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Messages</h3>
              </div>
              <div class="row">
                <div class="col-lg-6"> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="pesan" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <!-- <th>#</th> -->
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Nama Instansi</th>
                    <th>Messages</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach( $data['messages'] as $about ) : ?>
                  
                  <tr>
                    <td><?= $about["name"];?></td>
                    <td><?= $about['email'];?></td>
                    <td><?= $about['subject'];?></td>
                    <td><?= $about['namecompany'];?></td>
                    <td><?= $about['Messages']; ?></td>
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