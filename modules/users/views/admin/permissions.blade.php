<h1>Permissions</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Required Power</th>
			<th>Max Power</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($permissions->get() as $permission)
			<tr>
				<td>{{ $permission->name }}</td>
				<td>{{ is_null($permission->required_power) ? 'None' : $permission->required_power }}</td>
				<td>{{ is_null($permission->max_power) ? 'None' : $permission->max_power }}</td>
				<td>
					<a href="{{ $url->to('admin/permission/'.$permission->id.'/edit') }}" class="btn btn-warning">Edit</a>
					<a href="{{ $url->to('admin/permission/'.$permission->id.'/delete') }}" class="btn btn-danger">Disable</a> 
				</td>
			</tr>
		@endforeach
	</tbody>
</table>