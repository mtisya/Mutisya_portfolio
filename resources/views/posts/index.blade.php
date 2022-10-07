<x-layout>

    <main class="max-w-8xl mx-auto space-y-6">

        @if ($posts->count())

            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}

        @else

        <p class="text-center">No posts yet, Please check back later.</p>

        @endif

    </main>

</x-layout>