<?php
/**
 * @file
 * vanderwal.features.inc
 */

/**
 * Implements hook_views_api().
 */
function vanderwal_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function vanderwal_image_default_styles() {
  $styles = array();

  // Exported image style: large_blocks.
  $styles['large_blocks'] = array(
    'name' => 'large_blocks',
    'label' => 'Large Blocks',
    'effects' => array(
      5 => array(
        'label' => 'Crop and scale manually',
        'help' => 'Crop and scale a user-selected area, respecting the ratio of the destination width and height.',
        'effect callback' => 'manualcrop_crop_and_scale_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'manualcrop_crop_and_scale_form',
        'summary theme' => 'manualcrop_crop_and_scale_summary',
        'module' => 'manualcrop',
        'name' => 'manualcrop_crop_and_scale',
        'data' => array(
          'width' => 310,
          'height' => 310,
          'upscale' => 0,
          'respectminimum' => 1,
          'onlyscaleifcrop' => 0,
          'style_name' => 'large_blocks',
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: medium_blocks.
  $styles['medium_blocks'] = array(
    'name' => 'medium_blocks',
    'label' => 'Medium Blocks',
    'effects' => array(
      6 => array(
        'label' => 'Crop and scale manually',
        'help' => 'Crop and scale a user-selected area, respecting the ratio of the destination width and height.',
        'effect callback' => 'manualcrop_crop_and_scale_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'manualcrop_crop_and_scale_form',
        'summary theme' => 'manualcrop_crop_and_scale_summary',
        'module' => 'manualcrop',
        'name' => 'manualcrop_crop_and_scale',
        'data' => array(
          'width' => 231,
          'height' => 231,
          'upscale' => 0,
          'respectminimum' => 1,
          'onlyscaleifcrop' => 0,
          'style_name' => 'medium_blocks',
        ),
        'weight' => 0,
      ),
    ),
  );

  // Exported image style: project_photo.
  $styles['project_photo'] = array(
    'name' => 'project_photo',
    'label' => 'Project Photo',
    'effects' => array(
      8 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 540,
          'height' => 370,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: project_thumbnail.
  $styles['project_thumbnail'] = array(
    'name' => 'project_thumbnail',
    'label' => 'Project Thumbnail',
    'effects' => array(
      7 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 80,
          'height' => 80,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function vanderwal_node_info() {
  $items = array(
    'faq' => array(
      'name' => t('FAQ'),
      'base' => 'node_content',
      'description' => t('Frequently Ask Questions'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'home_block' => array(
      'name' => t('Home Block'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Use <em>basic pages</em> for your static content, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'products_services' => array(
      'name' => t('Products Services'),
      'base' => 'node_content',
      'description' => t('products and services'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'project' => array(
      'name' => t('Project'),
      'base' => 'node_content',
      'description' => t('Project Portfolio'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'steel_advantage' => array(
      'name' => t('Steel Advantage'),
      'base' => 'node_content',
      'description' => t('Steel Advantage Fages'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'technical_data' => array(
      'name' => t('Technical Data'),
      'base' => 'node_content',
      'description' => t('technical data'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'webform' => array(
      'name' => t('Webform'),
      'base' => 'node_content',
      'description' => t('Create a new form or questionnaire accessible to users. Submission results and statistics are recorded and accessible to privileged users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
