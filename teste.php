<!-- 
    VARIAVEIS

    $marca = 'Handel';
    $compras = 125;
    $aluno_comprou = true;

    Utilizamos a palabra echo para colocarmos o valor de uma string no html
    $marca = 'AmaralShoes'
    echo $marca;

    e a tag php pode ser fechado quando quiser

    O print faz a mesma coisa so que retorna o valor 1

    Pra contatenar string é o .
    $completo = $nome . $sobrenome
    $completo = "$nome . $sobrenome" - quando eu uso aspas duplas eu posso colocar o nome da variavel direto

    arrays - criamos uma array com [] ou com a função array()
    para mostrar todo o conteúdo utilizamos o print_r() e var_dump()

    Associative arrays -
    Funcionam como objetos em JavaScript, onde podemos definir a chave e valor de cada item dentro da array.

    Adicionar Itens -
    abrir colchete dentro da array e colocar = 

    $categorias = ['camisetas'];
    $categorias[] = 'bermudas';

    No caso da array associativa 
    $[estoque] = 10 itens

    funçoes diversa (
        unset($produtos); // remove o valor de uma var(pode ser usados dentro de um valor especifico// unset($produtos['preços']))
        count($produtos) // contar o total de itens da array(retorna o total)
        $array_keys($produtos) retorna uma array com as chaves
        $array_merge($produtos1,$produtos2) // juntas duas arrays
        $array_unique($produtos) ;// remove valores duplicados
    )

    Loop {
        foreach($produtos as $produto) {
            echo '<h1> . produto['nome'] . '</h1>;
        }
        for($i = 0; $i <=10; $i++)
    }

    if,else e else if{
        if($vitalicio) {
            $curso = true
        } else {
            $liberar_curso = false
        }
    }

    Utilizar a função empty pra verificar se está vazio(verificar antes de iniciar o codigo para ter erros)
    if(empty($categorias)) {
        echo "Está vazia"
    }

    if(!empty($categorias)) { para negar o valor usa-se o "!"
        echo "Está vazia"
    }

    Operadores 
    if(empty($categorias || $anual) {
        echo "Está vazia"
    }

    Ternario { ifelse de uma linha apenas
        $preço = 120
        $mensagem = $preço > 100 ? "Caro" : "Barato";
        echo $mensagem

    }

    Funções { Funçoes que retornam o valor do banco de dados(todas elas podem ser puxadas)

      get_bloginfo('name')  
    }

    Classes - 
    São funções especiais responsáveis pela criação de objetos.
     class Produto {
         public $preço = 14900;
        

        public function nome(){
            return 'camiseta preta';
        }

        public function preço_final() {
            return 'R$' . $this -> preço / 100;
        }
     }

     $camisa = new Produto();

    echo $camisa->nome();
    echo $camisa->final_price();
    echo $camisa->preco;

    print_r(get_class_methods('Produto'));

   
     }

     funçoes pra listar

     $classe_propriedades = get_class_vars ('Produto');
     $classe_metodos = get_class_methodes('Prodtuo'); - string com o nome da classe


     Classes de WordPress e Woo

     $args = [
        'post_type' => 'product'
     ];

     $query = new WP_Query($args);

     we_get_product() - puxar um produto 


     EXTRA 

     foreach($produtos as $key => $produto) { ?>
    <h1> $produto['nome']?></h1>
    <p><$produto['preço']?></p>

      foreach($query->posts as $post) { ?>
    <h1>$post->post_title; ?><h1>
    <h1> $post->ID; ?><h1>


    $camisa = wc_get_product(19);

    echo $camisa->get_price();
    echo $camisa->get_name();
    echo $camisa->get_type();


    <pre></pre>(Usa pra formatar certinho,estilo wrap line)
===================================================
    Loop WordPress -
       A função have_posts() verifica se existe alguma postagem relacionada 
       a rota (url) digitada,se sim ela retorna 1(true).A função the_post();
       itera sobre o have_posts(),sem ela é criado um loop infinito. 


       $wp_query_ = [
    [
        'titulo ' => 'Primeiro Post',
    ],

    [
        'titulo' => 'Segundo Post',
    ]
];

function have_posts_() {
    global $wp_query_;
    return !empty($wp_query_);
}

function the_post_() {
    global $wp_query_;
    array_shift($wp_query_);
}

function the_title_() {
    global $wp_query_;
    echo $wp_query_[0]['titulo'];
}

if(have_posts_()) : while(have_posts_()) :


=================================================


// $produtos = [
//     [
//         'nome' => 'Adidas 4D',
//         'preço' => 'R$ 49,90' 
//     ],
//     [
//         'nome' => 'Adidas 4D',
//         'preço' => 'R$ 49,90'
        
//     ]
// ];

// $categorias = ['Bermuda'];

// if(!empty($categorias)) {
//     echo "Está cheio";
// }else {
//     echo "está vazio";
// }

// $preço = 150;

// $mensagem =$preço > 100 ? 'Caro' : 'Barato';
//  echo $mensagem;





//   function somar($a, $b) {
//     return $a + $b;
//   }

//     echo somar(10, 15);


// class Produto {
//     public $preco = 14900;

//     public function nome() {
//         return 'Camisa Preta';
//     }

//     public function final_price() {
//         return 'R$' . $this->preco / 100;;
//     }
// }

// $camisa = new Produto();

// echo $camisa->nome();
// echo $camisa->final_price();
// echo $camisa->preco;

// print_r(get_class_methods('Produto'));




// }

//  function puxarPAGINAS(){
//    return $query = new WP_Query([
//        'post_type' => 'product',
//  ]);
//  }

// $query = puxarPAGINAS();
     



     ====================================
     Actions e filters são considerados hooks,estes são utilizados para executarmos funçoes php em locais especificos do codigo.
     

     Objetos

      $product = wc_get_product(19);
        echo '<p>'. $product->get_status();
        echo '<p>'. $product->get_sku();
        echo '<p>'. $product->get_name();


        WC_costumer() - Pega o produto pela id
        WC() - Objeto geral que possui informações sobre a loja e a sessão do usuario
        $woo = WC()
        $cart = $woo->cart->get_cart();

        foreach($cart as $item) {
            echo '<p>Nome' . $item['data']->get_name();
            echo '<p>Preço' . $item['data']->get_price();
        }

        $woo->countries->get_base_adrees(); - puxar o endereço da minha loja
        $woo->countries->get_base_city(); - puxar o endereço da minha loja
        $woo->countries->get_base_state(); - puxar o endereço da minha loja

        =============
        Outras variaveis globais -

        $woocommercer = WC()




        Notificaççoes 
        wc_print_notices() mostra notificaões relevantes
        Botao de comprar
        woocommerce_template_single_add_to_cart() mostra o botao comprar na pagina
 -->




