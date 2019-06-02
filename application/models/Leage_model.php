<?php

class Leage_model extends CI_Model{


    public function insert_player($name,$family,$age,$main_post)
    {
        $sql="insert into players (name,family,age,main_post) values (?,?,?,?)";
        $this->db->query($sql,array($name,$family,$age,$main_post));
    }

    public function insert_team($name,$t_home,$t_away)
    {
    $sql="insert into teams (name,home,away) values (?,?,?)";
    $this->db->query($sql,array($name,$t_home,$t_away));
    }

    public function players()
    {
        $sql="SELECT pl.name,pl.family,pl.age,ps.post_name,t.name as tname FROM `players` pl
              LEFT JOIN posts ps on ps.id=pl.main_post
              LEFT JOIN teams t on t.id=pl.team
              where pl.status=?
              order by pl.id desc ";
        $result=$this->db->query($sql,1);
        return $result->result_array();
    }

    public function teams()
    {
        $sql="select * from teams where status=? order by id desc ";
        $result=$this->db->query($sql,1);
        return $result->result_array();
    }

    public function reserve_player($id,$team)
    {
        $sql="insert into player team values ? where id=?";
        $this->db->query($sql,array($team,$id));
    }

    public function insert_result($firs_team,$second_team,$date,$first_goal,$second_goal,$week_number)
    {
        $sql="insert into playes (first_team,second_team,date,first_team_goal,second_team_goal,week_number) values (?,?,?,?,?,?)";
        $this->db->query($sql,array($firs_team,$second_team,$date,$first_goal,$second_goal,$week_number));
    }

    public function competitions()
    {
        $sql="SELECT pl.id,pl.week_number,t1.name as first,t2.name as second FROM `playes` pl
              LEFT JOIN teams t1 on t1.id=pl.first_team
              LEFT JOIN teams t2 on t2.id=pl.second_team
              where pl.status=?";
        $result=$this->db->query($sql,1);
        return $result->result_array();
    }

    public function results()
    {
        $sql="SELECT pl.week_number,t1.name as first,t2.name as second,pl.first_team_goal,pl.second_team_goal FROM `playes` pl
              LEFT JOIN teams t1 on t1.id=pl.first_team
              LEFT JOIN teams t2 on t2.id=pl.second_team
              where pl.status=?";
        $result=$this->db->query($sql,1);
        return $result->result_array();
    }

    public function free_players()
    {
        $sql="select * from players where team=? and status=? ";
        $result=$this->db->query($sql,array(0,1));
        return $result->result_array();
    }

    public function register_goal()
    {
        $sql="select * from players where team!=? and status=? ";
        $result=$this->db->query($sql,array(0,1));
        return $result->result_array();
    }

    public function insert_goal($play_id,$time_goal,$player_id)
    {
        $sql = "insert into goals (play_id,time_goal,player_id) values (?,?,?)";
        $this->db->query($sql, array($play_id,$time_goal,$player_id));
    }
}
?>