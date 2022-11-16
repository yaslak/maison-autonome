<div class="sm:px-6 w-full">
    <div class="px-4 md:px-10 py-4 md:py-7">
        <div class="flex items-center justify-between">
            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Contacts</p>
            <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                <p>Sort By:</p>
                <select aria-label="select" wire:model="order" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                    <option value="desc" class="text-sm text-indigo-800">Latest</option>
                    <option value="asc" class="text-sm text-indigo-800">Oldest</option>
                </select>
            </div>
        </div>
    </div>
    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
        <div class="mt-7 overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <div class="mt-8 flex">
                    <input type="text" wire:model.debounce.500ms="search" class="input w-96" title="search" placeholder="Recherche ..." autofocus>
                </div>
                <thead>
                <tr class="h-3"></tr>
                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                    <td class="">
                        <div class="flex items-center pl-5">
                            <p class="text-base font-medium leading-none text-gray-700 mr-2">id</p>
                        </div>
                    </td>
                    <td class="">
                        <div class="flex items-center pl-5">
                            <p class="text-base font-medium leading-none text-gray-700 mr-2">Nom</p>
                        </div>
                    </td>
                    <td class="pl-24">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600 ml-2">Prénom</p>
                        </div>
                    </td>
                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600 ml-2">Téléphone</p>
                        </div>
                    </td>
                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600 ml-2">Adresse</p>
                        </div>
                    </td>
                    <td class="pl-5">
                        <div class="flex items-center">
                            <p class="text-sm leading-none text-gray-600 ml-2">Ville</p>
                        </div>
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr class="h-3"></tr>
                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $contact->id }}</p>
                            </div>
                        </td>
                        <td class="">
                            <div class="flex items-center pl-5">
                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $contact->last_name }}</p>
                            </div>
                        </td>
                        <td class="pl-24">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ $contact->first_name }}</p>
                            </div>
                        </td>
                        <td class="pl-5">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ $contact->phone }}</p>
                            </div>
                        </td>
                        <td class="pl-5">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ $contact->address }}</p>
                            </div>
                        </td>
                        <td class="pl-5">
                            <div class="flex items-center">
                                <p class="text-sm leading-none text-gray-600 ml-2">{{ $contact->city }}</p>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $contacts->links('pagination::tailwind') }}
        </div>
    </div>
</div>
