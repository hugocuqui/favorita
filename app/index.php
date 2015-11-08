<!doctype html>
<html class="no-js" ng-app="favoritaApp">
  <head>
    <meta charset="utf-8">
    <title>Favorita | Odontologia</title>
    <base href="/favorita/app/">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="../bower_components/animate.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
  </head>
  <body ng-controller="MainCtrl">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="header" id="home">

      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container" >

          <div class="navbar-header">
            <div class="text-right btn-facebook-collapse">
              <a ng-href="http://facebook.com" data-target="#facebook" class="btn-icon visible-xs-*" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#js-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scroll-only" href="/" >
              <img src="images/trevo.png" alt="Favorita | Odontologia">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="js-navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a ng-href="/" data-target="#home">home</a></li>
              <li><a ng-href="/quem_somos" data-target="#quem_somos">quem somos</a></li>
              <li><a ng-href="/tratamento" data-target="#tratamento">tratamento</a></li>
              <li><a ng-href="/profissionais" data-target="#profissionais">profissionais</a></li>
              <li><a ng-href="/contato" data-target="#contato">contato</a></li>
              <li><a ng-href="http://facebook.com" data-target="#facebook" class="btn-icon hidden-xs" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
              <li><a ng-href="#" data-target="#search" class="btn-icon hidden-xs"><i class="fa fa-search"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container brand">
      <div class="row">
        <img src="images/brand.png" class="col-xs-2" alt="Favorita | Odontologia">
      </div>
    </div>

    <div id="carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-center-arrow">
        <a href="#" data-target="#tratamento"></a>
      </div>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/banner-01.png" alt="Prevenção é sinônimo de saúde">
          <div class="carousel-caption">
            <h3>Prevenção é sinônimo de saúde</h3>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-02.png" alt="Seu sorriso é prioridade">
          <div class="carousel-caption">
            <h3>Seu sorriso é prioridade</h3>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-03.png" alt="Bem-estar e conforto nos tratamentos">
          <div class="carousel-caption">
            <h3>Bem-estar e conforto nos tratamentos</h3>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-04.png" alt="Viva melhor e coloque um sorriso no rosto">
          <div class="carousel-caption">
            <h3>Viva melhor e coloque um sorriso no rosto</h3>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="arrow-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="arrow-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
      <div class="row between-boxes">

        <div id="quem_somos" class="col-xs-8 col-xs-push-2 title-box">
          <h2>Quem somos</h2>
          <p>
            <img src="images/arrow-blue.png" class="arrow-blue-left" alt="Favorita | Odontologia" />
            seja bem-vindo à Favorita Odontologia!
            <img src="images/arrow-blue.png" class="arrow-blue-right" alt="Favorita | Odontologia" />
          </p>
        </div>

      </div>

      <div class="row text-box between-boxes">
        <div class="col-xs-12 col-md-6 text-justify">
          <p>Nossa clinica diferencia-se pelo atendimento <strong>acolhedor</strong> e <strong>amigável</strong>. Aqui, os procedimentos preventivos ocupam um lugar de destaque, pois são à base de qualquer tratamento odontológico. Realizamos uma criteriosa análise dos dentes, tecidos bucais e harmonia facial, através de exames regulares, radiografias de controle e orientações especificas para cada necessidade, prevenindo assim o desenvolvimento de doenças bucais.</p>
          <p>Ser <strong>Favorita</strong> é estar ao seu lado em todos os momentos, sempre construindo um sorriso bonito e acima de tudo <strong>repleto de saúde</strong>.</p>
        </div>
        <div class="col-xs-12 col-md-6 text-justify">
          <p>Esses benefícios se refletem em mais qualidade de vida e ajudam você a se relacionar mais e melhor com as pessoas que estão a sua volta.</p>
          <p>A clínica conta com uma excelente localização e todos os detalhes foram planejados pensando no bem-estar dos nossos pacientes. Possuímos consultórios bem equipados e confortáveis, além de espaços voltados para o seu relaxamento e total conforto.</p>
          <p class="orange-italic text-center">Nossa equipe de profissionais está pronta para receber você <br> com todo carinho e a atenção que você merece. </p>
        </div>
      </div>

      <div class="row gallery-small between-boxes">
        <div class="col-xs-12 col-md-4">
          <img src="images/image-001.png" alt="Favorita | Odontologia" class="animated" />
        </div>
        <div class="col-xs-12 col-md-4">
          <img src="images/image-002.png" alt="Favorita | Odontologia" class="animated" />
        </div>
        <div class="col-xs-12 col-md-4">
          <img src="images/image-003.png" alt="Favorita | Odontologia" class="animated" />
        </div>
      </div>

      <div class="row between-boxes">
        <div id="tratamento" class="col-xs-8 col-xs-push-2 title-box">
          <h2>Tratamentos</h2>
          <p>
            <img src="images/arrow-blue.png" class="arrow-blue-left two-lines" alt="Favorita | Odontologia" />
            equilibramos conforto e resultados<br> para surpreender você
            <img src="images/arrow-blue.png" class="arrow-blue-right two-lines" alt="Favorita | Odontologia" />
          </p>
        </div>
      </div>

    </div>

    <!-- Accordion -->
    <div class="container-fluid between-boxes">
      <div class="row trat-acor">
        <ul class="accordion centered" id="accordion">
          <li class="bg1">

              <div class="heading">especialidades integradas</div>
              <a href="#">saiba mais <i class="fa fa-angle-double-right"></i></a>

              <div class="description">
                <h5>modernidade e segurança</h5>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <p>A grande finalidade da reabilitação oral é restabelecer: função (mastigação), saúde (remover infecções) e estética (beleza). Os procedimentos para a reabilitação oral envolvem várias especialidades da odontologia. </p>

                    <h6>Dentística</h6>
                    <p>A dentística restauradora e a estética são as especialidades responsáveis pela restauração de dentes que apresentem lesões de cárie, alterações de forma e resolução de fraturas, restituindo deste modo sua aparência original. Trata-se de procedimentos como restaurações (obturações) e clareamento. Os materiais de restauração para os dentes estão sempre em evolução, as técnicas e as abordagens da dentística também.</p>

                    <h6>Estética dental </h6>
                    <p>A estética do sorriso é um dos mais efetivos tratamentos para melhorar a aparência, valorizar, restaurar a harmonia facial, e ao mesmo tempo restabelecer a função.                  </p>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <p>Nos dentes não vitais é frequente a coloração acastanhada, acinzentada ou negra. O processo de envelhecimento da dentição, também pode traduzir-se no escurecimento dentário. Para solucionar qualquer uma destas situações é possível recorrer a facetas estéticas (restaurações estéticas muito  eficientes ), em cerâmica ou em resina composta,  realizada nos dentes da frente como se fossem “lentes de contato”.</p>

                    <h6>Clareamento dentário</h6>
                    <p>É importante consultar o dentista para saber o tipo de clareamento recomendado para seus dentes. Ele pode ser realizado, basicamente, de duas maneiras: no consultório dentário ou em tratamento caseiro, com a supervisão do cirurgião-dentista.</p>

                    <h6>Prótese dentária</h6>
                    <p>A  prótese dentária tem por objetivo substituir dentes perdidos ou a restauração de dentes danificados, com dentes artificiais, devolvendo assim a função, a saúde e a estética.</p>
                  </div>
                </div>
              </div>
          </li>
          <li class="bg2">

              <div class="heading">destística e estética</div>
              <a href="#">saiba mais <i class="fa fa-angle-double-right"></i></a>

              <div class="description">
                <h5>renove o seu sorriso e conquiste qualidade de vida</h5>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <p>A dentística restauradora e a estética são as especialidades responsáveis pela restauração de dentes que apresentem lesões de cárie, alterações de forma e resolução de fraturas, restituindo deste modo sua aparência original. Diversos procedimentos como, por exemplo, restaurações (obturações), clareamento e materiais dentários fazem parte desta especialidade. Os materiais de restauração para os dentes estão sempre em evolução, as técnicas e as abordagens da dentística também.</p>

                    <h6>Estética dental </h6>
                    <p>A estética do sorriso é um dos mais efetivos tratamentos para melhorar a aparência, valorizar, restaurar a harmonia facial, e ao mesmo tempo restabelecer a função. As chamadas manchas intrínsecas podem ser causadas por </p>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <p>Nos dentes não vitais é frequente a coloração acastanhada, acinzentada ou negra. O processo de envelhecimento da dentição, também pode traduzir-se no escurecimento dentário. </p>

                    <p>Para solucionar qualquer uma destas situações é possível recorrer a facetas estéticas (restaurações estéticas muito  eficientes ), em cerâmica ou em resina composta,  realizada nos dentes da frente como se fossem “lentes de contato”. </p>

                    <h6>Clareamento dentário</h6>
                    <p>Essa técnica tornou-se muito popular devido à sua praticidade e eficácia. É importante consultar o dentista para saber o tipo de clareamento recomendado para seus dentes. Ele pode ser realizado, basicamente, de duas maneiras: no consultório dentário ou em tratamento caseiro, com a supervisão do cirurgião-dentista. </p>
                  </div>
                </div>
              </div>

          </li>
          <li class="bg3">

              <div class="heading">odontopediatria</div>
              <a href="#">saiba mais <i class="fa fa-angle-double-right"></i></a>

              <div class="description">
                  <h5>dentes fortes e saudáveis desde sempre</h5>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <p>A odontopediatria é a especialidade exclusivamente dedicada à manutenção da saúde bucal de crianças e adolescentes. Sua principal característica é aliar ao tratamento curativo um forte componente preventivo, uma vez que o acompanhamento do desenvolvimento dos chamados “dentes de leite” é fundamental para assegurar corretas funções fonéticas e de mastigação.</p>

                      <h6>A primeira consulta – Saiba quando realizar</h6>
                      <p>Recomenda-se que a primeira consulta se realize logo após o nascimento dos primeiros dentes, normalmente entre os seis meses e um ano de idade. Esta consulta nos permite informar aos pais (e cuidadores) sobre o desenvolvimento da boca, hábitos de higiene adequados a cada idade e começar a estabelecer uma relação de confiança entre a família e o profissional. </p>

                      <h6>O medo do dentista ficou no passado</h6>
                      <p>O odontopediatra tem formação específica para lidar com os receios da criança, transformando a consulta numa experiência positiva e até mesmo divertida. </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <p>Possuímos também, um espaço lúdico-pedagógico dedicado exclusivamente aos pacientes mirins, onde estes poderão aguardar de forma tranquila pelo momento da consulta.</p>

                      <h6>Tratamento de cáries</h6>
                      <p>O risco de desenvolver a cárie está presente desde o surgimento do primeiro dente. A ingestão frequente de açúcares associada a uma higiene inadequada, resulta no aparecimento de cáries. Se não tratadas, podem levar a perda precoce dos dentes de leite, muitas vezes com consequências ao nível do posicionamento e alinhamento da dentição definitiva. </p>

                      <h6>Aplicação tópica de flúor</h6>
                      <p>O flúor é um componente fundamental na prevenção das cáries dentárias, Na visita ao odontopediatra definem-se as doses de flúor e respectivos modos de administração conforme as necessidades específicas das diferentes faixas etárias. </p>

                      <h6>Faça da prevenção um hábito </h6>
                      <p>Para uma correta prevenção e manutenção da beleza e saúde do sorriso, as visitas ao dentista devem ser regulares (no mínimo de seis em seis meses) e os cuidados diários aconselhados pelo dentista devem ser seguidos. </p>
                    </div>
                  </div>
              </div>

          </li>
          <li class="bg4">

              <div class="heading">ortodontia</div>
              <a href="#">saiba mais <i class="fa fa-angle-double-right"></i></a>

              <div class="description">
                <h5>a harmonia do sorriso significa mais saúde</h5>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <p>A ortodontia é a área da odontologia especializada no diagnóstico, prevenção e tratamento de alterações dentárias (mau posicionamento dentário) e esqueléticas (crescimento/posicionamento incorreto dos maxilares). Esses problemas podem ser hereditários ou adquiridos, seja por hábitos pessoais (o uso prolongado de chupeta ou a sucção do polegar, a interposição lingual, respiração oral) ou por perda precoce de dentes de leite ou definitivos, além de outros fatores.</p>
                    <h6>Como saber se preciso de um tratamento ortodôntico?</h6>
                    <p>Apenas seu dentista ou ortodontista poderá determinar se você é um candidato para o tratamento ortodôntico, através da avaliação completa: realização de um exame clínico e estudo da documentação ortodôntica (modelos de gesso de seus dentes, fotografias e radiografias especiais). Desse modo é  possível indicar o tratamento </p>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <p>A Favorita Odontologia dispõe aparelhos fixos, que podem ser totais ou parciais, são compostos por brackets ligados entre si por arcos metálicos e elásticos. A indicação do tipo correto de aparelho será definida pelo profissional após a avaliação do caso, sendo assim temos certeza em oferecer a melhor opção de tratamento.</p>
                    <h6>Tratamento para todas as idades</h6>
                    <p>O tratamento ortodôntico em adultos é cada vez mais comum, pois possibilita uma reabilitação oral adequada, permitindo realizar um melhor trabalho em termos de colocação de implantes ou coroas, o que possibilita um melhor resultado estético além de uma maior longevidade da reabilitação efetuada.</p>
                    <h6>Dentes em harmonia, saúde em equilíbrio</h6>
                    <p>O tratamento ortodôntico possibilita uma melhoria da higiene oral, uma vez que os dentes apinhados ou mal alinhados são difíceis de higienizar. Deste modo, previne-se o aparecimento de cáries e doenças nas gengivas que em casos extremos podem levar à perda de dentes.</p>
                  </div>
                </div>
              </div>

          </li>
        </ul>
      </div>

    </div> <!-- end container-fluid -->

    <div class="container">
      <div class="row between-boxes">
        <div id="profissionais" class="col-xs-8 col-xs-push-2 title-box">
          <h2>Profissionais</h2>
          <p>
            <img src="images/arrow-blue.png" class="arrow-blue-left two-lines" alt="Favorita | Odontologia" />
            confiança é o que define a<br> nossa relação com você
            <img src="images/arrow-blue.png" class="arrow-blue-right two-lines" alt="Favorita | Odontologia" />
          </p>
        </div>
      </div>

      <div class="row gallery-small doc text-box between-boxes">
        <div class="col-xs-12 col-md-5 text-center animated">
          <img src="images/image-004.png" alt="Favorita | Odontologia" class="doctors" />
          <h3>Dra. Lorem Ipsum Dolor</h3>
          <p class="orange-italic">especialidade . CRORJ XXXX</p>
          <p class="text-left">Lorem ipsum dolor sit amet, ut sed nullam odio, sollicitudin ac. Cras in elit metus dapibus fusce, ultrices elementum pulvinar dui velit. Sit fringilla mauris erat sed, pharetra donec duis vestibulum sed orci.</p>
        </div>
        <div class="col-xs-12 col-md-5 col-md-push-2 text-center animated">
          <img src="images/image-004.png" alt="Favorita | Odontologia" class="doctors" />
          <h3>Dra. Lorem Ipsum Dolor</h3>
          <p class="orange-italic">especialidade . CRORJ XXXX</p>
          <p class="text-left">Lorem ipsum dolor sit amet, ut sed nullam odio, sollicitudin ac. Cras in elit metus dapibus fusce, ultrices elementum pulvinar dui velit. Sit fringilla mauris erat sed, pharetra donec duis vestibulum sed orci.</p>
        </div>
      </div>

      <div id="contato" class="col-xs-8 col-xs-push-2 title-box between-boxes">
        <h2>Contato</h2>
        <p>
          <img src="images/arrow-blue.png" class="arrow-blue-left" alt="Favorita | Odontologia" />
          envia sua mensagem para nós
          <img src="images/arrow-blue.png" class="arrow-blue-right" alt="Favorita | Odontologia" />
        </p>
      </div>
    </div>



    <div class="container-fluid">


      <div class="row between-boxes contact">
        <div class="col-xs-12 col-md-5 map">
          <!-- <img src="images/localization.png" alt="Favorita | Odontologia" /> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.732423887934!2d-42.86004766090887!3d-22.748124018053794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99c00b8a64a397%3A0xf5a740f960d822c!2sR.+Raimundo+de+Farias%2C+87+-+Centro%2C+Itabora%C3%AD+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1445558863967" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-xs-12 col-md-7 form">

          <form class="" name="contatoForm" action="processForm.php">
            <div class="col-xs-12 col-md-8">

              <div class="col-xs-12" ng-show="enviado">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                  Seu e-mail de contato foi enviado.
                </div>
              </div>

              <div class="col-xs-12" ng-show="contatoForm.nome.$dirty">

                  <div ng-show="contatoForm.nome.$dirty" ng-messages="contatoForm.nome.$error">
              			<div ng-message="required" class="alert alert-warning alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
              				Por favor, preencha o campo nome!
              			</div>
              			<div ng-message="minlength" class="alert alert-warning alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
              				O campo nome deve ter no mínimo 10 caracteres.
              			</div>
                  </div>

                  <div ng-show="contatoForm.email.$dirty" ng-messages="contatoForm.email.$error">
                    <div ng-message="required" class="alert alert-warning alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                      Por favor, preencha o campo email!
                    </div>
                  </div>

                  <div ng-show="contatoForm.telefone.$error.required && contatoForm.telefone.$dirty">
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                      <div ng-show="contatoForm.telefone.$error.required && contatoForm.telefone.$dirty" class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                        Por favor, preencha o campo telefone!
                      </div>
                    </div>
                  </div>

          		</div>


              <div class="col-xs-12">
                <input type="text" ng-model="contato.nome" name="nome" placeholder="nome*" ng-required="true" ng-minlength="10"/>
              </div>
              <div class="col-xs-12 col-md-6">
                <input type="text" ng-model="contato.email" name="email" placeholder="email*" ng-required="true" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/"/>
              </div>
              <div class="col-xs-12 col-md-6">
                <input type="text" class="phone_with_ddd" ng-model="contato.telefone" name="telefone" placeholder="telefone" ng-required="true" />
              </div>
              <div class="col-xs-12">
                <textarea name="menssage" rows="8" cols="40" ng-model="contato.message" placeholder="mensagem*" ></textarea>
              </div>
              <div class="col-xs-12 text-right">
                <button class="btn-send" ng-click="enviarEmail(contato)" >ENVIAR</button>
              </div>

            </div>
          </form>
        </div>
      </div>

      <div class="row between-boxes">
        <div class="col-xs-12 col-md-5 text-right text-xs-center">
          <img src="images/brand.png" alt="Favorita | Odontologia" class="brand-footer" />
        </div>
        <div class="col-xs-12 col-md-7 text-left info">

          <div class="row">
            <div class="col-xs-1 text-right"><i class="fa fa-phone"></i></div>
            <div class="col-xs-8 col-sm-11 text-left"><p class="blue-dark">21 2635 2275</p></div>
          </div>

          <div class="row">
            <div class="col-xs-1 text-right"><i class="fa fa-map-marker"></i></div>
            <div class="col-xs-8 col-sm-11 text-left"><p class="blue">Av. Raimundo de Farias, 87<br>
            Salas 611 e 610 . Centro . Itaboraí-RJ . CEP 24800-037</p></div>
          </div>

          <div class="row">
            <div class="col-xs-1 text-right"><i class="fa fa-envelope"></i></div>
            <div class="col-xs-8 col-sm-11 text-left"><p class="blue">contato@favoritaodontologia.com.br</p></div>
          </div>

          <div class="row">
            <div class="col-xs-1 text-right"></div>
            <div class="col-xs-8 col-sm-11 text-left"><p class="blue-dark">RT.: Simone Elias de Moraes . CRO-RJ 16635 . EPAO XXXXX</p></div>
          </div>

        </div>
      </div>

    </div>


    <div class="footer">
      <div class="container">
        <div class="col-xs-12 col-sm-6 text-center"><p>© COPYRIGHT 2015 - Favorita - ODONTOLOGIA - Todos os direitos reservados</p></div>
        <div class="col-xs-12 col-sm-6 text-center"><p>Criado por: Altera - Centro de Inteligência de Serviços</p></div>
      </div>
    </div>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
       (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
       r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
       }(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    <script src="../bower_components/angular/angular.js"></script>
    <script src="../bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
    <script src="../bower_components/angular-animate/angular-animate.js"></script>
    <script src="../bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="../bower_components/angular-resource/angular-resource.js"></script>
    <script src="../bower_components/angular-route/angular-route.js"></script>
    <script src="../bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="../bower_components/angular-touch/angular-touch.js"></script>
    <script src="../bower_components/jquery-mask-plugin/dist/jquery.mask.js"></script>
    <script src="../bower_components/angular-messages/angular-messages.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="scripts/app.js"></script>
        <script src="scripts/controllers/main.js"></script>
        <script src="scripts/controllers/about.js"></script>
        <script src="js/functions.js"></script>
        <!-- endbuild -->
</body>
</html>
