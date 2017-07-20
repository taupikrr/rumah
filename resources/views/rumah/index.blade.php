@extends('layouts.app')

@section('content')
<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{route('rumah.index')}}"><i class="fa fa-fw fa-dashboard"></i> Rumah</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Agen</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i>Admin</a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-md-10 col-md-offset-2">
            	<div class="well">
            	<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Rumah</h2>
				</div>
				<div class="panel-body">
					<p><a class="btn btn-primary" href="{{ route('rumah.create') }}">Tambah</a></p>
					
				</div>
			</div>
            	</div>
            </div>
            <!-- /.navbar-collapse -->
@endsection
        
