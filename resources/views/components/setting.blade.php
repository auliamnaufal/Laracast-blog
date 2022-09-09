@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">

    <h1 class="text-xl font-bold mb-6 pb-4 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li><a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                </li>
            </ul>
            <ul>
                <li><a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a></li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="border border-gray-200 p-6 rounded-xl">
                {{ $slot }}
            </div>

        </main>
    </div>

</section>
