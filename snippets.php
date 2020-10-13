
    <?php
        $directory = getcwd();
        $current_page = "snippets";
        include($directory. '/includes/constants.php');
        include($directory. '/includes/functions.php');
        include($directory. '/includes/snippet_arrays.php');
        $title="Joe Frost | Code Snippets";
        include($directory. '/includes/header.php');
    ?>
    <div class="hero-container">
        <section>
            <h1 class="hidden" id="animate-in-1">Code Snippets</h1>
        </section>
    </div>
    <main>
        <section>
        <h2>
            <button class="snippets-button" id="css-snippets-button">CSS</button>
            <button class="snippets-button" id="js-snippets-button">JS</button>
            <button class="snippets-button" id="php-snippets-button">PHP</button>
        </h2>
            <div id="css-snippets-container" class="show">
                <?php 
                echo snippets($snippet_css);
                ?>
            </div>
            <div id="js-snippets-container" class="hide">
                <?php 
                echo snippets($snippet_js);
                ?>
            </div>
            <div id="php-snippets-container" class="hide">
                <?php 
                echo snippets($snippet_php);
                ?>
            </div>
            
            <h2>More Code Snippets coming soon...</h2>
        </section>
    </main>
    
    <?php
        $directory = getcwd();
        include($directory. '/includes/footer.php');
    ?>