<x-layouts.app>
    <div class="wrapper">
        <div class="create">
            <h3>New post</h3>
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="url">URL-picture:</label>
                    <input type="text" id="url" name="url" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="group">
                <input type="submit" value="Create Post">
                </div>
            </form>
        </div>

    </div>
</x-layouts.app>
