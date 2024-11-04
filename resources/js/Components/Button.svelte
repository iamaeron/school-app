<script>
    let props = $props();
</script>

<button
    type={props.type ?? "text"}
    class={[
        props.class,
        "px-3 py-1.5 bg-indigo-500 w-full rounded-lg hover:bg-indigo-600 hover:border-indigo-800 border border-indigo-700 text-sm font-medium shadow text-white",
    ].join(" ")}
    {...props}
>
<div class="flex justify-center">
    {@render props.children?.()}
</div>
</button>
