@extends('layouts.app')

@section('template_title')
    {{ $post->name ?? __('Show') . " " . __('Post') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('posts.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body ">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $post->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contenido:</strong>
                                    {{ $post->contenido }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
