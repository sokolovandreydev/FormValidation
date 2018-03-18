<?php namespace sokolovandreydev\FormValidation;

/**
 * Interface ValidatorInterface
 * @package sokolovandreydev\FormValidation
 */
interface ValidatorInterface {

    /**
     * @param $formData
     * @return mixed
     */
    public function validate($formData);

} 