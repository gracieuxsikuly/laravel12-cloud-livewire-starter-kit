<div>
    <flux:modal name="create-posts" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">AJOUTER UN POST</flux:heading>
                <flux:subheading>Ajouter des details pour le post</flux:subheading>
            </div>

            <flux:input wire:model.live='title' label="Titre" placeholder="Le titre du post" />
            <flux:textarea wire:model.live='body' label="Contenu" placeholder="Le contenu du post" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='savepost'>Enregistrer le post</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
