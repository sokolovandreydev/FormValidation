<?php namespace sokolovandreydev\FormValidation;

/**
 * Interface ElementInterface
 * @package sokolovandreydev\FormValidation
 */
interface ElementInterface {

    /**
     * ElementInterface constructor.
     * @param string $name
     * @param array $validators
     */
    public function __construct(string $name, array $validators = []);

    /**
     * @return mixed
     */
    public function validate();

    /**
     * @return mixed
     */
    public function getErrors();

}