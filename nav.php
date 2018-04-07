<nav>
    <ol class="navbar">
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        
        /* example of repeating */
        
        print'<li class="';
        if ($path_parts['filename']== "explore"){
            print' activePage ';
        }
        print '">';
        print'<a href="explore.php">Explore</a>';
        print'</li>';
        
        print'<li class="';
        if ($path_parts['filename']== "formSubmission"){
            print' activePage ';
        }
        print '">';
        print'<a href="formSubmission.php">Dorm Swap Form</a>';
        print'</li>';    
        ?>
    </ol>
</nav>