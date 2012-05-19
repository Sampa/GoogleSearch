<?php
/**
 * GoogleSearch extension for Yii.
 *
 * Ajax search on your own site OR the web using the google js api
 * It took this guide and made a yii widget out of it
 * http://tutorialzine.com/2010/09/google-powered-site-search-ajax-jquery/
 * @authors tutorialzine.com and Sampa aka Drini <idrini@gmail.com>
 * @link 
 * @link 
 * @version 0.1
 *
 */
class GoogleSearch extends CWidget {

    /**
     * Publishes the required assets
     */
    public function init() {
        parent::init();
        $this -> publishAssets();
    }

    /**
     * Generates the required HTML and Javascript
     */
    public function run() {

        $this->render("search");
    }

    /**
     * Publises and registers the required CSS and Javascript
     * @throws CHttpException if the assets folder was not found
     */
    public function publishAssets() {
        $assets = dirname(__FILE__) . '/assets';
        $baseUrl = Yii::app() -> assetManager -> publish($assets);
        if (is_dir($assets)) {
            //the css to use
            Yii::app() -> clientScript -> registerCssFile($baseUrl . '/css/google_search.css');
			/* the js to use
			U must edit one line in it to work with your URL*/
            Yii::app() -> clientScript -> registerScriptFile($baseUrl . '/js/google_search.js', CClientScript::POS_END);
   
        } else {
            throw new CHttpException(500, __CLASS__ . ' - Error: Couldn\'t find assets to publish.');
        }
    }

}
