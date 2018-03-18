<?php namespace sokolovandreydev\FormValidation;

require_once 'src/FormInterface.php';
require_once 'src/FormAbstract.php';

require_once 'src/Elements/ElementInterface.php';
require_once 'src/Elements/ElementAbstract.php';
require_once 'src/Elements/ElementTextEmail.php';
require_once 'src/Elements/ElementTextNumber.php';

require_once 'src/Validators/ValidatorInterface.php';
require_once 'src/Validators/ValidatorAbstract.php';
require_once 'src/Validators/ValidatorEmail.php';
require_once 'src/Validators/ValidatorNumeric.php';
require_once 'src/Validators/ValidatorRequired.php';

require_once 'src/Form.php';

$formElements = [];

$formElements[] = new ElementTextEmail('form_email', [new ValidatorRequired()]);
$formElements[] = new ElementTextNumber('form_number', [new ValidatorRequired()]);


$form = new Form($formElements);
echo 'Form data: <br /><pre>';
print_r($_REQUEST);


if (!$form->isValid($_REQUEST)) {
    echo 'Form errors: <br />';
    print_r($form->getErrors());
    echo '<br /><br />';

    foreach ($formElements as $index => $formElement) {
        echo "{$formElement->name} errors: <br />";
        print_r($formElement->getErrors());
        echo '<br /><br />';
    }
}
echo '</pre>';
?>

<ul>
    <li><a href="/test.php">Empty form</a></li>
    <li><a href="/test.php?form_email=aaa@aaa.com">Valid Email</a></li>
    <li><a href="/test.php?form_email=aaa@@aaa.com">Invalid Email</a></li>
    <li><a href="/test.php?form_number=11111">Valid Number</a></li>
    <li><a href="/test.php?form_number=11111sssss">Invalid Number</a></li>
</ul>
