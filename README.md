# Modular Content in WordPress

This is an example site. It contains two things:

* A WordPress theme, in themes > modularcontent.
* An export file containing a Field Group for use with [Advanced Custom Fields Pro](http://www.advancedcustomfields.com/pro/). It is located in acf-export > acf-export-2014-09-14.json

## Installation
 
* Create a WordPress installation.
* Add the *modularcontent* theme to wp-content/themes.
* In the WordPress dashboard, activate the Modular Content theme.
* Download, install, and activate the (paid) plugin Advanced Custom Fields Pro.
* In the WordPress dashboard, go to Custom Fields > Import/Export. Import the *acf-export-2014-09-14.json* file.

You should now have a working, editable Field Group called *Modular Content*. This field group should also be attached to the default Post type, so you can try creating a new Post and the Modular Content example fields will be available.
