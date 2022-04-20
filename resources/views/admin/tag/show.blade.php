@extends('layout,admins')

<!-- @section('title', "| $tag->name Tag ") -->

@section('content')

    <div class="row margin-top">
        <div class="col-md-8">
            <h1>{{ $tag->name}} Tag <small>{{ $tag->posts()->count() }} Posts </small></h1>
        </div>
        <div class="col-md-2 margin-top2">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary  btn-block">Edit</a>
        </div>
        <div class="col-md-2 margin-top2">
            {{ Form::open(['route'=> ['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
                {{ Form::submit ('Delete', ['class' => 'btn btn-danger btn-block']) }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach( $tag->posts as $post )
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>@foreach($post->tags as $tag) 
                            <span class="label">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm btn-view-tags">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection