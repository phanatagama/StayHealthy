    <!-- Start Contact -->
    <section class="container py-5">

        <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Silahkan Edit Artikel Anda Segera</h1>
        <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
            Editlah artikel kesehata  anda, dengan begitu anda dapat memperbaiki atau memperbarui artikel
        </p>
        <div class="row">
            <div class="col-lg-6"> 
                <?php Flasher::flash(); ?>
            </div>
        </div>
            <!-- Start Contact Form -->
            <div class="col-lg-8 ">
                <form class="contact-form row" method="post" action="<?= BASEURL; ?>/article/ubah" role="form" enctype="multipart/form-data">

                    <div class="col-lg-12 mb-4">
                        <div class="form-floating">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="fullname" placeholder="Full Name" value="<?= $data['fullname']; ?>" required>
                            <label for="floatingname light-300">Full Name</label>
                        </div>
                    </div>
                    <!-- End Input Name -->

                <!--     <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="lastname" placeholder="Last Name">
                            <label for="floatingemail light-300">Last Name</label>
                        </div>
                    </div> -->
                    <!-- End Input Email -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingphone" name="title" placeholder="Judul" value="<?= $data['title']; ?>" required>
                            <label for="floatingphone light-300">Judul</label>
                        </div>
                    </div><!-- End Input Phone -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="subtitle" placeholder="Sub-Judul" value="<?= $data['subtitle']; ?>" required>
                            <label for="floatingcompany light-300">Sub-Judul</label>
                        </div>
                    </div><!-- End Input Sub-Judul -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example Floating label select" id="floatingSelect" name="topic">
                          <option value="0" selected disabled>Open this select menu</option>
                          <option value="1" <?= ($data['topic']=="Kesehatan") ? 'selected="selected"' : ''; ?>>Kesehatan</option>
                          <option value="2" <?= ($data['topic']=="Kebugaran") ? 'selected="selected"' : ''; ?>>Kebugaran</option>
                          <option value="3" <?= ($data['topic']=="Jasmani") ? 'selected="selected"' : ''; ?>>Jasmani</option>
                          <option value="4" <?= ($data['topic']=="Rohani") ? 'selected="selected"' : ''; ?>>Rohani</option>
                        </select>
                        <label for="floatingSelect">Works with selects</label>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="video" placeholder="Video(optional)" value="<?= $data['video']; ?>">
                            <label for="floatingcompany light-300">Youtube</label>
                        </div>
                    </div>
                    <div class="col-22">
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control form-control-lg light-300" id="floatingsubject" name="images" placeholder="Gambar">
                            <input type="hidden" name="c_image" value="<?= $data['images']; ?>">
                            <label for="floatingsubject light-300">Gambar</label>
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control light-300" rows="8" placeholder="Deskripsi" id="floatingtextarea" name="description" onKeyPress="markdown();" ><?= $data['description']; ?></textarea>
                            <label for="floatingtextarea light-300">Deskripsi</label>
                        </div>
                    </div><!-- End Textarea Deskripsi -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Deskripsi</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->
    <script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>
    <script type="text/javascript">
      const el = document.querySelector('textarea');
      const stackedit = new Stackedit();
      function markdown(){
      // Open the iframe
      stackedit.openFile({
        name: 'Filename', // with an optional filename
        content: {
          text: el.value // and the Markdown content.
        }
      });

      // Listen to StackEdit events and apply the changes to the textarea.
      stackedit.on('fileChange', (file) => {
        el.value = file.content.text;
      });
        
      }


    </script>