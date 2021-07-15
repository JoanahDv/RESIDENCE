<!-- <?php

class PostManagerFrontend
{
    // public function getPosts($pageNumber)
    // {
    //     $postPerPage = 6;
    //     $offset = $postPerPage * $pageNumber - $postPerPage; // 
    //     global $db;
    //     $req = $db->prepare('
    //         SELECT *
    //         FROM post 
    //         WHERE draft = 0
    //         ORDER BY published_date ASC
    //         LIMIT ' . $offset . ', ' . $postPerPage);
    //     $req->execute();
        
    //     $result = $req->fetchall();
    //     $req->closeCursor();
    //     return $result;
    // }

    // public function getPost($id)
    // {
    //     global $db;
    //     $req = $db->prepare('
    //         SELECT *
    //         FROM post
    //         WHERE id = ?
    //         AND draft = 0
    //     '); // build prepared statement
    //     $req->execute(array($id)); // bind parameters and execute query ($id replaces the question mark "?")
    //     $result = $req->fetch(); // fetch result
    //     $req->closeCursor();
    //     return $result;
    // }
    // public function getPostPagination()
    // {
    //     global $db;
    //     // count all posts
    //     $req = $db->query('
    //         SELECT COUNT(*)
    //         FROM post
    //         WHERE draft = 0
    //     ');
    //     $numberOfPosts = $req->fetch()[0]; // fetch result
    //     $numberOfPages = ceil ($numberOfPosts/6);
    //     return $numberOfPages;
    // }

   

}
?> -->