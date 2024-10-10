<?php 
    function createNavBar() {
		echo '<link rel="stylesheet" href="styles/navBar-style.css">';

        echo '<div class="navBar">';
        echo '<a href="index.php">Home</a>';
		echo '<a href="aboutpage.php">About Me</a>';
		echo '<a href="workspage.php">Work Experience</a>';
		echo '<a href="projectpage.php">Project Examples</a>';
	    echo '<a href="weatherpage.php">And Now, The Weather!</a>';
		echo '<a href="contactpage.php">Contact Me!</a>';
	    echo '</div>';
	    echo '<section class="main_content">';
	    echo '<h5>This website is a beta-version and subject to change.</h5>';
	    echo '<hr>';
    }
?>