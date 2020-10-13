<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title;?></title>
        <link rel="stylesheet" href="./css/style.css?v=1.5" />
        <script src="./js/portfolio.js" defer></script>
    </head>
    <body>
        <header>
            <div class="inner">
                <div class="site-title"><a href="<?php echo WWW_SITE_ROOT_DIR; ?>"><div class="joe-logo"><span class="joe-logo-text">J</span></div></a><a href="<?php echo WWW_SITE_ROOT_DIR; ?>">Joe Frost</a></div>
                <nav>
                    <ul>
                        <?php
                            if ($current_page==="index") {
                                ?>
                                <li><span>About Me</span></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?php echo WWW_SITE_ROOT_DIR; ?>">About Me</a></li>
                                <?php
                            }
                        ?>

                        <?php
                            if ($current_page==="projects") {
                                ?>
                                <li><span>Projects</span></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?php echo WWW_SITE_ROOT_DIR . "projects.php" ?>">Projects</a></li>
                                <?php
                            }
                        ?>

                        <?php
                            if ($current_page==="snippets") {
                                ?>
                                <li><span>Snippets</span></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?php echo WWW_SITE_ROOT_DIR . "snippets.php" ?>">Snippets</a></li>
                                <?php
                            }
                        ?>

                        <?php
                            if ($current_page==="contact") {
                                ?>
                                <li><span>Contact Me</span></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="<?php echo WWW_SITE_ROOT_DIR . "contact.php" ?>">Contact Me</a></li>
                                <?php
                            }
                        ?>
                        
                        
                        
                        <li><a href="<?php echo WWW_SITE_ROOT_DIR . "pdf/joe-frost-cv-sept-2020-01.pdf" ?>" target="_blank" rel="noopener noreferrer">CV</a></li>
                    </ul>
                </nav>
            </div>    
        </header>