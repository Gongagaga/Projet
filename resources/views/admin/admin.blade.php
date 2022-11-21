@extends('admin.layout')
    
@section('content')
<nav class="navbar bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./assets/img/logo.png" alt="Logo" width="50" height="auto">
    </a>
  </div>
</nav>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Sujet</th>
      <th scope="col">Message</th>
      <th scope="col"><button class="suppr"><i class="fa-solid fa-xmark"></i></button></th>
    </tr>
  </thead>
  <tbody>

  @foreach ($contacts as $contact)

    <tr>
    <th>{{$contact->id}}</th>
      <td>{{$contact->email}}</td>
      <td>{{$contact->subject}}</td>
      <td>{{$contact->message}}</td>
      <td><button class="suppr"><a href="{{ route('delete',['id'=>$contact->id])}}"><i class="fa-solid fa-xmark"></i></button></td>
    </tr> 
  
  @endforeach

  </tbody>
</table> 

@endsection
