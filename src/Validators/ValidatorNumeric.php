<?php namespace sokolovandreydev\FormValidation\Validators;

/**
 * Class ValidatorNumeric
 * @package sokolovandreydev\FormValidation\Validators
 */
class ValidatorNumeric extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!empty($formData) && !is_numeric($formData)) {
            $this->_errors[] = "value is not numeric";
        }

        return $this->_errors;
    }

}