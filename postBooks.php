<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageSwap-Post Books</title>
</head>

<body>
        <div>
            <?php include 'header.php'; ?>
        </div>
        <div class="max-w-5xl max-lg:max-w-3xl mx-auto bg-white my-6 font-[sans-serif]">
            <div class="text-center px-6">
                <h2 class="text-gray-800 text-3xl font-extrabold">Post Books</h2>
                
            </div>

            <div class="grid lg:grid-cols-3 items-center gap-4 p-2 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-lg mt-12">

                <div class="bg-[#011c2b] rounded-lg p-6 flex flex-col items-center justify-center h-full max-lg:order-1">
                    <h2 class="text-xl text-white">Book Post Form</h2>
                    <p class="text-sm text-center text-gray-300 mt-4">Fill up the form to post your unused books and let other readers to read the book</p>

                   
                </div>

                <div class="p-4 lg:col-span-2">
                    <form>
                        <div class="flex flex-col gap-4">
                            <div class="relative flex items-center">
                                <input type="text" placeholder="Enter Books Name"
                                    class="px-2 py-3 bg-white w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 outline-none" />
                               
                            </div>
                            <div class="relative flex items-center">
                                <input type="text" placeholder="Enter Authos's Name"
                                    class="px-2 py-3 bg-white w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 outline-none" />
                                
                            </div>
                            <section class="md:grid grid-cols-2 ">
                            <div class="relative flex md:mr-2 items-center">
                                <input type="text" placeholder="Enter Your address"
                                    class="px-2 py-3 bg-white w-full text-sm text-gray-900 border-b border-gray-300 focus:border-blue-500 outline-none" />
                                
                            </div>
                            <div class="relative flex items-center">
                                <input type="text" placeholder="Enter Your Phone"
                                    class="px-2 py-3 bg-white w-full text-sm text-gray-900 border-b border-gray-300 focus:border-blue-500 outline-none" />
                                
                            </div>
                            </section>

                            <div class="relative flex items-center sm:col-span-2">
                                <textarea placeholder="Write Short description about the book..."
                                    class="px-2 pt-3 bg-white  w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 outline-none"></textarea>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2"
                                    viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                            d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                            data-original="#000000"></path>
                                        <path
                                            d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                            data-original="#000000"></path>
                                    </g>
                                </svg>
                                </div>

                            

                        </div>
                        <div class=" flex flex-wrap col-span-2 ">
                                <h6 class="text-sm mt-3 text-gray-800">Select Genre</h6>
                                <div class="flex flex-wrap max-lg:flex-col gap-6 mt-4">
                                    <div class="flex items-center">
                                        <input id="fiction" type="radio" name="value1" class="hidden peer" checked />
                                        <label for="fiction"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Fiction</p>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="nonfiction" type="radio" name="value1" class="hidden peer" />
                                        <label for="nonfiction"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Non-Fiction</p>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="mystery" type="radio" name="value1" class="hidden peer" />
                                        <label for="mystery"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Mystery</p>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="scienceFiction" type="radio" name="value1" class="hidden peer" />
                                        <label for="scienceFiction"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Science Fiction</p>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <input id="fantacy" type="radio" name="value1" class="hidden peer" />
                                        <label for="fantacy"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Fantacy</p>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="biographies" type="radio" name="value1" class="hidden peer" />
                                        <label for="biographies"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Biography</p>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="comic" type="radio" name="value1" class="hidden peer" />
                                        <label for="comic"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">Comic</p>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="history" type="radio" name="value1" class="hidden peer" />
                                        <label for="history"
                                            class="relative p-0.5 flex items-center justify-center shrink-0 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-5 h-5 cursor-pointer border-2 border-[#011c2b] rounded-full overflow-hidden">
                                            <span class="border-[4px] border-[#011c2b] rounded-full w-full h-full"></span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-4">History</p>
                                    </div>
                                    
                                </div>
                            </div>

                        <button type="button"
                            class="mt-12 flex items-center justify-center text-sm lg:ml-auto max-lg:w-full rounded-lg px-4 py-3 tracking-wide text-white bg-blue-600 hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2" viewBox="0 0 548.244 548.244">
                                <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                            </svg>
                            Post Book
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>