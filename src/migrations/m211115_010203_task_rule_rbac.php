<?php

use portalium\content\rbac\OwnRule;
use yii\db\Migration;

class m211115_010203_task_rule_rbac extends Migration
{/*
    public function up()
    {
        $auth = \Yii::$app->authManager;

        $rule = new OwnRule();
        $auth->add($rule);
        $role = \Yii::$app->setting->getValue('site::admin_role');
        $admin = (isset($role) && $role != '') ? $auth->getRole($role) : $auth->getRole('admin');

        $contentWebDefaultIndexOwn = $auth->createPermission('contentWebDefaultIndexOwn');
        $contentWebDefaultIndexOwn->description = 'Content Web DefaultIndexOwn';
        $auth->add($contentWebDefaultIndexOwn);
        $auth->addChild($admin, $contentWebDefaultIndexOwn);

        $contentWebDefaultViewOwn = $auth->createPermission('contentWebDefaultViewOwn');
        $contentWebDefaultViewOwn->description = 'Content Web DefaultViewOwn';
        $contentWebDefaultViewOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultViewOwn);
        $auth->addChild($admin, $contentWebDefaultViewOwn);
        $contentWebDefaultView = $auth->getPermission('contentWebDefaultView');
        $auth->addChild($contentWebDefaultViewOwn, $contentWebDefaultView);

        $contentWebDefaultCreateOwn = $auth->createPermission('contentWebDefaultCreateOwn');
        $contentWebDefaultCreateOwn->description = 'Content Web DefaultCreateOwn';
        $contentWebDefaultCreateOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultCreateOwn);
        $auth->addChild($admin, $contentWebDefaultCreateOwn);
        $contentWebDefaultCreate = $auth->getPermission('contentWebDefaultCreate');
        $auth->addChild($contentWebDefaultCreateOwn, $contentWebDefaultCreate);

        $contentWebDefaultUpdateOwn = $auth->createPermission('contentWebDefaultUpdateOwn');
        $contentWebDefaultUpdateOwn->description = 'Content Web DefaultUpdateOwn';
        $contentWebDefaultUpdateOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultUpdateOwn);
        $auth->addChild($admin, $contentWebDefaultUpdateOwn);
        $contentWebDefaultUpdate = $auth->getPermission('contentWebDefaultUpdate');
        $auth->addChild($contentWebDefaultUpdateOwn, $contentWebDefaultUpdate);

        $contentWebDefaultDeleteOwn = $auth->createPermission('contentWebDefaultDeleteOwn');
        $contentWebDefaultDeleteOwn->description = 'Content Web DefaultDeleteOwn';
        $contentWebDefaultDeleteOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultDeleteOwn);
        $auth->addChild($admin, $contentWebDefaultDeleteOwn);
        $contentWebDefaultDelete = $auth->getPermission('contentWebDefaultDelete');
        $auth->addChild($contentWebDefaultDeleteOwn, $contentWebDefaultDelete);

        $contentWebCategoryIndexOwn = $auth->createPermission('contentWebCategoryIndexOwn');
        $contentWebCategoryIndexOwn->description = 'Content Web CategoryIndexOwn';
        $auth->add($contentWebCategoryIndexOwn);
        $auth->addChild($admin, $contentWebCategoryIndexOwn);

        $contentWebCategoryViewOwn = $auth->createPermission('contentWebCategoryViewOwn');
        $contentWebCategoryViewOwn->description = 'Content Web CategoryViewOwn';
        $contentWebCategoryViewOwn->ruleName = $rule->name;
        $auth->add($contentWebCategoryViewOwn);
        $auth->addChild($admin, $contentWebCategoryViewOwn);
        $contentWebCategoryView = $auth->getPermission('contentWebCategoryView');
        $auth->addChild($contentWebCategoryViewOwn, $contentWebCategoryView);

        $contentWebCategoryCreateOwn = $auth->createPermission('contentWebCategoryCreateOwn');
        $contentWebCategoryCreateOwn->description = 'Content Web CategoryCreateOwn';
        $contentWebCategoryCreateOwn->ruleName = $rule->name;
        $auth->add($contentWebCategoryCreateOwn);
        $auth->addChild($admin, $contentWebCategoryCreateOwn);
        $contentWebCategoryCreate = $auth->getPermission('contentWebCategoryCreate');
        $auth->addChild($contentWebCategoryCreateOwn, $contentWebCategoryCreate);

        $contentWebCategoryUpdateOwn = $auth->createPermission('contentWebCategoryUpdateOwn');
        $contentWebCategoryUpdateOwn->description = 'Content Web CategoryUpdateOwn';
        $contentWebCategoryUpdateOwn->ruleName = $rule->name;
        $auth->add($contentWebCategoryUpdateOwn);
        $auth->addChild($admin, $contentWebCategoryUpdateOwn);
        $contentWebCategoryUpdate = $auth->getPermission('contentWebCategoryUpdate');
        $auth->addChild($contentWebCategoryUpdateOwn, $contentWebCategoryUpdate);

        $contentWebCategoryDeleteOwn = $auth->createPermission('contentWebCategoryDeleteOwn');
        $contentWebCategoryDeleteOwn->description = 'Content Web CategoryDeleteOwn';
        $contentWebCategoryDeleteOwn->ruleName = $rule->name;
        $auth->add($contentWebCategoryDeleteOwn);
        $auth->addChild($admin, $contentWebCategoryDeleteOwn);
        $contentWebCategoryDelete = $auth->getPermission('contentWebCategoryDelete');
        $auth->addChild($contentWebCategoryDeleteOwn, $contentWebCategoryDelete);

        $contentApiDefaultViewOwn = $auth->createPermission('contentApiDefaultViewOwn');
        $contentApiDefaultViewOwn->description = 'Content Api DefaultViewOwn';
        $contentApiDefaultViewOwn->ruleName = $rule->name;
        $auth->add($contentApiDefaultViewOwn);
        $auth->addChild($admin, $contentApiDefaultViewOwn);
        $contentApiDefaultView = $auth->getPermission('contentApiDefaultView');
        $auth->addChild($contentApiDefaultViewOwn, $contentApiDefaultView);

        $contentApiDefaultCreateOwn = $auth->createPermission('contentApiDefaultCreateOwn');
        $contentApiDefaultCreateOwn->description = 'Content Api DefaultCreateOwn';
        $contentApiDefaultCreateOwn->ruleName = $rule->name;
        $auth->add($contentApiDefaultCreateOwn);
        $auth->addChild($admin, $contentApiDefaultCreateOwn);
        $contentApiDefaultCreate = $auth->getPermission('contentApiDefaultCreate');
        $auth->addChild($contentApiDefaultCreateOwn, $contentApiDefaultCreate);

        $contentApiDefaultUpdateOwn = $auth->createPermission('contentApiDefaultUpdateOwn');
        $contentApiDefaultUpdateOwn->description = 'Content Api DefaultUpdateOwn';
        $contentApiDefaultUpdateOwn->ruleName = $rule->name;
        $auth->add($contentApiDefaultUpdateOwn);
        $auth->addChild($admin, $contentApiDefaultUpdateOwn);
        $contentApiDefaultUpdate = $auth->getPermission('contentApiDefaultUpdate');
        $auth->addChild($contentApiDefaultUpdateOwn, $contentApiDefaultUpdate);

        $contentApiDefaultDeleteOwn = $auth->createPermission('contentApiDefaultDeleteOwn');
        $contentApiDefaultDeleteOwn->description = 'Content Api DefaultDeleteOwn';
        $contentApiDefaultDeleteOwn->ruleName = $rule->name;
        $auth->add($contentApiDefaultDeleteOwn);
        $auth->addChild($admin, $contentApiDefaultDeleteOwn);
        $contentApiDefaultDelete = $auth->getPermission('contentApiDefaultDelete');
        $auth->addChild($contentApiDefaultDeleteOwn, $contentApiDefaultDelete);

        $contentApiDefaultIndexOwn = $auth->createPermission('contentApiDefaultIndexOwn');
        $contentApiDefaultIndexOwn->description = 'Content Api DefaultIndexOwn';
        $auth->add($contentApiDefaultIndexOwn);
        $auth->addChild($admin, $contentApiDefaultIndexOwn);

        $contentWebDefaultPreviewOwn = $auth->createPermission('contentWebDefaultPreviewOwn');
        $contentWebDefaultPreviewOwn->description = 'Content Web DefaultPreviewOwn';
        $contentWebDefaultPreviewOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultPreviewOwn);
        $auth->addChild($admin, $contentWebDefaultPreviewOwn);
        $contentWebDefaultPreview = $auth->getPermission('contentWebDefaultPreview');
        $auth->addChild($contentWebDefaultPreviewOwn, $contentWebDefaultPreview);

        $contentWebDefaultShowOwn = $auth->createPermission('contentWebDefaultShowOwn');
        $contentWebDefaultShowOwn->description = 'Content Web DefaultShowOwn';
        $contentWebDefaultShowOwn->ruleName = $rule->name;
        $auth->add($contentWebDefaultShowOwn);
        $auth->addChild($admin, $contentWebDefaultShowOwn);
        $contentWebDefaultShow = $auth->getPermission('contentWebDefaultShow');
        $auth->addChild($contentWebDefaultShowOwn, $contentWebDefaultShow);

        $contentApiCategoryViewOwn = $auth->createPermission('contentApiCategoryViewOwn');
        $contentApiCategoryViewOwn->description = 'Content Api Category View Own';
        $contentApiCategoryViewOwn->ruleName = $rule->name;
        $auth->add($contentApiCategoryViewOwn);
        $auth->addChild($admin, $contentApiCategoryViewOwn);
        $contentApiCategoryView = $auth->getPermission('contentApiCategoryView');
        $auth->addChild($contentApiCategoryViewOwn, $contentApiCategoryView);

        $contentApiCategoryCreateOwn = $auth->createPermission('contentApiCategoryCreateOwn');
        $contentApiCategoryCreateOwn->description = 'Content Api Category Create Own';
        $contentApiCategoryCreateOwn->ruleName = $rule->name;
        $auth->add($contentApiCategoryCreateOwn);
        $auth->addChild($admin, $contentApiCategoryCreateOwn);
        $contentApiCategoryCreate = $auth->getPermission('contentApiCategoryCreate');
        $auth->addChild($contentApiCategoryCreateOwn, $contentApiCategoryCreate);

        $contentApiCategoryUpdateOwn = $auth->createPermission('contentApiCategoryUpdateOwn');
        $contentApiCategoryUpdateOwn->description = 'Content Api Category Update Own';
        $contentApiCategoryUpdateOwn->ruleName = $rule->name;
        $auth->add($contentApiCategoryUpdateOwn);
        $auth->addChild($admin, $contentApiCategoryUpdateOwn);
        $contentApiCategoryUpdate = $auth->getPermission('contentApiCategoryUpdate');
        $auth->addChild($contentApiCategoryUpdateOwn, $contentApiCategoryUpdate);

        $contentApiCategoryDeleteOwn = $auth->createPermission('contentApiCategoryDeleteOwn');
        $contentApiCategoryDeleteOwn->description = 'Content Api Category Delete Own';
        $contentApiCategoryDeleteOwn->ruleName = $rule->name;
        $auth->add($contentApiCategoryDeleteOwn);
        $auth->addChild($admin, $contentApiCategoryDeleteOwn);
        $contentApiCategoryDelete = $auth->getPermission('contentApiCategoryDelete');
        $auth->addChild($contentApiCategoryDeleteOwn, $contentApiCategoryDelete);

        $contentApiCategoryIndexOwn = $auth->createPermission('contentApiCategoryIndexOwn');
        $contentApiCategoryIndexOwn->description = 'Content Api Category Index Own';
        $auth->add($contentApiCategoryIndexOwn);
        $auth->addChild($admin, $contentApiCategoryIndexOwn);

    }

    public function down()
    {
        $auth = \Yii::$app->authManager;

        $auth->remove($auth->getPermission('contentOwnWebDefaultIndex'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultView'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultShow'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultCreate'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultUpdate'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultDelete'));
        $auth->remove($auth->getPermission('contentOwnWebCategoryIndex'));
        $auth->remove($auth->getPermission('contentOwnWebCategoryView'));
        $auth->remove($auth->getPermission('contentOwnWebCategoryCreate'));
        $auth->remove($auth->getPermission('contentOwnWebCategoryUpdate'));
        $auth->remove($auth->getPermission('contentOwnWebCategoryDelete'));
        $auth->remove($auth->getPermission('contentOwnApiDefaultView'));
        $auth->remove($auth->getPermission('contentOwnApiDefaultCreate'));
        $auth->remove($auth->getPermission('contentOwnApiDefaultUpdate'));
        $auth->remove($auth->getPermission('contentOwnApiDefaultDelete'));
        $auth->remove($auth->getPermission('contentOwnWebDefaultPreview'));
        $auth->remove($auth->getPermission('contentOwnApiDefaultIndex'));
    } */
}
