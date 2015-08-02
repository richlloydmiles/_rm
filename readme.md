_rm theme
======
### Steps for adding a new resource

* @import "includes/resources/{name of library}/css/{scss _example.scss}"; - this will automatically enqueue your css.
* Js is automatically uglified if it is in the correct folder ("includes/resources/{name of library}/js/{file}"") - however, it still eeds to be enqueued via the functions.php file.