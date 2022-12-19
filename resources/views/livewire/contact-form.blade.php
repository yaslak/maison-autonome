<section data-kc-fullwidth="content" class="kc-elm kc-css-540705 kc_row" id="contact">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-878584 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <section class=" consultation-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="consultation-box">
                                        <div class="title-box">
                                            <h2>Obtenez une consultation gratuite</h2>
                                            <span>Obtenez une consultation gratuite de nos experts, notre équipe de support client vous aide 24h/24 et 7j/7, n'hésitez pas.</span>
                                        </div>
                                        <div class="consultation">
                                            <div>
                                                <div class="screen-reader-response"></div>
                                                <form class="wpcf7-form" wire:submit.prevent="submit">
                                                    <div class="consultation-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="single-box">
                                                                    <input type="text"
                                                                           name="last_name"
                                                                           id="last_name"
                                                                           title="last_name"
                                                                           wire:model="contact.last_name"
                                                                           placeholder="Nom ...">
                                                                    @error('contact.last_name')
                                                                    <div>
                                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-box">
                                                                    <input type="text"
                                                                           name="first_name"
                                                                           id="first_name"
                                                                           title="first_name"
                                                                           wire:model="contact.first_name"
                                                                           placeholder="Prénom ...">
                                                                    @error('contact.first_name')
                                                                    <div>
                                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="single-box">
                                                                    <div>
                                                                        <input type="text"
                                                                               name="phone"
                                                                               id="phone"
                                                                               title="phone"
                                                                               wire:model="contact.phone"
                                                                               placeholder="Numéro de téléphone ...">
                                                                        @error('contact.phone')
                                                                        <div>
                                                                            <span class="text-danger text-sm">{{ $message }}</span>
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-box">
                                                                    <input type="text"
                                                                           name="address"
                                                                           id="address"
                                                                           title="address"
                                                                           wire:model="contact.address"
                                                                           placeholder="Adresse ...">
                                                                    @error('contact.address')
                                                                    <div>
                                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="single-box">
                                                                    <input type="text"
                                                                           name="city"
                                                                           id="city"
                                                                           title="city"
                                                                           wire:model="contact.city"
                                                                           placeholder="Ville ...">
                                                                    @error('contact.city')
                                                                    <div>
                                                                        <span class="text-danger text-sm">{{ $message }}</span>
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="single-box">
                                                                    <button class="btn-three" type="submit">Envoyer<span class="icon-null"></span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>