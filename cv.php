
    <?php
        $directory = getcwd();
        $current_page = "cv";
        include($directory. '/includes/constants.php');
        $title="Joe Frost | CV";
        include($directory. '/includes/header.php');
    ?>
    <div class="hero-container">
        <section>
            <h1 class="hidden" id="animate-in-1">CV</h1>
        </section>
    </div>
    <main>
        <section>
            <img src="./images/joe-frost-cv.png" />
        </section>
    </main>
    
    <?php
        $directory = getcwd();
        include($directory. '/includes/footer.php');
    ?>