@extends('layouts.portal')

@section('content')
<div class="container">
    <div class="card-header">{{ __('WELCOME TO NORET JKUAT NOMINATION PAGE') }}</div>

    <div class="row">
        <div class="col-md-6 col md-offset-3">
            {!! Form::open() !!}

            {{ Form::label('name', "Name") }}
            {{ Form::text('name',null,['class'=>'form-control']) }}

            {{ Form::label('email', "Email") }}
            {{ Form::text('email',null,['class'=>'form-control']) }}

            {{ Form::label('reg_no',"Registration Number")}}
            {{ Form::text('reg_no',null,['class'=>'form-control'])}}

             {{ Form::label('year_study',"Year of Study")}}
              {!!  Form::select('year_study',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6], 
         null,['class' => 'form-control']) 
    !!}

     



            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
