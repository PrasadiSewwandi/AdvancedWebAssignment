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
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Email</th>
								<th>Is Admin</th>
                                <th>Delete</th>
							</tr>
						</thead>
                        
						<tbody>
                        @foreach ($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
                                <td>
                                    @if($user->is_admin==1)
                                        <a class="btn btn-info" >Yes</a>
                                    @else
                                        <a class="btn btn-info" >No</a>
                                    @endif
								</td>
                                <td>{{ $user->id }}</td>
							</tr>
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
								<th>Task</th>
								<th>Assignee</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Site Wireframes</td>
								<td>John Smith</td>
								<td>in progress</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Mobile Landing Page</td>
								<td>Kilgore Trout</td>
								<td>completed</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Add SEO tags</td>
								<td>Bob Loblaw</td>
								<td>failed qa</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Migrate to Bootstrap 3</td>
								<td>Emily Hoenikker</td>
								<td>in progress</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Update jQuery library</td>
								<td>Holden Caulfield</td>
								<td>deployed</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Issues in IE7</td>
								<td>Jane Doe</td>
								<td>failed qa</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Bugs from Sprint 14</td>
								<td>Kilgore Trout</td>
								<td>completed</td>
							</tr>
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