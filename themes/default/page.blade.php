@extends('layouts.default')

@section('title', $meta['title'] . ' - ' . $settings['site_title'])

@section('content')
    <div class="container">
        {!! $content !!}
    </div>
@endsection