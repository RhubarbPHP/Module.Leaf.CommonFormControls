<?php

/*
 *	Copyright 2015 RhubarbPHP
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace Rhubarb\Leaf\Controls\Common\SelectionControls\RadioButtons;

use Rhubarb\Leaf\Controls\Common\SelectionControls\SelectionControl;

class RadioButtons extends SelectionControl
{
    /**
     * @var RadioButtonsView
     */
    protected $view;

    protected function getViewClass()
    {
        return RadioButtonsView::class;
    }

    /**
     * Call this from a hosting view to get a single radio button presented.
     *
     * Used when a custom layout of radio buttons is required.
     *
     * @param $value
     * @return mixed
     */
    public function getIndividualRadioButtonHtml($value)
    {
        return $this->view->getInputHtml($this->model->leafPath, $value, null);
    }
}