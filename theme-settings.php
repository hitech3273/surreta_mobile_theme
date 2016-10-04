<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function surreta_mobi_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['prof_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Professional Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','surreta_mobi'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social links in header'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['top_social_link']['social_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show social icons (Facebook, Twitter and RSS) in header'),
    '#default_value' => theme_get_setting('social_links', 'surreta_mobi'),
    '#description'   => t("Check this option to show twitter, facebook, rss icons in header. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link']['twitter_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Username'),
    '#default_value' => theme_get_setting('twitter_username', 'surreta_mobi'),
    '#description' => t("Enter your Twitter username."),
  );
  $form['prof_settings']['top_social_link']['facebook_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Username'),
    '#default_value' => theme_get_setting('facebook_username', 'surreta_mobi'),
    '#description' => t("Enter your Facebook username."),
  );
   $form['prof_settings']['top_social_link']['google+_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Google+ Username'),
    '#default_value' => theme_get_setting('google+_username', 'surreta_mobi'),
    '#description' => t("Enter your Google+ username."),
  ); 
   $form['prof_settings']['top_social_link']['linkedin_username'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn Username'),
    '#default_value' => theme_get_setting('linkedin_username', 'surreta_mobi'),
    '#description' => t("Enter your Linked In username."),
  ); 

}