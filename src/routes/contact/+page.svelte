<script lang="ts">
    import { enhance } from '$app/forms';

    let name : string;
    let email : string;
    let message : string;
    let emailResponse : string;
</script>

<div class="routeContent">
    <h1>Contact</h1>
    <p>Here is where you are able to get ahold of me</p>

    <div class="formArea">
        <form method="POST" action="?/send">
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
</div>

<style>
    .formArea {
        width: 25%;
        margin: 0 auto 1.5rem;
    }

    form {
        margin: 0 auto
    }

    label {
        text-align: left;
        display: block;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    input, textarea {
        display: block;
        width: 100%;
        margin: 0
    }

    textarea {
        font-family: sans-serif;
    }
</style>