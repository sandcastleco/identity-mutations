<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'identity_mutations');

// Project repository
set('repository', 'git@github.com:sandcastleco/identity-mutations.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('107.170.255.158')
    ->user('sandcastle')
    ->set('deploy_path', '/var/www/identity-mutations');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
