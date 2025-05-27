<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { 
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
            background-image: url("https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L2lzMTYwNjItaW1hZ2Uta3d2eWZrd3IuanBn.jpg");
            background-image: url("https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L2lzMTYwNjItaW1hZ2Uta3d2eWZrd3IuanBn.jpg");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                position: relative;
                overflow: hidden;
            }

            body::before {
                content: '';
                position: fixed;
                top: -50%;
                left: -50%;
                right: -50%;
                bottom: -50%;
                background: linear-gradient(45deg, rgba(85, 39, 112, 0.7), rgba(111, 93, 139, 0.7));
                animation: rotate 20s linear infinite;
                z-index: -1;
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            .auth-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-radius: 1rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
                transform: translateY(20px);
                animation: float 2s ease-out forwards;
            }

            @keyframes float {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .site-title {
                text-decoration: none;
                background: linear-gradient(45deg, #fff, #e6e6e6);
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                font-weight: bold;
                font-size: 2rem;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
            }

            .site-title:hover {
                transform: scale(1.05);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/" class="site-title">
                    My FOOD BLOG
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 auth-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
