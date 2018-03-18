<?php namespace sokolovandreydev\FormValidation;

/**
 * Class ValidatorRequired
 * @package sokolovandreydev\FormValidation
 */
class ValidatorRequired extends ValidatorAbstract {

    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        if (empty($formData)) {
            $this->_errors[] = "Value is empty";
        }

        return $this->_errors;
    }

}