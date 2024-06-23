<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Client Area</h2>
        <?php
        // Ini hanya contoh statis, biasanya data ini akan diambil dari database
        $user = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'joined' => 'January 15, 2023',
        ];
        ?>
        <div class="space-y-4">
            <div class="text-gray-700">
                <span class="font-semibold">Name:</span>
                <span><?php echo htmlspecialchars($user['name']); ?></span>
            </div>
            <div class="text-gray-700">
                <span class="font-semibold">Email:</span>
                <span><?php echo htmlspecialchars($user['email']); ?></span>
            </div>
            <div class="text-gray-700">
                <span class="font-semibold">Joined:</span>
                <span><?php echo htmlspecialchars($user['joined']); ?></span>
            </div>
        </div>
        <div class="mt-6 flex justify-end">
            <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
