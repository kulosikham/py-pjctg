<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area</title>
    <link href="tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl">Client Portal</h1>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <nav class="w-1/4 bg-white shadow-md h-screen p-4">
            <ul>
                <li class="mb-4">
                    <a href="#" class="text-blue-600 hover:underline">Dashboard</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-blue-600 hover:underline">Profile</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-blue-600 hover:underline">Settings</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-blue-600 hover:underline">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            <div class="container mx-auto">
                <h2 class="text-xl font-bold mb-4">Welcome to the Client Area</h2>
                <p class="mb-4">This is the main content area where you can put information relevant to the client.</p>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold mb-2">Recent Activity</h3>
                    <ul>
                        <li class="mb-2">Activity 1</li>
                        <li class="mb-2">Activity 2</li>
                        <li class="mb-2">Activity 3</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

</body>
</html>
