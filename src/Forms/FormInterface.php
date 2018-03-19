<?php namespace sokolovandreydev\FormValidation\Forms;

/**
 * Interface FormInterface
 * @package sokolovandreydev\FormValidation
 */
interface FormInterface {

    /**
     * @param array $data
     * @return mixed
     */
    public function isValid(array $data);

    /**
     * @return mixed
     */
    public function validate();
}
