@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello, <span class="fw-bold">{{ Auth::user()->name }}</span>👋 !</div>

                <div class="card-body">
                    <form action="{{route('addtodo')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="content" placeholder="Write something here..." autocomplete="off">
                        <button type="submit" class=" btn btn-primary btn-sm mt-3">Add</button>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">To-do List</div>
                <div class="card-body">
                    <ul>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        @foreach($todos as $todo)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ $todo->content }}
                            </label>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection