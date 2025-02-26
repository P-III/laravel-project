<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#040445] min-h-screen p-6">
    <div class="container mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Student Information</h2>
            
            <form action="/Students/{{ $student->StudentId }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="FirstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" name="FirstName" id="FirstName" value="{{ $student->FirstName }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div>
                    <label for="LastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" name="LastName" id="LastName" value="{{ $student->LastName }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div>
                    <label for="Gender" class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                    <select name="Gender" id="Gender" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        <option value="Male" {{ $student->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ $student->Gender == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div>
                    <label for="DateofBirth" class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                    <input type="date" name="DateofBirth" id="DateofBirth" value="{{ $student->DateofBirth }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div>
                    <label for="ContactNumber" class="block text-sm font-medium text-gray-700 mb-2">Contact Number</label>
                    <input type="tel" name="ContactNumber" id="ContactNumber" value="{{ $student->ContactNumber }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div>
                    <label for="Email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="Email" id="Email" value="{{ $student->Email }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div class="md:col-span-2">
                    <label for="Address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                    <input type="text" name="Address" id="Address" value="{{ $student->Address }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div class="md:col-span-2">
                    <label for="EnrollmentDate" class="block text-sm font-medium text-gray-700 mb-2">Enrollment Date</label>
                    <input type="date" name="EnrollmentDate" id="EnrollmentDate" value="{{ $student->EnrollmentDate }}" required 
                        class="block w-full px-4 py-3 text-gray-700 bg-white border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    />
                </div>

                <div class="md:col-span-2 flex justify-end gap-4">
                    <a href="/Students" class="px-6 py-3 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition-all duration-300">
                        Cancel
                    </a>
                    <button type="submit" 
                        class="px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-300">
                        Update Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
