<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp-to PageSwap</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <div class="  font-[sans-serif] flex h-screen">
    <img src="./assets/Page Swap.png" class="w-full h-fit  relative translate-y-[-80px] " alt="Dining Experience" />

    <div class="min-h-screen flex fle-col items-center justify-center px-10 absolute">
      <div class="grid lg:grid-cols-2 pl-12 mt-3 items-center gap-6 max-w-7xl max-lg:max-w-xl w-full">
        <form class="lg:max-w-md w-full">
          <h3 class="text-gray-800 text-5xl font-extrabold mb-6">Registration</h3>
          <div class="space-y-6">
            <div>
              <label class="text-gray-800 text-lg mb-2 block">Name</label>
              <input name="name" type="text" class="bg-gray-100 w-[480px] text-gray-800 px-5 py-4 rounded-lg focus:bg-transparent outline-black transition-all text-lg font-semibold" placeholder="Enter name" />
            </div>
            <div>
              <label class="text-gray-800 text-lg mb-2 block">Email</label>
              <input name="email" type="text" class="bg-gray-100 w-[480px] text-gray-900  px-5 py-4 rounded-lg focus:bg-transparent outline-black transition-all text-lg font-semibold" placeholder="Enter email" />
            </div>
            <div>
              <label class="text-gray-800 text-lg mb-2 block">Password</label>
              <input name="password" type="password" class="bg-gray-100 w-[480px] text-gray-800  px-5 py-4 rounded-lg focus:bg-transparent outline-black transition-all text-lg font-semibold" placeholder="Enter password" />
            </div>
            <!-- <div class="flex items-center">
              <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 border-gray-300 rounded" />
              <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                I accept the <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
              </label>
            </div> -->
          </div>

          <div class="mt-8">
            <button type="button" class="py-4 px-8 text-md font-semibold rounded-md transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">
              Create an account
            </button>
          </div>
          <p class="text-lg text-gray-800 mt-8">Already have an account? <a href="signin.php" class="text-green-700 font-bold hover:cursor-pointer ml-1">Login here</a></p>
        </form>

      </div>
    </div>
  </div>

  </Section>
</body>

</html>