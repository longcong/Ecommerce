@extends('layouts.admin')

@section('title', '| Show Product')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-7">
                <div>
                    <h1> {{ $product->title }}</h1>
                    <div class="tags">
                        @foreach ($product->tags as $tag)
                            <span class="l1">{{ $tag -> name }}</span>
                        @endforeach
                    </div>
                </div>
                <br>
                <img src="{{asset('images/' . $product->image)}}" height="500" width="500" alt="This is a Photo">
                <p class="lead"></p>

                <hr>
                
            </div>

            <div class="col-md-5">
                <div class="well pr-edit">
                    <dl class="dl-horizontal">
                        <label>Url:</label>
                        <p><a href="{{ route('detail.productdetail', $product->slug) }}">{{ route('detail.productdetail', $product->slug) }}</a></p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Category_id:</label>
                        <p>{{ $product->category->name }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Quantity:</label>
                        <p>{{ $product->quantity}}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Price:</label>
                        <p>{{ $product->price }}$</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Discount:</label>
                        <p>{{ $product->discount_value }}$</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Description:</label>
                        <p>{{ $product->note }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Created At:</label>
                        <p>{{ date('M j, Y h:ia', strtotime($product->created_at)) }}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Last Updated:</label>
                        <p>{{ date('M j, Y h:ia', strtotime($product->updated_at)) }}</p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            {!! Html::linkRoute('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-primary btn-block')) !!}
                        </div>
                        <div class="col-sm-2">
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('products.destroy', $product->id), 'onsubmit' => 'return confirm_delete()')) }} 
                                {{ Form::submit('Delete', array('class' => 'btn btn-info')) }}
                                {{ Form::close() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ Html::linkRoute('products.index', '<< All Posts',[],['class'=>'btn btn-info btn-block btn-h1-spacing']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection