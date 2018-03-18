<?php namespace sokolovandreydev\FormValidation;

/**
 * Class ValidatorAbstract
 * @package sokolovandreydev\FormValidation
 */
abstract class ValidatorAbstract implements \sokolovandreydev\FormValidation\ValidatorInterface {

    /**
     * @var array
     */
    protected $_formData = [];
    /**
     * @var array
     */
    protected $_errors   = [];


    /**
     * @param $formData
     * @return array
     */
    public function validate($formData)
    {
        return $this->_errors;
    }
}