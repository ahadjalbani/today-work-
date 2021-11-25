@extends('layouts.posts')
@section('title','Create New Post')
@section('content')    
    <form action=" {{  route("post.store")}} "method="POST" enctype="multipart/form-data"  >
        @csrf
        <input type= "number" name="email" value="{{ old('email1') }}" /><br><br>
         @if ($errors->has('email')):
         @foreach ($errors->get('title') as $error):
        <p>{{ $error }}</p>
         @endforeach
         @endif

        <input type= "text" name="email" value="{{ old('email2') }}" /><br><br>
         @if ($errors->has('email')):
        @foreach ($errors->get('title') as $error): 
        <p>{{ $error }}</p>
        @endforeach
         @endif
        <textarea name= "content" id="" cols="30" rows="10" > {{ old('content') }}  </textarea><br>
         @if ($errors->has('content')): 
        @foreach ($errors->get('content') as $error): 
        <p>{{ $error }}</p>
        @endforeach
        @endif
        <label> computer <input type="checkbox" name="check['computer']['id']" id="" value="computer"></label>
        <label> general <input type="checkbox" name="check['general']['id']" id="" value="general"></label>
        <label> science <input type="checkbox" name="check['science']['id']" id="" value="science"></label>
        <label> arts <input type="checkbox" name="check['arts']['id']" id="" value="arts"></label>
        <label> bussiness <input type="checkbox" name="check['bussiness']['id']" id="" value="bussiness"></label><br><br>
        @if ($errors->has('check')): ?>
         @foreach ($errors->get('check') as $error): ?>
        <p><?php echo $error; ?></p>
        @endforeach
        @endif
        <label for="" > select an image: <input type="file" name="photo" id=""></label><br><br>
        @if ($errors->has('photo')):
        @foreach ($errors->get('photo') as $error): 
        <p>{{ $error }}</p>
        @endforeach
        @endif


            <label for="" >Accept TOS: <input type="checkbox" name="TOS" id="" value="1" > </label>
            @if ($errors->has('TOS')):
        @foreach ($errors->get('TOS') as $error):
        <p>{{ $error }}</p>
         @endforeach;
         @endif;
           

        <label for="" >Enter Website : <input type="url" name="website" id=""> </label>
        @if ($errors->has('dt')):
    @foreach ($errors->get('dt') as $error):
    <p>{{ $error }} </p>
     @endforeach;
    @endif<br><br>

   <label for="" >select Date : <input type="date" name="dt" id=""> </label>
         @if ($errors->has('TOS'))
    @foreach ($errors->get('TOS') as $error)
    <p>{{ $error }}</p>
    @endforeach; 
    @endif<br><br>
            <input type="submit" class="btn btn-success"  value="Add New Post"><br>
            
        </form>
        @endsection


