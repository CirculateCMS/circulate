@extends('layouts.default')

@section('title', $meta['title'] . ' - ' . $settings['site_title'])

@section('content')
    <div class="container">
        <ul>
            @foreach ($collection as $entry)
                <li><a href="{{ $entry['slug'] }}">{{ $entry['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection