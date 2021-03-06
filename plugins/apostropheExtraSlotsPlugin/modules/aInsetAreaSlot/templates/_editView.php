<?php
  // Compatible with sf_escaping_strategy: true
  $form = isset($form) ? $sf_data->getRaw('form') : null;
  $embed = isset($embed) ? $sf_data->getRaw('embed') : null;
  $dimensions = isset($dimensions) ? $sf_data->getRaw('dimensions') : null;
  $item = isset($item) ? $sf_data->getRaw('item') : null;
?>

<?php use_helper('a') ?>

<h4 class="a-slot-edit-title"><?php echo a_('Inset Area Body') ?></h4>

<div class="a-form-row a-hidden">
	<?php echo $form->renderHiddenFields() ?>
</div>

<?php if ($options['value']): ?>
<?php echo $form['value']->render() ?>
<?php echo $form['value']->renderError() ?>
<?php endif ?>

<?php a_js_call('apostrophe.slotEnhancements(?)', array('slot' => '#a-slot-'.$pageid.'-'.$name.'-'.$permid, 'editClass' => 'a-options')) ?>
