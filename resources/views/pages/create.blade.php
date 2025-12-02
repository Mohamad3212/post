<x-layouts.app>
    <div class="max-w-[90%] mx-auto">
        <div class="create">
            <h3 class="text-center mb-8 text-4xl">New post</h3>
            <form action="{{route('post.store')}}" method="POST" class="flex flex-col w-[40%] p-14 rounded-[15%] bg-[#f0f0f0] shadow-[0px_4px_6px_-1px_black] mt-14 mx-auto">
                @csrf
                <div class="flex justify-between items-center mb-5">
                    <label for="name" class="items-center block">Name:</label>
                    <input type="text" id="name" name="name" class="mb-4 bg-[light-grey] p-3 text-base border-[#ccc] rounded[5px] w-[300px] hover:bg-gray-500 hover:border[#ccc] cursor-pointer" required>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="url" class="items-center block">URL-picture:</label>
                    <input type="text" id="url" name="url" class="mb-4 bg-[light-grey] p-3 text-base border-[#ccc] rounded[5px] w-[300px] hover:bg-gray-500 hover:border[#ccc] cursor-pointer" required>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="description" class="items-center block">Description:</label>
                    <textarea id="description" name="description" rows="5" class="mb-4 bg-[light-grey] p-3 text-base border-[#ccc] rounded[5px] w-[300px] hover:bg-gray-500 hover:border[#ccc] cursor-pointer" required></textarea>
                </div>
                <div class="mx-auto">
                <input type="submit" class="" value="Create Post">
                </div>
            </form>
        </div>

    </div>
</x-layouts.app>
