<script lang="ts">
    import '../app.css'

    import Header from '$lib/components/Header.svelte';
    import Footer from "$lib/components/Footer.svelte";
    
    let { children } = $props();
</script>

<div class="container">
    <Header />
    <main class="content">
        {@render children()}
    </main>
    <Footer />
</div>

<style>
    .container {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content {
        flex-grow: 1;
    }
</style>