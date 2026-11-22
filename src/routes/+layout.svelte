<script lang="ts">
	import '../app.css';
	import Header from '#lib/components/Header.svelte';
	import Footer from '#lib/components/Footer.svelte';

	let { children } = $props();
</script>

<Header />
<main>
	{@render children()}
</main>
<Footer />

<style>
	main {
		width: 100%;
		max-width: 70ch;
		margin-inline: auto;
		padding: 2rem 1rem;
	}
</style>
