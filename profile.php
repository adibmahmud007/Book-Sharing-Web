<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageSwap - Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function showContent(contentId) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById(contentId).classList.remove('hidden');
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Main container -->
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="text-white shadow-md">
            <?php include 'header.php'; ?>
        </header>

        <!-- Main content area -->
        <div class="flex flex-1">
            <!-- Sidebar -->
            <nav class="bg-white h-auto shadow-lg w-60 py-8 px-4 font-[sans-serif] overflow-auto">
                <ul>
                    <li>
                        <button onclick="showContent('dashboard')"
                            class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                            Dashboard
                        </button>
                    </li>
                </ul>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Information</h6>
                    <ul class="mt-2">
                        <li>
                            <button onclick="showContent('audience')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Audience
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('posts')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Posts
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('schedules')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Schedules
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('promote')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Promote
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Income</h6>
                    <ul class="mt-2">
                        <li>
                            <button onclick="showContent('earnings-taxes')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Earnings and taxes
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('refunds')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Refunds
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('declines')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Declines
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('payouts-details')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Payouts Details
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Actions</h6>
                    <ul class="mt-2">
                        <li>
                            <button onclick="showContent('profile')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Profile
                            </button>
                        </li>
                        <li>
                            <button onclick="showContent('logout')"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content area -->
            <main class="flex-1 p-8">
                <section id="dashboard" class="content-section">
                    <h1 class="text-2xl font-bold text-gray-700">Dashboard</h1>
                    <p class="text-gray-600 mt-4">Overview of your activities.</p>
                </section>
                <section id="audience" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Audience</h1>
                    <p class="text-gray-600 mt-4">Details about your audience.</p>
                </section>
                <section id="posts" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Posts</h1>
                    <p class="text-gray-600 mt-4">Manage your posts here.</p>
                </section>
                <section id="schedules" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Schedules</h1>
                    <p class="text-gray-600 mt-4">View and manage schedules.</p>
                </section>
                <section id="promote" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Promote</h1>
                    <p class="text-gray-600 mt-4">Promote your content here.</p>
                </section>
                <section id="earnings-taxes" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Earnings and Taxes</h1>
                    <p class="text-gray-600 mt-4">Manage your earnings and taxes.</p>
                </section>
                <section id="refunds" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Refunds</h1>
                    <p class="text-gray-600 mt-4">Manage your refunds here.</p>
                </section>
                <section id="declines" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Declines</h1>
                    <p class="text-gray-600 mt-4">Details of declined transactions.</p>
                </section>
                <section id="payouts-details" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Payouts Details</h1>
                    <p class="text-gray-600 mt-4">Details about payouts.</p>
                </section>
                <section id="profile" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Profile</h1>
                    <p class="text-gray-600 mt-4">Edit your profile information.</p>
                </section>
                <section id="logout" class="content-section hidden">
                    <h1 class="text-2xl font-bold text-gray-700">Logout</h1>
                    <p class="text-gray-600 mt-4">You can log out from here.</p>
                </section>
            </main>
        </div>

        <!-- Footer -->
        <footer class="text-white text-center">
            <?php include 'footer.php'; ?>
        </footer>
    </div>
</body>

</html>
