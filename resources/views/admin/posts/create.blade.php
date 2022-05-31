@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            {{-- Title card  --}}
            <div class="card">
                <div class="card-header">Write a new Post</div>

            {{--/ Title card  --}}
            <div class="card-body">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    {{-- Token  --}}
                    @csrf
                    {{-- / Token  --}}

                    {{-- title post --}}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Post's title">
                    </div>
                    {{--/ title post --}}

                      {{-- content post --}}
                      <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea type="text" name="content" class="form-control" placeholder="Post's content"></textarea>
                    </div>
                    {{--/ content post --}}

                    <div class="form-group">
                        <input type="submit" class="btn btn-info white" value="Create Post">
                    </div>
                </form>
            </div>
        </div>
                <a href="{{route('admin.posts.index')}}" class="btn btn-success"> Back</a>

        </div>
    </div>
</div>
@endsection
