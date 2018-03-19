<?php namespace sokolovandreydev\FormValidation\Elements;

/**
 * Class ElementAbstract
 * @package sokolovandreydev\FormValidation
 */
abstract class ElementAbstract implements \sokolovandreydev\FormValidation\Elements\ElementInterface {

    /**
     * @var null|string
     */
    public $name = null;

    /**
     * @var array
     */
    protected $_formData = [];
    /**
     * @var array
     */
    protected $_validators = [];
    /**
     * @var array
     */
    protected $_errors = [];

    /**
     * ElementAbstract constructor.
     * @param string $name
     * @param array $validators
     */
    public function __construct(string $name, array $validators = [])
    {
        $this->name        = $name;
        $this->_validators = $validators;
    }

    /**
     * @param $formData
     */
    function setData($formData)
    {
        $this->_formData = $formData;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        $this->validate();

        return empty($this->_errors);
    }

    /**
     * @return array|bool|mixed
     */
    public function validate()
    {
        if (empty($this->_validators)) {
            return true;
        }

        foreach ($this->_validators as $validator) {
            $errors = $validator->validate($this->_formData);
            if (!empty($errors)) {
                $this->_errors = array_merge($this->_errors, $errors);
            }

        }

        return $this->_errors;
    }

    /**
     * @return array|mixed
     */
    public function getErrors()
    {
        return $this->_errors;
    }

}