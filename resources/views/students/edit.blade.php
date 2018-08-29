@extends('templates.master')

@section('content')

    <h2>Update Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/students/' . $student->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', $student->name , ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'gender') !!}
        {!! Form::text('gender', $student->gender, ['placeholder' => 'Enter email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('Date_of_Birthfb', 'Date_of_Birth'); !!}
        {!! Form::date('Date_of_Birthfb', $student->Date_of_Birth, ['placeholder' => 'Enter Date_of_Birth ', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('NIC', 'NIC'); !!}
        {!! Form::text('NIC', $student->NIC, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'address'); !!}
        {!! Form::text('address', $student->address, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('contact_no', 'contact_no'); !!}
        {!! Form::text('contact_no', $student->contact_no, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'email'); !!}
        {!! Form::text('email', $student->email, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('registered_year', 'registered_year'); !!}
        {!! Form::text('registered_year', $student->registered_year, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('faculty', 'faculty'); !!}
        {!! Form::text('faculty', $student->faculty, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('department', 'department'); !!}
        {!! Form::text('department', $student->department, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('degree', 'degree'); !!}
        {!! Form::text('degree', $student->degree, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('GPA', 'GPA'); !!}
        {!! Form::text('GPA', $student->GPA, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    

    {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()