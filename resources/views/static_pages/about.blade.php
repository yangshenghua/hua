@extends('layouts.default')
@section('title', '关于')
@section('content')
    <h1>about</h1>

    <div id="app">
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
@stop