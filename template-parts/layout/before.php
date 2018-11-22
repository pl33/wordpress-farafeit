<?php
if ( is_active_sidebar( 'sidebar-right' ) && !is_front_page() )
{
  echo '<div class="col-lg-7 ml-auto">';
}
else
{
  //echo '<div class="col-lg-10 mx-auto">';
  echo '<div class="col-lg-8 mx-auto">';
}
?>
