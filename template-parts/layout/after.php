<?php 

if ( is_active_sidebar( 'sidebar-right' ) && !is_front_page() )
{
  echo '</div><div class="col-lg-3 mr-auto">';
  dynamic_sidebar( 'sidebar-right' );
}
?>

</div>
