<?php
/**
 * @package BPDS Twitter
 */
/*
Plugin Name: BPDS Twitter
Plugin URI: http://blueprintds.com/
Description: -
Version: 0.1
Author: Blueprintds.com
License: -
*/

add_action( 'init', 'bpds_twitter_init' );
add_action( 'media_buttons', 'bpds_twitter_buttons', 11 );
add_filter( 'mce_css', 'bpds_twitter_editor_style' );

function bpds_twitter_init() {
	if( is_admin() ) {
		wp_register_script( 'bpds_twitter.js', plugins_url( "bpds-twitter" ) . '/assets/js/bpds_twitter.js' );
		wp_enqueue_script( 'bpds_twitter.js', array( 'jquery', 'thickbox' ) );
		wp_register_style( 'bpds_twitter.css', plugins_url( "bpds-twitter" ) . '/assets/css/bpds_twitter.css' );
		wp_enqueue_style( 'bpds_twitter.css' );
	} else {
		wp_register_script( 'bpds_twitter_front.js', plugins_url( "bpds-twitter" ) . '/assets/js/bpds_twitter_front.js' );
		wp_enqueue_script( 'bpds_twitter_front.js' );	
	}
}

function bpds_twitter_editor_style( $url ) {
	if ( !empty($url) ) $url .= ',';  
	$url .=  plugins_url( "bpds-twitter" ) . '/assets/css/bpds_twitter_editor.css';  
	return $url;
}

function bpds_twitter_buttons() {
	global $post_ID;
	
	$langs = array( 
		"nl"	=> "Dutch", 
		"en"	=> "English",
		"fr"	=> "French",
		"de"	=> "German",
		"id"	=> "Indonesian",
		"it"	=> "Italian",
		"ja"	=> "Japanese",
		"ko"	=> "Korean",
		"pt"	=> "Portuguese",
		"ru"	=> "Russian",
		"es"	=> "Spanish",
		"tr"	=> "Turkish"
	);
?>
<script type="text/javascript">
var bpdsTwitterPath = '<?php echo plugins_url( "bpds-twitter" ); ?>';
</script>
<a href="/#TB_inline?inlineId=bpds-twitter-dialog" class="thickbox" title="BPDS Twitter"><img src="<?php echo plugins_url( "bpds-twitter" ) . '/assets/img/bpds-twitter-icon.gif'; ?>" /></a>
<div id="bpds-twitter-dialog" style="display:none;">
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div id="bpds-twitter-choice">
    	<h3>Twitter Buttons</h3>
        <p>Add buttons to your website to help your visitors share content and connect with you on Twitter.</p>
        <p>Choose a button</p>
        <ul id="bpds-twitter-option">
        	<li id="bpds-twitter-type-share"><input type="radio" name="bpds-twitter-type" value="share" /> Share a link</li>
            <li id="bpds-twitter-type-follow"><input type="radio" name="bpds-twitter-type" value="follow" /> Follow</li>
            <li id="bpds-twitter-type-hashtag"><input type="radio" name="bpds-twitter-type" value="hashtag" /> Hashtag</li>
            <li id="bpds-twitter-type-mention"><input type="radio" name="bpds-twitter-type" value="mention" /> Mention</li>
        </ul>
        <div id="bpds-twitter-option">
        	<div id="bpds-twitter-content"></div>
            <div id="bpds-twitter-preview">
                <h3>Preview</h3>
                <div id="bpds-twitter-preview-show"></div>
                <input type="button" id="bpds-twitter-submit" value="Insert into Post" />
            </div>
        </div>
    </div>
    <div id="bpds-twitter-option-share">
        <h3>Button options</h3>
        <table>
            <tr>
                <td><label>Share URL</label></td>
                <td>
                    <input type="radio" name="bpds-twitter-option-share-url" id="bpds-twitter-option-share-url-auto" value="0" checked="checked" /> <label for="bpds-twitter-option-share-url-auto">Use the page URL</label> <br />
                    <input type="radio" name="bpds-twitter-option-share-url" id="bpds-twitter-option-share-url-manual" value="1" /> <label for="bpds-twitter-option-share-url-manual"><input type="text" id="bpds-twitter-option-share-url-manual-text" value="" /></label>
                </td>
            </tr>
            <tr>
                <td><label>Tweet text</label></td>
                <td>
                    <input type="radio" name="bpds-twitter-option-share-title" id="bpds-twitter-option-share-title-auto" value="0" checked="checked" /> <label for="bpds-twitter-option-share-title-auto">Use the title of the page</label> <br />
                    <input type="radio" name="bpds-twitter-option-share-title" id="bpds-twitter-option-share-title-manual" value="1" /> <label for="bpds-twitter-option-share-title-manual"><input type="text" id="bpds-twitter-option-share-title-manual-text" value="" /></label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-share-count" id="bpds-twitter-option-share-count" value="" /> <label for="bpds-twitter-option-share-count">Show count</label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-share-via">Via</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-share-via" id="bpds-twitter-option-share-via" value="" />
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-share-recommend">Recommend</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-share-recommend" id="bpds-twitter-option-share-recommend" value="" />
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-share-hashtag">Hashtag</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-share-hashtag" id="bpds-twitter-option-share-hashtag" value="" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-share-large" id="bpds-twitter-option-share-large" value="" /> <label for="bpds-twitter-option-share-large">Large button</label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-share-lang">Language</label></td>
                <td>
                    <select name="bpds-twitter-option-share-lang" id="bpds-twitter-option-share-lang">
                    <?php foreach( $langs as $k => $lang ) : ?>
                    	<option value="<?php echo $k; ?>" <?php if( $k == 'en' ) { echo 'selected="selected"'; } ?>><?php echo $lang; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    
    <div id="bpds-twitter-option-follow">
        <h3>Button options</h3>
        <table>
            <tr>
                <td><label for="bpds-twitter-option-follow-user">User</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-follow-user" id="bpds-twitter-option-follow-user" value="" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-follow-usershow" id="bpds-twitter-option-follow-usershow" value="" /> <label for="bpds-twitter-option-follow-usershow">Show username</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-follow-followershow" id="bpds-twitter-option-follow-followershow" value="" /> <label for="bpds-twitter-option-follow-followershow">Show follower count</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-follow-large" id="bpds-twitter-option-follow-large" value="" /> <label for="bpds-twitter-option-follow-large">Large button</label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-follow-lang">Language</label></td>
                <td>
                    <select name="bpds-twitter-option-follow-lang" id="bpds-twitter-option-follow-lang">
                    <?php foreach( $langs as $k => $lang ) : ?>
                    	<option value="<?php echo $k; ?>" <?php if( $k == 'en' ) { echo 'selected="selected"'; } ?>><?php echo $lang; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    
    <div id="bpds-twitter-option-hashtag">
        <h3>Button options</h3>
        <table>
        	<tr>
                <td><label for="bpds-twitter-option-hashtag-hashtag">Hashtag</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-hashtag-hashtag" id="bpds-twitter-option-hashtag-hashtag" value="" />
                </td>
            </tr>
            <tr>
                <td><label>Tweet text</label></td>
                <td>
                    <input type="radio" name="bpds-twitter-option-hashtag-title" id="bpds-twitter-option-hashtag-title-auto" value="0" checked="checked" /> <label for="bpds-twitter-option-hashtag-title-auto">No default text</label> <br />
                    <input type="radio" name="bpds-twitter-option-hashtag-title" id="bpds-twitter-option-hashtag-title-manual" value="1" /> <label for="bpds-twitter-option-hashtag-title-manual"><input type="text" id="bpds-twitter-option-hashtag-title-manual-text" value="" /></label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-hashtag-recommend">Recommend</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-hashtag-recommend" id="bpds-twitter-option-hashtag-recommend" value="" /><br />
                    <input type="text" name="bpds-twitter-option-hashtag-recommend1" id="bpds-twitter-option-hashtag-recommend1" value="" />
                </td>
            </tr>
            <tr>
                <td><label>URL</label></td>
                <td>
                    <input type="radio" name="bpds-twitter-option-hashtag-url" id="bpds-twitter-option-hashtag-url-auto" value="0" checked="checked" /> <label for="bpds-twitter-option-share-url-auto">No URL</label> <br />
                    <input type="radio" name="bpds-twitter-option-hashtag-url" id="bpds-twitter-option-hashtag-url-manual" value="1" /> <label for="bpds-twitter-option-hashtag-url-manual"><input type="text" id="bpds-twitter-option-hashtag-url-manual-text" value="" /></label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-hashtag-large" id="bpds-twitter-option-hashtag-large" value="" /> <label for="bpds-twitter-option-share-large">Large button</label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-hashtag-lang">Language</label></td>
                <td>
                    <select name="bpds-twitter-option-hashtag-lang" id="bpds-twitter-option-hashtag-lang">
                    <?php foreach( $langs as $k => $lang ) : ?>
                    	<option value="<?php echo $k; ?>" <?php if( $k == 'en' ) { echo 'selected="selected"'; } ?>><?php echo $lang; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    
    <div id="bpds-twitter-option-mention">
        <h3>Button options</h3>
        <table>
        	<tr>
                <td><label for="bpds-twitter-option-mention-tweet">Tweet to</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-mention-tweet" id="bpds-twitter-option-mention-tweet" value="" />
                </td>
            </tr>
            <tr>
                <td><label>Tweet text</label></td>
                <td>
                    <input type="radio" name="bpds-twitter-option-mention-title" id="bpds-twitter-option-mention-title-auto" value="0" checked="checked" /> <label for="bpds-twitter-option-hashtag-title-auto">No default text</label> <br />
                    <input type="radio" name="bpds-twitter-option-mention-title" id="bpds-twitter-option-mention-title-manual" value="1" /> <label for="bpds-twitter-option-mention-title-manual"><input type="text" id="bpds-twitter-option-mention-title-manual-text" value="" /></label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-mention-recommend">Recommend</label></td>
                <td>
                    <input type="text" name="bpds-twitter-option-mention-recommend" id="bpds-twitter-option-mention-recommend" value="" /><br />
                    <input type="text" name="bpds-twitter-option-mention-recommend1" id="bpds-twitter-option-mention-recommend1" value="" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="bpds-twitter-option-mention-large" id="bpds-twitter-option-mention-large" value="" /> <label for="bpds-twitter-option-mention-large">Large button</label>
                </td>
            </tr>
            <tr>
                <td><label for="bpds-twitter-option-mention-lang">Language</label></td>
                <td>
                    <select name="bpds-twitter-option-mention-lang" id="bpds-twitter-option-mention-lang">
                    <?php foreach( $langs as $k => $lang ) : ?>
                    	<option value="<?php echo $k; ?>" <?php if( $k == 'en' ) { echo 'selected="selected"'; } ?>><?php echo $lang; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php
}
?>