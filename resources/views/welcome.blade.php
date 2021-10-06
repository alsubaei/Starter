<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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

        .links>a {
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
                Laravel
            </div>
            {{-- <<start Manal : 28092021 passing data to view >> --}}
            <p>
                {{-- {{ $data }} --}}
                {{-- {{ $name }}
                {{ $age }} --}}
                {{-- {{ $id }}
                {{ $name }} --}}
                {{-- {{ $obj->name }}
                {{ $obj->age }}
                {{ $obj->gender }} --}}
            </p>
            {{-- <<end Manal : 28092021 passing data to view >> --}}

            <div class="links">
                {{-- <<start Manal : 22092021 Routes >> --}}

                {{-- route with name
                    __________________________ --}}

                <a href="{{ route('name1') }}">name1</a>
                <a href="{{ route('name2', 100) }}">name2</a>
                <a href="{{ route('name3') }}">name3</a>

                {{-- <<end Manal : 22092021 Routes >> --}}


                {{-- <<start  Manal : 28092021  multilanguage views & switch language >> 
                    note:
                    ________
                    *change the defult language from app/config/app.php 
                        'locale' => 'ar' for arabic
                        'locale' => 'en' for english
                    *inside the method __('file.variable')
                        file -> that in resources/lang/ar for arabic
                        file -> that in resources/lang/en for english 
                        variable-> in side the above file --}}

                <h1> {{ __('messages.Manal') }}</h1>
                {{-- <<end Manal : 28092021  multilanguage views & switch language >> --}}

            </div>
            {{-- <<start Manal : 29092021 view directives >> --}}


            {{-- @if ($obj->name == 'manal')
                <p> This is Manal</p>
            @endif

            @if ($obj->name == 'manal')
                <p> This is Manal</p>
            @else
                <p> This is {{ $obj->name }} </p>
            @endif --}}

            {{-- @foreach ($data as $item)
                <h3>{{ $item }}</h3>
            @endforeach --}}

            {{-- @forelse ($data as $item)
                <h3>{{ $item }}</h3>
            @empty
                <h4>Empty array</h4>
            @endforelse --}}

            @if ($obj->name == 'Muna')
                <p>Muna</p>
            @elseif ($obj->name == 'Manal')
                <p>Manal</p>
            @elseif ($obj->name == 'Nawal')
                <p>Nawal</p>
            @else
                {{ $obj->name }}
            @endif

            {{-- <<end Manal : 29092021 view directives >> --}}

        </div>
    </div>
</body>

</html>
