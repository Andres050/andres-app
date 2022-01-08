<x-layout>
    <x-setting :heading="'Edit Post:  ' . $post->title">
        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title',$post->title)"/>
            <x-form.input name="slug" :value="old('slug',$post->slug)"/>
            <div class="flex">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>

                <div class="ml-10 items-center">
                    <p class="font-bold text-xs text-center">Current thumbnail:</p>
                    <img class="ml-4 mr-4" src="{{isset($post->thumbnail) ? asset($post->thumbnail) : '/images/illustration-2.png'}}" width="100" alt="" class="rounded-xl">
                </div>
            </div>
            <x-form.textarea name="excerpt">{{old('excerpt',$post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>

            <div class="mb-6">
                <x-form.label name="category_id"/>

                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"
                        {{old('category_id', $post->category_id) === $category->id ? 'selected' : ''}}>
                            {{ucwords($category->name)}}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id"/>
            </div>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
