<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">title</label>

                <input type="text" value="{{ old('title') }}" class="border border-gray-400 p-2 w-full" name="title"
                    id="title" required>

                @error('title')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>

                <input type="text" value="{{ old('slug') }}" class="border border-gray-400 p-2 w-full"
                    name="slug" id="slug" required>

                @error('slug')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>

                <input type="file" value="{{ old('thumbnail') }}" class="border border-gray-400 p-2 w-full"
                    name="thumbnail" id="thumbnail" required>

                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">excerpt</label>

                <textarea type="text" class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">body</label>

                <textarea type="text" class="border border-gray-400 p-2 w-full" name="body" id="body" required>{{ old('excerpt') }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>

                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucWords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-0">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-setting>
</x-layout>
