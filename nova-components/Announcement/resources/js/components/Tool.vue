<template>
    <div>
        <heading class="mb-6">Announcement</heading>
        <card class="flex flex-col">
            <form method='post' action='/nova-vendor/announcement/submit'>
                <input type="hidden" name="_token" :value="csrf">
                <div class="px-8 py-6">
                    <textarea name="announcement" class="w-full h-full border"></textarea>
                </div>
                <div class="bg-30 flex px-8 py-4">
                    <input type="submit" class="ml-auto btn btn-default btn-primary mr-3" value="Announce">
                </div>
            </form>
        </card>
    </div>
</template>

<script>
    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }),        
    }
</script>
