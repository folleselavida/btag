<?php
class sfWidgetFormSchemaFormatterContact extends sfWidgetFormSchemaFormatter
{
	protected
	$rowFormat       = "
                        %label% 
                        <div class='%row_class%'>
                        	%field% 
                        </div>
                        %help% %hidden_fields%\n\n",
	$errorRowFormat  = "<div class='error'>%errors%</div>",
	$helpFormat      = '<div class="form_help">%help%</div>',
	$decoratorFormat = "<div>\n  %content%</div>";

	public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
	{
		$row = parent::formatRow(
		$label,
		$field,
		$errors,
		$help,
		$hiddenFields 
		);

		return strtr($row, array(
	      '%row_class%' => (count($errors) > 0) ? ' form_row_error' : '',
		));
	}
}