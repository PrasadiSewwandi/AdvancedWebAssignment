@extends('templates.master')

@section('content')

    <h2>Read Data</h2>
    <hr/>
    <a class="btn btn-primary" href="students/create" style="margin-bottom: 15px;">Create New</a>

    @if(Session::has('message'))
    <div class="alert-custom">
        <p>{!! Session('message') !!}</p>
    </div>
    @endif()

    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Name</th>
            <th>gender</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>address</th>
            <th>contact_no</th>
            <th>email</th>
            <th>registered_year</th>
            <th>faculty</th>
            <th>department</th>
            <th>degree</th>
            <th>GPA</th>
            <th width="110px;">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($students as $student)
            <tr>
                <td style="padding-left: 15px;">{!! $student->id !!}</td>
                <td>{!! $student->name !!}</td>
                <td>{!! $student->gender !!}</td>
                <td>{!! $student->Date_of_Birth !!}</td>
                <td>{!! $student->NIC !!}</td>
                <td>{!! $student->address !!}</td>
                <td>{!! $student->contact_no !!}</td>
                <td>{!! $student->email !!}</td>
                <td>{!! $student->registered_year !!}</td>
                <td>{!! $student->faculty !!}</td>
                <td>{!! $student->department !!}</td>
                <td>{!! $student->degree !!}</td>
                <td>{!! $student->GPA !!}</td>
                
                <td>
                    <a class="btn btn-success btn-sm" href="students/{!! $student->id !!}/edit">Edit</a>

                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/students/' . $student->id]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection()