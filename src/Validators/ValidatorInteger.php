<?php namespace sokolovandreydev\FormValidation\Validators;

/**
 * Class ValidatorNumeric
 * @package sokolovandreydev\FormValidation\Validators
 */
class ValidatorInteger extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!empty($formData) && !preg_match('/^[0-9]*$/', $formData)) {
            $this->_errors[] = "value {$formData} is not integer";
        }

        return $this->_errors;
    }

}