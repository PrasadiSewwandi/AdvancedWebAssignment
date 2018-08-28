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
                <br>LECTURERS<br><br>
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
                <th>Job Title</th>
                <th>Specialization</th>
                <th>Faculty</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @if(count($lecturers) > 0)
                @foreach($lecturers as $lec)
                    <tr>   
                        <td>{{$lec->name}}</td>
                        <td>{{$lec->gender}}</td>
                        <td>{{$lec->Date_of_Birth}}</td>
                        <td>{{$lec->address}}</td>
                        <td>{{$lec->contact_no}}</td>
                        <td>{{$lec->email}}</td>
                        <td>{{$lec->job_title}}</td>
                        <td>{{$lec->specialization}}</td>
                        <td>{{$lec->faculty}}</td>
                        <td>{{$lec->department}}</td>
                    </tr>
                @endforeach
            @else
                <p>No Lecturers found</p>
            @endif
        </tbody>
        
    </table>
	</div>
</div>