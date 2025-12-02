<x-layouts.app>
    <div class="max-w-[90%] mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-3xl">Post</h3>
            <div class="flex bg-green-500 items-center rounded-2xl px-8 py-4 cursor-pointer shadow-[0_4px_6px_-1px_black] hover:shadow-[0_6px_8px_-2px_black]">
                <a href="{{route('post.create')}}" class="text-2xl no-underline text-white hover:no-underline hover:text-white">New post</a>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-[5%]">
            @foreach ($posts as $post)
                <div class="bg-[#f0f0f0] rounded-[10%] flex flex-col min-h-100 shadow-[0_4px_6px_-1px_black]">
                    <img src="{{$post->url}}" alt="" class="w-<fraction> h-[200px] rounded-[10%_10%_0_0]">
                    <div class="p-4 flex-1 flex flex-col">
                        <h4 class="text-3xl mb-2.5"><b>{{$post->name}}</b></h4>
                        <p class="text-x text-[#333333] mb-2.5">{{$post->description}}</p>
                        <div class="text-right mt-auto pb-4 pr-4">
                            <div class="flex justify-around items-center m-4">
                                <form action="{{route('post.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-4xl text-red-500 cursor-pointer hover:text-red-700"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                                <a href="{{route('post.edit', $post->id)}}" class="text-4xl text-blue-500 cursor-pointer hover:text-blue-700"><i class="glyphicon glyphicon-edit"></i></a>
                            </div>
                            <p><i>{{$post->updated_at}}</i></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
