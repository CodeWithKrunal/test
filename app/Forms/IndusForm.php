<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class IndusForm extends Form
{
    public function buildForm()
    {
        $this
        ->add("name", Field::TEXT,[
            "rules" => "required"
        ])
        ->add('languages[]', 'select', [
            'choices' => ['en' => 'English', 'fr' => 'French'],
            'selected' => 'en',
            'attr' => ['class' => 'js-example-basic-multiple form-control'],
            'multiple' => true,
            'empty_value' => '=== Select language ==='
        ])
        ->add("submit",Field::BUTTON_SUBMIT,[

        ]);
    }
}
