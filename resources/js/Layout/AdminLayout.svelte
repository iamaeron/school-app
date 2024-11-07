<script>
    import Sidebar from "@/Components/Sidebar.svelte";
    import { createScrollArea, melt } from "@melt-ui/svelte";

    const {
        elements: { root, content, viewport, corner, scrollbarY, thumbY },
    } = createScrollArea({
        type: "hover",
        dir: "ltr",
    });

    const props = $props();
</script>

<div class="bg-zinc-100 flex">
    <!-- sidebar -->
    <Sidebar />

    <!-- main content -->
    <main class="p-4 flex h-screen flex-1">
        <div
            use:melt={$root}
            class="bg-white flex flex-1 rounded-xl shadow-md shadow-black/[0.03]"
        >
            <div use:melt={$viewport} class="flex flex-1">
                <div use:melt={$content} class="flex-1 p-4">
                    {@render props.children?.()}
                </div>
            </div>

            <div
                use:melt={$scrollbarY}
                class="flex h-full w-2.5 touch-none select-none border-l border-l-transparent bg-neutral-300/10 p-px transition-colors"
            >
                <div
                    use:melt={$thumbY}
                    class="relative flex-1 rounded-full bg-neutral-300/50"
                ></div>
            </div>
            <div use:melt={$corner}></div>
        </div>
    </main>
</div>
