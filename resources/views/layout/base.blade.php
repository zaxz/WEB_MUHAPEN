<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script type="module">
        import preline from 'https://cdn.jsdelivr.net/npm/preline@3.0.1/+esm'
    </script>
    <title>SMK Muhammadiyah Pencongan</title>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <header class="mb-8">
            <h1 class="text-3xl font-bold">SMK Muhammadiyah Pencongan</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="mt-8">
            <p>&copy; 2023 SMK Muhammadiyah Pencongan. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>