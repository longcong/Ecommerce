@extends('layouts.admin')

@section('title', '| Edit Product')
@section('stylesheet')

    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

    {!! Form::model($post, ['route' => ['products.update', $post->id] , 'method' => 'PUT', 'files' => 'true' ]) !!}
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
        
                    <div class="col-md-8">
                        {{ Form::label('title', 'Title:') }}
                        {{ Form::text('title', null, array('class' => 'form-control input-lg')) }}
                        
                        {{ Form::label('price', 'Price:') }}
                        {{ Form::text('price', null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('discount_unit', 'Code:') }}
                        {{ Form::text('discount_unit', null, array('class'=> 'form-control input-lg')) }}

                        {{ Form::label('slug', 'Slug:') }}
                        {{ Form::text('slug', null, ['class' => 'form-control input-lg']) }}  

                        {{ Form::label('category_id', 'Category:') }}
                        {{ Form::select('category_id', $categories, null, array('class' => 'form-control input-lg')) }}
                        
                        {{ Form::label('brand_id', 'Brands:') }}
                        {{ Form::select('brand_id', $brands, null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('quantity', 'Quantity:') }}
                        {{ Form::text('quantity', null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('tags', 'Tag:') }}
                        {{ Form::select('tags[]', $tags, null, array('class' => 'form-control select2-multi', 'multiple' => 'multiple')) }}

                        {{ Form::label('discount_value', 'Discount:') }}
                        {{ Form::text('discount_value', null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('is_popular', 'Is_Popular:') }}
                        {{ Form::text('is_popular', null, array('class' => 'form-control input-lg')) }}
                        <br>
                        {{ Form::label('featured_image','Update Image:', array('class' => 'form-spacing-top'))}}
                        {{ Form::file('featured_image') }}
                        <br>
                        
                        {{ Form::label ('meta_image','Meta_Image:') }}
                        {{ Form::file('meta_image',array('class' => 'xxx'))}} 
                        <br>
                        {{ Form::label('note',"Body:", ['class' => 'form-spacing-top']) }}
                        {{ Form::textarea('note', null, array('class' => 'form-control ', 'rows' =>'5', 'cols'=>'75'))}}
                        <hr>
                        <label class="variant">Product Variant</label><br>
                        {{ Form::label('product_size', 'Product_size:') }}
                        {{ Form::text('product_size',null, array('class' => 'form-control input-lg')) }}

                        {{ Form::label('product_color', 'Product_color:') }}
                        {{ Form::text('product_color', null, array('class' => 'form-control input-lg')) }}
                    </div>

                    <div class="col-md-4" >
                        <div class="well pr-edit" >
                            <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                            </dl>

                            <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                                <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                                </div>
                                <div class="col-sm-6">
                                    {!! Html::linkRoute('products.show', 'Cancel', array($post->id),array('class' => 'btn btn-danger btn-block')) !!}
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
    
    {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val('{{ json_encode($post->tags()->allRelatedIds()) }}').trigger('change');
    </script>


@endsection
    