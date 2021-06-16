    <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Stay Healthy</h1>
                <h3 class="h4 pb-2 regular-400">Menjadi Sehat Tujuan Semua Orang</h3>
                <p class="banner-body pb-2 light-300">
                    Website Kesehatan <a class="text-white" href="<?= BASEURL; ?>" target="_blank">StayHealthy</a>.
                    Platform nomer satu dan pertama di Indonesia yang menyediakan artikel kesehatan, kebugaran jasmani dan rohani, serta tips menerapkan pola hidup sehat tanpa penyakit di masa tua. Luangkan waktu anda untuk membaca disini dan rubah kebiasan buruk anda dengan melakukan aktivitas positif dan bebas bakteri.
                </p>
                <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Learn More</button>
                <a href="<?= BASEURL; ?>/contact#contact"><button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button></a>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Our Work -->
    <section class="container py-5">
        <div class="row justify-content-center my-5">
            <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Kebugaran" href="#">Kebugaran</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Jasmani" href="#">Jasmani</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Kesehatan" href="#">Kesehatan</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".Rohani" href="#">Rohani</a>
            </div>
        </div>

        <div class="row projects gx-lg-5">
            <?php foreach( $data['articles'] as $article ) : ?>
            <a href="<?= BASEURL; ?>/blog/detail/<?= $article["id"]; ?>" class="col-sm-6 col-lg-4 text-decoration-none project <?= $article["topic"]; ?>">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="./<?= substr($article["images"],30); ?>" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark"><?= $article["title"]; ?></h5>
                        <p class="card-text light-300 text-dark">
                            <?= $article["subtitle"]; ?>
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
<!--             <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-02.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Branding</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-03.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Leading Digital Solution</h5>
                        <p class="card-text light-300 text-dark">
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiatdolore eu fugiat nulla pariatur.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project social business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-04.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Smart Applications</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-05.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Stationary</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-06.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">8 Financial Tips</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a> -->
        </div>
        <div class="row">
            <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary text-white">Previous</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-light">1</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary text-white">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary text-white">Next</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Work -->