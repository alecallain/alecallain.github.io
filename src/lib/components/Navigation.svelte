<script lang="ts">
    import { base } from '$app/paths';

    let isOpen = false;
</script>

<nav>
    <a href="{base}/"><button>Home</button></a>
    <a href="{base}/about"><button>About</button></a>
    <a href="{base}/projects"><button>Projects</button></a>
    <a href="{base}/professional"><button>Professional</button></a>
    <a href="{base}/music"><button>Music</button></a>
<!--    <a href="{base}/blog"><button>Blog</button></a>-->
    <a href="{base}/contact"><button>Contact</button></a>
</nav>

<style>
    nav {
        display: flex;
        justify-content: space-around;
    }

    a {
        background: none;
    }

    button {
        /*background: none;*/
        border: none;
        cursor: pointer;
        width: 150px
    }
</style>