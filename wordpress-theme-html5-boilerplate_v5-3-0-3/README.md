# Simple WordPress Starter Theme
This consist of two parts, the original html converted to php format and the Simple WordPress Starter Theme. 

## Files
- __front-page.php__ contains your front-page (index.html) after the conversion
- __index.php__ contains the default-template for the theme and is empty if no default.html is added during the conversion. .
- __functions.php__ loads the files located inside the html2wp folder. It is recommended to not add any custom code here if you plan to convert your theme again. Please consider using a child theme instead: http://codex.wordpress.org/Child_Themes
- __style.css__ provides details about the theme that are used by WordPress and any styles from an excisting style.css before the conversion
- __screenshot.png__ the screenshot displayed in the theme menu of WordPress
- __html2wp-folder__ contains the theme functionality logic
- __Any other files__ are added from the original html website during the conversion to a WordPress theme.
