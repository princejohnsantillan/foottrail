<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foot Trail</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

       <!-- Styles -->
       <link rel="stylesheet" href="{{ mix('css/app.css') }}">

       <!-- Scripts -->
       <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

<div class="relative bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
      <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none" viewBox="0 0 640 784">
        <defs>
          <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
        <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
      </svg>
    </div>
    <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
      <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <h1>
              <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                <span class="text-gray-900">Foot</span>
                <span class="text-indigo-600">Trail</span>
              </span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              The global pandemic of COVID-19 erased the foot trails in public places, but with recent news of a vaccine we are expecting a flood of faithfuls returning to our stores. We still need to be vigilant.
              Foot Trail is a suite of tools that will help simplify contact tracing and minimize the foot trails caused by heavy queues and inefficient service processes.
            </p>
          </div>
          <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
              <defs>
                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
              </defs>
              <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
              <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
            </svg>
            <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
              <button type="button" class="relative block w-full bg-white rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <img class="w-full" src="https://images.unsplash.com/photo-1513171920216-2640b288471b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&h=1400&q=80" alt="">
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <br />

<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: globe-alt -->
                <x-fas-qrcode  class="h-6 w-6"/>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Scan and Done
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Customers no longer need to line up and repeatedly write (using one shared pen) their contact information. This is definitely a win win! Providers get more accurate data and customers enjoy the breezy process.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: scale -->
                <x-heroicon-s-user-group  class="h-6 w-6" />
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Rest Queue
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Rescue your crew from angry and complaining customers. Set your customers free from the agonizing bondage of standing in line, let them find rest in an effecient and intuitive queueing system.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: lightning-bolt -->
                <x-entypo-time-slot class="h-6 w-6" />
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Lose Wait
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                Don't let the waiter wait, and the customers too. Speed up the flow by reducing the foot trails from table to kitchen. Let the customers send their orders directly to the kitchen.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: annotation -->
                <x-entypo-heart class="h-6 w-6" />
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                QR the One
              </dt>
              <dd class="mt-2 text-base text-gray-500">
                You are the one that makes me money, I mean happy. Reward your customers easily with the same platform that simplfies their lives. The point of our software is to make our lives better, if you got that then add it to your account and continue collecting points.
              </dd>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <br />

  <!-- This example requires Tailwind CSS v2.0+ -->

  <div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        <span class="block">Ready to follow the trail?</span>
        <span class="block text-indigo-600">Register for an account today.</span>
      </h2>
      <div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            I'm a Service/Product Provider
          </a>
        </div>
        <div class="ml-0 sm:ml-3 mt-3 sm:mt-0 inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
            I'm a Customer/User
          </a>
        </div>
      </div>
    </div>
  </div>


    </body>
</html>
