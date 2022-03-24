<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')@setting('core::site-name')@show</title>
    @foreach($alternate as $alternateLocale=>$alternateSlug)
        <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
    @endforeach
    <link rel="canonical" href="{{url()->current()}}"/>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('css/bootstrap.min.css?v='.config('app.version')) !!}
    {!! Theme::style('css/materialdesignicons.min.css?v='.config('app.version')) !!}
    {!! Theme::style('css/style.css?v='.config('app.version')) !!}
    @stack('css-stack')
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

{!! Theme::script('js/bootstrap.bundle.min.js?v='.config('app.version')) !!}
{!! Theme::script('js/smooth-scroll.polyfills.min.js?v='.config('app.version')) !!}
{!! Theme::script('js/gumshoe.polyfills.min.js?v='.config('app.version')) !!}
{!! Theme::script('js/unicons.js?v='.config('app.version')) !!}
{!! Theme::script('js/app.js?v='.config('app.version')) !!}

@yield('scripts')

<?php if (Setting::has('core::analytics-script')): ?>
{!! Setting::get('core::analytics-script') !!}
<?php endif; ?>
@stack('js-stack')
</body>
</html>
