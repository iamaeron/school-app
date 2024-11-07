<script>
    import { page } from "@inertiajs/svelte";
    import Icon from "@iconify/svelte";

    const user = $page.props.auth.user;
</script>

<aside class="w-60">
    <div class="p-4 pr-0">
        <header
            class="border-b mb-3 pb-3 border-zinc-200 gap-2 pt-4 px-4 flex items-center text-lg tracking-tight font-semibold text-zinc-800"
        >
            <Icon icon="tabler:school" class="w-6 h-6" />

            <span> School App </span>
        </header>

        <div
            class="px-4 flex rounded-md gap-2 items-center border-zinc-200 py-1.5"
        >
            <div class="h-9 aspect-square bg-zinc-200 rounded-full">
                <img
                    src={user.profile_image}
                    alt="img"
                    class="w-full rounded-full aspect-square text-xs"
                />
            </div>
            <div class="flex items-center justify-between flex-1">
                <div>
                    <p
                        class="text-sm font-semibold tracking-tight text-zinc-800"
                    >
                        {user.firstname}
                        {user.lastname}
                    </p>

                    <p class="text-sm capitalize text-zinc-600 tracking-tight">
                        {user.role}
                    </p>
                </div>

                <Icon icon="tabler:chevron-down" />
            </div>
        </div>
    </div>
</aside>
