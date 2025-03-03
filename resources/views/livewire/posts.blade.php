<div>
    <flux:modal.trigger name="create-posts">
    <flux:button>Ajouter un post</flux:button>
</flux:modal.trigger>
{{-- appel du livewire  meme chose avec @livewire('post-create') --}}
    <livewire:post-create>
    {{-- fin appel --}}
    <br>
   <div class="overflow-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-semibold">ID</th>
                <th scope="col" class="px-6 py-3 font-semibold">Title</th>
                <th scope="col" class="px-6 py-3 font-semibold">Content</th>
                <th scope="col" class="px-6 py-3 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $posts as $post )
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $post->id }}</td>
                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">{{ $post->title }}</td>
                <td class="px-6 py-4 text-gray-600 dark:text-gray-300">{{ $post->body }}</td>
                <td class="px-6 py-4">
                    <button wire:click="edit({{ $post->id }})" class="px-4 py-2 text-xs text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                    <button wire:click="delete({{ $post->id }})" class="px-4 py-2 text-xs text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                </td>
            </tr>
            @empty
            <tr>
                <td class="px-6 py-4 text-gray-600 dark:text-gray-300 text-center" colspan="4">No posts found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
   </div>
</div>
