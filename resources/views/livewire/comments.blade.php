<div class='flex justify-center'>
    <div class='w-6/12'>
            <h1 class="my-10 text-3xl">Comments</h1>
        <form class='ny-4 flex' wire:submit.prevent='addComment'>
            <div class='my-4 flex'>
                <input type='text' class='shadow mr-2 my-2' style="width: 90%; border-radius: 0.25rem; border-width:1px; padding:0.5rem;
                margin-right:0.5rem; margin-top:8px; margin-bottom:8px;" placeholder="What's on your mind?" wire:model='newComment'>
                <div class="py-2">
                    <button class="shadow" style="padding:8px; width:80px; border-radius: 0.25rem;
                  --tw-bg-opacity:1; background-color:blue; --tw-text-opacity:1; color:beige;" wire:click="addComment">Add</button>
                </div>
            </div>
        </form>
        @foreach ($comments as $comment)
        <div class='shadow' style="border-radius: 0.25rem; border-width:2px; padding:0.75px; margin-top:8px; margin-bottom:8px;">
            <div style="display:flex; justify-content:flex-start margin-top:8px; margin-bottom:8px;">
                <p class="text-lg" style="font-weight: 700; font-size:1.75rem; ">{{$comment['creator']}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment['created_at']}}</p>
            </div>
            <p class="text-gray-800">{{$comment['body']}}</p>
        </div>
        @endforeach
    </div>
</div>
