<script lang="ts">
    import { resolve } from '$app/paths';
</script>

<div class="routeContent">
    <h1>Blog</h1>
    <p>Here is where you can check out my latest blog posts</p>
    <ul>
        <li><a href={resolve('/blog/[slug]', { slug: 'one' })}>One Blog</a></li>
        <li><a href={resolve('/blog/[slug]', { slug: 'two' })}>Two Blog</a></li>
    </ul>
</div>
