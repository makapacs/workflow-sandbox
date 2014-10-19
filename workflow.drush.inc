<?php
/**EXTERNAL WORKFLOW ENVIRONMENT CONFIGURATION**/
$workflow_config = array();
//$workflow_config['work_dir'] = '/path/to/work/dir';
//$workflow_config['make_root'] = '/path/to/blueprints';
//$workflow_config['dist'] = '/path/to/distribution/dir';
//$workflow_config['package_prefix'] = 'designssquare-com-';
//$workflow_config['make_file'] = 'path/to/default-make-file.make';

/* Database user name with privileges to create databases and users. It is also
 * used for alias if no db-user specified
 */
$workflow_config['db_user'] = 'workflow_root';

/* Database user password with privileges to create databases and users. It is also
 * used for alias if no db-pwd specified
 */
$workflow_config['db_pwd'] = 'password1';

$artifact_types = array();
$artifact_types[] = 'widget';
$artifact_types[] = 'theme';