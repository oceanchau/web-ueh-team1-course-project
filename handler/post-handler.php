<?php
require_once("configs/conn.php");
require_once("models/Post.php");

function savePost(Post $post): void
{
    $db = DBController::getInstance();
    try {
        $findOne = find($post->getId());
        if (isset($findOne)) {
            return;
        }
        $sql = '
                INSERT INTO tbl_posts(title, sumary, content, imgThummail, createdAt, createdBy, hotNews) 
                VALUES (:title, :sumary, :content, :imgThummail, :orderId, :createdAt, :createdBy, :hotNews)
            ';

        $statement = $db->prepare($sql);

        $statement->execute([
            'title' => $post->getTitle(),
            'sumary' => $post->getSumary(),
            'content' => $post->getContent(),
            'imgThummail' => $post->getImgThummail(),
            'createdAt' => date('Y-m-d H:i:s'),
            'createdBy' => $post->getCreatedBy(),
            'hotNews' => date('Y-m-d H:i:s')
            ,
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function findAll(int $limit = 0): array
{
    $list = [];
    $db = DBController::getInstance();

    $sql = 'SELECT * FROM tbl_posts ORDER BY createdAt DESC';
    if ($limit > 0) {
        $sql .= " LIMIT " . $limit;
    }
    $req = $db->query($sql);

    foreach ($req->fetchAll() as $item) {
        $list[] = (new Post())
            ->setId($item['id'])
            ->setTitle($item['title'])
            ->setSumary($item['sumary'])
            ->setImgThummail($item['imgThummail'])
            ->setCreatedAt($item['createdAt'])
            ->setCreatedBy($item['createdBy']);
    }

    return $list;
}

function find(int $id): ?Post
{
    $db = DBController::getInstance();
    $req = $db->prepare('SELECT * FROM tbl_posts WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
        return (new Post())
            ->setId($item['id'])
            ->setTitle($item['title'])
            ->setContent($item['content'])
            ->setImgThummail($item['imgThummail'])
            ->setCreatedAt($item['createdAt'])
            ->setCreatedBy($item['createdBy']);
    }
    return null;
}