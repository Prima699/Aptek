@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembuatan Resep Obat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Resep</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-md-12">
        <div class="card">
        <div class="row">
                <label class="col-form-label col-md-3">Jenis Resep <span class="text-danger">*</span></label>
                <div class="col-md-9">
                    <select class="form-control">
                        <option>Non-Racikan</option>
                        <option>Dengan Racikan</option>
                    </select>
                </div>
                <label class="col-form-label col-md-3">Perihal <span class="text-danger">*</span></label>
                <div class="col-md-9">
                    <input type="text" value="" placeholder="Perihal Surat" class="form-control rounded-0 wajib" id="takkah_perihal" name="takkah_perihal">
                </div>
        </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Draft Resep</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Resep</th>
                      <th>Obat</th>
                      <th>Signa</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($trans as $p)
                    <tr>
                        <td>{{ $p->id_trans }}</td>
                        <td>{{ $p->kode_resep }}</td>
                        <td>{{ $p->obtalkes_nama }}</td>
                        <td>{{ $p->signa_nama }}</td>
                        <td>
                            <a href="/pegawai/hapus/{{ $p->id_trans }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection