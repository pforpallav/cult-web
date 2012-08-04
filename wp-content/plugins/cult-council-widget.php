<?php
/*
Plugin Name: Insti Council Widget
Description: Displays the Info about the genre.
Author: Kumar Pallav
Version: 1
Author URI: http://www.cse.iitb.ac.in/~pforpallav
*/
 
 
class InstiCouncilWidget extends WP_Widget
{
  function InstiCouncilWidget()
  {
    $widget_ops = array('classname' => 'InstiCouncilWidget', 'description' => 'Displays the Info about the genre.' );
    $this->WP_Widget('InstiCouncilWidget', 'Insti Counsil details', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ,
														 'pfa_secy' => '',
														 'pfa_secy_pic' => '',
														 'pfa_secy_phone' => '',
														 'pfa_secy_email' => '',
														 'pfa_club' => '',
														 'pfa_convenor1' => '',
														 'pfa_convenor1_phone' => '') );
    $title = $instance['title'];
	$pfa_secy = $instance['pfa_secy'];
	$pfa_secy_pic = $instance['pfa_secy_pic'];
	$pfa_secy_phone = $instance['pfa_secy_phone'];
	$pfa_secy_email = $instance['pfa_secy_email'];
	$pfa_club = $instance['pfa_club'];
	$pfa_convenor1 = $instance['pfa_convenor1'];
	$pfa_convenor1_phone = $instance['pfa_convenor1_phone'];
?>
  <p>
  <select name="genre">
  	<option value="pfa">PFA</option>
    <option value="fam">Film/Media</option>
   </select>
  
  <label for="<?php echo $this->get_field_id('pfa_secy'); ?>">Secy: <input class="widefat" id="<?php echo $this->get_field_id('pfa_secy'); ?>" name="<?php echo $this->get_field_name('pfa_secy'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label>
  </p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
	if (is_category("PFA"))
	{
		echo $before_widget;
		$title = "PFA Council";
	 
		if (!empty($title))
		  echo $before_title . $title . $after_title;;
	 
		// WIDGET CODE GOES HERE
			echo "Kanika Goyal";
	 
		echo $after_widget;
	}
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );?>