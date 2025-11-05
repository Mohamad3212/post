<x-layouts.app>
    <div class="wrapper">
        <div class="create">
            <h3>New post</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">URL-picture:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Description:</label>
                    <textarea id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="group">
                <input type="submit" value="Create Post">
                </div>
            </form>
        </div>

    </div>
</x-layouts.app>
