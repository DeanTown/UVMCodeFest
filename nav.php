<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        /* example of repeating */
        
        if ($path_parts['filename'] == "explore") {
            print '<li class="activePage">explore</li>';
        } else {
            print '<li><a href="explore.php">explore</a></li>';
        }
        if ($path_parts['filename'] == "formSubmission") {
            print '<li class="activePage">formSubmission</li>';
        } else {
            print '<li><a href="formSubmission.php">formSubmission</a></li>';
        }
    
        ?>
    </ol>
</nav>