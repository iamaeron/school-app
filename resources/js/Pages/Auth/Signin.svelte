<script>
    import Button from "@/Components/Button.svelte";
    import Checkbox from "@/Components/Checkbox.svelte";
    import InputLabel from "@/Components/InputLabel.svelte";
    import TextInput from "@/Components/TextInput.svelte";
    import Icon from "@iconify/svelte";
    import { useForm } from "@inertiajs/svelte";

    let viewPassword = $state(false);

    let form = useForm({
        email: "",
        password: "",
        remember: false,
    });

    function submit() {
        $form.post("/login");
    }
</script>

<svelte:head>
    <title>Sign in</title>
</svelte:head>

<div class="flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full mx-auto space-y-5">
        <div class="border-b pb-5 border-zinc-200">
            <h1 class="text-3xl tracking-tight font-semibold text-zinc-600">
                Sign in
            </h1>
        </div>
        <div class="space-y-1">
            <InputLabel for="username" text="Username" />
            <TextInput id="username" name="email" bind:value={$form.email} />
        </div>
        <div class="space-y-1">
            <InputLabel for="password" text="Password" />
            <TextInput
                type={viewPassword ? "text" : "password"}
                id="password"
                bind:value={$form.password}
                withIcon
            >
                <button
                    onclick={() => (viewPassword = !viewPassword)}
                    class="p-0.5 bg-zinc-200 text-zinc-600 hover:bg-zinc-300 mr-1 rounded-md"
                >
                    <Icon
                        icon={viewPassword ? `tabler:eye-off` : `tabler:eye`}
                        class="w-5 h-5"
                    />
                </button>
            </TextInput>
        </div>
        <div class="mt-4 flex gap-2 items-center">
            <Checkbox id="remember" bind:value={$form.remember} />
            <InputLabel for="remember" text="Keep me logged in" />
        </div>
        <Button onclick={submit} disabled={$form.processing}>Sign in</Button>
    </div>
</div>
