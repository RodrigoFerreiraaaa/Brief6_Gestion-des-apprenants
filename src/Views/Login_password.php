<?php

include __DIR__ . '/Includes/headerConnexion.php';

?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-zinc-100 w-1/4 mx-auto mt-28">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Bienvenue</h2>
    </div>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <p class="mt-5 text-center text-base font-sans leading-1 tracking-tight text-black font-normal">Pour clôturer votre inscription et créer votre compte, veuillez choisir un mot de passe.</p>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="mot_de_passe2" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe*</label>
                <div class="mt-2">
                    <input id="mot_de_passe2" name="mot_de_passe2" type="mot_de_passe2" autocomplete="mot de passe" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="confirmez_mot_de_passe" class="block text-sm font-medium leading-6 text-gray-900">Confirmez mot de passe*</label>
                <div class="mt-2">
                    <input id="confirmez_mot_de_passe" name="confirmez_mot_de_passe" type="confirmez_mot_de_passe" autocomplete="confirmez mot de passe" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" class="mx-auto flex w-fit justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 buttonSauvegarder1">Sauvegarder</button>
            </div>
        </form>
    </div>
</div>

<?php

include __DIR__ . '/Includes/footer.php';

?>