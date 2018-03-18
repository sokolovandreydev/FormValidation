<?php namespace sokolovandreydev\FormValidation;

/**
 * Class FormAbstract
 */
abstract class FormAbstract implements \sokolovandreydev\FormValidation\FormInterface {

    /**
     * @var array
     */
    protected $_data = [];
    /**
     * @var array
     */
    protected $_elements = [];
    /**
     * @var array
     */
    protected $_errors = [];

    /**
     * FormAbstract constructor.
     * @param array $elements
     */
    function __construct(array $elements)
    {
        $this->_elements = $elements;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function isValid(array $data)
    {
        $this->_data = $data;

        $this->validate();

        return empty($this->_errors);
    }

    /**
     * @return array
     */
    public function validate()
    {
        if (empty($this->_elements)) {
            $this->_errors[] = 'Error: Form has no elements.';
        }

        foreach ($this->_elements as $element) {
            $elementData = isset($this->_data[$element->name]) ? $this->_data[$element->name] : null;
            $element->setData($elementData);
            $errors = $element->validate();

            $this->_errors = array_merge($this->_errors, $errors);
        }

        return $this->_errors;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->_errors;
    }

}