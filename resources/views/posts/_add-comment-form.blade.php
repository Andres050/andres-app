@auth
    <x-panel>
        <form method="GET" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to comment?</h2>
            </header>
            <div class="mt-5">

                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="5"
                    placeholder="Quick, thing of something to say!"
                    required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <footer class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </footer>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register </a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
