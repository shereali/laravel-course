
   @extends('component.master')
   @section('content')
        <ul>
        @foreach ($users as $key => $user)
        <li>{{$user['name']}}</li>
        <li>{{$user['age']}}</li>
        <li>{{$user['email']}}</li>
        <li>{{$user['phone']}}</li>
        @endforeach
        {{-- {{dd($users)}} --}}
    </ul>
    <h1>{{ $businessInfo['company_name'] }}</h1>  
   @endsection



