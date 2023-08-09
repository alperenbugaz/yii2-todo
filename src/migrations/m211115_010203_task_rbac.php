<?php

use yii\db\Migration;

class m211115_010203_task_rbac extends Migration
{/*
    public function up()
    {
        $auth = \Yii::$app->authManager;

        $role = \Yii::$app->setting->getValue('site::admin_role');
        $admin = (isset($role) && $role != '') ? $auth->getRole($role) : $auth->getRole('admin');

        $contentWebDefaultIndex = $auth->createPermission('contentWebDefaultIndex');
        $contentWebDefaultIndex->description = 'Content Web DefaultIndex';
        $auth->add($contentWebDefaultIndex);
        $auth->addChild($admin, $contentWebDefaultIndex);

        $contentWebDefaultView = $auth->createPermission('contentWebDefaultView');
        $contentWebDefaultView->description = 'Content Web DefaultView';
        $auth->add($contentWebDefaultView);
        $auth->addChild($admin, $contentWebDefaultView);

        $contentWebDefaultPreview = $auth->createPermission('contentWebDefaultPreview');
        $contentWebDefaultPreview->description = 'Content Web DefaultPreview';
        $auth->add($contentWebDefaultPreview);
        $auth->addChild($admin, $contentWebDefaultPreview);

        $contentWebDefaultShow = $auth->createPermission('contentWebDefaultShow');
        $contentWebDefaultShow->description = 'Content Web Default Show';
        $auth->add($contentWebDefaultShow);
        $auth->addChild($admin, $contentWebDefaultShow);

        $contentWebDefaultCreate = $auth->createPermission('contentWebDefaultCreate');
        $contentWebDefaultCreate->description = 'Content Web DefaultCreate';
        $auth->add($contentWebDefaultCreate);
        $auth->addChild($admin, $contentWebDefaultCreate);

        $contentWebDefaultUpdate = $auth->createPermission('contentWebDefaultUpdate');
        $contentWebDefaultUpdate->description = 'Content Web DefaultUpdate';
        $auth->add($contentWebDefaultUpdate);
        $auth->addChild($admin, $contentWebDefaultUpdate);

        $contentWebDefaultDelete = $auth->createPermission('contentWebDefaultDelete');
        $contentWebDefaultDelete->description = 'Content Web DefaultDelete';
        $auth->add($contentWebDefaultDelete);
        $auth->addChild($admin, $contentWebDefaultDelete);

        $contentWebCategoryIndex = $auth->createPermission('contentWebCategoryIndex');
        $contentWebCategoryIndex->description = 'Content Web CategoryIndex';
        $auth->add($contentWebCategoryIndex);
        $auth->addChild($admin, $contentWebCategoryIndex);

        $contentWebCategoryView = $auth->createPermission('contentWebCategoryView');
        $contentWebCategoryView->description = 'Content Web CategoryView';
        $auth->add($contentWebCategoryView);
        $auth->addChild($admin, $contentWebCategoryView);

        $contentWebCategoryCreate = $auth->createPermission('contentWebCategoryCreate');
        $contentWebCategoryCreate->description = 'Content Web CategoryCreate';
        $auth->add($contentWebCategoryCreate);
        $auth->addChild($admin, $contentWebCategoryCreate);

        $contentWebCategoryUpdate = $auth->createPermission('contentWebCategoryUpdate');
        $contentWebCategoryUpdate->description = 'Content Web CategoryUpdate';
        $auth->add($contentWebCategoryUpdate);
        $auth->addChild($admin, $contentWebCategoryUpdate);

        $contentWebCategoryDelete = $auth->createPermission('contentWebCategoryDelete');
        $contentWebCategoryDelete->description = 'Content Web CategoryDelete';
        $auth->add($contentWebCategoryDelete);
        $auth->addChild($admin, $contentWebCategoryDelete);

        $contentApiDefaultIndex = $auth->createPermission('contentApiDefaultIndex');
        $contentApiDefaultIndex->description = 'Content Api Default Index';
        $auth->add($contentApiDefaultIndex);
        $auth->addChild($admin, $contentApiDefaultIndex);

        $contentApiDefaultView = $auth->createPermission('contentApiDefaultView');
        $contentApiDefaultView->description = 'Content Api Default View';
        $auth->add($contentApiDefaultView);
        $auth->addChild($admin, $contentApiDefaultView);

        $contentApiDefaultCreate = $auth->createPermission('contentApiDefaultCreate');
        $contentApiDefaultCreate->description = 'Content Api Default Create';
        $auth->add($contentApiDefaultCreate);
        $auth->addChild($admin, $contentApiDefaultCreate);

        $contentApiDefaultUpdate = $auth->createPermission('contentApiDefaultUpdate');
        $contentApiDefaultUpdate->description = 'Content Api Default Update';
        $auth->add($contentApiDefaultUpdate);
        $auth->addChild($admin, $contentApiDefaultUpdate);

        $contentApiDefaultDelete = $auth->createPermission('contentApiDefaultDelete');
        $contentApiDefaultDelete->description = 'Content Api Default Delete';
        $auth->add($contentApiDefaultDelete);
        $auth->addChild($admin, $contentApiDefaultDelete);

        $contentApiCategoryIndex = $auth->createPermission('contentApiCategoryIndex');
        $contentApiCategoryIndex->description = 'Content Api Category Index';
        $auth->add($contentApiCategoryIndex);
        $auth->addChild($admin, $contentApiCategoryIndex);

        $contentWebCategoryPreview = $auth->createPermission('contentWebCategoryPreview');
        $contentWebCategoryPreview->description = 'Content Web CategoryPreview';
        $auth->add($contentWebCategoryPreview);
        $auth->addChild($admin, $contentWebCategoryPreview);

        $contentApiCategoryView = $auth->createPermission('contentApiCategoryView');
        $contentApiCategoryView->description = 'Content Api Category View';
        $auth->add($contentApiCategoryView);
        $auth->addChild($admin, $contentApiCategoryView);

        $contentApiCategoryCreate = $auth->createPermission('contentApiCategoryCreate');
        $contentApiCategoryCreate->description = 'Content Api Category Create';
        $auth->add($contentApiCategoryCreate);
        $auth->addChild($admin, $contentApiCategoryCreate);

        $contentApiCategoryUpdate = $auth->createPermission('contentApiCategoryUpdate');
        $contentApiCategoryUpdate->description = 'Content Api Category Update';
        $auth->add($contentApiCategoryUpdate);
        $auth->addChild($admin, $contentApiCategoryUpdate);

        $contentApiCategoryDelete = $auth->createPermission('contentApiCategoryDelete');
        $contentApiCategoryDelete->description = 'Content Api Category Delete';
        $auth->add($contentApiCategoryDelete);
        $auth->addChild($admin, $contentApiCategoryDelete);

    }

    public function down()
    {
        $auth = \Yii::$app->authManager;

        $auth->remove($auth->getPermission('contentWebDefaultIndex'));
        $auth->remove($auth->getPermission('contentWebDefaultView'));
        $auth->remove($auth->getPermission('contentWebDefaultShow'));
        $auth->remove($auth->getPermission('contentWebDefaultCreate'));
        $auth->remove($auth->getPermission('contentWebDefaultUpdate'));
        $auth->remove($auth->getPermission('contentWebDefaultDelete'));
        $auth->remove($auth->getPermission('contentWebCategoryIndex'));
        $auth->remove($auth->getPermission('contentWebCategoryView'));
        $auth->remove($auth->getPermission('contentWebCategoryCreate'));
        $auth->remove($auth->getPermission('contentWebCategoryUpdate'));
        $auth->remove($auth->getPermission('contentWebCategoryDelete'));
        $auth->remove($auth->getPermission('contentApiDefaultView'));
        $auth->remove($auth->getPermission('contentApiDefaultCreate'));
        $auth->remove($auth->getPermission('contentApiDefaultUpdate'));
        $auth->remove($auth->getPermission('contentApiDefaultDelete'));
        $auth->remove($auth->getPermission('contentWebDefaultPreview'));
        $auth->remove($auth->getPermission('contentApiDefaultIndex'));
    } */
}
