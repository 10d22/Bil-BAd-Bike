<?php

if ($_GET['page'] == "users") {
    include 'includes/page_actions/user_list.php';
}
if ($_GET['page'] == "user_add") {
    include 'includes/page_actions/user_add.php';
}
if ($_GET['page'] == "user_update") {
    include 'includes/page_actions/user_update.php';
}

if ($_GET['page'] == "users" && isset($_GET['user_id'])) {
    include 'includes/page_actions/user_delete.php';
}
if ($_GET['page'] == "category") {
    include 'includes/page_actions/category_list.php';
}
if ($_GET['page'] == "category_add") {
    include 'includes/page_actions/category_add.php';
}
if ($_GET['page'] == "category_update") {
    include 'includes/page_actions/category_update.php';
}

if ($_GET['page'] == "category" && isset($_GET['category_id'])) {
    include 'includes/page_actions/category_delete.php';
}
if ($_GET['page'] == "editors") {
    include 'includes/page_actions/editors.php';
}
if ($_GET['page'] == "news" && isset($_GET['category_id'])) {
    include 'includes/page_actions/news_list.php';
}
if ($_GET['page'] == "news_add" && isset($_GET['category_id'])) {
    include 'includes/page_actions/news_add.php';
}
if ($_GET['page'] == "news_update" && isset($_GET['category_id']) && isset($_GET['news_id'])) {
    include 'includes/page_actions/news_update.php';
}
if ($_GET['page'] == "news_delete" && isset($_GET['category_id']) && isset($_GET['news_id'])) {
    include 'includes/page_actions/news_delete.php';
}
if ($_GET['page'] == "comment_update" && isset($_GET['comment_id'])) {
    include 'includes/page_actions/comment_update.php';
}
if ($_GET['page'] == "comment_delete" && isset($_GET['comment_id'])) {
    include 'includes/page_actions/comment_delete.php';
}
if ($_GET['page'] == "kontakt") {
    include 'includes/page_actions/kontakt.php';
}
if ($_GET['page'] == "sponsor") {
    include 'includes/page_actions/sponsor_list.php';
}
if ($_GET['page'] == "sponsor_add") {
    include 'includes/page_actions/sponsor_add.php';
}
if ($_GET['page'] == "sponsor_update" && isset($_GET['sponsor_id'])) {
    include 'includes/page_actions/sponsor_update.php';
}
if ($_GET['page'] == "sponsor_delete" && isset($_GET['sponsor_id'])) {
    include 'includes/page_actions/sponsor_delete.php';
}
if ($_GET['page'] == "sponsorinfo") {
    include 'includes/page_actions/sponsorinfo.php';
}
if ($_GET['page'] == "sponsorinfo_add") {
    include 'includes/page_actions/sponsorinfo_add.php';
}
if ($_GET['page'] == "sponsorinfo_update" && isset($_GET['sponsor_id'])) {
    include 'includes/page_actions/sponsorinfo_update.php';
}
if ($_GET['page'] == "sponsorinfo_delete" && isset($_GET['sponsor_id'])) {
    include 'includes/page_actions/sponsorinfo_delete.php';
}
if ($_GET['page'] == "nyhedsbrev") {
    include 'includes/page_actions/nyhedsbrev.php';
}
?>