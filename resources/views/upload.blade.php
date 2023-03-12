<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Сервис для создания субтитров</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

    <body style="font-family: Open Sans, sans-serif">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <h1 class="text-3xl text-blue-700">Добро пожаловать на сервис для создания субтитров</h1>

                <div class="mt-16">
                    <form action="https://storage.yandexcloud.net/subtitles-service" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="key" value="example.wav" />
                        <input type="hidden" name="success_action_redirect" value="http://localhost:8000/convert" />
                        
                        <input type="file" name="file" required>
                        <button class="rounded-xl text-white bg-blue-500 p-5" type="submit">
                            Отправить
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
