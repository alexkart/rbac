<?php
namespace Yiisoft\Rbac\Tests;

use Yiisoft\Rbac\Rule;

/**
 * Checks if authorID matches userID passed via params.
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';
    public $reallyReally = false;

    /**
     * {@inheritdoc}
     */
    public function execute($user, $item, $params)
    {
        return $params['authorID'] == $user;
    }
}
