<?php namespace sokolovandreydev\FormValidation\Validators;

/**
 * Class ValidatorEmail
 * @package sokolovandreydev\FormValidation
 */
class ValidatorEmail extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (!empty($formData) && !filter_var($formData, FILTER_VALIDATE_EMAIL)) {
            $this->_errors[] = "Invalid email format";
        }

        return $this->_errors;
    }

}