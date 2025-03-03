<div>
    <flux:modal name="posts-edit" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">MODIFIER UN POST</flux:heading>
                <flux:subheading>Modifier les details pour le post</flux:subheading>
            </div>

            <flux:input wire:model.live='title' label="Titre" placeholder="Le titre du post" />
            <flux:textarea wire:model.live='body' label="Contenu" placeholder="Le contenu du post" />

            <div class="flex">
                <flux:spacer />

                <flux:button variant="primary" wire:click='postedit'>Modifier le post</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
