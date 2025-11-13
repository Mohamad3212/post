<x-layouts.app>
    <div class="wrapper">
        <div class="new">
            <h3>Post</h3>
            <div class="newa">
                <a href="{{route('post.create')}}">New post</a>
            </div>
        </div>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <img src="{{$post->url}}" alt="">
                    <div class="post_text">
                        <h4><b>{{$post->name}}</b></h4>
                        <p>{{$post->description}}</p>
                        <div class="date">
                            <div class="datec">
                                <form action="{{route('post.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                                <a href="{{route('post.edit', $post->id)}}"><i class="glyphicon glyphicon-edit"></i></a>
                            </div>
                            <p><i>{{$post->updated_at}}</i></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
