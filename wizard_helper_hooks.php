<?php
/**
 * @file
 * The apci_webform module works by employing a single hook to wrap up a CTools
 * wizard implementation.  The hook is defined as follows.
 */

/**
 * Define what wizards your module implements.
 *
 * @return array
 *    An array of wizards with the information for each wizard within each array
 *    entry. The key for the array should be actual hook_menu paths that will
 *    be defined to handle the form submissions of your wizard. The menu "title",
 *    "access callback", and "access arguments" can be defined within each entry.
 *    The parameters that can be provided by each wizard are defined as follows:
 *
 *      - steps (required): The steps to show within the wizard. Each step is a
 *        new page within the wizard.
 *
 *      - id (optional): A unique ID for this wizard.  If not provided, then
 *        each key (the menu path) will be used as the unique ID replacing '/'
 *        with '_'. i.e., 'register/my/path' becomes ''register_my_path' and
 *        that is the id.
 *
 *      - form id (optional): The form id name to provide to the wizard form.
 *        Defaults to: 'your_module_' . $wizard['id'] from the id above.
 *        i.e., 'your_module_register_my_path'
 *
 *      - object name (optional): The name of the object within the $form_state
 *        to pass around to each of the wizard pages.
 *        Defaults to: $wizard['form id'] (i.e., 'your_module_register_my_path')
 *
 *      - title (optional): The menu title and wizard title for this wizard. If
 *        not included there will be no title.
 *
 *      - theme (optional): A 'wrapper' template for the wizard.
 *        Defaults to: 'wizard_helper_page'.
 *
 *      - wizard callback (optional): If defined this will be called during each
 *        step of the wizard. Allows you to alter the wizard info at runtime.
 *
 *      - access callback (optional): The menu access callback for this wizard.
 *        Defaults to: 'user_access'.
 *
 *      - access arguments (optional): The menu access arguments for this wizard.
 *        Defaults to: 'access content'.
 *
 *      - cancel path (optional): The path to goto if the wizard is cancelled.
 *        Defaults to: The wizard starting path. (i.e., 'register/my/path')
 *
 *      - return path (optional): If return is used, defines the ctools return
 *        path.
 *
 *      - wizard path (optional): The path to the directory that contains your
 *        wizards.
 *        Defaults to: a directory within your module whose name is the "id" above.
 *
 *      - complete path (optional): The menu path to goto when the wizard is
 *        completed.
 *        Defaults to: The wizard starting path. (i.e., 'register/my/path')
 *
 *      - cache type (optional): The type of cache to use for the wizard.
 *        Options: session (default), cache (cache table), ctools (ctools object
 *        cache), mongo (mongo db)
 *
 *      - cancel message (optional): The message to display if the user
 *        cancels the wizard.
 *
 *      - show trail (optional): Show the wizard trail. Default: TRUE
 *
 *      - show back (optional): Show the wizard back button. Default: TRUE
 *
 *      - show cancel (optional): Show the wizard cancel button. Default: TRUE
 *
 *      - show return (optional): Show the wizard return button. Default: FALSE
 *
 *    After you have defined your wizards, you then will need to create a folder
 *    in which your wizard will reside.  Each page of the wizard will get its
 *    own file within the wizard which should be named {MODULE}_{PAGE}.inc.
 *    Please see the sample module for more information.
 */
function hook_wizard_info() {
  return array(
    'register/my/path' => array(
      'title' => 'My Wizard',
      'object name' => 'my_wizard',
      'cancel message' => 'You just canceled me... Why did you do that!?',
      'steps' => array(
        'account' => t('Account Settings'),
        'role' => t('Role Settings'),
        'review' => t('Review'),
        'finish' => t('Finish')
      )
    ),
    'register/another/path' => array(
      'title' => 'Another Wizard',
      'object name' => 'another_wizard',
      'cancel message' => 'You just canceled me... Why did you do that!?',
      'steps' => array(
        'account' => t('Account Settings'),
        'role' => t('Role Settings'),
        'review' => t('Review'),
        'finish' => t('Finish')
      )
    ),
  );
}
