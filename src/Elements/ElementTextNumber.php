<?php namespace sokolovandreydev\FormValidation\Elements;

use \sokolovandreydev\FormValidation\Validators\ValidatorNumeric;

/**
 * Class ElementTextNumber
 * @package sokolovandreydev\FormValidation
 */
/**
 * Class ElementTextNumber
 * @package sokolovandreydev\FormValidation
 */
class ElementTextNumber extends ElementText {

    /**
     * ElementTextNumber constructor.
     * @param string $name
     * @param array $validators
     */
    public function __construct(string $name, array $validators = [])
    {
        $validators[] = new ValidatorNumeric();

        parent::__construct($name, $validators);
    }

}