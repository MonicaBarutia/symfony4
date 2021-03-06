<?php
/**
 * Created by PhpStorm.
 * User: Monica
 * Date: 11/5/2018
 * Time: 12:36 PM
 */

namespace App\Form;


use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'help' => 'Choose something catchy!'
            ])
            ->add('content')
            ->add('publishedAt', null, [
                'widget' => 'single_text'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
            'data_class' => Article::class
       ]);
    }

}