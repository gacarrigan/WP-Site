// JavaScript Document
jQuery().ready( function() {
	bpdsTwitter.contentOptionFollow = jQuery( "#bpds-twitter-option-follow" ).html();
	jQuery( "#bpds-twitter-option-follow" ).remove();
	
	bpdsTwitter.contentOptionHashtag = jQuery( "#bpds-twitter-option-hashtag" ).html();
	jQuery( "#bpds-twitter-option-hashtag" ).remove();
	
	bpdsTwitter.contentOptionMention = jQuery( "#bpds-twitter-option-mention" ).html();
	jQuery( "#bpds-twitter-option-mention" ).remove();
	
	bpdsTwitter.contentOptionShare = jQuery( "#bpds-twitter-option-share" ).html();
	jQuery( "#bpds-twitter-option-share" ).remove();

	jQuery( 'input[name="bpds-twitter-type"]' ).click( function() {
		bpdsTwitter.showOption();
	} );
	
	jQuery( '#bpds-twitter-submit' ).click( function() {
		bpdsTwitter.insertEditor();
	} );
} );
var bpdsTwitter = {
	contentOptionFollow : '',
	contentOptionHashtag : '',
	contentOptionMention : '',
	contentOptionShare : '',
	initOption : function( option ) {
		switch( option ) {
			case "share" :
				jQuery( "#bpds-twitter-option-share-url-manual-text" ).blur( function() {
					if( !jQuery( "#bpds-twitter-option-share-url-manual-text" ).val() ) jQuery( "#bpds-twitter-option-share-url-auto" ).attr( "checked", "checked" );
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-title-manual-text" ).blur( function() {
					if( !jQuery( "#bpds-twitter-option-share-title-manual-text" ).val() ) jQuery( "#bpds-twitter-option-share-title-auto" ).attr( "checked", "checked" );
					bpdsTwitter.renderPreview( option );
				} );

				jQuery( '#bpds-twitter-option-share-count' ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-via" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-recommend" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-hashtag" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-large" ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-share-lang" ).change( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( '#bpds-twitter-option-share-url-manual' ).click( function() {
					jQuery( "#bpds-twitter-option-share-url-manual-text" ).focus();
				} );
				
				jQuery( '#bpds-twitter-option-share-title-manual' ).click( function() {
					jQuery( "#bpds-twitter-option-share-title-manual-text" ).focus();
				} );
			break;
			case "follow" :
				jQuery( "#bpds-twitter-option-follow-user" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );				

				jQuery( '#bpds-twitter-option-follow-usershow' ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( '#bpds-twitter-option-follow-followershow' ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
								
				jQuery( "#bpds-twitter-option-follow-large" ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-follow-lang" ).change( function() {
					bpdsTwitter.renderPreview( option );
				} );
			break;
			case "hashtag" :
				jQuery( "#bpds-twitter-option-hashtag-url-manual-text" ).blur( function() {
					if( !jQuery( "#bpds-twitter-option-hashtag-url-manual-text" ).val() ) jQuery( "#bpds-twitter-option-hashtag-url-auto" ).attr( "checked", "checked" );
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-title-manual-text" ).blur( function() {
					if( !jQuery( "#bpds-twitter-option-hashtag-title-manual-text" ).val() ) jQuery( "#bpds-twitter-option-hashtag-title-auto" ).attr( "checked", "checked" );
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-recommend" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-recommend1" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-hashtag" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-large" ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-hashtag-lang" ).change( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( '#bpds-twitter-option-hashtag-url-manual' ).click( function() {
					jQuery( "#bpds-twitter-option-hashtag-url-manual-text" ).focus();
				} );
				
				jQuery( '#bpds-twitter-option-hashtag-title-manual' ).click( function() {
					jQuery( "#bpds-twitter-option-hashtag-title-manual-text" ).focus();
				} );
			break;
			case "mention" :				
				jQuery( "#bpds-twitter-option-mention-title-manual-text" ).blur( function() {
					if( !jQuery( "#bpds-twitter-option-mention-title-manual-text" ).val() ) jQuery( "#bpds-twitter-option-mention-title-auto" ).attr( "checked", "checked" );
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-mention-recommend" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-mention-recommend1" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-mention-tweet" ).blur( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-mention-large" ).click( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( "#bpds-twitter-option-mention-lang" ).change( function() {
					bpdsTwitter.renderPreview( option );
				} );
				
				jQuery( '#bpds-twitter-option-mention-title-manual' ).click( function() {
					jQuery( "#bpds-twitter-option-mention-title-manual-text" ).focus();
				} );
			break;
		}
	},
	insertEditor : function() {
		var option = jQuery( 'input[name="bpds-twitter-type"]:checked' ).val();
		var h = this.renderPreview( option, false );

		if ( typeof tinyMCE != 'undefined' && ( ed = tinyMCE.activeEditor ) && !ed.isHidden() ) ed.execCommand('mceInsertContent', false, h);
		else if ( typeof edInsertContent == 'function' ) edInsertContent(edCanvas, h);
		else jQuery( edCanvas ).val( jQuery( edCanvas ).val() + h );

		tb_remove();
	},
	renderPreview : function( option, preview ) {
		if( typeof preview == 'undefined' ) preview = true;
		var content = '';
		
		switch( option ) {
			case "share" :
				var shareUrlRadio = jQuery( 'input[name="bpds-twitter-option-share-url"]:checked' ).val();
				var shareTitleRadio = jQuery( 'input[name="bpds-twitter-option-share-title"]:checked' ).val();
				var shareCount = jQuery( '#bpds-twitter-option-share-count' ).is( ":checked" );
				var shareVia = jQuery( '#bpds-twitter-option-share-via' ).val();
				var shareRecommend = jQuery( '#bpds-twitter-option-share-recommend' ).val();
				var shareHashtag = jQuery( '#bpds-twitter-option-share-hashtag' ).val();
				var shareLarge = jQuery( '#bpds-twitter-option-share-large' ).is( ":checked" );
				var shareLang = jQuery( '#bpds-twitter-option-share-lang' ).val();
				
				content += '<a href="https://twitter.com/share" class="twitter-share-button" ';
				if( shareUrlRadio == '1' ) content += 'data-url="' + jQuery( '#bpds-twitter-option-share-url-manual-text' ).val() + '" ';
				if( shareTitleRadio == '1' ) content += 'data-text="' + jQuery( '#bpds-twitter-option-share-title-manual-text' ).val() + '" ';
				if( !shareCount ) content += 'data-count="none" ';
				if( shareVia ) content += 'data-via="' + shareVia + '" ';
				if( shareRecommend ) content += 'data-via="' + shareRecommend + '" ';
				if( shareHashtag ) content += 'data-hashtags="' + shareHashtag + '" ';
				if( shareLarge ) content += 'data-size="large" ';
				
				content += 'data-lang="' + shareLang + '" ';
				content += '><span>Tweet</span></a>';
			break;
			case "follow" :
				var followUser = jQuery( '#bpds-twitter-option-follow-user' ).val();
				var followUserShow = jQuery( '#bpds-twitter-option-follow-usershow' ).is( ":checked" );
				var followFollwerShow = jQuery( '#bpds-twitter-option-follow-followershow' ).is( ":checked" );
				var followLarge = jQuery( '#bpds-twitter-option-follow-large' ).is( ":checked" );
				var followLang = jQuery( '#bpds-twitter-option-follow-lang' ).val();
				
				content += '<a href="https://twitter.com/';
				if( !followUser ) content += 'twitter';
				else content += followUser;
				
				content += '" class="twitter-follow-button" ';
				
				if( !followUserShow ) content += 'data-show-screen-name="false" ';
				if( followFollwerShow ) content += 'data-show-count="true" ';
				else content += 'data-show-count="false" ';
				if( followLarge ) content += 'data-size="large" ';
				
				content += 'data-lang="' + followLang + '" ';
				content += '><span>';
				if( !followUser ) content += 'Follow @twitter';
				else content += 'Follow @' + followUser;
				content += '</span></a>';
			break;
			case "hashtag" :
				var hashtagHashtag = jQuery( '#bpds-twitter-option-hashtag-hashtag' ).val();
				var hashtagTitleRadio = jQuery( 'input[name="bpds-twitter-option-hashtag-title"]:checked' ).val();
				var hashtagRecommend = jQuery( '#bpds-twitter-option-hashtag-recommend' ).val();
				var hashtagRecommend1 = jQuery( '#bpds-twitter-option-hashtag-recommend1' ).val();
				var hashtagUrlRadio = jQuery( 'input[name="bpds-twitter-option-hashtag-url"]:checked' ).val();
				var hashtagLarge = jQuery( '#bpds-twitter-option-hashtag-large' ).is( ":checked" );
				var hashtagLang = jQuery( '#bpds-twitter-option-hashtag-lang' ).val();
				
				content += '<a href="https://twitter.com/intent/tweet?button_hashtag=';
				if( hashtagHashtag ) content += hashtagHashtag;
				else content += 'TwitterStories';
				if( hashtagTitleRadio == '1' ) content += '&text=' + jQuery( '#bpds-twitter-option-hashtag-title-manual-text' ).val();
				content += '" class="twitter-hashtag-button" ';
				content += 'data-lang="' + hashtagLang + '" ';
				
				if( hashtagLarge ) content += 'data-size="large" ';
				if( hashtagRecommend || hashtagRecommend1 ) {
					content += 'data-related="';
					if( hashtagRecommend ) {
						content += hashtagRecommend;
						if( hashtagRecommend1 ) content += ',';
					}
					if( hashtagRecommend1 ) content += hashtagRecommend1;
				}				
				if( hashtagUrlRadio == '1' ) content += 'data-url="' + jQuery( '#bpds-twitter-option-hashtag-url-manual-text' ).val() + '" ';				
				
				content += '><span>Tweet #';
				if( hashtagHashtag ) content += hashtagHashtag;
				else content += 'TwitterStories';
				content += '</span></a>';
			break;
			case "mention" :
				var mentionTweet = jQuery( '#bpds-twitter-option-mention-tweet' ).val();
				var mentionTitleRadio = jQuery( 'input[name="bpds-twitter-option-mention-title"]:checked' ).val();
				var mentionRecommend = jQuery( '#bpds-twitter-option-mention-recommend' ).val();
				var mentionRecommend1 = jQuery( '#bpds-twitter-option-mention-recommend1' ).val();
				var mentionLarge = jQuery( '#bpds-twitter-option-mention-large' ).is( ":checked" );
				var mentionLang = jQuery( '#bpds-twitter-option-mention-lang' ).val();
				
				content += '<a href="https://twitter.com/intent/tweet?screen_name=';
				if( mentionTweet ) content += mentionTweet;
				else content += 'support';
				if( mentionTitleRadio == '1' ) content += '&text=' + jQuery( '#bpds-twitter-option-mention-title-manual-text' ).val();
				content += '" class="twitter-mention-button" ';
				content += 'data-lang="' + mentionLang + '" ';
				
				if( mentionLarge ) content += 'data-size="large" ';
				if( mentionRecommend || mentionRecommend1 ) {
					content += 'data-related="';
					if( mentionRecommend ) {
						content += mentionRecommend;
						if( mentionRecommend1 ) content += ',';
					}
					if( mentionRecommend1 ) content += mentionRecommend1;
				}
				
				content += '><span>Tweet to @';
				if( mentionTweet ) content += mentionTweet;
				else content += 'support';
				content += '</span></a>';
			break;
		}
		
		if( preview ) {
			jQuery( "#bpds-twitter-preview-show" ).html( content );
			twttr.widgets.load();
		} else return content;
	},
	showOption	: function() {
		var content = '';
		var option = jQuery( 'input[name="bpds-twitter-type"]:checked' ).val();
		
		jQuery( "#TB_ajaxContent" ).height( jQuery( "#TB_window" ).height() - 45 );
		jQuery( "#TB_ajaxContent" ).width( jQuery( "#TB_window" ).width() - 30 );
		
		switch( option ) {
			case "share" :
				content = this.contentOptionShare;
			break;
			case "follow" :
				content = this.contentOptionFollow;
			break;
			case "hashtag" :
				content = this.contentOptionHashtag;
			break;
			case "mention" :
				content = this.contentOptionMention;
			break;
		}
		
		jQuery( "#bpds-twitter-option #bpds-twitter-content" ).html( content );
		this.initOption( option );
		this.renderPreview( option );
	}
};