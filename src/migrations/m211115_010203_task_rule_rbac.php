<?php

use alperenbugaz\todo\rbac\OwnRule;
use yii\db\Migration;

class m211115_010203_task_rule_rbac extends Migration
{
    public function up()
    {
        $auth = \Yii::$app->authManager;

        $rule = new OwnRule();
        $auth->add($rule);
        $role = \Yii::$app->setting->getValue('site::admin_role');
        $admin = (isset($role) && $role != '') ? $auth->getRole($role) : $auth->getRole('admin');



        $todoWebtaskIndexOwn = $auth->createPermission('todoWebtaskIndexOwn');
        $todoWebtaskIndexOwn->description = 'todo Web taskIndexOwn';
        $auth->add($todoWebtaskIndexOwn);
        $auth->addChild($admin, $todoWebtaskIndexOwn);

        $todoWebtaskViewOwn = $auth->createPermission('todoWebtaskViewOwn');
        $todoWebtaskViewOwn->description = 'todo Web taskViewOwn';
        $todoWebtaskViewOwn->ruleName = $rule->name;
        $auth->add($todoWebtaskViewOwn);
        $auth->addChild($admin, $todoWebtaskViewOwn);
        $todoWebtaskView = $auth->getPermission('todoWebtaskView');
        $auth->addChild($todoWebtaskViewOwn, $todoWebtaskView);

        $todoWebtaskCreateOwn = $auth->createPermission('todoWebtaskCreateOwn');
        $todoWebtaskCreateOwn->description = 'todoWeb taskCreateOwn';
        $todoWebtaskCreateOwn->ruleName = $rule->name;
        $auth->add($todoWebtaskCreateOwn);
        $auth->addChild($admin, $todoWebtaskCreateOwn);
        $todoWebtaskCreate = $auth->getPermission('todoWebtaskCreate');
        $auth->addChild($todoWebtaskCreateOwn, $todoWebtaskCreate);

        $todoWebtaskUpdateOwn = $auth->createPermission('todoWebtaskUpdateOwn');
        $todoWebtaskUpdateOwn->description = 'todo Web taskUpdateOwn';
        $todoWebtaskUpdateOwn->ruleName = $rule->name;
        $auth->add($todoWebtaskUpdateOwn);
        $auth->addChild($admin, $todoWebtaskUpdateOwn);
        $todoWebtaskUpdate = $auth->getPermission('todoWebtaskUpdate');
        $auth->addChild($todoWebtaskUpdateOwn, $todoWebtaskUpdate);

        $todoWebtaskDeleteOwn = $auth->createPermission('todoWebtaskDeleteOwn');
        $todoWebtaskDeleteOwn->description = 'todo Web taskDeleteOwn';
        $todoWebtaskDeleteOwn->ruleName = $rule->name;
        $auth->add($todoWebtaskDeleteOwn);
        $auth->addChild($admin, $todoWebtaskDeleteOwn);
        $todoWebtaskDelete = $auth->getPermission('todoWebtaskDelete');
        $auth->addChild($todoWebtaskDeleteOwn, $todoWebtaskDelete);



        $todoApitaskViewOwn = $auth->createPermission('todoApitaskViewOwn');
        $todoApitaskViewOwn->description = 'todo Api task View Own';
        $todoApitaskViewOwn->ruleName = $rule->name;
        $auth->add($todoApitaskViewOwn);
        $auth->addChild($admin, $todoApitaskViewOwn);
        $todoApitaskView = $auth->getPermission('todoApitaskView');
        $auth->addChild($todoApitaskViewOwn, $todoApitaskView);

        $todoApitaskCreateOwn = $auth->createPermission('todoApitaskCreateOwn');
        $todoApitaskCreateOwn->description = 'todo Api task Create Own';
        $todoApitaskCreateOwn->ruleName = $rule->name;
        $auth->add($todoApitaskCreateOwn);
        $auth->addChild($admin, $todoApitaskCreateOwn);
        $todoApitaskCreate = $auth->getPermission('todoApitaskCreate');
        $auth->addChild($todoApitaskCreateOwn, $todoApitaskCreate);

        $todoApitaskUpdateOwn = $auth->createPermission('todoApitaskUpdateOwn');
        $todoApitaskUpdateOwn->description = 'todo Api task Update Own';
        $todoApitaskUpdateOwn->ruleName = $rule->name;
        $auth->add($todoApitaskUpdateOwn);
        $auth->addChild($admin, $todoApitaskUpdateOwn);
        $todoApitaskUpdate = $auth->getPermission('todoApitaskUpdate');
        $auth->addChild($todoApitaskUpdateOwn, $todoApitaskUpdate);

        $todoApitaskDeleteOwn = $auth->createPermission('todoApitaskDeleteOwn');
        $todoApitaskDeleteOwn->description = 'todo Api task Delete Own';
        $todoApitaskDeleteOwn->ruleName = $rule->name;
        $auth->add($todoApitaskDeleteOwn);
        $auth->addChild($admin, $todoApitaskDeleteOwn);
        $todoApitaskDelete = $auth->getPermission('todoApitaskDelete');
        $auth->addChild($todoApitaskDeleteOwn, $todoApitaskDelete);

        $todoApitaskIndexOwn = $auth->createPermission('todoApitaskIndexOwn');
        $todoApitaskIndexOwn->description = 'todo Api task Index Own';
        $auth->add($todoApitaskIndexOwn);
        $auth->addChild($admin, $todoApitaskIndexOwn);

    }

    public function down()
    {
        $auth = \Yii::$app->authManager;

        $auth->remove($auth->getPermission('todoOwnWebtaskIndex'));
        $auth->remove($auth->getPermission('todoOwnWebtaskView'));
        $auth->remove($auth->getPermission('todoOwnWebtaskCreate'));
        $auth->remove($auth->getPermission('todoOwnWebtaskUpdate'));
        $auth->remove($auth->getPermission('todoOwnWebtaskDelete'));

    }
}
