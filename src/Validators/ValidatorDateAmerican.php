<?php namespace sokolovandreydev\FormValidation\Validators;

/**
 * Class ValidatorNumeric
 * @package sokolovandreydev\FormValidation\Validators
 */
class ValidatorDateAmerican extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!empty($formData) && !preg_match("/^(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])-[0-9]{4}$/", $formData)) {
            $this->_errors[] = "value is not valid date";
        }

        return $this->_errors;
    }

}