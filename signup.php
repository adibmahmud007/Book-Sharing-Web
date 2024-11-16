<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp-to PageSwap</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <Section class="bg-slate-200 w-full min-h-screen flex justify-center items-center">
    <div class="w-[900px] h-[450px] bg-white rounded-xl  shadow-xl flex gap-12 pt-20 pl-14">

      <form class="flex gap-10 flex-col  w-[400px]" action="signup.php" method="post">
        <input class="border border-black py-2 px-3 rounded-lg text-xl font-semibold" type="text" name="username" placeholder="Enter Username">
        <input class="border border-black py-2 px-3 rounded-lg text-xl font-semibold" type="email" name="email" placeholder="Enter Email">
        <input class="border border-black py-2 px-3 rounded-lg text-xl font-semibold" type="password" name="password" placeholder="Enter Password">
        <input class="px-2 py-2 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 w-[100px] rounded-lg text-lg font-semibold" type="submit" name="signup" value="Signup">
      </form>
      <div class="mt-12 ">
        <h2 class="text-3xl font-bold ml-5">Signin to PageSwap</h2>
        <p class="text-xl font-semibold italic ml-4">Get to the world of knowledge <br> by sharing books</p>
      </div>
    </div>

  </Section>
</body>

</html>