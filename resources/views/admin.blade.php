@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
            <div class="card">
                <!-- <div class="card-header">ADMIN</div> -->

                <!-- <div class="container"> -->
    	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Lecturer</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Lecturer" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Is Admin</th>
							</tr>
						</thead>
                        
						<tbody>
                        @foreach ($users as $user)
                            @if($user->user_type=='lecturer')
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
                                <td>
                                    @if($user->is_admin==1)
                                        <input style="width:50px" class="form-control input-sm" id="inputsm" name="isAdmin" type="text" value="YES">
                                        <!-- <a class="btn btn-info" >Yes</a> -->
                                    @else
                                        <input style="width:50px" class="form-control input-sm" id="inputsm" name="isAdmin" type="text" value="NO">
                                        <!-- <a class="btn btn-info" >No</a> -->
                                    @endif
								</td>
                                <td>
                                    @if($user->is_admin==0)
                                        <a class="btn btn-danger" style="display:inline" href="{{ url('/admin/user/destroy/'.$user->id) }}">Delete</a>
                                    @endif
                                </td>
                                <td>
                                    @if($user->is_admin==0)
                                        <a class="btn btn-success" style="display:inline">Save</a>
                                    @endif
                                </td>  
							</tr>
                            @endif
                        @endforeach
						</tbody>

					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Students</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
					</div>
					<table class="table table-hover" id="task-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
                        @foreach ($users as $user)
                            @if($user->user_type=='student')
							<tr>
                                <td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>
                                    @if($user->is_admin==0)
                                        <a class="btn btn-danger" style="display:inline" href="{{ url('/admin/user/destroy/'.$user->id) }}">Delete</a>
                                    @endif
                                </td>
							</tr>
                            @endif
                        @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<!-- </div> -->
            <!-- </div> -->
        </div>
    <!-- </div> -->
</div>
@endsection
