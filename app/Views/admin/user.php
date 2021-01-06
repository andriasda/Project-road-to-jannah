<!-- HEADER -->
<header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-users"></i> Users</h1>
        </div>
      </div>
    </div>
  </header>

<!-- alerts data -->
<?php if (session()->getFlashdata('pesan')) : ?>
<div class="alert alert-succes alert-dismissible fade show" role="alert">
	 <?= (session()->getFlashdata('pesan')); ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

 <!-- SEARCH -->
 <section id="search" class="py-4 mb-4 bg-light mt-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <form action="/Admin/user/" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Categories..." name="keyword">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit" name="submit">Search</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- USERS -->
  <section id="users">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Users</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach($user as $u) :?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $u['nama']; ?></td>
                  <td><?= $u['email']; ?></td>
                  <td><img src="/img/orang/<?= $u['image']; ?>" height="100" alt="" class="image" > </td>

                  <td>
                    <a href="detailuser/<?= $u['id']; ?>" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
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