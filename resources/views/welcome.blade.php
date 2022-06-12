<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
  @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
      @endauth
    </div>
  @endif
  <main class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
      <div>
        <h2 class="text-base font-semibold text-indigo-600 uppercase tracking-wide">Quick Quiz App Demo</h2>
        <p class="mt-2 text-3xl font-extrabold dark:text-gray-100 text-gray-900">UAS Connect</p>
        <p class="mt-4 text-lg text-gray-500">Given 5-10 hours to build and deploy a Laravel 9 app for demo, this is
          what was accomplished. Areas for opportunity if given more time are listed with x's.</p>
      </div>
      <div class="mt-12 lg:mt-0 lg:col-span-2">
        <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-5 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
          {{--<span class="mt-2 ml-9 text-base text-gray-500">You can manage phone, email and chat conversations all from a--}}
          {{--  single mailbox.--}}
          {{--</span>--}}
          @foreach($pros as $pro)
            <div class="relative">
              <dt>
                <!-- Heroicon name: outline/check -->
                <svg
                  class="absolute h-6 w-6 text-green-500"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <p class="ml-9 text-lg leading-6 font-medium text-gray-100">{{$pro}}</p>
              </dt>
            </div>
          @endforeach
          {{--<span class="mt-2 ml-9 text-base text-gray-500">You can manage phone, email and chat conversations all from a--}}
          {{--  single mailbox.--}}
          {{--</span>--}}
          @foreach($cons as $con)
            <div class="relative">
              <dt>
                <!-- Heroicon name: outline/check -->
                <svg
                  class="absolute h-6 w-6 text-red-500"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <p class="ml-9 text-lg leading-6 font-medium text-gray-100">{{$con}}</p>
              </dt>
            </div>
          @endforeach
          {{--<div class="relative">--}}
          {{--  <dt>--}}
          {{--    <!-- Heroicon name: outline/check -->--}}
          {{--    <svg--}}
          {{--      class="absolute h-6 w-6 text-green-500"--}}
          {{--      xmlns="http://www.w3.org/2000/svg"--}}
          {{--      fill="none"--}}
          {{--      viewBox="0 0 24 24"--}}
          {{--      stroke-width="2"--}}
          {{--      stroke="currentColor"--}}
          {{--      aria-hidden="true"--}}
          {{--    >--}}
          {{--      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />--}}
          {{--    </svg>--}}
          {{--    <p class="ml-9 text-lg leading-6 font-medium text-gray-100">List view</p>--}}
          {{--  </dt>--}}
          {{--  <dd class="mt-2 ml-9 text-base text-gray-500">You can manage phone, email and chat conversations all from a--}}
          {{--    single mailbox.--}}
          {{--  </dd>--}}
          {{--</div>--}}
          {{--<div class="relative">--}}
          {{--  <dt>--}}
          {{--    <!-- Heroicon name: outline/check -->--}}
          {{--    <svg--}}
          {{--      class="absolute h-6 w-6 text-green-500"--}}
          {{--      xmlns="http://www.w3.org/2000/svg"--}}
          {{--      fill="none"--}}
          {{--      viewBox="0 0 24 24"--}}
          {{--      stroke-width="2"--}}
          {{--      stroke="currentColor"--}}
          {{--      aria-hidden="true"--}}
          {{--    >--}}
          {{--      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />--}}
          {{--    </svg>--}}
          {{--    <p class="ml-9 text-lg leading-6 font-medium text-gray-100">Keyboard shortcuts</p>--}}
          {{--  </dt>--}}
          {{--  <dd class="mt-2 ml-9 text-base text-gray-500">You can manage phone, email and chat conversations all from a--}}
          {{--    single mailbox.--}}
          {{--  </dd>--}}
          {{--</div>--}}
          {{--<div class="relative">--}}
          {{--  <dt>--}}
          {{--    <!-- Heroicon name: outline/check -->--}}
          {{--    <svg--}}
          {{--      class="absolute h-6 w-6 text-green-500"--}}
          {{--      xmlns="http://www.w3.org/2000/svg"--}}
          {{--      fill="none"--}}
          {{--      viewBox="0 0 24 24"--}}
          {{--      stroke-width="2"--}}
          {{--      stroke="currentColor"--}}
          {{--      aria-hidden="true"--}}
          {{--    >--}}
          {{--      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />--}}
          {{--    </svg>--}}
          {{--    <p class="ml-9 text-lg leading-6 font-medium text-gray-100">Calendars</p>--}}
          {{--  </dt>--}}
          {{--  <dd class="mt-2 ml-9 text-base text-gray-500">You can manage phone, email and chat conversations all from a--}}
          {{--    single mailbox.--}}
          {{--  </dd>--}}
          {{--</div>--}}
        </dl>
      </div>
    </div>
  </main>
</div>
<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>
