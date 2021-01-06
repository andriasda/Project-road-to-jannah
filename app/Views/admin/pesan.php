<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-pencil-alt"></i> Pesan Dari User</h1>
        </div>
      </div>
    </div>
  </header>

<!-- alerts data -->
<?php if (session()->getFlashdata('pesan')) : ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	 <?= (session()->getFlashdata('pesan')); ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

  <!-- SEARCH -->
  <section id="search" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
        <form action="/Admin/pesan/" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Posts..." name="keyword">
            <div class="input-group-append">
              <button class="btn btn-primary">Search</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Pesan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1; ?>
                <?php foreach($contact as $c) :?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $c['nama']; ?></td>
                  <td><?= $c['email']; ?></td>
                  <td><?= $c['alamat']; ?></td>
                  <td><?= $c['pesan']; ?></td>

                  <td>
                  <div class="col mt-3">
                    <a href="/admin/deletecontact/<?= $c['id']; ?>" class="btn btn-danger btn-block">
                    <i class="fas fa-trash"></i> Hapus Pesan
                    </a> 
                  </div>   
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            </div>
        </div>
      </div>
    </div>
  </section>