<?

namespace application\controllers;
use application\core\Controller;


class MainController extends Controller {
    public function indexAction(){            
        $this->view->render('Вход');
    }
    
    public function addAction()
    {
        $this->view->render('Добавить пост');
    }

    public function editAction()
    {
        $this->view->render('Редактирование поста');
    }

    public function deleteAction()
    {
        exit('Удаление');
    }

    public function logoutAction()
    {
        exit('Выход');
    }

    }   