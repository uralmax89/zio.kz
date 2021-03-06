<?php

class actionAdminSettingsSchedulerDelete extends cmsAction {

    public function run($id){

        if (!$id) { cmsCore::error404(); }

        if (!cmsForm::validateCSRFToken( $this->request->get('csrf_token', '') )){
            cmsCore::error404();
        }

        $this->model->deleteSchedulerTask($id);

        $this->redirectToAction('settings', array('scheduler'));

    }

}
