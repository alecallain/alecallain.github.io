<script lang="ts">
    import { base } from '$app/paths';
    
    let { children } = $props();
</script>

<nav>
    <a href="{base}/">Home</a>
    <a href="{base}/about">About</a>
    <a href="{base}/projects">Projects</a>
    <a href="{base}/professional">Professional</a>
    <a href="{base}/music">Music</a>
    <a href="{base}/contact">Contact</a>
</nav>

{@render children()}

<footer>This site was created utilizing SvelteKit and is hosted by Github Pages</footer>