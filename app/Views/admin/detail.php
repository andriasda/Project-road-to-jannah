<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Post One</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Dashboard
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
              <h4>Edit Post</h4>
            </div>
            <div class="card-body">
            <form action="/Admin/updatemateri/<?= $materi['id']; ?>" method="post">
            <div class="form-group">
              <label>Nama Mapel</label>
              <input name="nama_mapel" type="text" value="<?= $materi['nama_mapel']; ?>" class="form-control">
            </div>
            <label>Judul Sub Materi</label>
              <input name="submateri" type="text" value="<?= $materi['submateri']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Video</label>
              <input name="video" type="text" value="<?= $materi['video']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input name="deskripsi" type="text" value="<?= $materi['deskripsi']; ?>" class="form-control">
            </div>
          <div class="container">
          <div class="row">
          <div class="col-md-6 mt-3">
          <button type="submit"  class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Save Changes
          </button>
          </div>
          <div class="col-md-6 mt-3">
          <a href="/admin/deletemateri/<?= $materi['id']; ?>" class="btn btn-danger btn-block">
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
