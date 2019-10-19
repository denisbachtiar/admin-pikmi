@extends('layouts.app')
@section('content')

<section class="content-header">
        <h1>
            Point Product
          <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Point Product</a></li>
        </ol>
      </section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus-circle"></i></button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered vt-middle">
            <tbody>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama Produk</th>
              <th>Point</th>
              <th>Serial Code</th>
              <th>Serial Available</th>
              <th></th>
            </tr>
            <tr>
              <td>1.</td>
              <td>Pikpuff</td>
              <td>
                  10
              </td>
              <td>12783976522636</td>
              <td><span class="badge bg-red">12</span></td>
              <td style="width: 90px;" class="text-center">
                  <button type="button" class="btn bg-olive btn-flat" style="padding: 2px 5px;"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn bg-maroon btn-flat" style="padding: 2px 5px;"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            <tr>
                    <td>2.</td>
                    <td>Pikpuff</td>
                    <td>
                        10
                    </td>
                    <td>12783976522636</td>
                    <td><span class="badge bg-red">12</span></td>
                    <td style="width: 90px;" class="text-center">
                        <button type="button" class="btn bg-olive btn-flat" style="padding: 2px 5px;"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn bg-maroon btn-flat" style="padding: 2px 5px;"><i class="fa fa-trash"></i></button>
                      </td>
              </tr>
              <tr>
                    <td>3.</td>
                    <td>Pikpuff</td>
                    <td>
                        10
                    </td>
                    <td>12783976522636</td>
                    <td><span class="badge bg-red">12</span></td>
                    <td style="width: 90px;" class="text-center">
                        <button type="button" class="btn bg-olive btn-flat" style="padding: 2px 5px;"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn bg-maroon btn-flat" style="padding: 2px 5px;"><i class="fa fa-trash"></i></button>
                      </td>
                </tr>
                <tr>
                        <td>4.</td>
                        <td>Pikpuff</td>
                        <td>
                            10
                        </td>
                        <td>12783976522636</td>
                        <td><span class="badge bg-red">12</span></td>
                        <td style="width: 90px;" class="text-center">
                            <button type="button" class="btn bg-olive btn-flat" style="padding: 2px 5px;"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn bg-maroon btn-flat" style="padding: 2px 5px;"><i class="fa fa-trash"></i></button>
                          </td>
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
<div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group">
                      <label>Point</label>
                      <input type="number" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Serial Code</label>
                        <input type="number" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                            <label>Available</label>
                            <input type="number" class="form-control" placeholder="">
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
      <!-- /.modal -->
@endpush
