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
                        <a href="#" class="text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Accueil</a>
                        <a href="#" class="text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Promotions</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-black", Default: "text-black hover:text-black" -->
            <a href="#" class="text-black block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Accueil</a>
            <a href="#" class="text-black block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Promotions</a>
        </div>
    </div>
</nav>


<div class="lg:flex lg:items-center lg:justify-between ml-5 mr-5 mt-5">
    <div class="min-w-0 flex-1">
        <h2 class="text-2xl leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight m-6 ml-9 mb-2 mt-3">Toutes les promotions</h2>
    </div>
    <div class="mt-5 flex lg:ml-4 lg:mt-0">
        <span class="sm:ml-3">
            <button class="font-bold leading-9 tracking-tight text-white mr-9 bg-green-700 px-3 rounded-md">
                Ajouter promotion
            </button>
        </span>
    </div>
</div>

<div class="lg:wrap lg:items-center lg:justify-between ml-5 mr-5">
    <p for="email" class="block text-sm font-medium leading-6 text-gray-900 ml-9">tableau des promotions de Simplon</p>
</div>



<div class="relative overflow-x-auto ml-9 mr-9">
    <table class="w-full border-b dark:border-gray-700 text-sm text-left rtl:text-right text-black">
        <thead class="text-xs text-black uppercase dark:text-black border-b dark:border-gray-700">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Promotion
                </th>
                <th scope="col" class="px-6 py-3">
                    Debut
                </th>
                <th scope="col" class="px-6 py-3">
                    Fin
                </th>
                <th scope="col" class="px-6 py-3">
                    Places
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:border-gray-700">
                <th scope="row" class="px-2 py-2 font-medium text-black whitespace-nowrap dark:text-black">
                    DWWM 2
                </th>
                <td class="px-6 py-4">
                    01-01-2024
                </td>
                <td class="px-6 py-4">
                    01-12-2024
                </td>
                <td class="px-6 py-4">
                    15
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Éditer</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<?php

include __DIR__ . '/Includes/footer.php';

?>