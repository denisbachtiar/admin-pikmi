@extends('layouts.app')
@section('content')
<section class="content-header">
        <h1>
            Users
          <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Users</a></li>
        </ol>
      </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus-circle"></i></button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>No Handphone</th>
              <th>Tanggal Join</th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Denis Bachtiar</td>
              <td>
                denisbachtiar.db@gmail.com
              </td>
              <td>08234567181</td>
              <td><span class="badge bg-red">12 Maret 2019</span></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Denis Bachtiar</td>
                <td>
                  denisbachtiar.db@gmail.com
                </td>
                <td>08234567181</td>
                <td><span class="badge bg-red">12 Maret 2019</span></td>
              </tr>
              <tr>
                  <td>3.</td>
                  <td>Denis Bachtiar</td>
                  <td>
                    denisbachtiar.db@gmail.com
                  </td>
                  <td>08234567181</td>
                  <td><span class="badge bg-red">12 Maret 2019</span></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Denis Bachtiar</td>
                    <td>
                      denisbachtiar.db@gmail.com
                    </td>
                    <td>08234567181</td>
                    <td><span class="badge bg-red">12 Maret 2019</span></td>
                  </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </section>
@endsection

@push('modals')
{{-- <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal --> --}}
@endpush