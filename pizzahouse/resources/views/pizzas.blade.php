<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
{{--        <p>{{ $type }} – {{ $base }} - {{ $price }}</p>--}}

        @foreach($pizzas as $pizza)
            <div>
{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
                @if($loop->first)
                    <span> - first in the loop - </span>
                @endif
                @if($loop->last)
                    <span> - last in the loop - </span>
                @endif
</div>
@endforeach

{{--        @for($i = 0; $i < count($pizzas); $i++)--}}
{{--        <p>{{ $pizzas[$i]['type'] }}</p>--}}
{{--        @endfor--}}

{{--        @for($i = 0; $i < 5; $i++)--}}
{{--            <p>the value of i is {{ $i }}</p>--}}
{{--        @endfor--}}


{{--        IF blade statement--}}
{{--        @if($price > 15)--}}
{{--            <p>this pizza is expensive</p>--}}
{{--        @elseif($price < 5)--}}
{{--            <p>this pizza is cheap</p>--}}
{{--        @else--}}
{{--            <p>this pizza is normally priced</p>--}}
{{--        @endif--}}

{{--        @unless($base == 'cheesy crust')--}}
{{--            <p>you don't have a cheesy crust</p>--}}
{{--        @endunless--}}

{{--        @php--}}
{{--            $name = 'shaun';--}}
{{--    echo ($name);--}}
{{--        @endphp--}}

</div>
</div>
</body>
</html>
