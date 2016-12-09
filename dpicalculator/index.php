<?php
/*------------------------------------------------------------------------
# mod_calc4644 - calc4644
# ------------------------------------------------------------------------
# author    Andrew's Generator
# copyright Copyright (C) 2016 Andrew Art. All Rights Reserved.
# @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
# Websites: http://andrewart.net/jcg/
# Technical Support:  http://andrewart.net/jcg/comments
-------------------------------------------------------------------------*/
	// No direct access to this file
	defined('_JEXEC') or die('Restricted access');
	$document =& JFactory::getDocument();
	$document->addStyleSheet('modules/mod_calc4644/tmpl/css/default.css');
?>
<div id="calc">
    <form action="<?php echo htmlspecialchars(JFactory::getURI()->toString()).'#calc'; ?>" method="post" id="calc-form-calc4644">
    	<fieldset class="calc-inputs">
		<ul class="calc-formlist">
<li id="calc-varNumA" class="calc-input">
<label id="jform_varNumA-lbl" for="jform_varNumA" class=""><?php echo JText::_("MOD_CALC4644_VARNUMA"); ?></label>
<input type="text" name="jform[varNumA]" id="jform_varNumA"  class="inputbox" size="5" value="<?php echo (isset($_POST['submit_calc4644']) && isset($resNumA)) ? $resNumA : $varNumA ?>" />
</li>
<li id="calc-varNumB" class="calc-input">
<label id="jform_varNumB-lbl" for="jform_varNumB" class=""><?php echo JText::_("MOD_CALC4644_VARNUMB"); ?></label>
<input type="text" name="jform[varNumB]" id="jform_varNumB"  class="inputbox" size="5" value="<?php echo (isset($_POST['submit_calc4644']) && isset($resNumB)) ? $resNumB : $varNumB ?>" />
</li>
<li id="calc-varNumC" class="calc-input">
<label id="jform_varNumC-lbl" for="jform_varNumC" class=""><?php echo JText::_("MOD_CALC4644_VARNUMC"); ?></label>
<input type="text" name="jform[varNumC]" id="jform_varNumC"  class="inputbox" size="5" value="<?php echo (isset($_POST['submit_calc4644']) && isset($resNumC)) ? $resNumC : $varNumC ?>" />
</li>
</ul>

        </fieldset>
        <input type="submit" id="calc-button" name="submit_calc4644" value="<?php echo JText::_('MOD_CALC4644_SUBMIT'); ?>" />
        
    </form>
    <div id="calc-results">
	<?php if ($form != ""): ?>
<?php
$resResult = preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $resResult) ?  JFactory::getDate($resResult)->format(JText::_('DATE_FORMAT_LC3')) : $resResult;
?>
<?php echo JText::sprintf("MOD_CALC4644_RESULT", $resResult); ?>
<?php endif; ?>
    
    </div>
</div>
