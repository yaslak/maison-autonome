<section class="contact" id="contact">
    <form class="contactForm" wire:submit.prevent="submit">
        <div class="form">
            <h1>Contact</h1>
            <div class="contactInput">
                <div class="names">
                    <div>
                        <input type="text"
                               name="last_name"
                               id="last_name"
                               title="last_name"
                               wire:model="contact.last_name"
                               placeholder="Nom ...">
                        @error('contact.last_name')
                        <div>
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div>
                        <input type="text"
                               name="first_name"
                               id="first_name"
                               title="first_name"
                               wire:model="contact.first_name"
                               placeholder="Prénom ...">
                        @error('contact.first_name')
                        <div>
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                </div>
                <div>
                    <input type="text"
                           name="phone"
                           id="phone"
                           title="phone"
                           wire:model="contact.phone"
                           placeholder="Numéro de téléphone ...">
                    @error('contact.phone')
                    <div>
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div>
                    <input type="text"
                           name="address"
                           id="address"
                           title="address"
                           wire:model="contact.address"
                           placeholder="Adresse ...">
                    @error('contact.address')
                    <div>
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div>
                    <input type="text"
                           name="city"
                           id="city"
                           title="city"
                           wire:model="contact.city"
                           placeholder="Ville ...">
                    @error('contact.city')
                    <div>
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
            </div>
            <a href="#" wire:click.prevent="submit">Envoyer</a>
        </div>
        <div class="contactImg">
            <img src="{{ asset('images/contact.png') }}" alt="">
        </div>
    </form>
</section>
