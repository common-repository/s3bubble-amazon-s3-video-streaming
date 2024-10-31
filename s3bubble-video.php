<?php
/*
Plugin Name: S3bubble Amazon S3 Cheap Secure Video Streaming
Plugin URI: http://www.s3bubble.com/
Description: S3Bubble dropbox with plugins is a wordpress plugin that will allow you to stream audio and video directly from Amazon s3, create powerfull video blogs sign up for a account at s3bubble.com. 
Version: 1
Author: S3Bubble
Author URI: http://s3bubble.com/
License: GPL2
*/ 
 
/*  Copyright YEAR  Samuel East  (email : mail@samueleast.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/ 


if (!class_exists("s3bubble_video")) {
	class s3bubble_video {

	    function s3bubble_video() { //constructor
			$this->__construct();
		}
		
		function __construct(){
			// Set Plugin Path  
			$this->pluginPath = dirname(__FILE__);  
			$this->pluginUrl = WP_PLUGIN_URL . '/s3bubble-amazon-s3-video-streaming';
			add_action('admin_menu', array( $this, 's3bubble_video_admin_menu' ));
		} // function

		function s3bubble_video_admin_menu(){	
			$icon_url = "http://s3audible.s3.amazonaws.com/icons/wps3icon.png";
			add_menu_page( 's3bubble_video', 'S3Bubble Video', 10, 's3bubble_video', array($this, 's3bubble_video_admin'), $icon_url );
    	}
		
		function s3bubble_video_admin()  {	?>
		<style>
			.s3bubble-pre {
				white-space: pre-wrap; /* css-3 */
				white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
				white-space: -pre-wrap; /* Opera 4-6 */
				white-space: -o-pre-wrap; /* Opera 7 */
				word-wrap: break-word; /* Internet Explorer 5.5+ */
				background: #202020;
				padding: 15px;
				color: white;
			}
		</style>
		<div class="wrap">
			<div id="icon-options-general" class="icon32"></div>
			<h2>S3Bubble Amazon S3 Media Cheap Secure Video Streaming - Create Powerfull Video Blogs</h2>
			<div class="metabox-holder has-right-sidebar">
				<div class="inner-sidebar" style="width:50%">
					<div class="postbox">
						<h3><span>Add Video From Your <a href="http://S3Bubble.com/" target="_blank">S3Bubble.com</a> Account.</span></h3>
						<div class="inside">
							<iframe style="width:100%" height="340" src="//s3bubble.com/watch?v=DksNnhwTz&amp;share=true&amp;hex=e02222" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="postbox">
						<h3><span>Upload directly from mobile app create a video blog</span></h3>
						<div class="inside">
							<iframe style="width:100%" height="340" src="//s3bubble.com/watch/?v=zchrXjGHc&amp;share=true&amp;hex=e02222" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="postbox">
						<h3><span>If you dont already have a amazon s3 account create a free one <a href="https://portal.aws.amazon.com/gp/aws/developer/registration/index.html" target="_blank">Amazon S3 Storage</a></span></h3>
						<div class="inside">
							<iframe style="width:100%" height="340" src="//s3bubble.com/watch?v=GOxTyRzSB&amp;share=true&amp;hex=e02222" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="postbox">
						<h3><span>Video playlist Beta * <a href="http://s3video.users38.interdns.co.uk/" target="_blank">View Example</a></span></h3>
					</div>
				</div>
				<!-- .inner-sidebar -->
		
				<div id="post-body">
					<div id="post-body-content" style="margin-right: 51%;">
		
						<div class="postbox">
							<h3><span>VIDEO STREAMING DIRECTLY FROM AMAZON S3</span></h3>
							<h3><span>Please sign up for an account at <a href="http://S3Bubble.com/" target="_blank">http://s3bubble.com</a>.</span></h3>
							<h3 style="color: #31708f;background-color: #d9edf7;border-color: #bce8f1;padding: 15px;border: 1px solid transparent;">Stuck? if you would like us to get you started please just <a href="mailto:support@S3Bubble.com" target="_blank">contact us</a>.</h3>
							
						</div>
		
						<h3 style="color: #31708f;background-color: #d9edf7;border-color: #bce8f1;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;">Stuck? this can be grabbed from your s3bubble account it will be auto generated for you.</h3>
						<div class="postbox">
							<h3><span>Example Video Embed Code - grab yours from S3Bubble and paste into post or page try with the one below.</span></h3>
		
							<div class="inside">
								<pre class="s3bubble-pre">&lt;iframe style="width:100%;max-width:640px;" height="415" src="//s3bubble.com/watch?v=yCbPhyeMf&share=true" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</pre>
							</div>
						</div>
						<div class="postbox">
						
						<div class="inside">
							<img style="float: left;" src="<?php echo $this->pluginUrl; ?>/assets/images/google_mobile.png" />
								<h2>Upload long videos directly from you Mobile Phones... watch video ></h2>
							</div>
						</div>
					</div>
					<!-- #post-body-content -->
				</div>
				<!-- #post-body -->
			</div>
			<!-- .metabox-holder -->
		</div>
		<!-- .wrap -->
<?php }

}
// Initiate the class
$s3bubble_video = new s3bubble_video();
} //End Class s3bubble_video