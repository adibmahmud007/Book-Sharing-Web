<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Books - Dynamic List</h1>
    <div id="books-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Dynamic book cards will be inserted here -->
    </div>
  </div>

  <script>
    // Book data (dynamic content)
    const books = [
      {
        title: "The Great Gatsby",
        description: "A classic novel by F. Scott Fitzgerald about the Jazz Age and the American Dream.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "1984",
        description: "George Orwell's dystopian novel about a totalitarian society under constant surveillance.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "To Kill a Mockingbird",
        description: "Harper Lee's timeless story of racial injustice and childhood in the Deep South.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "Moby-Dick",
        description: "Herman Melville's epic tale of a sea captain's obsession with a white whale.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "Pride and Prejudice",
        description: "Jane Austen's romantic novel about manners, marriage, and society.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "The Catcher in the Rye",
        description: "J.D. Salinger's story of teenage rebellion and disillusionment.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "The Catcher in the Rye",
        description: "J.D. Salinger's story of teenage rebellion and disillusionment.",
        image: "https://via.placeholder.com/150"
      },
      {
        title: "The Catcher in the Rye",
        description: "J.D. Salinger's story of teenage rebellion and disillusionment.",
        image: "https://via.placeholder.com/150"
      },
    ];

    // Function to dynamically render books
    const renderBooks = () => {
      const container = document.getElementById("books-container");
      container.innerHTML = ""; // Clear existing content

      books.forEach(book => {
        const bookCard = document.createElement("div");
        bookCard.className = "bg-white shadow-lg rounded-lg p-4";

        bookCard.innerHTML = `
          <img src="${book.image}" alt="${book.title}" class="w-full h-40 object-cover mb-4 rounded">
          <h2 class="text-xl font-semibold text-gray-800">${book.title}</h2>
          <p class="text-gray-600 mb-4">${book.description}</p>
          <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none w-full">
            Select
          </button>
        `;
        container.appendChild(bookCard);
      });
    };

    // Initialize the rendering process
    document.addEventListener("DOMContentLoaded", renderBooks);
  </script>
</body>
</html>
