Thix extention is created thanks to this:
http://tutorialzine.com/2010/09/google-powered-site-search-ajax-jquery/

Usage
----------------------------------------------------------------------------
1. Unpack the files to protected/extentions/search.
Your dir-structure should now be:
protected/extentions/search
--protected/extentions/search/assets
----protected/extentions/search/assets/img
----protected/extentions/search/assets/css
----protected/extentions/search/assets/js
--protected/extentions/search/views

2. EDIT protected/extentions/search/assets/js/google_search.js
Change line 3:
siteURL		: 'YOUR_SITE_URL',	// Change this to your site url

3. Optional:
Style the widget in protected/extentions/search/assets/css/google_search.css

4. Place this code in a view:
<?php $this->widget('application.extensions.search.GoogleSearch'); ?>


DONT FORGET You have to clean your app/assets folder after making changes to the js or css files.
