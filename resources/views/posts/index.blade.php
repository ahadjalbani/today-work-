@extends('layouts.posts')
@section('title','list of Post')
@section('navigation')
            <ul>

                <li> home </li>
                <li>about</li>
                <li>contact</li>
                <li> gallery </li>


            </ul>
            @endsection
@section('content')
@component('components.message',['title'=>'components title'])
this is slog message     
@endcomponent
    

    <ul>

        <?php foreach ($data as  $row){ ?>
        <li>
        <?php echo $row ['name']; ?><br/>
        <?php echo $row ['company'];?><br/>
        </li>
        <?php } ?>
       
    </ul>
    
@endsection