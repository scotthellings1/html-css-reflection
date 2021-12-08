<?php

function getLatestNewsItems() {
    global $db;

    try {
        $sql = 'SELECT * from news ORDER BY id DESC LIMIT 3';
        $results = $db->prepare($sql);
        $results->execute();
    } catch (\Exception $e) {
        return 'failed to get news articles ' . $e->getMessage();
    }
    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function renderNewsItem(array $item) {
    $date_published = new DateTime($item["published_at"]);
    // Prepare variables for use in heredoc
    $date = $date_published->format("jS F Y");
    $output = <<<EOHTML
 <article>
    <div class="tag tag-{$item['tag']}">
        <a href="#">{$item['tag']}</a>
    </div>
    <div class="img">
        <a href="#"><img src="{$item['image']}" alt=""></a>
    </div>
    <div class="card-container">
        <div class="article-body">
            <a class="article-link-{$item['tag']}" href="#">{$item['title']}</a>
            <p class="body-text">
                {$item['body']}
            </p>
            <a href="#" class="btn btn-article-{$item['tag']}"> read more</a>
        </div>
        <div class="meta">
            <div class="logo">
                <img src="img/nm-card-logo.jpg" alt="">
            </div>
            <div class="info">
                <strong class="posted-by">Posted by {$item['author']}</strong>
                <p class="posted-at">{$date}</p>
            </div>
        </div>
    </div>
</article>
EOHTML;
return $output;

}
function renderEmptyFieldError($error){
    $output = "<li class='form-alert form-alert-error'>". 'The ' . $error . " field is required.</li>";
    return $output;
}

function submitContactForm($formData) {
    $contactFormSubmission = new StoreContactForm($formData);

    // Check for empty fields
    if ($contactFormSubmission->hasEmptyFields()) {
        $emptyFields = $contactFormSubmission->hasEmptyFields();
        return $emptyFields;
    }
    elseif (empty($emptyFields) && $contactFormSubmission->store() ) {

        return true;
    }
    else {
        return false;
    }
}
