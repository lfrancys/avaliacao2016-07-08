<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class IndexTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;

    // Ao acessar as rotas GET todas deverão retornar status 200; 
    public function testRoute(){

        try{
            //        DB::connection('sqlite')->beginTransaction();

            $categorias = \App\Legacy\Entities\Categoria::all();

            $produto = \App\Legacy\Entities\Produto::create([
                'idCategoria'       => $categorias[rand(0, (count($categorias) - 1) )]->idCategoria,
                'nomeProduto'       => str_random('8'),
                'precoProduto'      => rand(100, 1000),
                'descricaoProduto'  => str_random(20)
            ]);

            $fileName = 'fileFake.jpg';
            $updatePicture = \Mockery::mock(UploadedFile::class, ['getClientOriginalName' => $fileName, 'getExtension' => 'jpg']);

            $fileName = md5($fileName.$produto->idProduto);

            \App\Entities\Product::create([
                'productName'       => $produto['nomeProduto'],
                'productPrice'      => $produto['precoProduto'],
                'productPicture'    => $fileName,
                'categoryId'        => $produto['idCategoria'],
                'productDescription'=> $produto['descricaoProduto']
            ]);

            $this->get(route('produto.index'));
            $this->assertEquals(200, $this->response->getStatusCode());


        }catch (\Exception $e){
            $this->assertTrue(false, "Exception : ".$e->getMessage().' in line '.$e->getLine());
        }

        //        DB::connection('sqlite')->rollback();

    }

}
