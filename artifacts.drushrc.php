<?php
//declaring repos
$repo_list = array();
$repo_list['module'] = 'https://github.com/kapasoft-drupal-modules/';
$repo_list['theme'] = 'https://github.com/kapasoft-drupal-themes/';
$repo_list['site'] = 'https://github.com/kapasoft-drupal-site-modules/';
$repo_list['utils'] = 'https://github.com/kapasoft-config-scripts/';

//declaring artifacts
$artifacts = array();
$artifacts['lib'] = array(
    'name' => 'lib',
    'module_name' => 'designssquare_lib',
    'final_name' => 'designssquare_com_lib',
    'repo' => $repo_list['utils'],
    'repo_name' => 'designssquare-utils',
    'work_dir_name' => 'designssquare_lib',
);
$artifacts['sample_data'] = array(
    'name' => 'sample_data',
    'module_name' => 'designssquare_lib_sample_data',
    'final_name' => 'designssquare_com_lib_sample_data',
    'repo' => $repo_list['utils'],
    'repo_name' => 'designssquare-lib-sample-data',
    'work_dir_name' => 'designssquare_lib_sample_data',
);
$artifacts['theme_blocks'] = array(
    'name' => 'theme_blocks',
    'repo' => $repo_list['module'],
    'repo_name' => 'designssquare_com_theme_blocks',
    'final_name' => 'designssquare_com_theme_blocks',
    'work_dir_name' => 'designssquare_theme_blocks',
);
$artifacts['theme_blocks_plus'] = array(
    'name' => 'theme_blocks_plus',
    'module_name' => 'designssquare_com_theme_blocks',
    'final_name' => 'designssquare_com_theme_blocks_plus',
    'repo' => $repo_list['module'],
    'repo_name' => 'designssquare_com_theme_blocks',
    'branch' => 'plus',
    'work_dir_name' => 'designssquare_com_theme_blocks_plus',
);

$artifacts['blog'] = array(
   'name' => 'blog',
    'module_name' => 'designssquare_com_blog',
    'final_name' => 'designssquare_com_widget_blog',
    'repo' => $repo_list['module'],
   'repo_name' => 'blog',
    'work_dir_name' => 'blog',
);
$artifacts['utils_ckeditor'] = array(
    'name' => 'utils_ckeditor',
    'module_name' => 'designssquare_com_ckeditor',
    'final_name' => 'designssquare_com_utils_ckeditor',
    'repo' => $repo_list['utils'],
    'repo_name' => 'designssquare-utils-ckeditor',
    'work_dir_name' => 'designssquare_utils_ckeditor'
);
$artifacts['portfolio'] = array(
    'name' => 'portfolio',
    'module_name' => 'designssquare_com_widget_portfolio',
    'final_name' => 'designssquare_com_widget_portfolio',
    'repo' => $repo_list['module'],
    'repo_name' => 'portfolio',
    'work_dir_name' => 'portfolio',
);
$artifacts['espresso'] = array(
    'name' => 'espresso',
    'type' => 'theme',
    'repo' => $repo_list['theme'],
    'repo_name' => 'espresso',
    'final_name' => 'espresso',
    'work_dir_name' => 'espresso',
);
$artifacts['espresso_theme'] = array(
    'name' => 'espresso_theme',
    'module_name' => 'designssquare_com_theme_espresso',
    'final_name' => 'designssquare_com_theme_espresso',
    'repo' => $repo_list['module'],
    'repo_name' => 'espresso',
    'work_dir_name' => 'espresso_theme',
);
$artifacts['espresso_theme_plus'] = array(
    'name' => 'espresso_theme_plus',
    'module_name' => 'designssquare_com_theme_espresso',
    'final_name' => 'designssquare_com_theme_espresso_plus',
    'repo' => $repo_list['module'],
    'repo_name' => 'espresso',
    'branch' => 'plus',
    'work_dir_name' => 'espresso_theme_plus',
);

$artifacts['bootstrap'] = array(
    'name' => 'bootstrap',
    'type' => 'theme',
    'repo' => $repo_list['theme'],
    'repo_name' => 'bootstrap',
    'final_name' => 'bootstrap',
);





