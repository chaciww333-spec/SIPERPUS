<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('/') }}" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/fonts/flag-icons.css') }}" />


    <link rel="stylesheet" href="{{ asset('/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />

    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/vendor/libs/typeahead-js/typeahead.css') }}" />

    <link rel="stylesheet" href="{{ asset('/vendor/libs/@form-validation/form-validation.css') }}" />

    <link rel="stylesheet" href="{{ asset('/vendor/css/pages/page-auth.css') }}" />

    <script src="{{ asset('/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('/vendor/js/template-customizer.js') }}"></script>

    <script src="{{ asset('/js/config.js') }}"></script>
</head>

<body>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">

                <div class="card">
                    <div class="card-body">

                        <div class="app-brand justify-content-center mb-6">
                            <a href="index.html" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 64 64" fill="none">
                                        <!-- Cover buku -->
                                        <path d="M12 8H52V56H12C9.79 56 8 54.21 8 52V12C8 9.79 9.79 8 12 8Z"
                                            fill="#E75480" />
                                        <!-- Bagian samping buku -->
                                        <path d="M52 8H44V56H52C54.21 56 56 54.21 56 52V12C56 9.79 54.21 8 52 8Z"
                                            fill="#d64572" />
                                        <!-- Garis dekorasi halaman -->
                                        <path d="M16 16H40V20H16V16Z" fill="white" />
                                        <path d="M16 24H36V28H16V24Z" fill="white" />
                                        <path d="M16 32H32V36H16V32Z" fill="white" />
                                    </svg>
                                </span>

                                <span class="app-brand-text demo text-heading fw-bold">Login</span>
                            </a>
                        </div>

                        <h4 class="mb-1">WELCOME TO SIPERPUS! 👋</h4>
                        <p class="mb-6">Please sign-in to your account and start the adventure</p>

                        <form id="formAuthentication" class="mb-4" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="my-8">
                                <div class="d-flex justify-content-between">
                                    <div class="form-check mb-0 ms-2">
                                        <input class="form-check-input" type="checkbox" id="remember-me" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('/vendor/libs/@form-validation/auto-focus.js') }}"></script>

    <script src="{{ asset('/js/main.js') }}"></script>

    <script src="{{ asset('/js/pages-auth.js') }}"></script>
</body>

</html>
