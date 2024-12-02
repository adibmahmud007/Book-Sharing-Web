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
        <?php include 'header.php'; 
        
        $page= isset($_GET['page'])? $_GET['page'] : null;
        // echo $page;
        ?>
    </div>

    <!-- Book Section -->
    <div id="book-container" class="flex flex-wrap justify-center"></div>

    <script>
        const books = [{
                name: "Book One",
                author: "Author One",
                image: "assets/fiction.jpg",
                genre: "fiction"
            },
            {
                name: "Book Two",
                author: "Author Two",
                image: "assets/nonfiction.jpg",
                genre: "fiction"
            },
            {
                name: "Book Three",
                author: "Author Three",
                image: "assets/scifi.jpg",
                genre: "nonfiction"
            }
        ];

        const container = document.getElementById('book-container');
        const page = <?php echo json_encode($page); ?>;
        console.log("Page received in JS:", page);
        books.forEach(book => {
            if(page == book.genre){
            const bookDiv = document.createElement('div');
            bookDiv.className = "bg-white shadow-xl rounded-lg p-4 w-[250px] mx-2 my-2 text-center";

            bookDiv.innerHTML = `
            <img class="w-full h-64 object-cover rounded-t-lg" 
                 src="${book.image}" 
                 alt="${book.name}">
            <div class="p-2">
                <h3 class="text-lg font-semibold text-black">${book.name}</h3>
                <p class="text-sm text-gray-400 font-serif">${book.author}</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                    See Details
                </button>
            </div>
        `;

            container.appendChild(bookDiv);}
        });
    </script>
    <div>
        <?php include 'footer.php'; ?>
    </div>

</body>

</html>