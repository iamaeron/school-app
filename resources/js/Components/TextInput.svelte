<script>
    let { value = $bindable(""), withIcon, ...props } = $props();
</script>

{#if withIcon}
    <div
        class="items-center flex outline-2 outline-solid outline-transparent -outline-offset-2 bg-zinc-50 w-full rounded-lg border border-zinc-300 shadow-sm focus-within:outline-indigo-500 focus-within:bg-white text-sm overflow-hidden"
    >
        <input
            bind:value
            type={props.type ?? "text"}
            class={[
                props.class,
                "px-3.5 py-1.5 text-zinc-600 focus:text-zinc-800 font-medium bg-zinc-50 w-full border-0 focus:outline-none focus:bg-white focus:border-transparent focus:ring-0",
            ].join(" ")}
            {...props}
        />
        {@render props.children?.()}
    </div>
{:else}
    <input
        bind:value
        type={props.type ?? "text"}
        class={[
            props.class,
            "px-3.5 py-1.5 text-zinc-600 focus:text-zinc-800 font-medium bg-zinc-50 w-full rounded-lg border border-zinc-300 shadow-sm focus:outline-indigo-500 focus:bg-white focus:border-transparent focus:ring-0 text-sm",
        ].join(" ")}
        {...props}
    />
{/if}
