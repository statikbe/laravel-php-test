@extends('layouts.base')
@section('content_header')
    <style>
        .grid-container{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            font-family: "Verdana", "sans-serif";
        }
        .grid-item{
            display: grid;
            justify-self: center;
            background-color: #f5f5f5;
            border-radius: 15px;
            width: 20vw;
            padding-top: 2vw;
            padding-bottom: 2vw;
            margin-top: 2vw;
            margin-bottom: 2vw;
            text-align: center;
        }
        .grid-item img{
            justify-self: center;
            border-radius: 100px;
        }
        .grid-item h3, h4, p{
            width: 15vw;
            margin: auto;
            margin-top: 2vw;
        }
    </style>


    <div class="panel panel--light">
        <div class="panel__header">
            <h1 class="panel__title">Employees</h1>
        </div>
    </div>

@endsection

@section('content_body')
    <section class="grid-container">
        @foreach($employees as $employee)
            <div class="grid-item">
                <img src="https://via.placeholder.com/120" alt="avatar">
                <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <h4>{{ $employee->function }}</h4>
                <p>{{ $employee->email }}</p>
            </div>
        @endforeach
    </section>
@endsection
