<?php

include "src/autoloader.php";

use sokolovandreydev\FormValidation\Elements\ElementText;
use sokolovandreydev\FormValidation\Elements\ElementTextEmail;
use sokolovandreydev\FormValidation\Elements\ElementTextNumber;
use sokolovandreydev\FormValidation\Validators\ValidatorRequired;
use sokolovandreydev\FormValidation\Validators\ValidatorInteger;
use sokolovandreydev\FormValidation\Validators\ValidatorDateAmerican;
use sokolovandreydev\FormValidation\Validators\ValidatorPhoneNumber;
use sokolovandreydev\FormValidation\Forms\Form;

$formElements = [];


//Example of email required field
$formElements[] = new ElementTextEmail(
    'form_email',
    [
        new ValidatorRequired()
    ]
);

//Example of input text with number value
$formElements[] = new ElementTextNumber('form_number');

//Example of required input text with int number value
$formElements[] = new ElementTextNumber(
    'form_integer',
    [
        new ValidatorRequired(),
        new ValidatorInteger()
    ]
);

//Example of optional input text with phone number formatted
$formElements[] = new ElementText(
    'form_phone_number',
    [
        new ValidatorPhoneNumber()
    ]
);

//Example of required input text with date formatted
$formElements[] = new ElementText(
    'form_american_formatted_date',
    [
        new ValidatorRequired(),
        new ValidatorDateAmerican()
    ]
);


//Create the form with all created elements
$form = new Form($formElements);

echo 'Form data submitted: <br /><pre>';
print_r($_REQUEST);
echo '<br /><br /><br />';


//Form validate
if (!$form->isValid($_REQUEST)) {
    echo 'All form errors: <br />';
    print_r($form->getErrors());
    echo '<br /><br />';
}
echo '</pre>';
?>


<span>Examples:</span>
<ul>
    <li><a href="/test.php">Empty form</a></li>
    <li><a href="/test.php?form_email=aaa@aaa.com">Valid Email</a></li>
    <li><a href="/test.php?form_email=aaa@@aaa.com">Invalid Email</a></li>
    <li><a href="/test.php?form_number=1111.11111">Valid Number</a></li>
    <li><a href="/test.php?form_number=11111sssss&form_email=aaa@aaa.com">Invalid Number</a></li>
    <li><a href="/test.php?form_integer=11111.111">Invalid Integer</a></li>
    <li><a href="/test.php?form_integer=11111">Valid Integer</a></li>
	<li><a href="/test.php?form_phone_number=11111">Invalid Phone</a></li>
	<li><a href="/test.php?form_phone_number=(123) 4567-1234">Valid Phone</a></li>
</ul>
