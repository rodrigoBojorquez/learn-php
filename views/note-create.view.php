<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" class="flex flex-col gap-6 w-full">
            <div class="flex flex-col gap-1">
                <label for="note-title" class="text-lg font-medium">Title</label>
                <input id="note-title" type="text" name="title" class="p-2 rounded-sm">
            </div>
            <div class="flex flex-col gap-1">
                <label for="note-content" class="text-lg font-medium">Content</label>
                <textarea id="note-content" type="text" name="content" class="rounded-sm resize-none p-2" ></textarea>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-400 px-10 py-1 rounded-sm font-medium text-white">
                    Add
                </button>
            </div>
        </form>
    </div>
</main>

<?php require("partials/footer.php") ?>