        @extends('layouts.posts')
        @section('title','single record via show method')
        @section('content')
        

    <ul>

        <li>

            {{  $data ['name'];}}<br/>
            {{ $data ['age'];}}<br/>

        </li>

    </ul>

    @endsection