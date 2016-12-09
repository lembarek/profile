@extends('profile::layout.master')

@section('title')

@stop

@section('content')
    <table class="table">
    @foreach($variables as $key => $value)
        <tr>
            <td> {{ $key }} </td>
            <td>
                <a href="{{ route('profile::profiles.edit', $key) }}">
                    {{ $value }}
                </a>
            </td>
        </tr>
   @endforeach
    <table>
@stop

