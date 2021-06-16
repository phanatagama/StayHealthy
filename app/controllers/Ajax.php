<?php 

class Ajax extends Controller {
    public function search($keyword)
    {
        if(!isset($_SESSION["login"])){
            header('Location:' . BASEURL . '/signin');
            exit;
        }
        $teks =  '<thead>
                  <tr>
                    <!-- <th>#</th> -->
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Topic</th>
                    <th>Video</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>';
        if($keyword !== '0'){
            $data['articles'] = $this->model('Article_model')->getArticleByKeyword($keyword);
            if($data['articles']){
                foreach( $data as $article ){
                    $teks.=
                      '<tr>
                        <td>'. $article["title"] . '</td>
                        <td>'. $article["name"] .'</td>
                        <td>'. $article["topic"] .'</td>
                        <td>'. $article["video"] .'</td>
                        <td>
                          <a href="'. BASEURL .'/article/update/'. $article["id"].'" class="btn btn-success" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
                          <a href="'. BASEURL .'/article/hapus/'. $article["id"].'" class="btn btn-danger" onclick="return confirm("yakin");" role="button" title="Hapus Data"><i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr></tbody>';
                }
            }
            
        }else{
            $data['articles'] = $this->model('Article_model')->getAllArticle();
            foreach( $data['articles'] as $article ){
                $teks.=
                  '<tr>
                    <td>'. $article["title"] . '</td>
                    <td>'. $article["name"] .'</td>
                    <td>'. $article["topic"] .'</td>
                    <td>'. $article["video"] .'</td>
                    <td>
                      <a href="'. BASEURL .'/article/update/'. $article["id"].'" class="btn btn-success" role="button" title="Ubah Data"><i class="fas fa-edit"></i></a>
                      <a href="'. BASEURL .'/article/hapus/'. $article["id"].'" class="btn btn-danger" onclick="return confirm("yakin");" role="button" title="Hapus Data"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr></tbody>';

            }
        }
        echo $teks;
    }

}
?>
