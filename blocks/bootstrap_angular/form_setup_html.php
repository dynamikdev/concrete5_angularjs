<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<ul class="ccm-dialog-tabs tabs" id="ccm-block-tabs">
    <li class="ccm-nav-active">
        <a href="javascript:void(0)" id="ccm-block-one"><?php  echo t('Tab one') ?></a>
    </li>
    <li>
        <a href="javascript:void(0)" id="ccm-block-two"><?php  echo t('Tab two') ?></a>
    </li>
    <li>
        <a href="javascript:void(0)" id="ccm-block-three"><?php  echo t('Tab three') ?></a>
    </li>
</ul>
<div id="tabs">
    <div id="ccm-block-one-tab">
        <?php 
        echo $form->label('myText', t('This is my text&nbsp;'));
        $myTextArray = array('1' => t('One'), '2' => t('Two'));
        echo $form->select('myTextArray', $myTextArray, $myText, array('style' => 'width:150px'));
        $ih = Loader::helper('concrete/interface');
        echo $ih->button_js(t('This is a button'), "alert('" . t('This is a javascript action') . "')", 'right');
        ?>
    </div>

    <div id="ccm-block-two-tab" style="display: none">
        <div>Hello</div>
    </div>
    <div id="ccm-block-three-tab" style="display: none"><p>
            <?php 
            /* Colors tab */
            $mycolorpicker = Loader::helper('form/color');
            echo $form->hidden('categoryHoverBackgroundColor', null);
            echo $mycolorpicker->output('categoryHoverBackgroundColor', t('On hover: Category and product background color'), null, true);
            echo "</p><p>";
            echo $form->hidden('categoryHoverTextColor', null);
            echo $mycolorpicker->output('categoryHoverTextColor', t('On hover: Category and product text color'), null, true);
            echo "</p>";
            ?>
    </div>
</div>
