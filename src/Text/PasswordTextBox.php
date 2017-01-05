<?php

namespace Rhubarb\Leaf\Controls\Common\Text;

class PasswordTextBox extends TextBox
{
    protected function onModelCreated()
    {
        $this->model->inputType = 'password';

        parent::onModelCreated();
    }
}
