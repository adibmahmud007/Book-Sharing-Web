<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiction Books</title>
    <!-- Importing Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Header Section -->
    <div>
        <?php include 'header.php'; ?>
    </div>

    <!-- Book Section -->
    <section class="">
        <div class="bg-white shadow-xl rounded-lg p-4 w-[250px] text-center">
            <!-- Image -->
            <img class="w-full h-64 object-cover rounded-t-lg" 
                 src="assets/fiction.jpg" 
                 alt="Fiction Book Cover">
            <!-- Book Details -->
            <div class="p-2">
                <h3 class="text-lg font-semibold text-black">Book Name</h3>
                <p class="text-sm text-gray-400 font-serif">Author's Name</p>
                <!-- Details Button -->
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                    See Details
                </button>
            </div>
        </div>
    </section>

</body>

</html>
