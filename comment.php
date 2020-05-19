<?php

require_once "libs/comment.php";
    //print_r($_POST);

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $post_id = $_POST['postid'];
    $time = time();

    $res =  AddNewComment($name,$comment,$post_id,$time);


    if($res>0){

        $result = "

                   <img class='rounded-circle w-40' src='assets/img/avatar/1.jpg' alt='...'>

                      <div class='media-body'>
                                <p class='fs-14'>
                                    <strong> $name </strong>
                                  <time class='ml-16 opacity-70 fs-12' datetime='2017-07-14 20:00'>1 min ago</time>
                               </p>
                              <p class='fs-13'>$comment</p>
                          </div>
        ";

       echo json_encode($result);


    }
