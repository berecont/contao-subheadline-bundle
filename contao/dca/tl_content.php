<?php

declare(strict_types=1);

/*
 * DCA: tl_content – Subheadline (erweiterte Überschrift)
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['subheadline'] =
    // Standard mit Select-Position
    '{type_legend},type;'
  . '{text_legend},headline,hl,subheadline,subheadline_position,subheadline_decorative;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide},cssID,space;'
  . '{invisible_legend:hide},invisible,start,stop';

/*
// Alternative Palette mit Checkbox-Variante ("unterhalb anordnen")
$GLOBALS['TL_DCA']['tl_content']['palettes']['subheadline'] =
    '{type_legend},type;'
  . '{text_legend},headline,hl,subheadline,subheadline_below,subheadline_decorative;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide},cssID,space;'
  . '{invisible_legend:hide},invisible,start,stop';
*/

// --- Felder ---

// Unterüberschrift (HTML erlaubt)
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline'] = [
    'inputType' => 'text',
    'exclude'   => true,
    'search'    => true,
    'eval'      => [
        'maxlength'      => 2048,
        // HTML im Backend behalten & nicht decodieren, damit Tags durchgereicht werden
        'preserveTags'   => true,
        'decodeEntities' => false,
        'tl_class'       => 'w50 clr',
    ],
    'sql'       => 'text NULL',
];

// Position (oben/unten) – Select
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline_position'] = [
    'inputType' => 'select',
    'exclude'   => true,
    'options'   => ['oben', 'unten'],
    // Labels aus der Sprachdatei (siehe translations)
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['subheadline_position'],
    'eval'      => [
        'tl_class'           => 'w25',
    ],
    'sql'       => "varchar(8) NOT NULL default ''",
];

// Alternative: Checkbox „unterhalb anordnen“
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline_below'] = [
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => [
        'tl_class' => 'w25 m12',
    ],
    'sql'       => "char(1) NOT NULL default ''",
];

// Nur dekorativ (Wrapper im FE-Template)
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline_decorative'] = [
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => [
        'tl_class' => 'w25 m12',
    ],
    'sql'       => "char(1) NOT NULL default ''",
];