<form wire:submit.prevent="submit" class="input">
    <input type="text" title="phone" wire:model="phone" placeholder="Numéro de téléphone ...">
    <a href="#" wire:click.prevent="submit">Envoyer</a>
</form>