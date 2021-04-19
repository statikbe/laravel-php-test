@extends('layouts.base')
@section('content_header')
    <style>
        main{
            font-family: "Verdana", "sans-serif";
            margin-left: 5vw;
        }
        .meeting{
            background-color: #f5f5f5;
            border-radius: 15px;
            width: 60vw;
            padding-top: 2vw;
            padding-bottom: 2vw;
            padding-left: 2vw;
            padding-right: 2vw;
            margin-top: 2vw;
            margin-bottom: 2vw;
        }
        .meeting h2{
            margin-top: 0;
            margin-bottom: 0;
            display: inline-block;
        }
        .date{
            display: inline-block;
            margin-bottom: 0;
            margin-top: 0;
            margin-left: 2vw;
            background-color: #353535;
            padding-bottom: 0.5vw;
            padding-top: 0.5vw;
            padding-left: 1vw;
            padding-right: 1vw;
            color: white;
            border-radius: 15px;
        }
        .attendees{
            margin-bottom: 0;
            margin-top: 0;
            text-decoration: none;
            color: #04b4d5;
            display: inline-block;
        }
        .attendees:hover{
            cursor: pointer;
        }
        ul{
            margin-bottom: 0;
        }
        li{
            margin-top: 0.5vw;
        }
        .hidden{
            display: none;
        }
    </style>

    <div class="panel panel--light">
        <div class="panel__header">
            <h1 class="panel__title">Bugs</h1>
        </div>
    </div>

@endsection

@section('content_body')
    <main>
        <h1>Scheduled meetings</h1>
        <section class="meeting-container">
            @foreach($data as $item
                <div class="meeting">
                    <div>
                        <h2>{{ $item['meting']['title'] }}</h2>
                        <p class="date">{{ date_format(date_create($item['meeting']['date_start']), 'd/m/Y H:i') }} - {{ date_format(date_create($item['meeting']['date_stop']), 'H:i') }}</p>
                    </div>
                    <p>Description: {{ $item['meeting']}}</p>
                    <p>{{ $item['meeting']['meeting_room']['name'] }}</p>
                    <p>Organizer: {{ $item['meeting']['organizer']['first_name'] }} {{ $item['meeting']['organizer']['last_name'] }}</p>
                    <p class="attendees attendees{{ $item['meeting']['id'] }}">Attendees ↓</p>
                    <ul class="list{{ $item['meeting']['id'] }} hidden">
                        @foreach($item['attendees'] as $attendee)
                        <li>{{ $attendee['employee']['first_name'] }} {{ $attendee['employee']['last_name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </section>
    </main>

    <script>
        var attendees1 = document.querySelector(".attendees1");
        var list1 = document.querySelector(".list1");
        var attendees2 = document.querySelector(".attendees2");
        var list2 = document.querySelector(".list2");

        attendees1.addEventListener("click", function(){
            if(list1.classList.contains("hidden")){
                list1.classList.remove("hidden");
                attendees1.innerHTML = "Attendees ↑"
            }
            else{
                list1.classList.add("hidden");
                attendees1.innerHTML = "Attendees ↓"
            }
        });

        attendees2.addEventListener("click", function(){
            if(list2.classList.contains("hidden")){
                list2.classList.remove("hidden");
                attendees2.innerHTML = "Attendees ↑"
            }
            else{
                list2.classList.add("hidden");
                attendees2.innerHTML = "Attendees ↓"
            }
        });
    </script>
@endsection
