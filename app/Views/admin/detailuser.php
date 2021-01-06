<header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Edit User</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="user" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>
      </div>
    </div>
  </section>

  <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit User</h4>
            </div>
            <div class="card-body">
            <form action="/Admin/updateuser/<?= $user['id']; ?>" method="post">
            <div class="form-group">
              <label>Nama</label>
              <input name="nama" type="text" value="<?= $user['nama']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="text" value="<?= $user['password']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input name="email" type="text" value="<?= $user['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input name="image" type="text" value="<?= $user['image']; ?>" class="form-control">
            </div>
          <div class="container">
          <div class="row">
          <div class="col-md-6 mt-3">
          <button type="submit"  class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Save Changes
          </button>
          </div>
          <div class="col-md-6 mt-3">
          <a href="/admin/deleteuser/<?= $user['id']; ?>" class="btn btn-danger btn-block">
            <i class="fas fa-trash"></i> Delete Post
          </a>
        </div>
        </div>
        </div>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
