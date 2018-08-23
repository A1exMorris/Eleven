@extends('layouts.app')

@section('content')
@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<div class="container">
<form action="/upload" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    Month name:
    <br/>
    <input type='text' name="name" />
    <br/><br/>
    Month file:
    <input type="file" name="file" />
    <br/><br/>
    <input type="submit" value="Upload" />
</form>
</div>
@endsection

