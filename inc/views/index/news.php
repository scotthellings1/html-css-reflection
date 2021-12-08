<section class="latest-news">

    <div class="bar">

        <div class="container">
            <h3 class="latest">Latest</h3>
        </div>
    </div>

    <div class="container">
        <div class="articles">
          <?php
          try {
            $newsItems = getLatestNewsItems();
            if ($newsItems) {
              foreach ( $newsItems as $newsItem )
                echo renderNewsItem($newsItem);
            }
          } catch (\Exception $e) {
              echo "failed to load articles" . $e->getMessage();
          }
          ?>
        </div>

    </div>
</section>
<!--    end latest news  section-->
