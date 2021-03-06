<?php


namespace ShowcaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog posts.
 *
 */
class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // For the full reference of options defined by each form field type
        // see http://symfony.com/doc/current/reference/forms/types.html

        // By default, form fields include the 'required' attribute, which enables
        // the client-side form validation. This means that you can't test the
        // server-side validation errors from the browser. To temporarily disable
        // this validation, set the 'required' attribute to 'false':
        //
        //     $builder->add('title', null, array('required' => false, ...));

        $builder
            ->add('title', null, array('label' => 'label.title'))
            ->add('slug', null, array('label' => 'label.slug'))
            ->add('section', 'select', array('label' => 'label.section'))
            ->add('summary', 'textarea', array('label' => 'label.summary'))
            ->add('content', 'textarea', array(
                'attr' => array('rows' => 20),
                'label' => 'label.content',
            ))
            ->add('authorEmail', 'email', array('label' => 'label.author_email'))
            ->add('publishedAt', 'datetime', array(
                'widget' => 'single_text',
                'label' => 'label.published_at',
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        // Best Practice: use 'app_' as the prefix of your custom form types names
        // see http://symfony.com/doc/current/best_practices/forms.html#custom-form-field-types
        return 'app_article';
    }
}
