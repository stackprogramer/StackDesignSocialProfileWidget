<?php
/*
*Plugin Name: Stack Design Social Profile Widget
*Plugin URI: https://blog.stackprogramer.xyz/
*Description: Links to Author social media profile
* Version: 1.1 
*Author: stackprogramer
*Author URI: https://blog.stackprogramer.xyz/
*/
  class StackDesign_Social_Profile extends WP_Widget {

		  function __construct() {
		  parent::__construct('StackDesign_Social_Profile', __('Stack Design Social Networks Profiles', 'stackdesign'), // Name
		            array('description', __('Links to Author social media profile', 'stackdesign'),) );
		    }

	      public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'My Social Profile' : null;
 
        isset($instance['aparat']) ? $aparat = $instance['aparat'] : null;
        isset($instance['cloob']) ? $cloob = $instance['cloob'] : null;
        isset($instance['facenama']) ? $facenama = $instance['facenama'] : null;
        isset($instance['hammihan']) ? $hammihan = $instance['hammihan'] : null;
        isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['rss']) ? $rss = $instance['rss'] : null;


        ?>
        
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

       

        <p>
            <label for="<?php echo $this->get_field_id('aparat'); ?>"><?php _e('Aparat:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('aparat'); ?>" name="<?php echo $this->get_field_name('aparat'); ?>" type="text" value="<?php echo esc_attr($aparat); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('cloob'); ?>"><?php _e('Cloob:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('cloob'); ?>" name="<?php echo $this->get_field_name('cloob'); ?>" type="text" value="<?php echo esc_attr($cloob); ?>">
        </p>
 
         <p>
            <label for="<?php echo $this->get_field_id('facenama'); ?>"><?php _e('Facenama:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facenama'); ?>" name="<?php echo $this->get_field_name('facenama'); ?>" type="text" value="<?php echo esc_attr($facenama); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('hammihan'); ?>"><?php _e('Hammihan:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('hammihan'); ?>" name="<?php echo $this->get_field_name('hammihan'); ?>" type="text" value="<?php echo esc_attr($hammihan); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>
      
        <p>
            <label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('Rss:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo esc_attr($rss); ?>">
        </p>
 
        <?php
       }


       public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['aparat'] = (!empty($new_instance['aparat']) ) ? strip_tags($new_instance['aparat']) : '';
        $instance['cloob'] = (!empty($new_instance['cloob']) ) ? strip_tags($new_instance['cloob']) : '';
        $instance['facenama'] = (!empty($new_instance['facenama']) ) ? strip_tags($new_instance['facenama']) : '';
        $instance['hammihan'] = (!empty($new_instance['hammihan']) ) ? strip_tags($new_instance['hammihan']) : '';
        $instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['rss'] = (!empty($new_instance['rss']) ) ? strip_tags($new_instance['rss']) : '';


 
        return $instance;
      }
      


      public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $aparat = $instance['aparat'];
        $cloob = $instance['cloob'];
        $facenama = $instance['facenama'];
        $hammihan = $instance['hammihan'];
        $youtube = $instance['youtube'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];
        $facebook = $instance['facebook'];
        $rss= $instance['rss'];


		 
		// social profile link
            $aparat_profile = '<a  href="' . $aparat . '"><img title="'.__('Aparat').'" class="click-icons" alt="'.__('Twitter:').'" src="'.plugins_url('img/aparat.png', __FILE__).'" ></a>';
            $cloob_profile = '<a  href="' . $cloob . '"><img   title="'.__('Cloob').'" class="click-icons" alt="'.__('Cloob:').'" src="'.plugins_url('img/cloob.png', __FILE__).'" ></a>';
            $facenama_profile = '<a  href="' . $facenama . '"><img  title="'.__('Facenama').'" class="click-icons"  alt="'.__('Facenama:').'" src="'.plugins_url('img/facenama.png', __FILE__).'" ></a>';
            $hammihan_profile = '<a  href="' . $hammihan . '"><img  title="'.__('Hammihan').'" class="click-icons"  alt="'.__('Hammihan:').'" src="'.plugins_url('img/hammihan.png', __FILE__).'" ></a>';
            $youtube_profile = '<a  href="' . $youtube . '"><img   title="'.__('Youtube').'" class="click-icons"  alt="'.__('Youtube:').'" src="'.plugins_url('img/youtube.png', __FILE__).'" ></a>';
	        $twitter_profile = '<a  href="' . $twitter . '"><img  title="'.__('Twitter').'" class="click-icons"  alt="'.__('Twitter:').'" src="'.plugins_url('img/twitter.png', __FILE__).'" ></a>';
	        $google_profile = '<a  href="' . $google . '"><img   title="'.__('Google+').'" class="click-icons"  alt="'.__('Google+:').'" src="'.plugins_url('img/google.png', __FILE__).'" ></a>';
	        $linkedin_profile = '<a  href="' . $linkedin . '"><img   title="'.__('Linkedin').'" class="click-icons"  alt="'.__('Linkedin:').'" src="'.plugins_url('img/linkedin.png', __FILE__).'" ></a>';
            $facebook_profile = '<a  href="' . $facebook . '"> <img  title="'.__('Facebook').'" class="click-icons"  alt="'.__('Facebook:').'" src="'.plugins_url('img/facebook.png', __FILE__).'" ></a>';
            $rss_profile = '<a  href="' . $rss. '"> <img   title="'.__('Rss').'" class="click-icons"  alt="'.__('Rss:').'" src="'.plugins_url('img/rss.png', __FILE__).'" ></a>';
	 
		echo $args['before_widget'];
		if (!empty($title)) {
		echo $args['before_title'] . $title . $args['after_title'];
		}
		 
		        echo '<div class="social-icons">';
                echo (!empty($aparat) ) ? $aparat_profile : null;
                echo (!empty($cloob) ) ? $cloob_profile : null;
                echo (!empty($facenama) ) ? $facenama_profile : null;
                echo (!empty($hammihan) ) ? $hammihan_profile : null;
                echo (!empty($youtube) ) ? $youtube_profile : null;
		        echo (!empty($twitter) ) ? $twitter_profile : null;
		        echo (!empty($google) ) ? $google_profile : null;
		        echo (!empty($linkedin) ) ? $linkedin_profile : null;
                echo (!empty($facebook) ) ? $facebook_profile : null;
                echo (!empty($rss) ) ? $rss_profile : null;

		        echo '</div><br><br>';
		        echo $args['after_widget'];
		}


}


// register Designmodo_Social_Profile widget
        function register_stackdesign_social_profile() {
        register_widget('StackDesign_Social_Profile');
        }
         
         add_action('widgets_init', 'register_stackdesign_social_profile');


         // enqueue css stylesheet
        function stackdesign_social_profile_widget_css() {
        wp_enqueue_style('social-profile-widget', plugins_url('stackdesign-social-profile-widget.css', __FILE__));
        }
        add_action('wp_enqueue_scripts', 'stackdesign_social_profile_widget_css');