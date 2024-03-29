@extends('layouts.dashboard-app')

@section('content')
    <style>
        body {
            font-family: Arial
        }

        * {
            box-sizing: border-box;
        }

        /* The browser window */
        .container2 {
            border: 3px solid #f1f1f1;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        /* Container for columns and the top "toolbar" */
        .row2 {
            padding: 10px;
            background: #f1f1f1;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
        }

        .left {
            width: 15%;
        }

        .right {
            width: 10%;
        }

        .middle {
            width: 75%;
        }

        /* Clear floats after the columns */
        .row2:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Three dots */
        .dot {
            margin-top: 4px;
            height: 12px;
            width: 12px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        /* Style the input field */
        input[type=text] {
            width: 100%;
            border-radius: 3px;
            border: none;
            background-color: white;
            margin-top: -8px;
            height: 25px;
            color: #666;
            padding: 5px;
        }

        /* Three bars (hamburger menu) */
        .bar {
            width: 17px;
            height: 3px;
            background-color: #aaa;
            margin: 3px 0;
            display: block;
        }

        /* Page content */
        .content {
            padding: 10px;
        }
    </style>

    <a href="{{route('blog.index')}}" class="btn btn-info mb-2">Back</a>


    <div class="container2">
        <div class="row2">
            <div class="column left">
                <span class="dot" style="background:#ED594A;"></span>
                <span class="dot" style="background:#FDD800;"></span>
                <span class="dot" style="background:#5AC05A;"></span>
            </div>
            <div class="column middle">
                <input type="text" value="http://karisma.id/{{$blog->slug}}">
            </div>
            <div class="column right">
                <div style="float:right">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>

        <div class="content">
            {!! $blog->content !!}
        </div>
    </div>

@endsection