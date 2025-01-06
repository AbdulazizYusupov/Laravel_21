@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>{{ __('menu.Dashboard for news') }}</h2>
        <div class="row">
            @foreach ($models as $model)
                <div class="col-3 mt-5">
                    <div class="card" style="width: 18rem;">
                        @if ($model->image)
                            <img src="{{ asset('storage/' . $model->image) }}" alt="">
                        @else
                            <img src="https://play-lh.googleusercontent.com/QvTfA5WH0B4X04u_sxSBdb-PlO7Wj6yjeyJVzwoyUsefJPTXDE75QBKKJr1fyI5CHQq9"
                                alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ is_array($model->title) ? $model->title[$test] : json_decode($model->title, true)[$test] }}
                            </h5>
                            <p class="card-text">
                                {{ is_array($model->description) ? $model->description[$test] : json_decode($model->description, true)[$test] }}
                            </p>
                            <a href="#" class="btn btn-primary">{{__('menu.more')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
