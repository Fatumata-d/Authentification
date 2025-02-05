<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Application Auth</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f4f6;
            color: #1a202c;
        }

        .bg-custom {
            background-color: #e2e8f0; /* Fond plus doux pour une meilleure lisibilité */
        }

        .button-link {
            text-decoration: underline;
            color: #3182ce; /* Bleu clair */
        }

        .button-link:hover {
            color: #2b6cb0; /* Bleu plus foncé pour le hover */
        }

        .container {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            color: #2d3748;
            text-align: center;
            margin-bottom: 20px;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="antialiased bg-custom">

    <div class="relative flex items-top justify-center min-h-screen py-4 sm:items-center">
        @if (Route::has('login'))
            <div class="container">
                <h1 class="title">Bienvenue sur l'application</h1>

                <div class="navigation">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="button-link">Tableau de bord</a>
                    @else
                        <a href="{{ route('login') }}" class="button-link">Se connecter</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button-link">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div>

</body>
</html>
