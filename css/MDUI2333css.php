<style>
	/*index.php*/
	<?php if ($this->options->twemoji=='true'){ ?>
	@font-face {font-family:twemoji;font-display:swap;src:url('<?php Helper::options()->themeUrl(); ?>fonts/twemoji/TwemojiMozilla.ttf');}
	<?php } ?>
	::selection {background:#b3d4fc;text-shadow:none;}
	a {color:unset;text-decoration:unset;}
	body {background:<?php if ($this->options->backgroundPic) echo 'url('.$this->options->backgroundPic.')'; else echo '#b3d4fc'; ?>;background-position:center center;background-size:cover;background-repeat:no-repeat;background-attachment:fixed;display:flex;flex-flow:column;min-height:calc(100vh - 56px);<?php if ($this->options->twemoji=='true') echo 'font-family:Roboto,Noto,Helvetica,Arial,sans-serif,twemoji;'; ?>}
	@media (min-width:600px) {body {min-height:calc(100vh - 64px);}}
	@media (orientation:landscape) and (max-width:959px) {body {min-height:calc(100vh - 48px);}}
	#pjax-overlay {position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:2000;background:rgb(0,0,0,0.8);}
	#pjax-progress {top:calc(50% - 33px);display:block;height:66px;width:300px;z-index:9999;}
	#pjax-container {flex:1;}
	#header-title {font-weight:500;}
	.pre-numbering {float:left!important;font-size:14px!important;padding:10px!important;margin:0!important;border-right:1px solid #C3CCD0!important;background:#EEE!important;text-align:right!important;text-shadow:none!important;color:#666!important;list-style:none!important;line-height:1.5!important;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
	pre {padding:0!important;background:#F7F7F7!important;}
	pre code {background:#F7F7F7!important;font-size:14px!important;line-height:1.5!important;padding:10px!important;display:block;white-space:pre;overflow-x:auto;border-left:none!important;box-shadow:none!important;text-shadow:none!important;}
	.token.string,.token.string,.token.entity,.token.operator,.token.url,.token.variable {background:unset!important;}
	.thumbnail {height:300px;background-position:center center!important;background-size:cover!important;}
	.ins-search.show .ins-search-overlay {z-index:19260817!important;}
	.ins-search-container {z-index:19260817!important;}
	.ins-section-wrapper::-webkit-scrollbar {background:#fff!important;}
	.mdui-checkbox input[type='checkbox']:focus:checked:not(:disabled) + .mdui-checkbox-icon {-webkit-box-shadow:none!important;box-shadow:none!important;}
	.mdui-checkbox input[type='checkbox']:focus + .mdui-checkbox-icon {-webkit-box-shadow:none!important;box-shadow:none!important;}
	.mdui-switch input[type='checkbox']:focus:checked:not(:disabled) + .mdui-switch-icon:before {-webkit-box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important;box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important;}
	.mdui-switch input[type='checkbox']:focus + .mdui-switch-icon:before {-webkit-box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important;box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)!important;}
	/*comments.php*/
	div#comments form {margin-bottom:0;}
	#commentcontent > .comment-list {margin:16px 0;}
	#commentcontent > .comment-list > .mdui-panel > .mdui-panel-item > .mdui-panel-item-body > .comment-children {margin-top:16px;}
	#commentcontent .mdui-panel-item p img {max-height:400px;}
	div.cancel-comment-reply a:hover:before,div.cancel-comment-reply a:focus:before {display:none!important;}
	#QAQ {height:75%!important;max-height:400px!important;}
	#QAQ .mdui-dialog-content {height:calc(100% - 100px)!important;}
	#QAQ a {color:unset!important;text-transform:unset!important;}
	#QAQ a:hover:before,#QAQ a:focus:before {display:none!important;}
	#QAQ .mdui-dialog-content .mdui-btn {text-transform:unset!important;}
	#QAQ .mdui-dialog-content .QAQPicture .mdui-btn {min-width:unset;padding:5px;height:unset;margin-bottom:-13px;}
	#QAQ .mdui-dialog-content .QAQTextclose .mdui-btn {min-width:unset;}
	div.page-navigator div {display:inline-block;margin:2px 1%;border-radius:4px;width:30px;height:30px;line-height:30px;background:<?php echo ThemeAccent(); ?>;}
	div.page-navigator div a,div.page-navigator div span{color:#fff!important;}
	div.page-navigator div a:hover:before,div.page-navigator div a:focus:before {display:none!important;}
	div.page-navigator div.next a,div.page-navigator div.prev a {line-height:28px!important;}
	div.page-navigator div.current {background:<?php echo ThemePrimary(); ?>;}
	/*post.php & page.php*/
	.mdui-typo hr {margin:0 0 1.2em 0;height:4px;border:0;background:<?php echo ThemeAccent(); ?>;}
	a.Fancybox:hover:before,a.Fancybox:focus:before {display:none!important;}
	.post-container h1,.post-container h2,.post-container h3,.post-container h4,.post-container h5,.post-container h6 {color:<?php echo ThemePrimary(); ?>;}
	@media (min-width:600px) {#post-tocbtn {top:80px!important;}}
	@media (orientation:landscape) and (max-width:959px) {#post-tocbtn {top:64px!important;}}
	#post-toc {width:unset!important;min-width:160px!important;}
	#post-toc ul {padding:0;margin:0;list-style:none;}
	#post-toc .index-subItem-box {display:none;}
	#post-toc .index-item,#post-toc .index-link {width:100%;display:block;color:#333333;text-decoration:none;box-sizing:border-box;}
	#post-toc .index-link {padding:4px 8px 4px 12px;cursor:pointer;-webkit-transition:background-color 0.3s,border-left-color 0.3s;-moz-transition:background-color 0.3s,border-left-color 0.3s;-o-transition:background-color 0.3s,border-left-color 0.3s;transition:background-color 0.3s,border-left-color 0.3s;border-left:3px solid transparent;word-break:break-all;}
	#post-toc .index-item.current > .index-link {background-color:rgba(0,0,0,0.1);border-left:3px solid <?php echo ThemeAccent(); ?>;}
	#post-toc .index-link:hover {background-color:rgba(0,0,0,0.1);}
	#post-toc .index-subItem-box .index-item {padding-left:1em;}
	#tag-container a {display:inline-block;}
	.dairy-content {height:200px;overflow-y:auto;}
	/*footer.php*/
	.footerlink {font-size:24px!important;}
</style>