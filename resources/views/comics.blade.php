
@extends('layouts.main')

@section('main-content')
<section id='content'>

  <div class="container">
    
    {{-- CURRENT SERIES BUTTON --}}
  <div class="current-series button">CURRENT SERIES</div>
  
  <div class="flex-container">
    
    @foreach($comics as $comic)     
    <div class="card">
      <figure>
          <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </figure>
        <h4>{{$comic['title']}}</h4>
      </div>
      @endforeach
      
    </div>    
    
    {{-- LOAD MORE BUTTON --}}
    <div class="button-container">
      <div class="button">LOAD MORE</div>
    </div>
    
  </div>
</section>
@endsection