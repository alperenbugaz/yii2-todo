<?php

use yii\db\Migration;

class m211115_010203_task_rbac extends Migration
{
    public function up()
    {
        $auth = \Yii::$app->authManager;

        $role = \Yii::$app->setting->getValue('site::admin_role');
        $admin = (isset($role) && $role != '') ? $auth->getRole($role) : $auth->getRole('admin');



        $todoWebtaskIndex = $auth->createPermission('todoWebtaskIndex');
        $todoWebtaskIndex->description = 'todo Web taskIndex';
        $auth->add($todoWebtaskIndex);
        $auth->addChild($admin, $todoWebtaskIndex);

        $todoWebtaskView = $auth->createPermission('todoWebtaskView');
        $todoWebtaskView->description = 'todo Web taskView';
        $auth->add($todoWebtaskView);
        $auth->addChild($admin, $todoWebtaskView);

        $todoWebtaskCreate = $auth->createPermission('todoWebtaskCreate');
        $todoWebtaskCreate->description = 'todo Web taskCreate';
        $auth->add($todoWebtaskCreate);
        $auth->addChild($admin, $todoWebtaskCreate);

        $todoWebtaskUpdate = $auth->createPermission('todoWebtaskUpdate');
        $todoWebtaskUpdate->description = 'todo Web taskUpdate';
        $auth->add($todoWebtaskUpdate);
        $auth->addChild($admin, $todoWebtaskUpdate);

        $todoWebtaskDelete = $auth->createPermission('todoWebtaskDelete');
        $todoWebtaskDelete->description = 'todo Web taskDelete';
        $auth->add($todoWebtaskDelete);
        $auth->addChild($admin, $todoWebtaskDelete);



        $todoApitaskIndex = $auth->createPermission('todoApitaskIndex');
        $todoApitaskIndex->description = 'todo Api task Index';
        $auth->add($todoApitaskIndex);
        $auth->addChild($admin, $todoApitaskIndex);

        $todoWebtaskPreview = $auth->createPermission('todoWebtaskPreview');
        $todoWebtaskPreview->description = 'todo Web taskPreview';
        $auth->add($todoWebtaskPreview);
        $auth->addChild($admin, $todoWebtaskPreview);

        $todoApitaskView = $auth->createPermission('todoApitaskView');
        $todoApitaskView->description = 'todo Api task View';
        $auth->add($todoApitaskView);
        $auth->addChild($admin, $todoApitaskView);

        $todoApitaskCreate = $auth->createPermission('todoApitaskCreate');
        $todoApitaskCreate->description = 'todo Api task Create';
        $auth->add($todoApitaskCreate);
        $auth->addChild($admin, $todoApitaskCreate);

        $todoApitaskUpdate = $auth->createPermission('todoApitaskUpdate');
        $todoApitaskUpdate->description = 'todo Api task Update';
        $auth->add($todoApitaskUpdate);
        $auth->addChild($admin, $todoApitaskUpdate);

        $todoApitaskDelete = $auth->createPermission('todoApitaskDelete');
        $todoApitaskDelete->description = 'todo Api task Delete';
        $auth->add($todoApitaskDelete);
        $auth->addChild($admin, $todoApitaskDelete);

    }

    public function down()
    {
        $auth = \Yii::$app->authManager;


        $auth->remove($auth->getPermission('todoWebtaskIndex'));
        $auth->remove($auth->getPermission('todoWebtaskView'));
        $auth->remove($auth->getPermission('todoWebtaskCreate'));
        $auth->remove($auth->getPermission('todoWebtaskUpdate'));
        $auth->remove($auth->getPermission('todoWebtaskDelete'));

    }
}
