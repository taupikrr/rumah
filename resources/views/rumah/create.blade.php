@extends('layouts.app')

@section('content')

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/home')}}">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{url('/rumah')}}"><i class="fa fa-fw fa-dashboard"></i> Rumah</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Agen</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i>Admin</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Rumah Baru                      
                        </h1>
                        <div class="form-group">
                            <label>Nama Agen</label>
                            <select class="form-control" name="agen_id">
                                @foreach($agen as $data)
                                <option>{{$data->nama}}</option>
                                @endforeach
                            </select> 
                            
                        </div>
                        <div class="form-group">
                            <label>Keterangan Rumah</label>
                            <textarea class="form-control"></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Foto Rumah</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group" align="right">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@endsection
        
