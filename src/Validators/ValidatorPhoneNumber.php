<?php namespace sokolovandreydev\FormValidation\Validators;

/**
 * Class ValidatorNumeric
 * @package sokolovandreydev\FormValidation\Validators
 */
class ValidatorPhoneNumber extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!empty($formData) && !preg_match("/^\([0-9]{3}\)\s[0-9]{4}-[0-9]{4}$/", $formData)) {
            $this->_errors[] = "value should be in the format: (ddd) dddd-dddd";
        }

        return $this->_errors;
    }

}