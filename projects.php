
    <?php
        $directory = getcwd();
        $current_page = "projects";
        include($directory. '/includes/constants.php');
        include($directory. '/includes/functions.php');
        $title="Joe Frost | Projects";
        include($directory. '/includes/header.php');
        include($directory. '/includes/project_cards.php');
    ?>
    <div class="hero-container">
        <section>
            <h1 class="hidden" id="animate-in-1">Projects</h1>
        </section>
    </div>
    <main class="projects-background">
        <section>
            <div class="projects-wrapper">
                <?php
                    echo render_cards($cards);
                ?>
            </div>    
        </section>
    </main>
    <?php
        $directory = getcwd();
        include($directory. '/includes/footer.php');
    ?>