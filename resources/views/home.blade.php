@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-row -justify-content-between flex-wrap">
            @foreach($comics as $comic)
            <div class="col-4">
                <div class="card my-5" style="width: 18rem;">
                  <img src="{{$comic ->thumb}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text title" id="title">
                        {{$comic -> title}}
                    </p>

                    <p class="card-text" id="body">
                        {{$comic -> description}}
                    </p>

                    <h5>Art by</h5>
                    <p class="card-text" id="body">
                        {{$comic -> artists}}
                    </p>
                    
                    <h5>Writers</h5>
                    <p class="card-text" id="body">
                        {{$comic -> writers}}
                    </p>

                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   </div>
@endsection
