<?php

class Leage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Leage_model');
        $this->load->model('Crud');
    }
    public function index()
    {
        $this->load->view('home_page');
    }

    public function insert_player()
    {
        $this->load->view('register_player');
    }

    public function insert_team()
    {
        $this->load->view('register_team');
    }

    public function register_player()
    {

    $name=$_POST['name'];
    $family=$_POST['lastname'];
    $age=$_POST['age'];
    $main_post=$_POST['mainpost'];

    $this->Leage_model->insert_player($name,$family,$age,$main_post);

    $this->player_list();

    }

    public function register_team()
    {
        $name=$_POST['name'];
        $t_home=$_POST['home'];
        $t_away=$_POST['away'];

        $this->Leage_model->insert_team($name,$t_home,$t_away);

        $this->team_list();

    }

    public function reserve_player()
    {
        $data['players']=$this->Leage_model->free_players();
        $data['teams']=$this->Leage_model->teams();
        $this->load->view('reserve_player',$data);
    }

    public function buy_player()
    {
        $player_id=$_POST['player'];
        $item=array('team'=>$_POST['team']);
        $this->Crud->update('players',$item,'id',$player_id);

        $this->player_list();
    }

    public function player_list()
    {
       $data['players']= $this->Leage_model->players();
       $this->load->view('player_list',$data);

    }

    public function team_list()
    {
       $data['teams']= $this->Leage_model->teams();
       $this->load->view('team_list',$data);
    }

    public function competitions()
    {
        $data['competitions']=$this->Leage_model->competitions();
        $this->load->view('playes',$data);
    }

    public  function insert_result()
    {
        $data['teams']=$this->Leage_model->teams();
        $this->load->view('play_result',$data);
    }

    public function complete_result()
    {
        $firs_team=$_POST['first_team'];
        $second_team=$_POST['second_team'];
        $date=$_POST['date'];
        $first_goal=$_POST['g_first'];
        $second_goal=$_POST['g_second'];
        $week_number=$_POST['week_number'];

        $this->Leage_model->insert_result($firs_team,$second_team,$date,$first_goal,$second_goal,$week_number);

        $this->results();
    }

    public function results()
    {
        $data['results']=$this->Leage_model->results();
//        var_dump($data);die;
        $this->load->view('results',$data);
    }

    public function register_goal()
    {
        $data['players']=$this->Leage_model->register_goal('players','where team!=0 and status=1');
        $data['matches']=$this->Leage_model->competitions();
        $this->load->view('register_goal',$data);
    }
    public function insert_goal()
    {
        $player_id=$_POST['player'];
        $minute=$_POST['minute'];
        $match=$_POST['match'];

        $this->Leage_model->insert_goal($player_id,$minute,$match);
        $this->results();

    }

}


?>