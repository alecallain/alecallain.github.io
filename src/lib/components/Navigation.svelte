<script lang="ts">
	import { resolve } from '$app/paths';
</script>

<nav>
	<ul>
		<li><a href={resolve('/')}>Home</a></li>
		<li><a href={resolve('/about')}>About</a></li>
		<li><a href={resolve('/projects')}>Projects</a></li>
		<li><a href={resolve('/experience')}>Experience</a></li>
		<li><a href={resolve('/music')}>Music</a></li>
	</ul>
</nav>

<style>
	nav {
		padding: 1rem;
	}

	ul {
		display: flex;
		justify-content: center;
		gap: 1rem;
		list-style: none;
		margin: 0;
		padding: 0;
	}

	a {
		display: block;
		padding: 0.5rem 1.25rem;
		border: 1px solid #ccc;
		border-radius: 6px;
		background: #f5f5f5;
		color: inherit;
		text-decoration: none;
	}

	a:hover {
		background: #e8e8e8;
	}
</style>
