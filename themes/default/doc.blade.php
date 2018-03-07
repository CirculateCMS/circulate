@extends('layouts.default')

@section('title', $meta['title'] . ' - ' . $settings['site_title'])

@section('content')
    <section class="hero position-relative overflow-hidden p-3 p-md-5 mb-5 text-center">
        <div class="col-lg-6 mx-auto my-1 py-1">
            <h1 class="h1">{{ $meta['title'] }}</h1>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group list-group-flush">
                    <a href="/docs" class="list-group-item list-group-item-action">Documentation</a>
                    <a href="/docs/getting-started" class="list-group-item list-group-item-action">Getting Started</a>
                    <a href="/docs/routing" class="list-group-item list-group-item-action">Routing</a>
                    <a href="/docs/content" class="list-group-item list-group-item-action">Content</a>
                    <a href="/docs/theming" class="list-group-item list-group-item-action">Theming</a>
                    <a href="/docs/settings" class="list-group-item list-group-item-action">Settings</a>
                </ul>
            </div>
            <div class="doc-content col-md-8 offset-md-1">{!! $content !!}</div>
        </div>
    </div>
@endsection