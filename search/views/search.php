
    <form id="searchForm" method="post">
		<fieldset>
        
           	<input id="s" type="text" />
            
            <input type="submit" value="Submit" id="submitButton" />
            
            <div id="searchInContainer">
                <input type="radio" name="check" value="site" id="searchSite" checked />
                <label for="searchSite" id="siteNameLabel"></label>
                
                <input type="radio" name="check" value="web" id="searchWeb" />
                <label for="searchWeb">Web</label>
			</div>
                        
            <ul class="icons">
                <li class="web" title="Web Search" data-searchType="web">Web</li>
                <li class="images" title="Image Search" data-searchType="images">Images</li>
                <li class="news" title="News Search" data-searchType="news">News</li>
                <li class="videos" title="Video Search" data-searchType="video">Videos</li>
            </ul>
            
        </fieldset>
    </form>

    <div id="resultsDiv"></div>
