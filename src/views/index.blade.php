@extends('profile::layout.master')

@section('title')

@stop

@section('content')
    <table class="table">
    @foreach($variables as $key => $value)
        <tr>
            <td> {{ $key }} </td>
            <td> {{ $value }} </td>
        </tr>
   @endforeach
    <table>
@stop

