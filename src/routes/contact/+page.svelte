<script lang="ts">
	let name: string;
	let email: string;
	let message: string;
</script>

<svelte:head>
	<title>Contact | Alec Allain</title>
</svelte:head>
<h1>Contact</h1>
<p>Here is where you are able to get ahold of me</p>

<div class="formArea">
	<form method="POST" action="https://formspree.io/f/alecjallain@gmail.com">
		<label>
			Name
			<input id="name" required type="text" placeholder="" bind:value={name} />
		</label>
		<label>
			Email
			<input id="email" required type="email" placeholder="" bind:value={email} />
		</label>
		<label>
			Message
			<textarea id="message" required bind:value={message}></textarea>
		</label>
		<button>Submit</button>
	</form>
	<!--{#if emailResponse}-->
	<!--    <p>{emailResponse}</p>-->
	<!--{/if}-->
</div>

<style>
</style>
