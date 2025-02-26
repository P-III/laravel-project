<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#040445] min-h-screen p-6">
    <nav class="bg-white rounded-lg shadow-lg p-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold text-blue-900">
                Stock Management System
            </div>
            <div class="space-x-6">
                <a href="/Dashboard" class="text-gray-700 hover:text-blue-900">Dashboard</a>
                <a href="/Students" class="text-gray-700 hover:text-blue-900">Students</a>
                <a href="/reports" class="text-gray-700 hover:text-blue-900">Reports</a>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-gray-600">Logged In as:{{$username}}</span>
                <a href="/Logout" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-white mb-6">Dashboard Overview</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Total Students</h2>
                <p class="text-3xl font-bold text-gray-700">{{$totalStudents}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Active Students</h2>
                <p class="text-3xl font-bold text-gray-700">{{$activeStudents}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Total Courses</h2>
                <p class="text-3xl font-bold text-gray-700">{{$totalCourses}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-2">Total Staff</h2>
                <p class="text-3xl font-bold text-gray-700">{{$totalStaff}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-4">Recent Activities</h2>
                <div class="space-y-4">
                    @foreach($recentActivities as $activity)
                    <div class="border-b border-gray-200 pb-3">
                        <p class="text-gray-700">{{$activity->description}}</p>
                        <span class="text-sm text-gray-500">{{$activity->date}}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-900 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="/students/create" class="bg-blue-900 text-white p-4 rounded-lg text-center hover:bg-blue-800 transition">
                        Add New Student
                    </a>
                    <a href="/courses/create" class="bg-blue-900 text-white p-4 rounded-lg text-center hover:bg-blue-800 transition">
                        Add New Course
                    </a>
                    <a href="/reports/generate" class="bg-blue-900 text-white p-4 rounded-lg text-center hover:bg-blue-800 transition">
                        Generate Report
                    </a>
                    <a href="/settings" class="bg-blue-900 text-white p-4 rounded-lg text-center hover:bg-blue-800 transition">
                        Settings
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
