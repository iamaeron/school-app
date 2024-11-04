<script>
    import { createLabel, melt } from "@melt-ui/svelte";

    const {
        elements: { root },
    } = createLabel();
    const { text, ...props } = $props();
</script>

<label
    use:melt={$root}
    for={props.for}
    class="font-semibold text-zinc-600 block text-sm"
>
    <span>{text}</span>
</label>
