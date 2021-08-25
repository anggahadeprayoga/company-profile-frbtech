<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Excellence</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Excellence</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content px-4">
        <button class="btn btn-primary py-2" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah data</button>

        <table class="table mt-3">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Icon</th>
                <th>Status ID</th>
                <th>Action</th>
            </tr>
        

        </table>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'user/post_data'; ?>">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" name="icon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Status ID</label>
                            <input type="text" name="status_id" class="form-control">
                        </div>

                        <button type="button" class="btn btn-danger py-2 px-4" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary py-2 px-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>