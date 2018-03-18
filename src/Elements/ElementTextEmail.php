<?php namespace sokolovandreydev\FormValidation;

/**
 * Class ElementTextEmail
 * @package sokolovandreydev\FormValidation
 */
class ElementTextEmail extends ElementAbstract {

    /**
     * ElementTextEmail constructor.
     * @param string $name
     * @param array $validators
     */
    public function __construct(string $name, array $validators = [])
    {
        $validators[] = new ValidatorEmail();

        parent::__construct($name, $validators);
    }

}