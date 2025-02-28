<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
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
                <a href="/courses" class="text-gray-700 hover:text-blue-900">Courses</a>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-gray-600">Logged In as:{{$username}}</span>
                <a href="/Logout" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-white">Students List</h1>
            <button onclick="openModal()" class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800 transition">
                Add New Student
            </button>
        </div>

        <!-- Modal Overlay -->
        <div id="studentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
            <div class="bg-white rounded-lg p-8 max-w-2xl w-full">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-blue-900">Register New Student</h2>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <form action="/Students" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First Name -->
                        <div>
                            <label for="FirstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" name="FirstName" id="FirstName" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="LastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" name="LastName" id="LastName" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="Gender" class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                            <select name="Gender" id="Gender" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="DateOfBirth" class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                            <input type="date" name="DateOfBirth" id="DateOfBirth" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Contact Number -->
                        <div>
                            <label for="ContactNumber" class="block text-sm font-medium text-gray-700 mb-2">Contact Number</label>
                            <input type="tel" name="ContactNumber" id="ContactNumber" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="Email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="Email" id="Email" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Address -->
                        <div class="md:col-span-2">
                            <label for="Address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                            <input type="text" name="Address" id="Address" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>

                        <!-- Enrollment Date -->
                        <div class="md:col-span-2">
                            <label for="EnrollmentDate" class="block text-sm font-medium text-gray-700 mb-2">Enrollment Date</label>
                            <input type="date" name="EnrollmentDate" id="EnrollmentDate" required 
                                class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                            />
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" 
                            class="w-full px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-300">
                            Register Student
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="bg-blue-900 text-white">
                        <th class="px-6 py-4 text-left">ID</th>
                        <th class="px-6 py-4 text-left">First Name</th>
                        <th class="px-6 py-4 text-left">Last Name</th>
                        <th class="px-6 py-4 text-left">Gender</th>
                        <th class="px-6 py-4 text-left">Date of Birth</th>
                        <th class="px-6 py-4 text-left">Contact</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Address</th>
                        <th class="px-6 py-4 text-left">Enrollment Date</th>
                        <th class="px-6 py-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $student->StudentId }}</td>
                        <td class="px-6 py-4">{{ $student->FirstName }}</td>
                        <td class="px-6 py-4">{{ $student->LastName }}</td>
                        <td class="px-6 py-4">{{ $student->Gender }}</td>
                        <td class="px-6 py-4">{{ $student->DateofBirth }}</td>
                        <td class="px-6 py-4">{{ $student->ContactNumber }}</td>
                        <td class="px-6 py-4">{{ $student->Email }}</td>
                        <td class="px-6 py-4">{{ $student->Address }}</td>
                        <td class="px-6 py-4">{{ $student->EnrollmentDate }}</td>
                        <td class="px-6 py-4 flex gap-3">
                            <a href="{{ route('Students.edit', $student->StudentId) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('Students.destroy', $student->StudentId) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    </div>    <script>
        function openModal() {
            document.getElementById('studentModal').classList.remove('hidden');
            document.getElementById('studentModal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('studentModal').classList.add('hidden');
            document.getElementById('studentModal').classList.remove('flex');
        }
    </script>
</body>
</html>

