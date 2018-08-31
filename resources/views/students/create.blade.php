@extends('templates.master')

@section('content')

    <h2>Create Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'url' => '/students']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'gender') !!}
        {!! Form::text('gender', null, ['placeholder' => 'Enter email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('Date_of_Birth', 'Date_of_Birth'); !!}
        {!! Form::date('Date_of_Birth', null, ['placeholder' => 'Enter facebook url', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('NIC', 'NIC'); !!}
        {!! Form::text('NIC', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'address'); !!}
        {!! Form::text('address', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact_no', 'contact no'); !!}
        {!! Form::text('contact_no', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email'); !!}
        {!! Form::email('email', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('registered_year', 'registered_year'); !!}
        {!! Form::text('registered_year', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('faculty', 'faculty'); !!}
        {!! Form::text('faculty', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('department', 'department'); !!}
        {!! Form::text('department', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('degree', 'degree'); !!}
        {!! Form::text('degree', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>
    
     <div class="form-group">
        {!! Form::label('GPA', 'GPA'); !!}
        {!! Form::text('GPA', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()