
    <?php
        $directory = getcwd();
        $current_page = "contact";
        include($directory. '/includes/constants.php');
        include($directory. '/includes/functions.php');
        $title="Joe Frost | Contact Me";
        include($directory. '/includes/header.php');
    ?>
    <div class="hero-container">
        <section>
            <h1 class="hidden" id="animate-in-1">Contact Me</h1>
        </section>
    </div>
    <main>
        <section class="grid">
            <div class="hidden" id="animate-in-4">Tel.</div>
            <div class="hidden" id="animate-in-5">07516 683337</div>
            <div class="hidden" id="animate-in-6">Email.</div>
            <div class="hidden" id="animate-in-7"><a href="mailto:joefrostdesign@gmail.com" target="_blank" rel="noopener noreferrer">joefrostdesign@gmail.com</a></div>
            <div class="hidden" id="animate-in-8">LinkedIn.</div>
            <div class="hidden" id="animate-in-9"><a href="https://www.linkedin.com/in/joe-frost-redruth/" target="_blank" rel="noopener noreferrer">linkedin.com/in/joe-frost-redruth</a></div>
            <div class="hidden" id="animate-in-10">Github.</div>
            <div class="hidden" id="animate-in-11"><a href="https://github.com/frojoe12" target="_blank" rel="noopener noreferrer">github.com/frojoe12</a></div>
        </section>
    </main>
    
    <?php
        $directory = getcwd();
        include($directory. '/includes/footer.php');
    ?>