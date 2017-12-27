
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Rumah
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                   <div class="panel-body">
              <form action="{{route('rumah.update',$rumah->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 
                    <div class="form-group">
                  <label class="control_label">Keterangan</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$rumah->ket}}">
                  </div>

                 <div class="form-group">
                  <label class="control_label">Agen</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$rumah->agen_id}}">
                  </div>

              <div class="form-group">
                  <label class="control_label">Foto Rumah</label>
                  <input type="file" name="foto" class="form-control" required="" value="{{$rumah->foto}}">
                  </div>
               
                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Reset
                      </button>
                  </div>
                                    
              </form>
                  
                </div>
</div>
             
                
                </div>
            </div>
        </div>
    
@endsection
