<?php namespace sokolovandreydev\FormValidation\Elements;

use \sokolovandreydev\FormValidation\Validators\ValidatorEmail;

/**
 * Class ElementTextEmail
 * @package sokolovandreydev\FormValidation
 */
class ElementTextEmail extends ElementText {

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