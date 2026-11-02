<script lang="ts">
    import { resolve } from '$app/paths';

    let isOpen = false;
</script>

<nav>
    <a href={resolve('/')}><button>Home</button></a>
    <a href={resolve('/about')}><button>About</button></a>
    <a href={resolve('/projects')}><button>Projects</button></a>
    <a href={resolve('/professional')}><button>Professional</button></a>
    <a href={resolve('/music')}><button>Music</button></a>
    <!--    <a href={resolve('/blog')}><button>Blog</button></a>-->
    <a href={resolve('/contact')}><button>Contact</button></a>
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
