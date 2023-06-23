<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @font-face {
            font-family: 'Anurati';
            src: url("./font/Anurati-Regular.otf") format("opentype");
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    'anurati': ["Anurati"]
                },
                extend: {},
            },
        }
    </script>
</head>

<body class="h-screen bg-[url('images/cyber.jpg')] bg-cover relative">
    <div class="flex items-center justify-center h-full mx-auto ">
        <form action="?php=loginproc#pos" method="post" class="relative z-10 flex flex-col items-center justify-center w-screen h-screen gap-3 p-8 rounded-md shadow-2xl text-slate-200 bg-black/50 backdrop-blur-sm sm:w-fit sm:h-fit ">
            <div class="flex flex-col items-center justify-center gap-2 ">
                <h6 class="mb-6 text-sm font-light text-slate-200">Do you have an Account?</h6>
                <h2 class="mb-2 text-2xl font-medium text-slate-200 font-anurati">Login</h2>
            </div>

            <div class="flex flex-col items-center w-fit">
                <div class="relative flex items-center pl-3 mb-3 border rounded-md border-slate-200">
                    <input type="text" name="username" placeholder="username" required class="w-full px-2 py-0.5 text-lg transition-colors bg-transparent border-l-0 rounded-md rounded-l-none outline-none text-slate-200 placeholder:text-transparent peer disabled:cursor-not-allowed disabled:opacity-20" />
                    <label for="username" class="absolute z-20 px-1 text-sm transition-transform scale-90 -translate-x-8 -translate-y-8 rounded-full text-slate-200 left-9 top-1/2 backdrop-blur-sm peer-focus:-translate-x-8 peer-focus:-translate-y-7 peer-focus:scale-90 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:translate-x-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-slate-200">
                        <span>Username</span>
                    </label>
                </div>

                <div class="relative flex items-center pl-3 mb-3 border rounded-md border-slate-200">
                    <input type="password" name="pass" placeholder="password" required class="w-full px-2 py-0.5 text-lg transition-colors bg-transparent border-l-0 rounded-md rounded-l-none outline-none text-slate-200 placeholder:text-transparent peer disabled:cursor-not-allowed disabled:opacity-20" />
                    <label for="pass" class="absolute z-20 px-1 text-sm transition-transform scale-90 -translate-x-8 -translate-y-8 rounded-full text-slate-200 left-9 top-1/2 backdrop-blur-sm peer-focus:-translate-x-8 peer-focus:-translate-y-7 peer-focus:scale-90 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:translate-x-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:text-slate-200">
                        <span>Password</span>
                    </label>
                </div>
            </div>
            <button class="w-full py-1 text-blue-500 transition-colors duration-200 bg-white border rounded-md dark:text-blue-400 active:bg-slate-300 border-slate-200 drop-shadow-lg hover:bg-slate-200 hover:text-blue-700">Login</button>
        </form>
    </div>
</body>

</html>