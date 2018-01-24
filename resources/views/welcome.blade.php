@extends('base')

@section('content')


    {{ Form::model('', array('url' => '', 'files'  => true ,'method' => 'PUT', 'class' => '')) }}

    <div class="row">
        <div class="col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Основное</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Описание</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Опции</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Галерея</a></li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-xs-12">
                                {{--<div class="checkbox">--}}

                                    <div class="form-group">
                                        {!! Form::checkbox('active', null) !!}
                                        <label for="active">Active</label>
                                        {!! Form::checkbox('active', null) !!}
                                        <label for="active">Active</label>
                                    </div>



                                    {{--<label for="male">Male</label>--}}
                                    {{--<input type="radio" id="active" value="male">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox">Acticve--}}
                                        {{--{{ Form::label('name', 'Acticve') }}--}}
                                        {{--{{Form::checkbox('name', 'value')}}--}}
                                    {{--</label>--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox">Top--}}
                                    {{--</label>--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox">New--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    {!! Form::label('name', 'Название') !!}
                                    {!! Form::text('name', null, array_merge(['class' => 'form-control'] )) !!}
                                </div>
                            </div>
                        </div>
                        {{--<div class="box box-solid box-default ">--}}
                            {{--<div class="box-header"></div>--}}
                            {{--<div class="box-body">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-6">--}}
                                        {{--{!! $component_generator->text('price', null, 'Цена') !!}--}}
                                        {{--{!! $form_builder->label('', null) !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="tab-pane" id="tab_2">
                    </div>
                    {{--{!! $component_generator->textareaWYSIHTML5('short_description', null, 'Краткое описание') !!}--}}
                    {{--{!! $component_generator->textareaWYSIHTML5('description', null, 'Описание') !!}--}}
                    {{--{!! $component_generator->text('meta_title', null, 'Мета заголовок') !!}--}}
                    {{--{!! $component_generator->text('meta_description', null, 'Мета описание') !!}--}}
                    {{--{!! $component_generator->text('meta_keywords', null, 'Ключевые слова') !!}--}}
                    {{--</div>--}}
                    {{--@if(config('webmagic.ecommerce.filter_use'))--}}
                    {{--<div class="tab-pane" id="tab_3">--}}
                    {{--@if(isset($filter['name']))--}}
                    {{--<h4>Фильтр: {{$filter['name']}}</h4>--}}
                    {{--@foreach($filter['options'] as $option_group_name => $options)--}}
                    {{--<div class="form-group">--}}
                    {{--<label>{{$option_group_name}}</label>--}}
                    {{--<select class="form-control" name="options[]">--}}
                    {{--<option value=""></option>--}}
                    {{--@foreach($options as $option)--}}
                    {{--<option value="{{$option['option_id']}}"--}}
                    {{--@if(isset($product['options'][$option['option_id']]))selected="selected"@endif>{{$option['option_value']}}</option>--}}
                    {{--@endforeach--}}
                    {{--</select>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                    {{--@else--}}
                    {{--Фильтр не задан. Выберите категориию и установите в ней фильтр--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--<div class="tab-pane" id="tab_4">--}}
                    {{--{!! $component_generator->imageLoad('images', 'Галерея', isset($product['images']) ? $product->present()->gallery : '', ['multiple' => '']) !!}--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
    <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
    </div>
@endsection
