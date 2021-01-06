<div class="container mt-5 mb-5 ">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1 text-center">
                    <h1 class="display-4" data-aos="fade-down" data-aos-duration="1400">Silahkan pilih materi yang akan
                        kamu pelajari !
                    </h1>
                    <h4 data-aos="fade-down" data-aos-duration="1700"> <?= session()->get('nama') ?> - Road To Jannah Students</h4>
                    <p>Aqidah</p>
                    <hr class="m-auto" width="80%">
                    <p data-aos="fade-down" class="font-weight-bold" data-aos-duration="1800">Silahkan pilih materi yang
                        akan kamu akses
                        dibawah
                        ini!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" >
        <div class="row mt-4">
        <?php foreach ($materi as $m): ?>
                <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1200" >
                    <div class="card materi w-150 border-0" >
                        <div class="card-body p-5">
                            <h1 class="card-title"><?=$m['submateri'];?></h1>
                            <p class=" card-text">
                            <?=$m['deskripsi'];?>&nbsp;.&nbsp;.&nbsp;
                            </p>
                            <a href="belajar/<?= $m['id']; ?>" class="btn btn-white">Pelajari
                                Sekarang !</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;  ?>
        </div>
    </div>