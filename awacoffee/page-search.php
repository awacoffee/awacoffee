<?php get_header(); ?>
<main>
  <!-- ▼ページのタイトル▼ -->
  <div class="wrap">
    <div class="under_title inner">
      <div class="under_wrap_title">
        <p>Search</p>
        <h1>条件検索</h1>
      </div>
    </div>
  </div>

  <div class="wrap">
    <form class="inner">
      <!-- ここから本文 -->
      <div class="search_content">
        <!-- エリア別 -->
        <section class="area_map_wrap">
          <h3 class="search_title">エリア</h3>

          <div class="map_wrap">
            <figure class="map_svg">
              <img src="assets/img/map_1.svg" id="main_map" alt="" />

              <!-- エリア検索ラジオボタン -->
              <div id="click_map" class="radio_box">
                <input type="radio" name="area" value="tokusima" id="map_1" checked />
                <label for="map_1" class="s_search_radios area_1">徳島市</label>
                <input type="radio" name="area" value="higasi" id="map_2" />
                <label for="map_2" class="s_search_radios area_2">東部</label>

                <input type="radio" name="area" value="nisi" id="map_3" />
                <label for="map_3" class="s_search_radios area_3">
                  西部</label>
                <input type="radio" name="area" value="minami" id="map_4" />

                <label for="map_4" class="s_search_radios area_4">南部</label>
              </div>
            </figure>
          </div>
        </section>
        <!-- 目的別 -->
        <section class="purpose_wrap">
          <h3 class="search_title">目的で探す</h3>
          <div class="rasio_wrap">
            <input type="radio" name="purpose" value="drink" id="drink" checked />
            <label for="drink" class="s_search_btn">飲みたい人</label>
            <input type="radio" name="purpose" value="food" id="food" />
            <label for="food" class="s_search_btn">豆を買いたい人</label>
          </div>
        </section>
        <!-- シチュエーション別 -->
        <section class="situation_wrap">
          <h3 class="search_title">シチュエーションで探す</h3>
          <div class="checkbox_wrap">
            <input type="checkbox" name="situation" value="1" id="1" />
            <label for="1" class="s_search_btn">一人で</label>

            <input type="checkbox" name="situation" value="2" id="2" />
            <label for="2" class="s_search_btn">家族で</label>

            <input type="checkbox" name="situation" value="3" id="3" />
            <label for="3" class="s_search_btn">友人と</label>

            <input type="checkbox" name="situation" value="4" id="4" />
            <label for="4" class="s_search_btn">カップルで</label>

            <input type="checkbox" name="situation" value="5" id="5" />
            <label for="5" class="s_search_btn">旅行者向け</label>
          </div>
        </section>
        <!-- サービス別 -->
        <section class="situation_wrap">
          <h3 class="search_title">サービス・設備</h3>
          <div class="checkbox_wrap">
            <input type="checkbox" name="situation" value="2-1" id="2-1" />
            <label for="2-1" class="s_search_btn">自家焙煎</label>

            <input type="checkbox" name="situation" value="2-2" id="2-2" />
            <label for="2-2" class="s_search_btn">コーヒーメニュー豊富</label>

            <input type="checkbox" name="situation" value="2-3" id="2-3" />
            <label for="2-3" class="s_search_btn">モーニングあり</label>

            <input type="checkbox" name="situation" value="2-4" id="2-4" />
            <label for="2-4" class="s_search_btn">テイクアウトOK</label>

            <input type="checkbox" name="situation" value="2-5" id="2-5" />
            <label for="2-5" class="s_search_btn">予約OK</label>

            <input type="checkbox" name="situation" value="2-6" id="2-6" />
            <label for="2-6" class="s_search_btn">喫煙スペースあり</label>

            <input type="checkbox" name="situation" value="2-7" id="2-7" />
            <label for="2-7" class="s_search_btn">WI-FI</label>

            <input type="checkbox" name="situation" value="2-8" id="2-8" />
            <label for="2-8" class="s_search_btn">駐車場</label>
          </div>
        </section>
      </div>
      <!-- 検索ボタン -->
      <div class="search_btn_wrap">
        <div class="search_btn_inner">
          <input type="submit" name="search_btn" value="検索" id="search_btn" />
          <label for="search_btn" class="search_btn">検索する
            <svg xmlns="http://www.w3.org/2000/svg" width="28.533" height="28.54" viewBox="0 0 28.533 28.54">
              <path class="musimegane" id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M32.7,30.967l-7.936-8.01A11.309,11.309,0,1,0,23.046,24.7l7.884,7.958a1.221,1.221,0,0,0,1.724.045A1.229,1.229,0,0,0,32.7,30.967ZM15.876,24.792a8.93,8.93,0,1,1,6.316-2.615A8.875,8.875,0,0,1,15.876,24.792Z" transform="translate(-4.5 -4.493)" />
            </svg>
          </label>
        </div>
      </div>
    </form>
  </div>
</main>

<?php get_footer(); ?>
