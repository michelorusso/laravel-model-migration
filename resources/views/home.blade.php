<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Trivago</title>

</head>
<body>

    <div>
        <img style="width: 200px;"src="{{ asset('img/1280px-Trivago.svg.png')}}" alt="trivago">
    </div>

    <h2>Pacchetti Giugno/Luglio</h2>


    <ul>
            @foreach ($travels as $travel)
                <li>

                    <h2 style="text-transform: capitalize">{{$travel->package_name}}</h2>

                    <h3>{{$travel->city}}</h3>

                    <div>{{$travel->description}}</div>

                    <ul>

                        <li>
                            <div>{{$travel->days_number}} giorni</div>
                            <div>Dal: {{$travel->start_date}} - Al: {{$travel->end_date}}</div>
                        </li>

                    </ul>
                    
                    <div>Price: {{$travel->price}}</div>

                </li>
                
            @endforeach
        </ul>
    
</body>
</html>