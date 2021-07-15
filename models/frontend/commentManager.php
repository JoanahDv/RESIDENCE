<?php
 
class commentManagerFrontend
{
    public function getCommentsForChapter($chapter_id) {
      // $commentsPerChapter = 6;
      // $offset = $commentsPerChapter * $pageNumber - $commentsPerChapter; // 
        global $db;

        $sql = $db->prepare('SELECT * FROM comment WHERE chapter_id = ?');
        $sql->execute(array($chapter_id));
        $comments = $sql->fetchall();
        return $comments;
    }

    public function createComment($comment, $author,  $email, $chapter_id) {
        // function creatcomment($comment, $comment_date,$comment_time, $author)
        
          global $db; // defined in models/connect.php
          $sql = $db->prepare('
            INSERT INTO comment (comment, author, email, comment_date,chapter_id) 
            VALUES(?, ?, ?, NOW(), ?)
          ');
          $affectedLines = $sql->execute(array($comment, $author, $email, $chapter_id));
          //result is commented out
    }

    public function flagComment($id) {
      global $db; // defined in models/connect.php
      $sql = $db->prepare('UPDATE comment SET flag = 1 WHERE id = ?');
      $affectedLines = $sql->execute(array($id));
    }       
    public function getComments($pageNumber) {
        {
        $commentsPerPage = 6;
        $offset = $commentsPerPage * $pageNumber - $commentsPerPage; //
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM comment 
            ORDER BY published_date ASC
            LIMIT ' . $offset . ', ' . $commentsPerPage);
        $req->execute();
         
        $result = $req->fetchall();
        $req->closeCursor();
        return $result;
      }
    } 
    public function getCommentsPagination()
    {
        global $db; 
        // count all chapters
        $req = $db->query('
            SELECT COUNT(*)
            FROM comment
        ');
        $numberOfComments = $req->fetch()[0]; // fetch result
        $numberOfPages = ceil ($numberOfComments/6);
        return $numberOfPages;
    } 
}
?>
