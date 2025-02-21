<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="p-6 bg-white rounded-lg shadow-md">
        <img src="https://t3.ftcdn.net/jpg/05/80/42/48/360_F_580424812_lDpSgGk9tT5o2Iz9V84seyhTWJlLhf4v.jpg" alt="Hogwarts" class="object-cover w-full h-48 rounded-t-lg">
        <h1 class="mb-4 text-3xl font-bold text-center text-gold">Contact Form Submission</h1>
        <div class="p-4 bg-gray-800 rounded-lg bg-opacity-80">
            <p class="mb-2 text-white"><strong class="text-yellow-300">Name:</strong> <span class="text-gray-200">{{ $data['name'] }}</span></p>
            <p class="mb-2 text-white"><strong class="text-yellow-300">Email:</strong> <span class="text-gray-200">{{ $data['email'] }}</span></p>
            <p class="mb-2 text-white"><strong class="text-yellow-300">Message:</strong> <span class="text-gray-200">{{ $data['message'] }}</span></p>
        </div>
    </div>
</body>
</html>


