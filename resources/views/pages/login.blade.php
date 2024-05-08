<!DOCTYPE html>
<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('public/sneat/') }}"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ __('menu.auth.login') }} | DPPKB  PPPA</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{('black.jpeg')}}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('sneat/vendor/fonts/boxicons.css')}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" class="template-customizer-core-css" href="{{asset('sneat/vendor/css/core.css')}}"/>
    <link rel="stylesheet" class="template-customizer-theme-css"
          href="{{asset('sneat/vendor/css/theme-default.css')}}"/>
    <link rel="stylesheet" href="{{asset('sneat/css/demo.css')}}"/>

    <!-- Page -->
    <link rel="stylesheet" href="{{asset('sneat/vendor/css/pages/page-auth.css')}}"/>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
<!-- style="padding:100px; width:42%; margin:0 auto ;border-radius:15px;" -->
<div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ route('home') }}" class="app-brand-link gap-2" >
                        <img src="{{('black.jpeg')}}" alt="" width="100%">
                        <!-- <span class="app-brand-text demo  fw-bolder ms-2" style="color: tomato">{{ config('app.name') }}</span> -->
                        </a>
                    </div>

                    <form id="formAuthentication" action="/example" class="mb-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <x-input-form
                                name="email"
                                type="email"
                                :label="__('email')"
                            />
                        </div>
                        <div class="mb-3">
                            <x-input-form
                                name="password"
                                type="password"
                                :label="__('model.user.password')"
                            />
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary d-grid w-100" type="submit">{{ __('menu.auth.login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->
</body>
</html>
