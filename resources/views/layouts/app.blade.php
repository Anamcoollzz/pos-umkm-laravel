<!doctype html>
<html lang="en" data-bs-navbar-position="vertical" data-bs-layout="fluid">
  <head>
    <!-- BEGIN META -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <meta name="description" content="Premium and Open Source dashboard template with responsive and high quality UI." />

    <link rel="icon" href="{{ asset('vendor/tabler/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('vendor/tabler/favicon.ico') }}" type="image/x-icon" />
    <!-- END META -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('vendor/tabler/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PLUGINS STYLES -->
    <link href="{{ asset('vendor/tabler/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/dist/css/tabler-socials.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/dist/css/tabler-marketing.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/tabler/dist/css/tabler-themes.min.css') }}" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN DEMO STYLES -->
    <link href="{{ asset('vendor/tabler/preview/css/demo.min.css') }}" rel="stylesheet" />
    <!-- END DEMO STYLES -->
  </head>

  <body>
    <a href="#content" class="visually-hidden-focusable skip-link">Skip to main content</a>

    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('vendor/tabler/dist/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->

    <div class="page">

    @include('layouts.partials.sidebar')

    <div class="page-wrapper">
        @include('layouts.partials.header')
        @include('layouts.partials.content')
        @include('layouts.partials.footer')
        </div>
    </div>
    </div>

    @include('layouts.partials.scripts')
  </body>
</html>
