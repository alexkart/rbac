<?php
namespace Yiisoft\Rbac\Tests;

use Yiisoft\Rbac\Rule;

/**
 * Description of ActionRule.
 */
class ActionRule extends Rule
{
    public $name = 'action_rule';
    public $action = 'read';

    /**
     * Private and protected properties to ensure that serialized object
     * does not get corrupted after saving into the DB because of null-bytes
     * in the string.
     *
     * @see https://github.com/yiisoft/yii2/issues/10176
     * @see https://github.com/yiisoft/yii2/issues/12681
     */
    private $somePrivateProperty;
    protected $someProtectedProperty;

    public function execute($user, $item, $params)
    {
        return $this->action === 'all' || $this->action === $params['action'];
    }
}
