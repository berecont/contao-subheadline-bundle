<?php

declare(strict_types=1);

namespace Berecont\ContaoSubheadlineBundle\Controller\ContentElement;

use Berecont\ContaoSubheadlineBundle\Service\AttributePolicy;
use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class SubheadlineController extends AbstractContentElementController
{

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        // Headline-Feld (serialized array mit unit/value) → Array normalisieren
        $hArr = is_array($model->headline) ? $model->headline : (StringUtil::deserialize((string) $model->headline, true) ?: []);

        $tag  = $hArr['unit']  ?? ($model->hl ?: 'h2');   // h1–h6; Core-Default: h2
        $text = $hArr['value'] ?? '';                    // eigentlicher Headline-Text

        // Dem Template ein „headline“-Objekt geben, das die Core-Komponente versteht
        $template->headline = [
            'text'     => $text,
            'tag_name' => $tag,
            // KEINE attributes hier setzen – die kommen wie im Core über den Wrapper rein
        ];

        $template->subheadline             = $model->subheadline;
        $template->subheadline_position    = $model->subheadline_position ?: 'oben';
        $template->subheadline_decorative  = (bool) $model->subheadline_decorative;

        return $template->getResponse();
    }
}