<?php namespace sokolovandreydev\FormValidation\Elements;


/**
 * Class ElementText
 * @package sokolovandreydev\FormValidation\Elements
 */
class ElementText extends ElementAbstract {

    /**
     * ElementTextEmail constructor.
     * @param string $name
     * @param array $validators
     */
    public function __construct(string $name, array $validators = [])
    {
        parent::__construct($name, $validators);
    }

}