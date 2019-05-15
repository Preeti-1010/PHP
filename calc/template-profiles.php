<?php
/*
Template Name: Profiles
*/

$users=ThemexUser::getUsers(array(
	'number' => ThemexCore::getOption('user_per_page', 9),
	'offset' => ThemexCore::getOption('user_per_page', 9)*(themex_paged()-1),
));
?>
<?php get_header(); ?>
<section>
<div class="container">
<div class="column eightcol">
	<?php if(!empty($users)) { ?>
 	<div class="profiles-listing clearfix">
		<?php
		$i = 0;
		foreach($users  as $key=> $user) {	
			
			ThemexUser::$data['active_user']=ThemexUser::getUser($user->ID);
				$i++;
				$class = '';

				if(is_user_logged_in()){
					$class = "column fourcol";
					if($key%3==2){
						$class .= " last";
					}
				 } else{
					$class = "column fourcol";
					if($key%3==2){
						$class .= " last";
					}
				} ?>


				<div class="<?php echo $class;?>">
				<?php if(!is_user_logged_in() && $key >= 3){?>
				<div class="profile_fade">
					
				</div>
				<?php }?>
					
					<?php get_template_part('content', 'profile-grid'); ?>
				
				</div>
				
				<?php		
					if($i==3) {
					$i=0;
				?>	
			
			<div class="clear"></div>

			<?php }
		} ?>

	</div>
	<!-- /profiles -->
	<?php if(is_user_logged_in()){ ?> 
	<?php ThemexInterface::renderPagination(themex_paged(), themex_pages(ThemexUser::getUsers(array('fields' => 'ID')), ThemexCore::getOption('user_per_page', 9))); 
	}	?>
	<?php } else { ?>
		
	<h3><?php _e('No profiles found. Try a different search?','lovestory'); ?></h3>
	<p><?php _e('Sorry, no profiles matched your search. Try again with different parameters.','lovestory'); ?></p>
	<?php } ?>
</div>
<aside class="sidebar column fourcol last">
<?php get_sidebar(); ?>
</aside>
</div>
</section>
<?php get_footer(); ?>