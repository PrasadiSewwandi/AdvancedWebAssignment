<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="/css/lec.css">
<script src="js/lec.js"></script>


<div class="container">
   
            <a class="navbar-brand">
                <br>STUDENTS<br><br>
            </a>
        
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Registered Year</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Degree</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            @if(count($students) > 0)
                @foreach($students as $stu)
                    <tr>   
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->gender}}</td>
                        <td>{{$stu->Date_of_Birth}}</td>
                        <td>{{$stu->address}}</td>
                        <td>{{$stu->contact_no}}</td>
                        <td>{{$stu->email}}</td>
                        <td>{{$stu->registered_year}}</td>
                        <td>{{$stu->faculty}}</td>
                        <td>{{$stu->department}}</td>
                        <td>{{$stu->degree}}</td>
                        <td>{{$stu->GPA}}</td>
                    </tr>
                @endforeach
            @else
                <p>No Lecturers found</p>
            @endif
        </tbody>
        
    </table>
	</div>
</div>