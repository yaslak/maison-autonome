<div class="radius-border pr-0 pt-0 pb-0">
    <div class="flex w-full justify-center">
        <form class="w-full md:w-8/12 flex flex-col justify-around" wire:submit.prevent="submit">
            <h1 class="title mb-5">Contact</h1>
            <div class="mx-5">
                <div class="md:flex md:items-center md:justify-items-start">
                    <div class="md:w-3/6 w-full">
                        <input type="text"
                               name="last_name"
                               id="last_name"
                               title="last_name"
                               class="rounded-3xl shadow-lg border-0 w-full md:w-11/12 pl-8"
                               wire:model="contact.last_name"
                               placeholder="Nom ...">
                        @error('contact.last_name')
                        <div>
                            <span class="text-red-600">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="md:w-3/6 w-full text-right mt-5 md:mt-0">
                        <input type="text"
                               name="first_name"
                               id="first_name"
                               title="first_name"
                               class="rounded-3xl border-0 shadow-lg w-full md:w-11/12 pl-8"
                               wire:model="contact.first_name"
                               placeholder="Prénom ...">
                        @error('contact.first_name')
                        <div class="text-center">
                            <span class="text-red-600">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mt-5">
                    <input type="text"
                           name="phone"
                           id="phone"
                           title="phone"
                           class="rounded-3xl shadow-lg border-0 w-full pl-8"
                           wire:model="contact.phone"
                           placeholder="Numéro de téléphone ...">
                    @error('contact.phone')
                    <div>
                        <span class="text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="mt-5">
                    <input type="text"
                           name="address"
                           id="address"
                           title="address"
                           class="rounded-3xl shadow-lg border-0 w-full pl-8"
                           wire:model="contact.address"
                           placeholder="Adresse ...">
                    @error('contact.address')
                    <div>
                        <span class="text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="mt-5">
                    <input type="text"
                           name="city"
                           id="city"
                           title="city"
                           class="rounded-3xl shadow-lg border-0 w-full pl-8"
                           wire:model="contact.city"
                           placeholder="Ville ...">
                    @error('contact.city')
                    <div>
                        <span class="text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="flex justify-center mt-5 mb-5">
                <button type="submit" class="display-btn px-24">Envoyer</button>
            </div>
        </form>
        <div class="hidden md:block md:w-4/12 m-0">
            <img src="{{ asset('build/assets/images/contact.png') }}" class="w-full h-full rounded-tr-3xl rounded-br-3xl" alt="">
        </div>
    </div>
</div>
