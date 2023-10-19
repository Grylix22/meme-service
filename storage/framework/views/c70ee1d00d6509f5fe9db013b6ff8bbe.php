    <nav>
        <div><a href="<?php echo e(url('/')); ?>">Strona Główna</a></div>
        <div class="new-meme"><a href="<?php echo e(url('/memeUpload')); ?>">Dodaj Mema</a></div>
    </nav>

<style>
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #252525;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;

    font-size: 2rem;

    height: 50px;
    width: 100%;
    background-color: #181818;
}

nav > div {
    padding: 0 20px;        
}

.new-meme {
    font-size: 1.37rem;        
}

nav a {
    color: #f0f8ff;
    text-decoration: none;
}
</style><?php /**PATH C:\xampp\htdocs\mem-serv\resources\views/mainMenu.blade.php ENDPATH**/ ?>