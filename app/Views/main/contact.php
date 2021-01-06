<!-- alert jika berhasil memasukkan data -->
<?php if (session()->getFlashdata('pesan')) : ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	 <?= (session()->getFlashdata('pesan')); ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<!-- akhir alert -->

<!-- banner contact us -->
<section id="showcase" class="py-5 mb-5">
    <div class="primary-overlay text-white">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <h1 class="display-2 mt-5 pt-5 text-center">
              Contact Us
            </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, tempora!</p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir banner contact us -->

<!-- form contact us -->
  <section class="section mb-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center text-success">
                  <h2 class="section-title">
                   Road To Jannah   
                  </h2>
                  <div class="underline mr-auto ml-auto mb-2"></div>
                  <p>masukkan saran atau keluhan anda disini</p>
              </div>
          </div>
      </div>
      <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                
                <div class="row">
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60912431426!2d107.57311648982727!3d-6.903273916896009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1608726726306!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-4">
                    <form action="/HalamanUtama/insertContact" method="post">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input name="nama" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">alamat</label>
                            <input name="alamat" type="text" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Masukkan Pesan Anda</label>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">masukkan</button>
                            </div>
                    </form>
                    </div>
                </div>
                </div>
              </div>
          </div>
      </div>
  </section>
<!-- akhir form contact us -->
  