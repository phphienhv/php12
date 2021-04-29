<?php include_once('html/data.php'); 
    $xhtmlMenu = '<ul class="dropDownMenu">';
    $menuCurrent    = basename($_SERVER['PHP_SELF'], ".php");

    foreach ($arrMenu as $keyMenuLevelOne => $menuLevelOne) {
        $classActive ='';
        if($keyMenuLevelOne == $menuCurrent) $classActive ='class ="active"';


        $xhtmlMenu .= '<li '. $classActive.' ><a href="'.$menuLevelOne['link'].'">'.strtoupper($menuLevelOne['name']).'</a></li>';
    }
    $xhtmlMenu .= '</ul>';
    
?>
<div class="menuBackground">
    <div class="center">
        <?php echo $xhtmlMenu; ?>
    </div>
</div>