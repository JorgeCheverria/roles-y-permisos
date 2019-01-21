<div class="form-group">
	{{ Form::label('name', 'Nombre')	}}
	{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul>
		@foreach($roles as $role)
		<li class="list-unstyled">
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
				<em>{{ $role->description ?: 'Sin Descripcion' }}</em>

			</label>
		</li>
		@endforeach
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
</div>