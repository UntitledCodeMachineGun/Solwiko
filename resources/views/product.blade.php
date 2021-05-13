@extends('layouts.master')
@section('title', 'Товар')
@section('content')

  <section class="home-menu product-card">
    <div class="container">
      <div class="swiper-container-menu">
        <div class="swiper-wrapper">
          @foreach ($categories as $cat)
          @if ($code == $cat->code)
            @php
                $active = 'active';
            @endphp
          @else
            @php
              $active =' ';
            @endphp
          @endif
          <a href="/{{$cat->code}}" class="swiper-slide {{$active}}">
            <span>{{$cat->name}}</span>
          </a>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

  </section>

  <section class="card-product">
    <div class="container">
      <div class="card-top">
        <div class="card-slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/img/product1_1.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="/img/product1_4.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="/img/product1_3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
        <div class="side-container">
          <div class="card-sidebar">
            <div class="title">
              <h3>x</h3>
            </div>
            <div class="reviews">
              <span>10</span> диванных экспертов оценили этот товар
            </div>
            <div class="price">
              <span>Цена за 1 шт.:</span><b>680 грн.</b>
            </div>
            <div class="price">
              <span>Сколько берем?</span>
              <div class="input">
                <a id="minus" href="#">-</a>
                <span id="value">1</span>
                <a id="plus" href="#">+</a>
              </div>
            </div>
            <div class="summary">
              <span>Итого:</span>
              <b>680 грн.</b>
            </div>
            <div class="buy-block">
              <button class="pay" type="submit"><i class="fas fa-shopping-cart    "></i> В корзину</button>
            </div>

          </div>
          <div class="card-sidebar bottom">
            <div class="bonus-info">
              <span class="title">
                Закажите товаров на сумму и получите:
              </span>
              <div class="line">
                <i class="fas fa-coins"></i>
                <span>Какие-то бонусы на счет</span>
              </div>
              <div class="line">
                <i class="fas fa-truck"></i>
                <span>Бесплатную доставку</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-bottom">
        <div class="card-info">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#about">Описание</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#specs">Характеристики</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#reviews">Отзывы</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active container" id="about">
              <section class="home-text">
                <div class="container">
                  <div class="swiper-container-text">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam adipisci autem nam temporibus ratione illum ab iste at esse sequi. Quaerat, ipsa iusto error mollitia illum dolor fuga perspiciatis eum similique odio quas non neque culpa obcaecati ullam! Et tempore rem quae corrupti illum impedit ad id! Consequuntur repellendus enim, accusantium modi maiores esse veritatis voluptatibus, minima atque eos provident magni qui! Consequatur soluta veniam maxime voluptate ut repellendus architecto ullam distinctio aut blanditiis earum rem eius commodi laboriosam amet tempora voluptatum cumque, aspernatur laborum veritatis? Laudantium itaque saepe neque tempora impedit veniam ullam enim. Labore sequi dicta qui cumque totam amet consectetur aliquid illum ipsa distinctio? Neque reprehenderit aperiam suscipit dignissimos expedita ipsum voluptate assumenda ducimus inventore ex dolore sunt officiis obcaecati quaerat esse quos hic consequatur, cum facere quisquam illum accusamus cupiditate. Inventore provident consequuntur ducimus. Similique reiciendis, dolorum magnam earum quisquam vitae, animi quod minus eius asperiores, eaque sunt repellendus dignissimos sint nihil dolores cupiditate aut fugit modi tempore debitis quam! Corporis mollitia dolorum ullam officia error eum, vero autem harum asperiores voluptatibus natus vel, dolorem similique omnis. Temporibus corporis laborum molestias praesentium quas fugit adipisci, nam iure, voluptate veritatis illum consequuntur illo tenetur fuga impedit magni quisquam perspiciatis maiores similique sint saepe eligendi id distinctio ea? Voluptatum ipsam voluptates totam reiciendis error quia incidunt doloribus eos sequi inventore. Amet, labore nostrum pariatur voluptas veniam sapiente necessitatibus tempora fugiat. Perspiciatis magnam, quidem eligendi velit deleniti consequatur commodi inventore, distinctio maiores expedita quo a. Quas vel blanditiis itaque maiores hic a reiciendis id eos velit. Nemo, sapiente quasi aut veritatis porro consequatur voluptatibus ad expedita! Saepe, magni quis. Quos fugiat accusantium repellendus quidem velit corporis quae, repellat mollitia! Dolor culpa aperiam quo fuga facilis harum. Numquam consectetur ipsa sit a praesentium tempora vitae ullam molestias ex ea adipisci architecto, voluptatem magnam doloremque eos similique. Odit temporibus eaque, aperiam facilis laborum incidunt necessitatibus asperiores. Reiciendis exercitationem perspiciatis aperiam excepturi voluptatum molestias ab sapiente nobis quisquam doloremque omnis odit fugit, sint, rerum possimus incidunt quasi, quam quia. Sit vero libero recusandae, voluptate ipsa voluptatum corporis. Repellendus ducimus, excepturi sit iure libero laborum aliquam deleniti totam, repudiandae non dolorem fugit vero sunt! Beatae fugiat dolor, modi similique officiis cupiditate quam rerum molestias sed? Culpa, similique error quasi blanditiis rerum eum, voluptatum ex aut possimus dolore ut nihil accusantium illum qui! Asperiores magnam quasi aut iure maiores exercitationem possimus similique! Aliquid expedita dolorum, qui perferendis velit, sunt impedit provident deserunt amet officiis commodi quas saepe non, voluptas praesentium pariatur quos odio veritatis nisi necessitatibus unde aperiam? Sed provident cumque similique exercitationem quis soluta doloremque atque dignissimos, sit tempora adipisci mollitia, eius quibusdam eveniet voluptatum ut deserunt nam omnis corporis vero ducimus expedita? Tenetur, fugit iste! Amet magnam deleniti dignissimos, doloribus deserunt sed! Hic voluptates fuga quod perspiciatis, eaque esse ex accusamus ab quisquam odit, recusandae deleniti vel? Deleniti aspernatur autem eos fugit animi, fuga est, id ratione fugiat officiis, doloribus nesciunt quo adipisci cupiditate nulla voluptatum ut placeat recusandae illum ex saepe blanditiis mollitia. Ad obcaecati aspernatur magni esse? Consectetur, non. Soluta distinctio possimus veritatis adipisci explicabo assumenda libero labore eum minus non accusantium quasi at quibusdam, architecto voluptate perspiciatis consequatur optio ut quod nostrum ad expedita sed eaque. Vel optio cum obcaecati labore ipsum dolorum, deserunt quisquam vero soluta repellat cupiditate animi ducimus dolore earum explicabo, tenetur veniam sapiente voluptate delectus. Accusantium numquam nam facilis dolor deleniti sit ea magni ducimus ad, similique id obcaecati praesentium corporis adipisci iusto commodi nesciunt omnis ipsum unde dolorem asperiores a neque nobis! Rem illum modi, qui vitae quod amet ea quasi iste commodi sunt, eum repudiandae? Aperiam eligendi quidem doloribus laudantium earum nulla corporis tempora animi, deleniti sequi ea nostrum quibusdam mollitia porro corrupti ut quos! Veniam, a? Sit iure nesciunt molestiae soluta laboriosam quos quae ut dolore incidunt accusamus vitae deserunt consequuntur libero non quaerat, accusantium debitis itaque provident sequi veniam earum eum? Necessitatibus esse autem, quos facere temporibus enim molestias ad hic itaque neque laborum ipsum iure! Pariatur perferendis delectus rerum in? Laudantium, maiores porro possimus est minus magni corrupti adipisci deleniti aperiam aliquid ab accusantium consectetur quia obcaecati temporibus eos, illo placeat. Exercitationem quisquam perspiciatis iusto earum modi? Ad sed, sapiente ipsa esse ducimus, illum saepe assumenda illo dignissimos harum iusto quidem facilis, explicabo commodi non accusantium. Expedita ea vero nulla labore dolor consequuntur iste suscipit dicta, neque sit velit minima ratione id eveniet dolore quaerat itaque inventore excepturi odit beatae soluta maiores! Enim consequuntur cumque, dolor voluptatibus molestias quibusdam incidunt beatae unde aliquam eaque consectetur eius provident eveniet, optio totam doloremque est aspernatur eligendi aliquid veniam aperiam? Quaerat laboriosam quam voluptate odio amet expedita eum labore unde vitae debitis, inventore quos libero veniam voluptatum earum? Cum repellat, fugiat laborum sequi consectetur repellendus quia veritatis nobis expedita pariatur dolore perspiciatis, temporibus voluptatum dolorem at autem minima eius aperiam. A quis fugiat adipisci neque sed iure itaque placeat. Excepturi, deleniti alias! Aliquam assumenda culpa sed rerum natus, minus recusandae laborum odit! Placeat recusandae molestias similique, reiciendis itaque ad saepe possimus consequuntur tenetur. Consectetur, error! Vitae animi recusandae debitis temporibus cumque fugiat ipsum, voluptas quia, molestias numquam, totam natus eos cupiditate saepe! Unde eveniet, quisquam enim sunt deserunt reiciendis iure qui voluptatem minus cupiditate rerum, labore corporis consequuntur quibusdam eaque quae perspiciatis optio ullam ducimus dolorem in. Laboriosam neque explicabo molestiae quis delectus officiis asperiores! Eos voluptate eligendi ex, optio modi enim fugit distinctio! Provident quos obcaecati facilis magnam pariatur doloremque ipsum earum harum quaerat maiores? Maxime quae esse quisquam consectetur amet, dolorum veritatis delectus! Quaerat placeat repellendus atque voluptate facilis rerum? Laborum nulla quod voluptas excepturi! Illo quam asperiores minima. Inventore, nisi. Officiis quod aliquam ab commodi, tempore incidunt qui nesciunt dolores voluptatibus eaque possimus! Adipisci eligendi, praesentium cum voluptatum voluptates accusamus optio deleniti autem expedita magnam aspernatur recusandae sed quasi harum porro! Sint quibusdam nostrum aspernatur provident animi cum perferendis corporis commodi, magni esse facilis ipsum voluptatum inventore. Qui, aut ut error possimus cupiditate excepturi? Aperiam voluptatem voluptas optio. Necessitatibus veritatis, velit qui ab odio nam provident, aspernatur blanditiis vero quam molestias accusantium nemo, sint veniam officiis excepturi non doloribus fugiat. Aliquid exercitationem beatae laudantium, ut quasi dicta quibusdam? Voluptatum quos doloribus voluptatibus placeat dolorum repellendus perspiciatis animi quia nemo nostrum ducimus quaerat quisquam laborum consequatur, sunt molestias necessitatibus vitae illo consequuntur fugiat! Sint neque pariatur nulla saepe, vel dicta sed facilis quisquam exercitationem! Sapiente voluptas molestias consectetur fugit eaque tenetur quaerat quasi quam sed repellat voluptatibus magni excepturi doloremque nihil quae minima nulla dicta, nemo voluptatum. Sequi aliquam aperiam excepturi animi ipsam accusamus fugiat aspernatur provident numquam consequuntur neque tempora voluptatum blanditiis, magnam et repellendus quibusdam saepe, amet suscipit doloribus laudantium delectus assumenda. Incidunt ducimus quos corporis possimus et reiciendis consequuntur, saepe ipsum earum repellat, totam deserunt unde ipsa perferendis exercitationem sit. Blanditiis quidem quis aliquam maxime, commodi, minima vero beatae laudantium reiciendis dolores, pariatur eveniet adipisci at sed recusandae voluptatum animi voluptate? Mollitia quaerat voluptate tempore accusamus ea quia tenetur doloremque quas praesentium, ratione et dicta iste, cupiditate voluptates blanditiis non earum neque, natus incidunt qui! Officiis commodi culpa quasi, harum voluptas magni nesciunt aliquam temporibus iusto voluptate dicta quaerat, hic quo illum magnam doloribus in nobis cum consequuntur possimus ratione, est ad! Veritatis optio, vitae quidem saepe nesciunt sunt voluptatem quo tempore asperiores nemo totam quasi eum dicta autem adipisci, culpa delectus recusandae perspiciatis et itaque! Consectetur accusamus animi ad ipsum nam corrupti perspiciatis doloribus delectus sit omnis nemo provident deleniti, dolorem eligendi laudantium tenetur corporis distinctio, asperiores maiores sint, repellat quidem culpa. Cupiditate illum laudantium laboriosam esse! Eveniet atque minus, dignissimos, et aliquid, exercitationem recusandae veritatis magni natus cupiditate accusamus. Eos numquam libero est ipsam dignissimos maiores illum veniam in magni ex perferendis facere, necessitatibus perspiciatis quia unde vero minus, odio totam excepturi architecto at? Dicta perferendis perspiciatis iure cum molestiae reiciendis eveniet iusto nam, sed temporibus! Eveniet recusandae inventore reprehenderit quos velit exercitationem doloremque accusantium nemo. Unde vitae debitis magnam nisi officiis, quae eveniet ipsum nostrum corrupti amet odio quod. Esse pariatur excepturi qui ex facere fugiat beatae, nobis praesentium autem distinctio tenetur perferendis voluptatibus ullam architecto molestiae fugit deserunt quam in, impedit ut. Ad, animi. Dicta beatae ex, nemo error natus, quae cumque nobis totam maxime tenetur aliquam iste fugit eaque veniam facere nisi officia perspiciatis magni quaerat! Quibusdam consequuntur quae eligendi, maxime id quam similique. Soluta ipsum illum quae amet. Earum a nam odio neque nostrum cupiditate facilis adipisci, ipsam aperiam ut amet, possimus ipsum quos ad modi ducimus, dolor vel voluptas mollitia tempora! Ullam laboriosam, reprehenderit officiis reiciendis numquam nulla eligendi distinctio mollitia similique ex adipisci minima aliquam officia ab eos illo quam quas possimus iusto dolor recusandae. Minus id sit rem asperiores praesentium animi! Labore minus amet ut iste possimus quas adipisci, recusandae atque officiis obcaecati! Eos quas laborum vitae blanditiis obcaecati ipsa id labore dolorem libero maxime facere quae deleniti expedita, in quia optio minus beatae doloribus quasi corporis accusantium omnis aliquam iste ratione! Debitis veritatis, soluta, quis et voluptatem inventore ullam ea laboriosam, nisi doloribus ex odio reiciendis dicta. Perferendis, dolorem rerum officia placeat vero modi totam amet exercitationem maxime, illo impedit cupiditate cumque ad laborum fugit sunt. Perferendis distinctio asperiores, mollitia deleniti, a consectetur exercitationem blanditiis obcaecati perspiciatis cupiditate placeat odit qui minus quibusdam ab nobis ex quos doloremque aperiam molestiae iure! Necessitatibus optio quidem officia! Suscipit blanditiis aperiam corrupti rem ipsum. Sint voluptatem cumque error. Voluptates consectetur quasi in veritatis enim. Quo earum saepe quas officia possimus ipsam, perferendis vitae totam qui at nulla omnis numquam corrupti eligendi nihil voluptatibus laboriosam soluta consectetur. Sunt deleniti hic odit accusamus, nobis dignissimos placeat incidunt corrupti quas dolor perferendis, molestias aperiam. Non, ipsa. Eaque quia, perferendis recusandae aspernatur, corporis facilis sunt velit ipsum at cupiditate delectus repudiandae asperiores cumque dolorem cum? Omnis, suscipit odio eligendi incidunt aut optio voluptas! Officia accusantium eligendi, neque dolorum, cum reprehenderit corporis, fugiat libero iusto totam enim nostrum iste. Sit, doloremque consequuntur error excepturi perferendis mollitia quasi voluptatum illum, cupiditate natus quam ad in id nihil totam quos maiores amet, odit praesentium deleniti doloribus sapiente repellat blanditiis neque! Odit iste praesentium eaque maiores, voluptates nemo quas consectetur dicta libero illo alias reprehenderit ut distinctio deserunt temporibus aperiam assumenda ipsa fugiat tempora doloremque quod numquam. Voluptatum exercitationem distinctio aspernatur illum tenetur provident, eum perferendis doloremque iste modi minus quo, neque velit nisi commodi accusantium? Praesentium cupiditate maiores minus odit, ad assumenda et molestias, possimus ratione vero reprehenderit laboriosam? Aperiam ipsa nihil harum eaque, atque dolorum alias, odio, blanditiis aliquid provident quidem delectus sit quo accusamus quis molestiae. Veritatis natus incidunt nam repellat. Ad repellendus possimus expedita modi sint unde est, facere pariatur corporis cumque dolores, iusto nobis vel harum delectus ea tempore quae numquam ex ab cupiditate? Atque ex suscipit explicabo. Officia, cum praesentium. Tenetur dolorum facilis sequi sapiente accusamus impedit illum? Reiciendis reprehenderit ipsam saepe vel laudantium cupiditate eaque hic recusandae sapiente nulla, nam voluptates omnis id deleniti provident rem numquam maiores natus quidem eos exercitationem at mollitia quaerat. Ipsam aliquid eum dicta omnis enim eaque repellat, quos impedit praesentium consequuntur, rerum unde minima porro aspernatur et non, tenetur cupiditate numquam quidem consequatur possimus temporibus! Iure soluta voluptatibus assumenda incidunt laborum explicabo sunt id facilis deserunt molestiae porro aliquam eius, quaerat sed? Iure quae eveniet voluptatum laudantium? Blanditiis dignissimos obcaecati architecto soluta cupiditate, numquam ad dolorum beatae mollitia? Autem voluptatum inventore enim nobis illum porro, incidunt neque at exercitationem? Adipisci maxime esse vel, quidem non architecto nobis eligendi sed asperiores tempore! Iste eveniet omnis nam commodi deserunt assumenda blanditiis quam rerum sed porro adipisci sit fugiat, dolor inventore repudiandae earum magnam qui. Iste error cum voluptas quas eos quibusdam corrupti repudiandae vel nobis quidem mollitia numquam perspiciatis consequuntur placeat iure enim, dignissimos sit totam earum sapiente dicta. Quis recusandae, aliquid excepturi nemo illo eos est ut laborum veritatis voluptatibus laudantium similique alias dicta deserunt perspiciatis fugit eum quibusdam modi quae iste rem beatae doloremque. Amet, consequuntur architecto. Commodi quam ut, quod vitae illo soluta est pariatur!</p>
                      </div>
                    </div>

                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane container" id="specs">
              <ul>
                <li>Диаметр, см: <b>2.3</b></li>
                <li>Размер ушка, см: <b>0.9 х 0.5</b></li>
                <li>Серебряная подвеска "Пентаграмма"</li>
                <li>Металл: <b>серебро 925"</b></li>
                <li>Средний вес: <b>6.4 г</b></li>
                <li>Диаметр подвески: <b>2.3 см</b></li>
                <li>Размеры ушка: <b>0.9 х 0.5 см</b></li>
              </ul>
            </div>
            <div class="tab-pane container" id="reviews">
              <ul class="review-item">
                <li>Лена Головач</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corporis, magnam doloremque labore quibusdam ipsam id, quis nam facilis provident totam atque beatae dignissimos, esse laboriosam non ducimus temporibus rem!</li>
                <li><button class="review-btn-answer" onclick="openForm()" type="button"><a href="#answer">Ответить</a></button></li>
                <hr>
              </ul>
              <ul class="review-item">
                <li>Никита 12 пошлый</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos corporis, magnam doloremque labore quibusdam ipsam id, quis nam facilis provident totam atque beatae dignissimos, esse laboriosam non ducimus temporibus rem!</li>
                <li><button class="review-btn-answer" onclick="openForm()" type="button"><a href="#answer">Ответить</a></button></li>
                <hr>
              </ul>
              <div class="add-comment">
                <button class="review-btn-add" onclick="openAddForm()" type="button"><a href="#add-review">Оставить отзыв</a></button>
              </div>
              <div id="answer">
                <div class="form" id="answer-form">
                  <h3>Ответ</h3>
                  <form action="" method="POST">
                    <label for="form-email">Ваше имя</label>
                    <input type="name" id="form-email" required>
                    <label for="form-message">Ваше сообещение</label>
                    <textarea name="message" id="form-message" cols="30" rows="10" required></textarea>
                    <div class="buttons">
                      <button type="submit">Отправить</button>
                      <button type="button" onclick="closeForm()">Закрыть</button>
                    </div>
                  </form>
                </div>
              </div>

              <div id="add-review">
                <div class="form" id="answer-form">
                  <h3>Ваш отзыв</h3>
                  <form action="" method="POST">
                    <label for="form-email">Ваше имя</label>
                    <input type="name" id="form-email" required>
                    <label for="form-message">Ваше сообещение</label>
                    <textarea name="message" id="form-message" cols="30" rows="10" required></textarea>
                    <div class="buttons">
                      <button type="submit">Отправить</button>
                      <button type="button" onclick="closeAddForm()">Закрыть</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="add-products">
    <div class="container">
      <h3>Ещё товары</h3>
      <div class="swiper-container-add-p">
        <div class="swiper-wrapper">

          @foreach ($category->products as $product)
            @include('slide-card', compact('product'))
          @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

@endsection