<div class="form-group{{ $errors->has('ket') ? 'has-error' : '' }}">
	{!! Form::label('ket',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('ket',null,['class'=>'form-control']) !!}
		{!! $errors->first('ket', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
	{!! Form::label('foto','Sampul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('foto') !!} <br>
		@if(isset($rumah) && $rumah->foto)
		<p>
			{!! Html::image(asset('img/'.$rumah->foto),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	</div>
</div>