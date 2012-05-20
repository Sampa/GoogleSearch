With this widget you quickly add a searchfield to your site.

- User searches on either your site or on the entire web.
- Web,image,news,video search types
- Uses Google as search engine
- Hits are shown via ajax, "more" button to load more results
- Fully Customizable css
- Easy to install

##Requirements

Tested with Yii 1.10 in firefox, should work
on all platforms though.

##Usage
1. Unpack the files to protected/extentions/search.

Your dir-structure should now be:

- protected/extentions/search
- protected/extentions/search/assets
- protected/extentions/search/assets/img
- protected/extentions/search/assets/css
- protected/extentions/search/assets/js
- protected/extentions/search/views

2. EDIT protected/extentions/search/assets/js/google_search.js
Change line 3:
~~~
[php]
siteURL		: 'YOUR_SITE_URL',	// Change this to your site url
~~~

3. Optional:
Style the widget in protected/extentions/search/assets/css/google_search.css
You can change everything if you want to.

4. Place this code in a view:
~~~
[php]
<?php $this->widget('application.extensions.search.GoogleSearch'); ?>
~~~

DONT FORGET You have to clean your app/assets folder after making changes to the js or css files.

##Resources

 * [Forum](http://www.yiiframework.com/forum/index.php/topic/31929-extention-google-search/)
 * [Try out a demo](http://demo.wedson.se/)
 * [Github repositry](https://github.com/Sampa/GoogleSearch)
{\rtf1}