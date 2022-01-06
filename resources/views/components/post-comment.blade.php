@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex space-x">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/?u={{$comment->id}}" alt="" width="60" height="60" class="rounded-xl">
        </div>

        <div style="padding-left: 20px">
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{$comment->created_at->diffForHumans()}}</time>
                </p>
            </header>

            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>

