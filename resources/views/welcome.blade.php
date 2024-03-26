<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple">
    <!-- header logo -->
    <div x-data="{ isOpen: false }" class="flex   bg-transparent ">
        <div class="flex items-center">
            <img src="{{ asset('images/technology-logo-template-png_37582-removebg-preview.png') }}" class="h-36 mb-3">
            <h3 class="text-3xl font-sans text-white mr-10 pb-10">WorkTech</h3>
        </div>

        <!--  header links -->
        <div class="flex pt-8 ">
            <button @click="isOpen = !isOpen " type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-16 ml-64 text-white md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden space-x-6 md:inline-block pl-52 pt-3">
                <a href="#" class="text-base text-white">Home</a>
                <a href="#" class="text-base text-white">About</a>
                <a href="#" class="text-base text-white">Why worktech</a>
                <a href="#" class="text-base text-white">Careers</a>
                <a href="#" class="text-base float-right text-white hover:text-purple">Contact</a>
            </div>

            <!-- mobile navbar -->
            <div class="mobile-navbar">
                <!-- navbar wrapper -->
                <div class="fixed left-0 w-full h-48 p-5 bg-transparent rounded-lg shadow-xl top-16" x-show="isOpen" @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="#" class="text-sm text-white">Home</a>
                        <a href="#" class="text-sm text-white">Contact</a>
                        <a href="#" class="text-sm text-white">Menu3</a>
                        <button class="bg-orange-600 hover:text-purple text-white font-bold py-2 px-4 rounded "><a href="#" class="text-base text-white hover:text-purple ml-52">Sign Up</a></button>
                    </div>
                </div>
            </div>
            <!-- end mobile navbar -->
        </div>
        <button class="bg-orange-600 hover:text-purple text-white font-sans h-10 w-24 mt-11 ml-80 rounded "><a href="#" class="text-base text-white hover:text-purple ">Sign Up</a></button>
    </div>
</body>
</html>
