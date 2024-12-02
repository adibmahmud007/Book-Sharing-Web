<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageSwap-Home</title>

</head>

<body class="bg-gray-100">
    <div>
        <?php
        include 'header.php';
        ?>
    </div>
    <section class="max-w-[85rem] mx-auto">
        <div class="max-w-[950px] bg-gray-100 max-sm:px-8 px-5 py-12 w-full rounded-md font-[sans-serif]">
            <h1 class="text-gray-800 sm:text-6xl text-3xl font-extrabold">Welcome to PageSwap</h1>
            <div class="mt-6">
                <p class=" text-md text-gray-600 leading-relaxed">
                    Our platform is a community-driven website where book enthusiasts can share, borrow, and discover new reads. Whether you’re looking to lend your favorite novels or borrow a book you’ve been eager to read, our service connects readers, fosters knowledge exchange, and promotes sustainable reading habits. Join us to expand your library without buying more books!.</p>
            </div>
            <button type="button" class="mt-8 px-6 py-3 rounded-md text-white text-sm tracking-wider border-none outline-none bg-blue-600 hover:bg-blue-700">Get started now</button>
        </div>
        <div>
            <div class="">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Explore Book Categories</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Category Card -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/fiction.jpg" alt="Fiction" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Fiction</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('fiction')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/Non_fiction.jpg" alt="Non-Fiction" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Non-Fiction</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('nonfiction')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/mystery.jpg" alt="Mystery" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Mystery</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('Mystery')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/science.jpg" alt="Science Fiction" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Science Fiction</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('Science Fiction')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/fantacy.jpg" alt="Fantasy" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Fantasy</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('Fantasy')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/biograpgy.jpg" alt="Biographies" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Biographies</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('Biographies')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/comic.jpg" alt="Romance" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Comic</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('Romance')">View Books</button>
                    </div>

                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <img src="./assets/history.jpg" alt="History" class="mx-auto w-[250px] h-[300px] mb-4 rounded">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">History</h2>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none" onclick="navigateToCategory('History')">View Books</button>
                    </div>
                </div>
            </div>


            <script>
                function navigateToCategory(page) {
                    console.log(page);
                    // e.preventDefault();
                    // Construct the URL for navigation
                    const baseUrl = window.location.origin; // Gets the current domain, e.g., "https://example.com"
                    const url = `${baseUrl}/PHP/Book Sharing Web/books.php?page=${page}`;

                    // Navigate to the constructed URL
                    window.location.href = url;
                }
            </script>
        </div>
    </section>
    <div>
        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>