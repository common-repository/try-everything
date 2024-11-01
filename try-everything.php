<?php
    /**
    *     @package      Try-Everything
    *     @version      1.1
    *     @copyright    2016 The Prodigal Goat
    *     @license      GPL-2.0+
    **/
    
    /**
    *     Plugin Name:  Try Everything
    *     Plugin URI:   https://wordpress.org/plugins/try-everything/
    *     Description:  Try Everything, by Shakira, written in the form of inspiration.
    *     Version:      1.1
    *     Author:       TheProdigalGoat
    *     Author URI:   https://profiles.wordpress.org/TheProdigalGoat
    **/
    
    /**
    *     Text Domain:  try-everything
    *     License:      GPL-2.0+
    *     License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
    **/
    
    function try_everything_lyrics()
    {
        $lines = array
        (
            "Birds don't just fly, they fall down and get up",
            "Nobody learns without getting it wrong",
            "No I won't leave, I wanna try everything",
            "I wanna try everything even though I could fail",
            "I won't give up, no I won't give in",
            "Look how far you've come, you filled your heart with love",
            "Baby you've done enough, take a deep breath",
            "Don't beat yourself up, don't need to run so fast",
            "Sometimes we come last, but we did our best",
            "Try everything"
        );
        
        $lyric = array_rand($lines);
        
        return $lines[$lyric];
    }
    
    function try_everything()
    {
        $lyric = try_everything_lyrics();
        
        echo '<label id="try_everything" style="font-size: 18px; float: right;">' . $lyric . '</label>';
    }
    
    add_action('admin_notices', 'try_everything');
?>