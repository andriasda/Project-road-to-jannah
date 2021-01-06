<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Materi
          </a>
        </div>
        <div class="col-md-6">
          <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
            <i class="fas fa-plus"></i> Add User
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4 class="display-4 text-center">Selamat Datang Kembali <?= session()->get('username') ?></h4>
            </div>
          </div>
          <div class="col-lg-12">
            <img src="/img/2.png" alt="" class="img-fluid d-none d-lg-block" >
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Pesan Dari User</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i> 
              </h4>
              <a href="pesan" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Materi yang Tersedia</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i> 
              </h4>
              <a href="materi" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 
              </h4>
              <a href="user" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Tambah Materi</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/Admin/insertMateri" method="post">
            <div class="form-group">
              <label>Nama Mapel</label>
              <input name="nama_mapel" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Judul Sub Materi</label>
              <input name="submateri" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Video</label>
              <input name="video" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control">
            </div>
            <div class="modal-footer">
              <button class="btn btn-success"  type="submit">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/Admin/insertUser" method="post">
            <div class="form-group">
              <label>Nama User</label>
              <input name="nama" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Email User</label>
              <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Foto User</label>
              <input name="image" type="text" class="form-control">
            </div>
            <div class="modal-footer">
              <button class="btn btn-warning"  type="submit">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>