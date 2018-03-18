<?php namespace sokolovandreydev\FormValidation;

/**
 * Class ValidatorRequired
 * @package sokolovandreydev\FormValidation
 */
class ValidatorNumeric extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!is_numeric($formData)) {
            $this->_errors[] = "value is not numeric";
        }

        return $this->_errors;
    }

}