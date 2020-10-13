
    <?php
        $directory = getcwd();
        $current_page = "index";
        include($directory. '/includes/constants.php');
        include($directory. '/includes/functions.php');
        $title="Joe Frost";
        include($directory. '/includes/header.php');
    ?>
    <div class="hero-container">
        <section>
            <h1 class="hidden" id="animate-in-1">Full Stack Web Developer | Designer</h1>
        </section>
    </div>
    <main>
        <section>
            <h2 class="hidden" id="animate-in-3">Hi my name is Joe. Nice to meet you!</h2>
            <p class="hidden" id="animate-in-4">I am a full stack web developer with over 12 years experience. I am currently available for work, full time or part time - contract or permanent, if you are interested please  <a href='./contact.php'>get in touch!</a></p>
            <p class="hidden" id="animate-in-5">I have worked on various web projects over the last few years, both within full time permanent roles and as a freelance contracter.</p>
            <p class="hidden" id="animate-in-6">My main tech knowledge is PHP, mysql, HTML, CSS, ES6 Javascript, React/Redux, Wordpress, Woocommerce and Linux. I also like to dabble in other technologies and have worked on personal projects in c#, Angular and Unity amongst others. Currently I'm researching Wordpress plugin development, PHP Laravel framework and Amazon Web Services.</p>
            <p class="hidden" id="animate-in-7">I am based near Redruth in beautiful Cornwall, and can commute to anywhere within the County. For the South West area I can work on a part remote/office basis depending on distance.</p>
        </section>
    </main>
    <div class="site-buttons-container">
        <section>
            <div class="site-links">
                <a class="hidden" id="animate-in-8" href="projects.php"><span>View Projects</span></a>
                <a class="hidden" id="animate-in-9" href="snippets.php"><span>Code Snippets</span></a>
                <a class="hidden" id="animate-in-10" href="contact.php"><span>Contact Me</span></a>
            </div>
        </section>    
    </div>
    <?php
        $directory = getcwd();
        include($directory. '/includes/footer.php');
    ?>