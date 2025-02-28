<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen p-6">
<nav class="bg-white rounded-lg shadow-lg p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold text-blue-900">
                Stock Management System
            </div>
            <div class="space-x-6">
                <a href="/Dashboard" class="text-gray-700 hover:text-blue-900">Dashboard</a>
                <a href="/Students" class="text-gray-700 hover:text-blue-900">Students</a>
                <a href="/courses" class="text-gray-700 hover:text-blue-900">Courses</a>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-gray-600">Logged In as:</span>
                <a href="/Logout" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Available Courses</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($courses as $course)
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $course->title }}</h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $course->description }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-indigo-600 dark:text-indigo-400 font-medium">${{ $course->price }}</span>
                            <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                {{ $course->duration }} hours
                            </span>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Instructor: {{ $course->instructor }}</span>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-150 ease-in-out">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500 dark:text-gray-400">No courses available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
