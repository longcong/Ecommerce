@extends('layouts.admin')

@section('title', "| $tag->name Tag ")

@section('content')

   <div class="card">
       <div class="card-body">
           <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <h2>{{ $tag->name}} Tag <small>{{ $tag->products()->count() }} Posts </small></h2>
            </div>
            <div class="col-md-1 ">
                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary  btn-block">Edit</a>
            </div>
            <div class="col-md-2" style="text-align: center;">
                {{ Form::open(['route'=> ['tags.destroy', $tag->id], 'method'=>'DELETE']) }}
                    {{ Form::submit ('Delete', ['class' => 'btn btn-danger btn-block']) }}
                {{ Form::close() }}
            </div>
            <div class="col-md-1">
                    {{ Html::linkRoute('tags.index', 'Back',[],array('class'=>'btn btn-info btn-block')) }}
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
                        @foreach( $tag->products as $post )
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>@foreach($post->tags as $tag) 
                                <span class="l1">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('products.show', $post->id) }}" class="btn btn-primary btn-sm btn-view-tags">View</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
           </div>
       </div>
   </div>
@endsection