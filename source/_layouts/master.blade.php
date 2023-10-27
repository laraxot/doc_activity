<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
<<<<<<< HEAD
    <meta property="og:image" content="{{ url('/assets/img/logo.png') }}" />
=======
    <meta property="og:image" content="/assets/img/logo.png" />
>>>>>>> 03337a71 (.)
    <meta property="og:type" content="website" />

    <meta name="twitter:image:alt" content="{{ $page->siteName }}">
    <meta name="twitter:card" content="summary_large_image">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <meta name="generator" content="tighten_jigsaw_doc">
    @endif

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="icon" href="{{ $page->baseUrl }}/favicon.ico">

<<<<<<< HEAD
    {{-- [{{ $page->baseUrl }}][{{ $page->url('/favicon.ico') }}][{{ $page->getUrl('/favicon.ico') }}] --}}

    @stack('meta')

    @if ($page->production)
        <!-- Insert analytics code here -->
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ url('assets/build/css/main.css') }}">



    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="{{ url('/assets/img/logo.svg') }}"
                        alt="{{ $page->siteName }} logo" />

=======
    <link rel="stylesheet" href="{{ mix('css/main.css', 'doc_activity/assets/build') }}">
=======
    <link rel="stylesheet" href="{{ $page->baseUrl }}/{{ mix('css/main.css', 'assets/build') }}">
>>>>>>> a6f39131 (.)

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="{{ $page->getUrl() }}" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="{{ $page->url('/assets/img/logo.svg') }}" alt="{{ $page->siteName }} logo" />

<<<<<<< HEAD
=======
=======
    <link rel="icon" href="/favicon.ico">
=======
    <link rel="icon" href="{{ $page->baseUrl }}/favicon.ico">
>>>>>>> a6f39131 (.)
=======
    [{{ $page->baseUrl }}][{{ $page->url('/favicon.ico') }}][{{ $page->getUrl('/favicon.ico') }}]
>>>>>>> 59dfed08 (.)

    @stack('meta')

    @if ($page->production)
        <!-- Insert analytics code here -->
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ $page->baseUrl }}/{{ mix('css/main.css', 'assets/build') }}">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

>>>>>>> 45626b53 (rebase)
>>>>>>> 03337a71 (.)
                    <h1 class="text-lg md:text-2xl text-blue-900 font-semibold hover:text-blue-600 my-0 pr-4">
                        {{ $page->siteName }}</h1>
                </a>
            </div>

            <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                @if ($page->docsearchApiKey && $page->docsearchIndexName)
                    @include('_nav.search-input')
                @endif
            </div>
        </div>

        @yield('nav-toggle')
    </header>

    <main role="main" class="w-full flex-auto">
        @yield('body')
    </main>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <script src="{{ url('assets/build/js/main.js') }}"></script>
=======
    <script src="{{ mix('js/main.js', 'doc_activity/assets/build') }}"></script>
>>>>>>> 03337a71 (.)
=======
    <script src="{{ $page->baseUrl }}/{{ mix('js/main.js', 'assets/build') }}"></script>
>>>>>>> a6f39131 (.)
=======
=======
>>>>>>> 6f3efd75 (rebase)
    <script src="{{ $page->baseUrl }}/{{ mix('js/main.js', 'assets/build') }}"></script>
=======
    <script src="{{ mix('js/main.js', 'doc_activity/assets/build') }}"></script>
>>>>>>> 03337a71 (.)
<<<<<<< HEAD
>>>>>>> 45626b53 (rebase)
=======
=======
    <script src="{{ $page->baseUrl }}/{{ mix('js/main.js', 'assets/build') }}"></script>
>>>>>>> a6f39131 (.)
>>>>>>> 6f3efd75 (rebase)

    @stack('scripts')

    <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
        <ul class="flex flex-col md:flex-row justify-center">
            <li class="md:mr-2">
                &copy; <a href="https://tighten.co" title="Tighten website">Tighten</a> {{ date('Y') }}.
            </li>

            <li>
                Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind
                    CSS</a>.
            </li>
        </ul>
    </footer>
</body>

</html>
