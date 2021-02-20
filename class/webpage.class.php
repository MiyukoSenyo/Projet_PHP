<?php

class WebPage {
    public $title = null;
    protected $lang = "fr";
    protected $head = "";
    protected $body = "";

    function __construct($title) {
        $this->title = $title;
    }

    public function appendtoHead(string $content) {
        $this->head .= $content;
    }

    public function appendContent(string $content) {
        $this->body .= $content;
    }

    public function appendCss(string $css) {
        $this->appendtoHead("<style>$css</style>");
    }

    public function appendCssUrl(string $url) {
        $this->appendtoHead("<link rel=\"stylesheet\" media=\"screen\" href=\"$url\">");
    }

    public function appendJs(string $js) {
        $this->appendContent("<script text=\"js\">$js</script>");
    }

    public function appendJsUrl(string $url) {
        $this->appendContent("<link rel=\"stylesheet\" media=\"screen\" href=\"$url\">");
    }

    public function addKeywords(string $key) {
        $this->appendtoHead("<meta name=\"keywords\" content=\"$key\">");
    }

    public function addDescription(string $desc) {
        $this->appendtoHead("<meta name=\"description\" content=\"$desc\">");
    }

    public function addAuthor(string $aut) {
        $this->appendtoHead("<meta name=\"author\" content=\"$aut\">");
    }

    public function setLanguage(string $lang) {
        $this->lang = $lang;
    }

    public function buildPage() {
        $start = "<!doctype html>
                  <html lang=\"$this->lang\">
                  <head>
                  <meta charset=\"utf-8\">
                  <title>$this->title</title>";
        $middle = "</head>
                   <body>";
        $end = "</body>
                </html>";
        return $start . $this->head . $middle . $this->body . $end;
    }
}