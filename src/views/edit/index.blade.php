@extends('profile::layout.master')

@section('title')

@stop

@inject('schema', 'Lembarek\Core\Schema\Schema')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('core::partials.errors')
                        <form class="form-horizontal" role="form" method="POST" action="{{route('profile.edit.store')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{ $name }}</label>
                                <div class="col-md-6">
                                    @include('profile::edit.partials.'.$schema->get_column_type('profiles', $name))
                                </div>
                            </div>

                        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
