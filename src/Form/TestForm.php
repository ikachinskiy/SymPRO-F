<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 02.06.18
 * Time: 2:10
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TestForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    $builder
        ->add('firstname', TextType::class)
        ->add('lastname', TextType::class)
        ;
    }
}