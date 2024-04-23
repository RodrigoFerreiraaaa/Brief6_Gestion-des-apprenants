<?php

include __DIR__ . '/Includes/headerDeconnexion.php';

?>

<nav class="bg-white-800 border-b-2 mr-5 ml-5">
    <div class=" max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden  sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-black hover:text-white" -->
                        <a href="#" class="text-blue-600 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Accueil</a>
                        <a href="#" class="text-blue-600 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Promotions</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-black", Default: "text-black hover:text-black" -->
            <a href="#" class="text-blue-600 block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Accueil</a>
            <a href="#" class="text-blue-600 block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Promotions</a>
        </div>
    </div>
</nav>


<h1 class="mt-10 ml-5 text-2xl leading-9 tracking-tight text-white-900 sm:truncate sm:text-3xl sm:tracking-tight">Cours du jour</h1>

<div class="lg:flex lg:items-center lg:justify-between bg-zinc-100 ml-5 mr-5 mt-5">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight m-6 ml-9 mb-2 mt-5">DWWM3</h2>
    </div>
    <div class="mt-5 flex lg:ml-4 lg:mt-0">
        <span class="sm:ml-3">
            <p class="font-bold leading-9 tracking-tight text-gray-900 mr-9">
                19/04/2024
            </p>
        </span>
    </div>
</div>

<div class="lg:wrap lg:items-center lg:justify-between bg-zinc-100 ml-5 mr-5">
    <p for="email" class="block text-sm font-medium leading-6 text-gray-900 ml-9">15 participants</p>
    <div class="ml-9 mt-9">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Code*</label>
        <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full mx-auto mr-5 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <button type="submit" class="mx-auto mt-9 mr-9 flex w-fit justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 buttonSauvegarder1">Sauvegarder</button>

    </div>
</div>

<?php

include __DIR__ . '/Includes/footer.php';

?>