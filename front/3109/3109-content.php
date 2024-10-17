<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3109">
    <div class="container">
        <div class="title1">
            <h2>OUR SERVICES</h2>
            <hr>
            <p>Overcome faithful endless salvation enlightenment salvation overcome pious merciful<br>ascetic madness
                holiest joy passion zarathustra.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-solid fa-laptop"></i></span>
                            <a href="">LAPTOP REPAIR</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-solid fa-computer"></i></span>
                            <a href="">DESKTOP REPAIR</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-solid fa-print"></i></i></span>
                            <a href="">PRINTER REPAIR</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-solid fa-mobile-screen-button"></i></span>
                            <a href="">SMARTPHONE REPAIR</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-regular fa-hard-drive"></i></span>
                            <a href="">DATA RECOVERY</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-item">
                    <div class="item">
                        <div class="tilte-item">
                            <span><i class="fa-solid fa-tablet-screen-button"></i></i></span>
                            <a href="">TABLET REPAIR</a>
                        </div>
                        <div class="content-item">
                            <p>Noble ocean decieve value convictions selfish sea aversion fearful ubermensch. Ocean
                                superiority against <br> depths against selfish evil.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>