<script>
    let props = $props();
</script>

<textarea
    class={[
        props.class,
        "px-3 py-1.5 bg-zinc-50 w-full rounded-md border border-zinc-300 shadow-sm focus:outline-indigo-500 focus:bg-white focus:border-transparent focus:ring-0 text-sm",
    ].join(" ")}
    {...props}
></textarea>
