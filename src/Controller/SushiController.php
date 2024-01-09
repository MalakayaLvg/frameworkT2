<?php
namespace App\Controller;

use App\Repository\CommentRepository;
use App\Repository\SushiRepository;
use Core\Controller\Controller;

class SushiController extends Controller
{
    public function index()
    {
        $sushiRepository = new SushiRepository();
        $sushis = $sushiRepository->findAll();

        return $this->render("sushi/index",["pageTitle"=>"Les sushis","sushis"=>$sushis]);
    }

    public function show()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $sushiRepository = new SushiRepository();
        $sushi = $sushiRepository->find($id);

        $commentRepository = new CommentRepository();
        $comments = $commentRepository->findAllBySushi($id);

        return $this->render("sushi/show",["sushi"=>$sushi,"comments"=>$comments,"pageTitle"=>$sushi['fish']]);

    }

    public function delete()
    {
        if(!isset($_GET['id']) || !ctype_digit($_GET['id']))
        {
            return $this->redirect();
        }

        $id = $_GET['id'];

        $commentRepository = new CommentRepository();
        $commentRepository->delete();

        return $this->redirect();
    }

    public function update()
    {
        if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['fish']) && isset($_POST['id']) )
        {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $fish = $_POST['fish'];
            $id = $_POST['id'];

            $sushiRepository = new SushiRepository();
            $sushiRepository->update($name,$type,$fish,$id);

            return $this->redirect();
        }
    }
}
