<?php declare(strict_types=1);
namespace BlockPlus\Form;

use BlockPlus\Form\Element\TemplateSelect;
use Laminas\Form\Element;
use Laminas\Form\Fieldset;
use Omeka\Form\Element\ArrayTextarea;

class ItemWithMetadataFieldset extends Fieldset
{
    public function init(): void
    {
        // Attachments fields are managed separately.

        $this
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][heading]',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Title', // @translate
                ],
                'attributes' => [
                    'placeholder' => 'LIBIS in a nutshell',
                ],
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][text]',
                'type' => Element\Textarea::class,
                'options' => [
                    'label' => 'Text on the left', // @translate
                ],
                'attributes' => [
                    'rows' => 6,
                    'class' => 'block-html full wysiwyg',
                ],
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][links]',
                'type' => ArrayTextarea::class,
                'options' => [
                    'label' => 'News slugs', // @translate
                    'as_key_value' => true,
                ],
                'attributes' => [
                    'rows' => 6,
                    'placeholder' => '1 = news-one
2 = news-two
',
                ],
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][template]',
                'type' => TemplateSelect::class,
                'options' => [
                    'label' => 'Template to display', // @translate
                    'info' => 'Templates are in folder "common/block-layout" of the theme and should start with "item-with-metadata".', // @translate
                    'template' => 'common/block-layout/item-with-metadata',
                ],
                'attributes' => [
                    'class' => 'chosen-select',
                ],
            ]);
    }
}
