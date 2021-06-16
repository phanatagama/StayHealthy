    <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center"><?= $data["articles"]["title"]; ?></<h1>
                </h1>
                <h3 class="h4 pb-2 light-300">Pola hidup sehat memberikan dampak positif bagi kehidupan</h3>
                <p class="banner-footer light-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Integer ut ipsum eu libero venenatis euismod.
                </p>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Work Sigle -->
    <section class="container py-5">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line"><?= $data["articles"]["title"]; ?></h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    <?= $data["articles"]["subtitle"]; ?>
                </p>
            </div>
        </div><!-- End Blog Cover -->

        <div class="row justify-content-center pb-4">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img-fluid border rounded" src="../../<?= substr($data["articles"]["images"],30); ?>" alt="Card image cap">
                </div>
            </div>
        </div><!-- End Slider -->

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="pt-5 text-muted light-300">
                    <!-- <?= $data["articles"]["description"]; ?> -->
                </p>
            </div>
        </div><!-- End Paragrph -->
        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <div class="isimarkdown"></div>
                <!-- <p class="pt-5 text-muted light-300">
                    <?= $data["articles"]["description"]; ?>
                </p> -->
            </div>
        </div><!-- End Paragrph -->


<!--         <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="display-6 py-4 ps-4 border border-5 border-top-0 border-end-0 border-bottom-0 border-start">
                    <i>
                          "Vestibulum vestibulum est eu lorem laoreet suscipit. Duis auctor,
                          metus vel sollicitudin hendrerit, elit neque pulvinar magna, non
                          sodales orci turpis blandit quam."
                      </i>
                </p>
                <p class="text-muted light-300">
                    Nam tortor quam, aliquet vel nibh sit amet, faucibus bibendum nisl.
                    Donec vehicula nulla justo, vel sodales massa vestibulum nec. Praesent
                    non orci sed massa fringilla rutrum at et odio. Quisque est orci,
                    elementum sed neque ac, suscipit consectetur leo. Cras fermentum luctus
                    cursus. Ut porta, augue vel tempus congue, augue purus vulputate ex,
                    lacinia lobortis arcu metus sed lectus.
                </p>
            </div>
        </div> --><!-- End Qute -->


        <div class="row justify-content-center">
            <div class="col-lg-8 pt-4 pb-4">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="<?= $data["articles"]["video"]; ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- End Video -->
<!-- 
        <div class="row justify-content-center">
            <div class="col-lg-8 ml-auto mr-auto pt-3 pb-4">
                <p class="text-muted light-300">
                    Ed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
        </div> -->
        <!-- End Work Sigle -->

        <!-- Start Comment -->
<!--         <div class="row justify-content-center">
            <div class="worksingle-comment-heading col-8 m-auto pb-3">
                <h4 class="h5">Comments</h4>
            </div>
        </div> -->

<!--         <div class="row pb-4">
            <div class="worksingle-comment-body col-md-8 m-auto">
                <div class="d-flex">
                    <div>
                        <img class="rounded-circle" src="../../assets/img/team-05.jpg" style="width: 50px;">
                    </div>
                    <div class="comment-body">
                        <div class="comment-header d-flex justify-content-between ms-3">
                            <div class="header text-start">
                                <h5 class="h6">John Doe</h5>
                                <p class="text-muted light-300">10 mins ago</p>
                            </div>
                            <a href="#" class="text-decoration-none text-secondary"><i class='bx bxs-share me-2'></i>Reply</a>
                        </div>
                        <div class="footer">
                            <div class="card-body border ms-3 light-300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --><!-- End Comment -->


<!--         <div class="row pb-4">
            <div class="col-lg-8 m-auto">
                <div class="d-flex">
                    <div>
                        <img class="rounded-circle" src="../../assets/img/team-01.jpg" style="width: 50px;">
                    </div>
                    <div class="comment-body">
                        <div class="comment-header d-flex justify-content-between ms-3">
                            <div class="header text-start">
                                <h5 class="h6">Jane Doe</h5>
                                <p class="text-muted light-300">5 mins ago</p>
                            </div>
                            <a href="#" class="text-decoration-none text-secondary"><i class='bx bxs-share me-2'></i>Reply</a>
                        </div>
                        <div class="footer">
                            <div class="card-body border ms-3 light-300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --><!-- End Comment -->


<!--         <div class="row pb-4">
            <div class="col-lg-8 m-auto">
                <div class="d-flex ml-4">
                    <div>
                        <img class="rounded-circle" src="../../assets/img/team-05.jpg" style="width: 50px;">
                    </div>
                    <div class="comment-body">
                        <div class="comment-header d-flex justify-content-between ms-3">
                            <div class="header text-start">
                                <h5 class="h6">John Doe</h5>
                                <p class="text-muted light-300">15 mins ago</p>
                            </div>
                            <a href="#" class="text-decoration-none text-secondary"><i class='bx bxs-share me-2'></i>Reply</a>
                        </div>
                        <div class="footer">
                            <div class="card-body border ms-3 light-300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --><!-- End Comment -->

<!--         <?php foreach( $data['comments'] as $comment ) : ?>
        <div class="row pb-4">
            <div class="col-lg-8 m-auto">
                <div class="d-flex ml-5">
                    <div>
                        <img class="rounded-circle" src="../../assets/img/team-01.jpg" style="width: 50px;">
                    </div>
                    <div class="comment-body">
                        <div class="comment-header d-flex justify-content-between ms-3">
                            <div class="header text-start">
                                <h5 class="h6"><?= $comment["name"]; ?></h5>
                                <p class="text-muted light-300"><?= $comment["currentdate"]; ?></p>
                            </div>
                            <a href="#" class="text-decoration-none text-secondary"><i class='bx bxs-share me-2'></i>Reply</a>
                        </div>
                        <div class="footer">
                            <div class="card-body border ms-3 light-300">
                                <?= $comment["description"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Comment -->
        <!-- <?php endforeach; ?> -->

<!--         <div class="row pb-4">
            <div class="worksingle-comment-footer col-lg-8 m-auto">
                <h4 class="h5">Leave Comment</h4>
                <form class="col-md-12 m-auto" method="POST" action="<?= BASEURL;?>/blog/add" role="form">
                    <input type="hidden" name="id_article" value="<?= $data["articles"]["id"]; ?>">
                    <div class="form-group">
                        <label class="pb-2 pt-sm-0 pt-4 light-300" for="inputmessage">Your Comment</label>
                        <textarea class="form-control form-control-lg light-300" id="inputmessage" name="description" placeholder="Your Comment" rows="5"></textarea>
                    </div>

                    <div class="row py-4">
                        <div class="col-lg-6">
                            <label class="pb-2 light-300" for="inputname">Name</label>
                            <input type="text" class="form-control form-control-lg light-300" id="inputname" name="name" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <label class="pb-2 pt-sm-0 pt-4 light-300" for="inputemail">Email</label>
                            <input type="email" class="form-control form-control-lg light-300" id="inputemail" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="col-md-12 col-10 text-end">
                            <button type="submit" class="btn btn-secondary text-white px-md-4 px-2 py-md-3 py-1 radius-0 light-300">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --><!-- End Comment Form -->

        <div class="row justify-content-center">
            <div class="col-lg-8 pt-4 pb-4">
                <div id="disqus_thread"></div>
            </div>
        </div>
    </section>
    <!-- End Work Sigle -->
    
    <!-- Start Related Post -->
    <article class="container-fluid bg-light">
        <div class="container">
            <div class="worksingle-related-header row">
                <h1 class="h2 py-5">Related Post</h1>
                <div class="col-md-12 text-left justify-content-center">
                    <div class="row gx-5">


                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="../../assets/img/related-post-01.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>5
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>3
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="../../assets/img/related-post-02.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">App Development</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Tempor incididunt ut labore et dolore.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>11
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>9
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="../../assets/img/related-post-03.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Consectetur adipiscing elit.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>31
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>2
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </article>
    <!-- End Related Post -->


    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        
        var disqus_config = function () {
        this.page.url = "<?= BASEURL . "/blog/" . $data["articles"]["id"]; ?>";  // Replace PAGE_URL with your page's canonical URL variable
        // this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://uaspweb.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <script src="https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js"></script>

    <script type="text/javascript">
        var divEl = document.querySelector('.isimarkdown');
        const stackedit = new Stackedit();
        stackedit.openFile({
          name: 'Filename',
          content: { text: `<?= $data["articles"]["description"]; ?>` }
        }, true /* silent mode */);

        // In silent mode, the `fileChange` event is emitted only once.
        stackedit.on('fileChange', (file) => {
            var data = file.content.html;
            data = data.replace("<img", "<img width=100%; height=auto;")
            divEl.innerHTML = data;
        });
    </script>


