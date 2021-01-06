<div class="container mb-3 mt-5">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 ml-4">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Selamat Belajar !
                    </h1>
                    <h4 data-aos="fade-down" data-aos-duration="1700"><?= session()->get('nama') ?> - Road To Jannah</h3>
                        <p> <?= $materi['nama_mapel']; ?> </p>
                        <hr text-align="left" width="600;">
                        <p style="line-height: 3px;"> <?= $materi['deskripsi']; ?></p>
                        <p class="font-weight-bold mt--5">
                            

                        </p>
                 </div>
            </div>
        </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto mt-4 mb-4">
                <video src="/video/<?= $materi['video']; ?>" controls autoplay width="100%" height="100%">
                    Browser anda tidak mendukung pemutaran video
                </video>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="row mt-4">
            <div class="col-md-12 w-150 mb-4">
                <div class="card materi border-0">
                    <div class="card-body p-5">
                        <h1 class="card-title display-4"><?= $materi['nama_mapel']; ?></h1>
                        <hr style="background-color: white;">
                        <h5 class="card-text"><?= $materi['submateri']; ?></h5>
                        <p class="card-text"> <?= $materi['deskripsi']; ?> <br> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card komen w-150 border-0">
                    <div class="card-body p-5" style="font-family: 'Poppins', sans-serif !important;">
                        <h1 style="color: black; font-size:40px !important;">Berikan Komentar dan Pertanyaanmu dibawah ini ya!!!</h1>
                        <br>
                        <div class="fb-comments" data-href="http://localhost:8080/belajar/belajar.php" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>