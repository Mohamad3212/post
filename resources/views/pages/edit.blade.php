<x-layouts.app>
    <div class="wrapper">
        <div class="create">
            <h3>Update post</h3>
            <form action="{{route('post.update', $posts->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{$posts->name}}" required>
                </div>
                <div class="form-group">
                    <label for="url">URL-picture:</label>
                    <input type="text" id="url" name="url" value="{{$posts->url}}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5"  required>{{$posts->description}}</textarea>
                </div>
                <div class="group">
                <input type="submit" value="Update Post">
                </div>
            </form>
        </div>

    </div>
</x-layouts.app>
