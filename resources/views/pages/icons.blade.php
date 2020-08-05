@extends('layouts.app')

@section('title','Cyber Security')

@section('content')

    <div class="theme-helper">
    <section class="widget theme-helper-content">
        <header class="theme-helper-header d-flex p-0">
            <div class="theme-helper-toggler">
                <div class="theme-helper-spinner bg-primary text-white">
                    <i class="la la-cog"></i>
                    <i class="la la-cog fs-smaller"></i>
                </div>
            </div>
            <h6>Configuration</h6>
        </header>
        <div class="widget-body mt-3">
            <div class="mt-4">
                <a href="https://flatlogic.com/dashboards/sing-app-html5"
                   target="_blank"
                   role="button"
                   class="btn btn-warning btn-rounded-f btn-block fs-mini text-white">
                    Purchase
                </a>
                <a href="https://flatlogic.com/templates/sing-app-html5"
                   target="_blank"
                   role="button"
                   class="btn btn-danger btn-rounded-f btn-block fs-mini">
                    Go FULL Version
                </a>
                <a href="http://demo.flatlogic.com/sing-app/documentation/"
                   target="_blank"
                   role="button"
                   class="btn btn-secondary btn-rounded-f btn-block fs-mini">
                    Documentation
                </a>
            </div>
            <div class="d-flex justify-content-between mt-lg">
                <a role="button"
                   target="_blank"
                   href="https://flatlogic.com/contact"
                   class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                    <i class="glyphicon glyphicon-headphones mr-xs"></i>
                    Support
                </a>
                <a role="button"
                   target="_blank"
                   href="https://github.com/flatlogic/sing-app"
                   class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                    <i class="fa fa-github mr-xs"></i>
                    Github
                </a>
            </div>
            <div class="mt-lg d-flex flex-column align-items-center theme-sharing">
                            <span class="fs-sm">
                                Thank you for sharing!
                            </span>
                <div class="d-flex justify-content-center text-light mt-2">
                    <a target="_blank"
                       href="https://twitter.com/intent/tweet?text=Admin%20dashboard%20template%20built%20with%20NodeJS,%20React%20and%20Bootstrap%204!&url=https://demo.flatlogic.com/sing-app/html-bs4/&via=flatlogic">
                        <i class="fa fa-twitter pr-1"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.flatlogic.com/sing-app/html-bs4/"
                       target="_blank">
                        <i class="fa fa-facebook pl-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
        <!-- Page content -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">YOU ARE HERE</li>
            <li class="breadcrumb-item">UI Elements</li>
            <li class="breadcrumb-item active">Icons</li>
        </ol>
        <h1 class="page-title">UI - <span class="fw-semi-bold">Icons</span></h1>
        <ul id="tabs1" class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Glypicons</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab8" data-toggle="tab">Flaticon</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">FA 4.5 <span
                        class="badge bg-danger">new</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Web Application</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab">Spinner</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab">Text Editor</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab6" data-toggle="tab">Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab7" data-toggle="tab">Other</a></li>
        </ul>
        <div id="tabs1c" class="tab-content mb-lg">
            <div class="tab-pane active" id="tab1">
                <h4>Built-in <span class="fw-semi-bold">Glyphicons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-asterisk"></span>asterisk
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plus"></span>plus
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-euro"></span>euro
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-minus"></span>minus
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-cloud"></span>cloud
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-envelope"></span>envelope
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-pencil"></span>pencil
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glass"></span>glass
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-music"></span>music
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-search"></span>search
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-heart"></span>heart
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-star"></span>star
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-star-empty"></span>star-empty
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-user"></span>user
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-film"></span>film
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th-large"></span>th-large
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th"></span>th</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th-list"></span>th-list
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok"></span>ok</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-remove"></span>remove
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-zoom-in"></span>zoom-in
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-zoom-out"></span>zoom-out
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-off"></span>off</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-signal"></span>signal
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-cog"></span>cog</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-trash"></span>trash
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-home"></span>home
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-file"></span>file
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-time"></span>time
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-road"></span>road
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-download-alt"></span>download-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-download"></span>download
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-upload"></span>upload
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-inbox"></span>inbox
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-play-circle"></span>play-circle
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-repeat"></span>repeat
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-refresh"></span>refresh
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-list-alt"></span>list-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glyph-lock"></span>lock
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-flag"></span>flag
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-headphones"></span>headphones
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-off"></span>volume-off
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-down"></span>volume-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-up"></span>volume-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-qrcode"></span>qrcode
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-barcode"></span>barcode
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tag"></span>tag</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tags"></span>tags
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-book"></span>book
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-glyph-bookmark"></span>bookmark
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-print"></span>print
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glyph-camera"></span>camera
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-font"></span>font
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bold"></span>bold
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-italic"></span>italic
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-text-height"></span>text-height
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-text-width"></span>text-width
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-left"></span>align-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-center"></span>align-center
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-right"></span>align-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-align-justify"></span>align-justify
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-list"></span>list
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-indent-left"></span>indent-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-indent-right"></span>indent-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-facetime-video"></span>facetime-video
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-picture"></span>picture
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-map-marker"></span>map-marker
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-adjust"></span>adjust
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tint"></span>tint
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-edit"></span>edit
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-share"></span>share
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-check"></span>check
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-move"></span>move
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-step-backward"></span>step-backward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-fast-backward"></span>fast-backward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-backward"></span>backward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-play"></span>play
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-pause"></span>pause
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-stop"></span>stop
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-forward"></span>forward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fast-forward"></span>fast-forward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-step-forward"></span>step-forward
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eject"></span>eject
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-left"></span>chevron-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-chevron-right"></span>chevron-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plus-sign"></span>plus-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-minus-sign"></span>minus-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-remove-sign"></span>remove-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok-sign"></span>ok-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-question-sign"></span>question-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-info-sign"></span>info-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-screenshot"></span>screenshot
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-remove-circle"></span>remove-circle
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok-circle"></span>ok-circle
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ban-circle"></span>ban-circle
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-left"></span>arrow-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-right"></span>arrow-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-up"></span>arrow-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-down"></span>arrow-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-share-alt"></span>share-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-full"></span>resize-full
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-small"></span>resize-small
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-exclamation-sign"></span>exclamation-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-gift"></span>gift
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-leaf"></span>leaf
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glyph-fire"></span>fire
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eye-open"></span>eye-open
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eye-close"></span>eye-close
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-warning-sign"></span>warning-sign
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plane"></span>plane
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-glyph-calendar"></span>calendar
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-random"></span>random
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-comments"></span>comment
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-magnet"></span>magnet
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-up"></span>chevron-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-down"></span>chevron-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-retweet"></span>retweet
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-shopping-cart"></span>shopping-cart
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-folder-close"></span>folder-close
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-folder-open"></span>folder-open
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-resize-vertical"></span>resize-vertical
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-resize-horizontal"></span>resize-horizontal
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hdd"></span>hdd</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bullhorn"></span>bullhorn
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glyph-bell"></span>bell
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-certificate"></span>certificate
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-thumbs-up"></span>thumbs-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-thumbs-down"></span>thumbs-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-right"></span>hand-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-left"></span>hand-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-top"></span>hand-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-down"></span>hand-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-circle-arrow-right"></span>circle-arrow-right
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-circle-arrow-left"></span>circle-arrow-left
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-circle-arrow-top"></span>circle-arrow-up
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-circle-arrow-down"></span>circle-arrow-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-globe"></span>globe
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glyph-wrench"></span>wrench
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tasks"></span>tasks
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-filter"></span>filter
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-glyph-briefcase"></span>briefcase
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fullscreen"></span>fullscreen
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-dashboard"></span>dashboard
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-glyph-paperclip"></span>paperclip
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-heart-empty"></span>heart-empty
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-link"></span>link
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-phone"></span>phone
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-glyph-pushpin"></span>pushpin
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-usd"></span>usd</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-gbp"></span>gbp</div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort"></span>sort
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-alphabet"></span>sort-by-alphabet
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-alphabet-alt"></span>sort-by-alphabet-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-order"></span>sort-by-order
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-order-alt"></span>sort-by-order-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-attributes"></span>sort-by-attributes
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span
                            class="glyphicon glyphicon-sort-by-attributes-alt"></span>sort-by-attributes-alt
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-unchecked"></span>unchecked
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-expand"></span>expand
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-collapse"></span>collapse-down
                    </div>
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-collapse-top"></span>collapse-up
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2">
                <h4>Awesome <span class="fw-semi-bold">Font Awesome</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-bed"></i>
                            bed</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance"><i
                                class="fa fa-behance"></i> behance</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance-square"><i
                                class="fa fa-behance-square"></i> behance-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bomb"><i class="fa fa-bomb"></i> bomb</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building"><i
                                class="fa fa-building"></i> building</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-cab"></i> cab
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-car"></i>
                            car</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/child"><i class="fa fa-child"></i>
                            child</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i
                                class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-thin"><i
                                class="fa fa-circle-thin"></i> circle-thin</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/codepen"><i
                                class="fa fa-codepen"></i> codepen</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cube"><i class="fa fa-cube"></i> cube</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cubes"><i class="fa fa-cubes"></i>
                            cubes</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/database"><i
                                class="fa fa-database"></i> database</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/delicious"><i
                                class="fa fa-delicious"></i> delicious</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/deviantart"><i
                                class="fa fa-deviantart"></i> deviantart</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/digg"><i class="fa fa-digg"></i> digg</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/drupal"><i class="fa fa-drupal"></i>
                            drupal</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-empire"></i>
                            empire</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-square"><i
                                class="fa fa-envelope-square"></i> envelope-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fax"><i class="fa fa-fax"></i>
                            fax</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i
                                class="fa fa-file-code-o"></i> file-code-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i
                                class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-image-o"></i> file-image-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i
                                class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i
                                class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-video-o"></i> file-video-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i
                                class="fa fa-file-word-o"></i> file-word-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-ge"></i> ge
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git"><i class="fa fa-git"></i>
                            git</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git-square"><i
                                class="fa fa-git-square"></i> git-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google"><i class="fa fa-google"></i>
                            google</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i
                                class="fa fa-graduation-cap"></i> graduation-cap</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hacker-news"><i
                                class="fa fa-hacker-news"></i> hacker-news</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/header"><i class="fa fa-header"></i>
                            header</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/history"><i
                                class="fa fa-history"></i> history</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/joomla"><i class="fa fa-joomla"></i>
                            joomla</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jsfiddle"><i
                                class="fa fa-jsfiddle"></i> jsfiddle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/language"><i
                                class="fa fa-language"></i> language</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-ring"></i> life-ring</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i
                                class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/openid"><i class="fa fa-openid"></i>
                            openid</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i
                                class="fa fa-paper-plane"></i> paper-plane</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i
                                class="fa fa-paper-plane-o"></i> paper-plane-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paragraph"><i
                                class="fa fa-paragraph"></i> paragraph</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paw"><i class="fa fa-paw"></i>
                            paw</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i
                                class="fa fa-pied-piper"></i> pied-piper</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper-alt"><i
                                class="fa fa-pied-piper-alt"></i> pied-piper-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i
                                class="fa fa-pied-piper-square"></i> pied-piper-square <span
                                class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qq"><i class="fa fa-qq"></i> qq</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-ra"></i> ra
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-rebel"></i>
                            rebel</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/recycle"><i
                                class="fa fa-recycle"></i> recycle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit"><i class="fa fa-reddit"></i>
                            reddit</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit-square"><i
                                class="fa fa-reddit-square"></i> reddit-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i
                                class="fa fa-send"></i> send <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i
                                class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i
                                class="fa fa-share-alt"></i> share-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i
                                class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/slack"><i class="fa fa-slack"></i>
                            slack</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sliders"><i
                                class="fa fa-sliders"></i> sliders</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/soundcloud"><i
                                class="fa fa-soundcloud"></i> soundcloud</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/space-shuttle"><i
                                class="fa fa-space-shuttle"></i> space-shuttle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spoon"><i class="fa fa-spoon"></i>
                            spoon</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spotify"><i
                                class="fa fa-spotify"></i> spotify</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam"><i class="fa fa-steam"></i>
                            steam</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam-square"><i
                                class="fa fa-steam-square"></i> steam-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon"><i
                                class="fa fa-stumbleupon"></i> stumbleupon</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon-circle"><i
                                class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-support"></i> support <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-taxi"></i> taxi</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tencent-weibo"><i
                                class="fa fa-tencent-weibo"></i> tencent-weibo</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tree"><i class="fa fa-tree"></i> tree</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-university"></i> university</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vine"><i class="fa fa-vine"></i> vine</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-wechat"></i>
                            wechat <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-weixin"></i>
                            weixin</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wordpress"><i
                                class="fa fa-wordpress"></i> wordpress</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/yahoo"><i class="fa fa-yahoo"></i>
                            yahoo</a></div>

                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/adjust"><i class="fa fa-adjust"></i>
                            adjust</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/anchor"><i class="fa fa-anchor"></i>
                            anchor</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/archive"><i
                                class="fa fa-archive"></i> archive</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows"><i class="fa fa-arrows"></i>
                            arrows</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-h"><i
                                class="fa fa-arrows-h"></i> arrows-h</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-v"><i
                                class="fa fa-arrows-v"></i> arrows-v</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/asterisk"><i
                                class="fa fa-asterisk"></i> asterisk</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-automobile"></i>
                            automobile <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ban"><i class="fa fa-ban"></i>
                            ban</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bar-chart-o"><i
                                class="fa fa-bar-chart-o"></i> bar-chart-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/barcode"><i
                                class="fa fa-barcode"></i> barcode</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-bars"></i> bars</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/beer"><i class="fa fa-beer"></i> beer</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bell"><i class="fa fa-bell"></i> bell</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bell-o"><i class="fa fa-bell-o"></i>
                            bell-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bolt"><i class="fa fa-bolt"></i> bolt</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bomb"><i class="fa fa-bomb"></i> bomb</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/book"><i class="fa fa-book"></i> book</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bookmark"><i
                                class="fa fa-bookmark"></i> bookmark</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bookmark-o"><i
                                class="fa fa-bookmark-o"></i> bookmark-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/briefcase"><i
                                class="fa fa-briefcase"></i> briefcase</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bug"><i class="fa fa-bug"></i>
                            bug</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building"><i
                                class="fa fa-building"></i> building</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building-o"><i
                                class="fa fa-building-o"></i> building-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bullhorn"><i
                                class="fa fa-bullhorn"></i> bullhorn</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bullseye"><i
                                class="fa fa-bullseye"></i> bullseye</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-cab"></i> cab
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/calendar"><i
                                class="fa fa-calendar"></i> calendar</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/calendar-o"><i
                                class="fa fa-calendar-o"></i> calendar-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/camera"><i class="fa fa-camera"></i>
                            camera</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/camera-retro"><i
                                class="fa fa-camera-retro"></i> camera-retro</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-car"></i>
                            car</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-down"><i
                                class="fa fa-caret-square-o-down"></i> caret-square-o-down</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-left"><i
                                class="fa fa-caret-square-o-left"></i> caret-square-o-left</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-right"><i
                                class="fa fa-caret-square-o-right"></i> caret-square-o-right</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-up"><i
                                class="fa fa-caret-square-o-up"></i> caret-square-o-up</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/certificate"><i
                                class="fa fa-certificate"></i> certificate</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check"><i class="fa fa-check"></i>
                            check</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-circle"><i
                                class="fa fa-check-circle"></i> check-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-circle-o"><i
                                class="fa fa-check-circle-o"></i> check-circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square"><i
                                class="fa fa-check-square"></i> check-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square-o"><i
                                class="fa fa-check-square-o"></i> check-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/child"><i class="fa fa-child"></i>
                            child</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle"><i class="fa fa-circle"></i>
                            circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o"><i
                                class="fa fa-circle-o"></i> circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i
                                class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-thin"><i
                                class="fa fa-circle-thin"></i> circle-thin</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clock-o"><i
                                class="fa fa-clock-o"></i> clock-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud"><i class="fa fa-cloud"></i>
                            cloud</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud-download"><i
                                class="fa fa-cloud-download"></i> cloud-download</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud-upload"><i
                                class="fa fa-cloud-upload"></i> cloud-upload</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/code"><i class="fa fa-code"></i> code</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/code-fork"><i
                                class="fa fa-code-fork"></i> code-fork</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/coffee"><i class="fa fa-coffee"></i>
                            coffee</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-cog"></i>
                            cog</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cogs"><i class="fa fa-cogs"></i> cogs</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comment"><i
                                class="fa fa-comment"></i> comment</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comment-o"><i
                                class="fa fa-comment-o"></i> comment-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comments"><i
                                class="fa fa-comments"></i> comments</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comments-o"><i
                                class="fa fa-comments-o"></i> comments-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/compass"><i
                                class="fa fa-compass"></i> compass</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/credit-card"><i
                                class="fa fa-credit-card"></i> credit-card</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/crop"><i class="fa fa-crop"></i> crop</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/crosshairs"><i
                                class="fa fa-crosshairs"></i> crosshairs</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cube"><i class="fa fa-cube"></i> cube</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cubes"><i class="fa fa-cubes"></i>
                            cubes</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cutlery"><i
                                class="fa fa-cutlery"></i> cutlery</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tachometer"><i
                                class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/database"><i
                                class="fa fa-database"></i> database</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/desktop"><i
                                class="fa fa-desktop"></i> desktop</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dot-circle-o"><i
                                class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/download"><i
                                class="fa fa-download"></i> download</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square-o"><i
                                class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ellipsis-h"><i
                                class="fa fa-ellipsis-h"></i> ellipsis-h</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ellipsis-v"><i
                                class="fa fa-ellipsis-v"></i> ellipsis-v</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope"><i
                                class="fa fa-envelope"></i> envelope</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-o"><i
                                class="fa fa-envelope-o"></i> envelope-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-square"><i
                                class="fa fa-envelope-square"></i> envelope-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eraser"><i class="fa fa-eraser"></i>
                            eraser</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exchange"><i
                                class="fa fa-exchange"></i> exchange</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation"><i
                                class="fa fa-exclamation"></i> exclamation</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-circle"><i
                                class="fa fa-exclamation-circle"></i> exclamation-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-triangle"><i
                                class="fa fa-exclamation-triangle"></i> exclamation-triangle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/external-link"><i
                                class="fa fa-external-link"></i> external-link</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/external-link-square"><i
                                class="fa fa-external-link-square"></i> external-link-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eye"><i class="fa fa-eye"></i>
                            eye</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eye-slash"><i
                                class="fa fa-eye-slash"></i> eye-slash</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fax"><i class="fa fa-fax"></i>
                            fax</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/female"><i class="fa fa-female"></i>
                            female</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fighter-jet"><i
                                class="fa fa-fighter-jet"></i> fighter-jet</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i
                                class="fa fa-file-code-o"></i> file-code-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i
                                class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-image-o"></i> file-image-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i
                                class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i
                                class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-video-o"></i> file-video-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i
                                class="fa fa-file-word-o"></i> file-word-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/film"><i class="fa fa-film"></i> film</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/filter"><i class="fa fa-filter"></i>
                            filter</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fire"><i class="fa fa-fire"></i> fire</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fire-extinguisher"><i
                                class="fa fa-fire-extinguisher"></i> fire-extinguisher</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag"><i class="fa fa-flag"></i> flag</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag-checkered"><i
                                class="fa fa-flag-checkered"></i> flag-checkered</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag-o"><i class="fa fa-flag-o"></i>
                            flag-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bolt"><i class="fa fa-flash"></i>
                            flash <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flask"><i class="fa fa-flask"></i>
                            flask</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder"><i class="fa fa-folder"></i>
                            folder</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-o"><i
                                class="fa fa-folder-o"></i> folder-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-open"><i
                                class="fa fa-folder-open"></i> folder-open</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-open-o"><i
                                class="fa fa-folder-open-o"></i> folder-open-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/frown-o"><i
                                class="fa fa-frown-o"></i> frown-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gamepad"><i
                                class="fa fa-gamepad"></i> gamepad</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gavel"><i class="fa fa-gavel"></i>
                            gavel</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-gear"></i> gear
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cogs"><i class="fa fa-gears"></i>
                            gears <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gift"><i class="fa fa-gift"></i> gift</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/glass"><i class="fa fa-glass"></i>
                            glass</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/globe"><i class="fa fa-globe"></i>
                            globe</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i
                                class="fa fa-graduation-cap"></i> graduation-cap</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/users"><i class="fa fa-group"></i>
                            group <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hdd-o"><i class="fa fa-hdd-o"></i>
                            hdd-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/headphones"><i
                                class="fa fa-headphones"></i> headphones</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/heart"><i class="fa fa-heart"></i>
                            heart</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/heart-o"><i
                                class="fa fa-heart-o"></i> heart-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/history"><i
                                class="fa fa-history"></i> history</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/home"><i class="fa fa-home"></i> home</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i
                                class="fa fa-image"></i> image <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inbox"><i class="fa fa-inbox"></i>
                            inbox</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/info"><i class="fa fa-info"></i> info</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/info-circle"><i
                                class="fa fa-info-circle"></i> info-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/key"><i class="fa fa-key"></i>
                            key</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/keyboard-o"><i
                                class="fa fa-keyboard-o"></i> keyboard-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/language"><i
                                class="fa fa-language"></i> language</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/laptop"><i class="fa fa-laptop"></i>
                            laptop</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/leaf"><i class="fa fa-leaf"></i> leaf</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gavel"><i class="fa fa-legal"></i>
                            legal <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lemon-o"><i
                                class="fa fa-lemon-o"></i> lemon-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/level-down"><i
                                class="fa fa-level-down"></i> level-down</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/level-up"><i
                                class="fa fa-level-up"></i> level-up</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-ring"></i> life-ring</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lightbulb-o"><i
                                class="fa fa-lightbulb-o"></i> lightbulb-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/location-arrow"><i
                                class="fa fa-location-arrow"></i> location-arrow</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lock"><i class="fa fa-lock"></i> lock</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/magic"><i class="fa fa-magic"></i>
                            magic</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/magnet"><i class="fa fa-magnet"></i>
                            magnet</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share"><i
                                class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply"><i
                                class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply-all"><i
                                class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/male"><i class="fa fa-male"></i> male</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/map-marker"><i
                                class="fa fa-map-marker"></i> map-marker</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/meh-o"><i class="fa fa-meh-o"></i>
                            meh-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/microphone"><i
                                class="fa fa-microphone"></i> microphone</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/microphone-slash"><i
                                class="fa fa-microphone-slash"></i> microphone-slash</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus"><i class="fa fa-minus"></i>
                            minus</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-circle"><i
                                class="fa fa-minus-circle"></i> minus-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square"><i
                                class="fa fa-minus-square"></i> minus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square-o"><i
                                class="fa fa-minus-square-o"></i> minus-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/mobile"><i class="fa fa-mobile"></i>
                            mobile</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/mobile"><i
                                class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/money"><i class="fa fa-money"></i>
                            money</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/moon-o"><i class="fa fa-moon-o"></i>
                            moon-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i
                                class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/music"><i class="fa fa-music"></i>
                            music</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-navicon"></i>
                            navicon <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i
                                class="fa fa-paper-plane"></i> paper-plane</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i
                                class="fa fa-paper-plane-o"></i> paper-plane-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paw"><i class="fa fa-paw"></i>
                            paw</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil"><i class="fa fa-pencil"></i>
                            pencil</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square"><i
                                class="fa fa-pencil-square"></i> pencil-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square-o"><i
                                class="fa fa-pencil-square-o"></i> pencil-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/phone"><i class="fa fa-phone"></i>
                            phone</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/phone-square"><i
                                class="fa fa-phone-square"></i> phone-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i
                                class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i
                                class="fa fa-picture-o"></i> picture-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plane"><i class="fa fa-plane"></i>
                            plane</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus"><i class="fa fa-plus"></i> plus</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-circle"><i
                                class="fa fa-plus-circle"></i> plus-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i
                                class="fa fa-plus-square"></i> plus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square-o"><i
                                class="fa fa-plus-square-o"></i> plus-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/power-off"><i
                                class="fa fa-power-off"></i> power-off</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/print"><i class="fa fa-print"></i>
                            print</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/puzzle-piece"><i
                                class="fa fa-puzzle-piece"></i> puzzle-piece</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qrcode"><i class="fa fa-qrcode"></i>
                            qrcode</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/question"><i
                                class="fa fa-question"></i> question</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/question-circle"><i
                                class="fa fa-question-circle"></i> question-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/quote-left"><i
                                class="fa fa-quote-left"></i> quote-left</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/quote-right"><i
                                class="fa fa-quote-right"></i> quote-right</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/random"><i class="fa fa-random"></i>
                            random</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/recycle"><i
                                class="fa fa-recycle"></i> recycle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/refresh"><i
                                class="fa fa-refresh"></i> refresh</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-reorder"></i>
                            reorder <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply"><i class="fa fa-reply"></i>
                            reply</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply-all"><i
                                class="fa fa-reply-all"></i> reply-all</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/retweet"><i
                                class="fa fa-retweet"></i> retweet</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/road"><i class="fa fa-road"></i> road</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rocket"><i class="fa fa-rocket"></i>
                            rocket</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rss"><i class="fa fa-rss"></i>
                            rss</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rss-square"><i
                                class="fa fa-rss-square"></i> rss-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search"><i class="fa fa-search"></i>
                            search</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search-minus"><i
                                class="fa fa-search-minus"></i> search-minus</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search-plus"><i
                                class="fa fa-search-plus"></i> search-plus</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i
                                class="fa fa-send"></i> send <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i
                                class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share"><i class="fa fa-share"></i>
                            share</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i
                                class="fa fa-share-alt"></i> share-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i
                                class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-square"><i
                                class="fa fa-share-square"></i> share-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-square-o"><i
                                class="fa fa-share-square-o"></i> share-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/shield"><i class="fa fa-shield"></i>
                            shield</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/shopping-cart"><i
                                class="fa fa-shopping-cart"></i> shopping-cart</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sign-in"><i
                                class="fa fa-sign-in"></i> sign-in</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sign-out"><i
                                class="fa fa-sign-out"></i> sign-out</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/signal"><i class="fa fa-signal"></i>
                            signal</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sitemap"><i
                                class="fa fa-sitemap"></i> sitemap</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sliders"><i
                                class="fa fa-sliders"></i> sliders</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/smile-o"><i
                                class="fa fa-smile-o"></i> smile-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort"><i class="fa fa-sort"></i> sort</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-alpha-asc"><i
                                class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-alpha-desc"><i
                                class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-amount-asc"><i
                                class="fa fa-sort-amount-asc"></i> sort-amount-asc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-amount-desc"><i
                                class="fa fa-sort-amount-desc"></i> sort-amount-desc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-asc"><i
                                class="fa fa-sort-asc"></i> sort-asc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-desc"><i
                                class="fa fa-sort-desc"></i> sort-desc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-desc"><i
                                class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-numeric-asc"><i
                                class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-numeric-desc"><i
                                class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-asc"><i
                                class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/space-shuttle"><i
                                class="fa fa-space-shuttle"></i> space-shuttle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spinner"><i
                                class="fa fa-spinner"></i> spinner</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spoon"><i class="fa fa-spoon"></i>
                            spoon</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square"><i class="fa fa-square"></i>
                            square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square-o"><i
                                class="fa fa-square-o"></i> square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star"><i class="fa fa-star"></i> star</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half"><i
                                class="fa fa-star-half"></i> star-half</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i
                                class="fa fa-star-half-empty"></i> star-half-empty <span
                                class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i
                                class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i
                                class="fa fa-star-half-o"></i> star-half-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-o"><i class="fa fa-star-o"></i>
                            star-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/suitcase"><i
                                class="fa fa-suitcase"></i> suitcase</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sun-o"><i class="fa fa-sun-o"></i>
                            sun-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i
                                class="fa fa-support"></i> support <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tablet"><i class="fa fa-tablet"></i>
                            tablet</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tachometer"><i
                                class="fa fa-tachometer"></i> tachometer</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tag"><i class="fa fa-tag"></i>
                            tag</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tags"><i class="fa fa-tags"></i> tags</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tasks"><i class="fa fa-tasks"></i>
                            tasks</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-taxi"></i> taxi</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/terminal"><i
                                class="fa fa-terminal"></i> terminal</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumb-tack"><i
                                class="fa fa-thumb-tack"></i> thumb-tack</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-down"><i
                                class="fa fa-thumbs-down"></i> thumbs-down</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-o-down"><i
                                class="fa fa-thumbs-o-down"></i> thumbs-o-down</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-o-up"><i
                                class="fa fa-thumbs-o-up"></i> thumbs-o-up</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-up"><i
                                class="fa fa-thumbs-up"></i> thumbs-up</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ticket"><i class="fa fa-ticket"></i>
                            ticket</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times"><i class="fa fa-times"></i>
                            times</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times-circle"><i
                                class="fa fa-times-circle"></i> times-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times-circle-o"><i
                                class="fa fa-times-circle-o"></i> times-circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tint"><i class="fa fa-tint"></i> tint</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-down"><i
                                class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-left"><i
                                class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-right"><i
                                class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-up"><i
                                class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trash-o"><i
                                class="fa fa-trash-o"></i> trash-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tree"><i class="fa fa-tree"></i> tree</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trophy"><i class="fa fa-trophy"></i>
                            trophy</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/truck"><i class="fa fa-truck"></i>
                            truck</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/umbrella"><i
                                class="fa fa-umbrella"></i> umbrella</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i
                                class="fa fa-university"></i> university</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/unlock"><i class="fa fa-unlock"></i>
                            unlock</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/unlock-alt"><i
                                class="fa fa-unlock-alt"></i> unlock-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort"><i class="fa fa-unsorted"></i>
                            unsorted <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/upload"><i class="fa fa-upload"></i>
                            upload</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/user"><i class="fa fa-user"></i> user</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/users"><i class="fa fa-users"></i>
                            users</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/video-camera"><i
                                class="fa fa-video-camera"></i> video-camera</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-down"><i
                                class="fa fa-volume-down"></i> volume-down</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-off"><i
                                class="fa fa-volume-off"></i> volume-off</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-up"><i
                                class="fa fa-volume-up"></i> volume-up</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-triangle"><i
                                class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wheelchair"><i
                                class="fa fa-wheelchair"></i> wheelchair</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wrench"><i class="fa fa-wrench"></i>
                            wrench</a></div>

                </div>
            </div>
            <div class="tab-pane" id="tab4">
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i
                                class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-cog"></i>
                            cog</a></div>
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-gear"></i> gear
                            <span class="text-muted">(alias)</span></a></div>
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/refresh"><i
                                class="fa fa-refresh"></i> refresh</a></div>
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spinner"><i
                                class="fa fa-spinner"></i> spinner</a></div>
                </div>
            </div>
            <div class="tab-pane" id="tab5">
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-center"><i
                                class="fa fa-align-center"></i> align-center</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-justify"><i
                                class="fa fa-align-justify"></i> align-justify</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-left"><i
                                class="fa fa-align-left"></i> align-left</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-right"><i
                                class="fa fa-align-right"></i> align-right</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bold"><i class="fa fa-bold"></i> bold</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/link"><i class="fa fa-chain"></i>
                            chain <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/chain-broken"><i
                                class="fa fa-chain-broken"></i> chain-broken</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clipboard"><i
                                class="fa fa-clipboard"></i> clipboard</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/columns"><i
                                class="fa fa-columns"></i> columns</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/files-o"><i class="fa fa-copy"></i>
                            copy <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/scissors"><i class="fa fa-cut"></i>
                            cut <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/outdent"><i class="fa fa-dedent"></i>
                            dedent <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eraser"><i class="fa fa-eraser"></i>
                            eraser</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file"><i class="fa fa-file"></i> file</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-o"><i class="fa fa-file-o"></i>
                            file-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text"><i
                                class="fa fa-file-text"></i> file-text</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text-o"><i
                                class="fa fa-file-text-o"></i> file-text-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/files-o"><i
                                class="fa fa-files-o"></i> files-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/floppy-o"><i
                                class="fa fa-floppy-o"></i> floppy-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/font"><i class="fa fa-font"></i> font</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/header"><i class="fa fa-header"></i>
                            header</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/indent"><i class="fa fa-indent"></i>
                            indent</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/italic"><i class="fa fa-italic"></i>
                            italic</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/link"><i class="fa fa-link"></i> link</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list"><i class="fa fa-list"></i> list</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-alt"><i
                                class="fa fa-list-alt"></i> list-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-ol"><i
                                class="fa fa-list-ol"></i> list-ol</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-ul"><i
                                class="fa fa-list-ul"></i> list-ul</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/outdent"><i
                                class="fa fa-outdent"></i> outdent</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paperclip"><i
                                class="fa fa-paperclip"></i> paperclip</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paragraph"><i
                                class="fa fa-paragraph"></i> paragraph</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clipboard"><i
                                class="fa fa-paste"></i> paste <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/repeat"><i class="fa fa-repeat"></i>
                            repeat</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/undo"><i
                                class="fa fa-rotate-left"></i> rotate-left <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/repeat"><i
                                class="fa fa-rotate-right"></i> rotate-right <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/floppy-o"><i class="fa fa-save"></i>
                            save <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/scissors"><i
                                class="fa fa-scissors"></i> scissors</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/strikethrough"><i
                                class="fa fa-strikethrough"></i> strikethrough</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/subscript"><i
                                class="fa fa-subscript"></i> subscript</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/superscript"><i
                                class="fa fa-superscript"></i> superscript</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/table"><i class="fa fa-table"></i>
                            table</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/text-height"><i
                                class="fa fa-text-height"></i> text-height</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/text-width"><i
                                class="fa fa-text-width"></i> text-width</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th"><i class="fa fa-th"></i> th</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th-large"><i
                                class="fa fa-th-large"></i> th-large</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th-list"><i
                                class="fa fa-th-list"></i> th-list</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/underline"><i
                                class="fa fa-underline"></i> underline</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/undo"><i class="fa fa-undo"></i> undo</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/chain-broken"><i
                                class="fa fa-unlink"></i> unlink <span class="text-muted">(alias)</span></a></div>

                </div>
            </div>
            <div class="tab-pane" id="tab6">
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/adn"><i class="fa fa-adn"></i>
                            adn</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/android"><i
                                class="fa fa-android"></i> android</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/apple"><i class="fa fa-apple"></i>
                            apple</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance"><i
                                class="fa fa-behance"></i> behance</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance-square"><i
                                class="fa fa-behance-square"></i> behance-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bitbucket"><i
                                class="fa fa-bitbucket"></i> bitbucket</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bitbucket-square"><i
                                class="fa fa-bitbucket-square"></i> bitbucket-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-bitcoin"></i>
                            bitcoin <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-btc"></i>
                            btc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/codepen"><i
                                class="fa fa-codepen"></i> codepen</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/css3"><i class="fa fa-css3"></i> css3</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/delicious"><i
                                class="fa fa-delicious"></i> delicious</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/deviantart"><i
                                class="fa fa-deviantart"></i> deviantart</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/digg"><i class="fa fa-digg"></i> digg</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dribbble"><i
                                class="fa fa-dribbble"></i> dribbble</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dropbox"><i
                                class="fa fa-dropbox"></i> dropbox</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/drupal"><i class="fa fa-drupal"></i>
                            drupal</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-empire"></i>
                            empire</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/facebook"><i
                                class="fa fa-facebook"></i> facebook</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/facebook-square"><i
                                class="fa fa-facebook-square"></i> facebook-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flickr"><i class="fa fa-flickr"></i>
                            flickr</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/foursquare"><i
                                class="fa fa-foursquare"></i> foursquare</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-ge"></i> ge
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git"><i class="fa fa-git"></i>
                            git</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git-square"><i
                                class="fa fa-git-square"></i> git-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github"><i class="fa fa-github"></i>
                            github</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github-alt"><i
                                class="fa fa-github-alt"></i> github-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github-square"><i
                                class="fa fa-github-square"></i> github-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gittip"><i class="fa fa-gittip"></i>
                            gittip</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google"><i class="fa fa-google"></i>
                            google</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google-plus"><i
                                class="fa fa-google-plus"></i> google-plus</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google-plus-square"><i
                                class="fa fa-google-plus-square"></i> google-plus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hacker-news"><i
                                class="fa fa-hacker-news"></i> hacker-news</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/html5"><i class="fa fa-html5"></i>
                            html5</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/instagram"><i
                                class="fa fa-instagram"></i> instagram</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/joomla"><i class="fa fa-joomla"></i>
                            joomla</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jsfiddle"><i
                                class="fa fa-jsfiddle"></i> jsfiddle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linkedin"><i
                                class="fa fa-linkedin"></i> linkedin</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linkedin-square"><i
                                class="fa fa-linkedin-square"></i> linkedin-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linux"><i class="fa fa-linux"></i>
                            linux</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/maxcdn"><i class="fa fa-maxcdn"></i>
                            maxcdn</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/openid"><i class="fa fa-openid"></i>
                            openid</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pagelines"><i
                                class="fa fa-pagelines"></i> pagelines</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i
                                class="fa fa-pied-piper"></i> pied-piper</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper-alt"><i
                                class="fa fa-pied-piper-alt"></i> pied-piper-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i
                                class="fa fa-pied-piper-square"></i> pied-piper-square <span
                                class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pinterest"><i
                                class="fa fa-pinterest"></i> pinterest</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pinterest-square"><i
                                class="fa fa-pinterest-square"></i> pinterest-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qq"><i class="fa fa-qq"></i> qq</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-ra"></i> ra
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-rebel"></i>
                            rebel</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit"><i class="fa fa-reddit"></i>
                            reddit</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit-square"><i
                                class="fa fa-reddit-square"></i> reddit-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/renren"><i class="fa fa-renren"></i>
                            renren</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i
                                class="fa fa-share-alt"></i> share-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i
                                class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/skype"><i class="fa fa-skype"></i>
                            skype</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/slack"><i class="fa fa-slack"></i>
                            slack</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/soundcloud"><i
                                class="fa fa-soundcloud"></i> soundcloud</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spotify"><i
                                class="fa fa-spotify"></i> spotify</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stack-exchange"><i
                                class="fa fa-stack-exchange"></i> stack-exchange</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stack-overflow"><i
                                class="fa fa-stack-overflow"></i> stack-overflow</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam"><i class="fa fa-steam"></i>
                            steam</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam-square"><i
                                class="fa fa-steam-square"></i> steam-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon"><i
                                class="fa fa-stumbleupon"></i> stumbleupon</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon-circle"><i
                                class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tencent-weibo"><i
                                class="fa fa-tencent-weibo"></i> tencent-weibo</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trello"><i class="fa fa-trello"></i>
                            trello</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tumblr"><i class="fa fa-tumblr"></i>
                            tumblr</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tumblr-square"><i
                                class="fa fa-tumblr-square"></i> tumblr-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/twitter"><i
                                class="fa fa-twitter"></i> twitter</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/twitter-square"><i
                                class="fa fa-twitter-square"></i> twitter-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vimeo-square"><i
                                class="fa fa-vimeo-square"></i> vimeo-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vine"><i class="fa fa-vine"></i> vine</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vk"><i class="fa fa-vk"></i> vk</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-wechat"></i>
                            wechat <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weibo"><i class="fa fa-weibo"></i>
                            weibo</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-weixin"></i>
                            weixin</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/windows"><i
                                class="fa fa-windows"></i> windows</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wordpress"><i
                                class="fa fa-wordpress"></i> wordpress</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/xing"><i class="fa fa-xing"></i> xing</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/xing-square"><i
                                class="fa fa-xing-square"></i> xing-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/yahoo"><i class="fa fa-yahoo"></i>
                            yahoo</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube"><i
                                class="fa fa-youtube"></i> youtube</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-play"><i
                                class="fa fa-youtube-play"></i> youtube-play</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-square"><i
                                class="fa fa-youtube-square"></i> youtube-square</a></div>

                </div>
            </div>
            <div class="tab-pane" id="tab7">
                <h4>File Type <span class="fw-semi-bold">Icons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file"><i class="fa fa-file"></i> file</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i
                                class="fa fa-file-code-o"></i> file-code-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i
                                class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-image-o"></i> file-image-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-o"><i class="fa fa-file-o"></i>
                            file-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i
                                class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i
                                class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i
                                class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i
                                class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text"><i
                                class="fa fa-file-text"></i> file-text</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text-o"><i
                                class="fa fa-file-text-o"></i> file-text-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i
                                class="fa fa-file-video-o"></i> file-video-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i
                                class="fa fa-file-word-o"></i> file-word-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i
                                class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a>
                    </div>

                </div>
                <h4>Form Control <span class="fw-semi-bold">Icons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square"><i
                                class="fa fa-check-square"></i> check-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square-o"><i
                                class="fa fa-check-square-o"></i> check-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle"><i class="fa fa-circle"></i>
                            circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o"><i
                                class="fa fa-circle-o"></i> circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dot-circle-o"><i
                                class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square"><i
                                class="fa fa-minus-square"></i> minus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square-o"><i
                                class="fa fa-minus-square-o"></i> minus-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i
                                class="fa fa-plus-square"></i> plus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square-o"><i
                                class="fa fa-plus-square-o"></i> plus-square-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square"><i class="fa fa-square"></i>
                            square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square-o"><i
                                class="fa fa-square-o"></i> square-o</a></div>

                </div>
                <h4>Currency <span class="fw-semi-bold">Icons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-bitcoin"></i>
                            bitcoin <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-btc"></i>
                            btc</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-cny"></i> cny
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/usd"><i class="fa fa-dollar"></i>
                            dollar <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eur"><i class="fa fa-eur"></i>
                            eur</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eur"><i class="fa fa-euro"></i> euro
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gbp"><i class="fa fa-gbp"></i>
                            gbp</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inr"><i class="fa fa-inr"></i>
                            inr</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-jpy"></i>
                            jpy</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/krw"><i class="fa fa-krw"></i>
                            krw</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/money"><i class="fa fa-money"></i>
                            money</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-rmb"></i> rmb
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-rouble"></i>
                            rouble <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-rub"></i>
                            rub</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-ruble"></i>
                            ruble <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inr"><i class="fa fa-rupee"></i>
                            rupee <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/try"><i class="fa fa-try"></i>
                            try</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/try"><i
                                class="fa fa-turkish-lira"></i> turkish-lira <span class="text-muted">(alias)</span></a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/usd"><i class="fa fa-usd"></i>
                            usd</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/krw"><i class="fa fa-won"></i> won
                            <span class="text-muted">(alias)</span></a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-yen"></i> yen
                            <span class="text-muted">(alias)</span></a></div>

                </div>
                <h4>Video Player <span class="fw-semi-bold">Icons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-alt"><i
                                class="fa fa-arrows-alt"></i> arrows-alt</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/backward"><i
                                class="fa fa-backward"></i> backward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/compress"><i
                                class="fa fa-compress"></i> compress</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eject"><i class="fa fa-eject"></i>
                            eject</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/expand"><i class="fa fa-expand"></i>
                            expand</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fast-backward"><i
                                class="fa fa-fast-backward"></i> fast-backward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fast-forward"><i
                                class="fa fa-fast-forward"></i> fast-forward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/forward"><i
                                class="fa fa-forward"></i> forward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pause"><i class="fa fa-pause"></i>
                            pause</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play"><i class="fa fa-play"></i> play</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play-circle"><i
                                class="fa fa-play-circle"></i> play-circle</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play-circle-o"><i
                                class="fa fa-play-circle-o"></i> play-circle-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/step-backward"><i
                                class="fa fa-step-backward"></i> step-backward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/step-forward"><i
                                class="fa fa-step-forward"></i> step-forward</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stop"><i class="fa fa-stop"></i> stop</a>
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-play"><i
                                class="fa fa-youtube-play"></i> youtube-play</a></div>

                </div>
                <h4>Medical <span class="fw-semi-bold">Icons</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ambulance"><i
                                class="fa fa-ambulance"></i> ambulance</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/h-square"><i
                                class="fa fa-h-square"></i> h-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hospital-o"><i
                                class="fa fa-hospital-o"></i> hospital-o</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/medkit"><i class="fa fa-medkit"></i>
                            medkit</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i
                                class="fa fa-plus-square"></i> plus-square</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stethoscope"><i
                                class="fa fa-stethoscope"></i> stethoscope</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/user-md"><i
                                class="fa fa-user-md"></i> user-md</a></div>

                    <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wheelchair"><i
                                class="fa fa-wheelchair"></i> wheelchair</a></div>
                    <div class="icon-list-item col-md-3 col-sm-4"><i class="fi flaticon-add"></i> add</div>
                </div>
            </div>
            <div class="tab-pane" id="tab8">
                <h4>Flat<span class="fw-semi-bold">icon</span></h4>
                <div class="row icon-list">
                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-add"></span>add</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-add-1"></span>add-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-add-2"></span>add-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-add-3"></span>add-3</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-agenda"></span>agenda</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-alarm"></span>alarm</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-alarm-1"></span>alarm-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-alarm-clock"></span>alarm-clock
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-alarm-clock-1"></span>alarm-clock-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-albums"></span>albums</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-app"></span>app</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-archive"></span>archive</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-archive-1"></span>archive-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-archive-2"></span>archive-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-archive-3"></span>archive-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-attachment"></span>attachment
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-back"></span>back</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery"></span>battery</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-1"></span>battery-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-2"></span>battery-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-3"></span>battery-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-4"></span>battery-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-5"></span>battery-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-6"></span>battery-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-7"></span>battery-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-8"></span>battery-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-battery-9"></span>battery-9
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-binoculars"></span>binoculars
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-blueprint"></span>blueprint
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-bluetooth"></span>bluetooth
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-bluetooth-1"></span>bluetooth-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-bookmark"></span>bookmark
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-bookmark-1"></span>bookmark-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-briefcase"></span>briefcase
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-broken-link"></span>broken-link
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calculator"></span>calculator
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calculator-1"></span>calculator-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar"></span>calendar
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-1"></span>calendar-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-2"></span>calendar-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-3"></span>calendar-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-4"></span>calendar-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-5"></span>calendar-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-6"></span>calendar-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-calendar-7"></span>calendar-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-checked"></span>checked</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-checked-1"></span>checked-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-clock"></span>clock</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-clock-1"></span>clock-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-close"></span>close</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud"></span>cloud</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing"></span>cloud-computing
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing-1"></span>cloud-computing-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing-2"></span>cloud-computing-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing-3"></span>cloud-computing-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing-4"></span>cloud-computing-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-cloud-computing-5"></span>cloud-computing-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-command"></span>command</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-compact-disc"></span>compact-disc
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-compact-disc-1"></span>compact-disc-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-compact-disc-2"></span>compact-disc-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-compass"></span>compass</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-compose"></span>compose</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls"></span>controls
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-1"></span>controls-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-2"></span>controls-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-3"></span>controls-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-4"></span>controls-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-5"></span>controls-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-6"></span>controls-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-7"></span>controls-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-8"></span>controls-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-controls-9"></span>controls-9
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-database"></span>database
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-database-1"></span>database-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-database-2"></span>database-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-database-3"></span>database-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-diamond"></span>diamond</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-diploma"></span>diploma</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-dislike"></span>dislike</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-dislike-1"></span>dislike-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-divide"></span>divide</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-divide-1"></span>divide-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-division"></span>division
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-document"></span>document
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-download"></span>download
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-edit"></span>edit</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-edit-1"></span>edit-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-eject"></span>eject</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-eject-1"></span>eject-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-equal"></span>equal</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-equal-1"></span>equal-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-equal-2"></span>equal-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-error"></span>error</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-exit"></span>exit</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-exit-1"></span>exit-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-exit-2"></span>exit-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-eyeglasses"></span>eyeglasses
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-fast-forward"></span>fast-forward
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-fast-forward-1"></span>fast-forward-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-fax"></span>fax</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-file"></span>file</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-file-1"></span>file-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-file-2"></span>file-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-film"></span>film</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-fingerprint"></span>fingerprint
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-flag"></span>flag</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-flag-1"></span>flag-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-flag-2"></span>flag-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-flag-3"></span>flag-3</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-flag-4"></span>flag-4</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-focus"></span>focus</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder"></span>folder</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-1"></span>folder-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-10"></span>folder-10
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-11"></span>folder-11
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-12"></span>folder-12
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-13"></span>folder-13
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-14"></span>folder-14
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-15"></span>folder-15
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-16"></span>folder-16
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-17"></span>folder-17
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-18"></span>folder-18
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-19"></span>folder-19
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-2"></span>folder-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-3"></span>folder-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-4"></span>folder-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-5"></span>folder-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-6"></span>folder-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-7"></span>folder-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-8"></span>folder-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-folder-9"></span>folder-9
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-forbidden"></span>forbidden
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-funnel"></span>funnel</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-garbage"></span>garbage</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-garbage-1"></span>garbage-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-garbage-2"></span>garbage-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-gift"></span>gift</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-help"></span>help</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hide"></span>hide</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hold"></span>hold</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-home"></span>home</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-home-1"></span>home-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-home-2"></span>home-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hourglass"></span>hourglass
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hourglass-1"></span>hourglass-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hourglass-2"></span>hourglass-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-hourglass-3"></span>hourglass-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-house"></span>house</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card"></span>id-card</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card-1"></span>id-card-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card-2"></span>id-card-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card-3"></span>id-card-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card-4"></span>id-card-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-id-card-5"></span>id-card-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-idea"></span>idea</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-incoming"></span>incoming
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-infinity"></span>infinity
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-info"></span>info</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-internet"></span>internet
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-key"></span>key</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-lamp"></span>lamp</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-layers"></span>layers</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-layers-1"></span>layers-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-like"></span>like</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-like-1"></span>like-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-like-2"></span>like-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-link"></span>link</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-list"></span>list</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-list-1"></span>list-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-lock"></span>lock</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-lock-1"></span>lock-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked"></span>locked</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-1"></span>locked-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-2"></span>locked-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-3"></span>locked-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-4"></span>locked-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-5"></span>locked-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-locked-6"></span>locked-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-login"></span>login</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-magic-wand"></span>magic-wand
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-magnet"></span>magnet</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-magnet-1"></span>magnet-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-magnet-2"></span>magnet-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-map"></span>map</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-map-1"></span>map-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-map-2"></span>map-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-map-location"></span>map-location
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-megaphone"></span>megaphone
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-megaphone-1"></span>megaphone-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-menu"></span>menu</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-menu-1"></span>menu-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-menu-2"></span>menu-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-menu-3"></span>menu-3</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-menu-4"></span>menu-4</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-microphone"></span>microphone
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-microphone-1"></span>microphone-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-minus"></span>minus</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-minus-1"></span>minus-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-more"></span>more</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-more-1"></span>more-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-more-2"></span>more-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-multiply"></span>multiply
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-multiply-1"></span>multiply-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-music-player"></span>music-player
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-music-player-1"></span>music-player-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-music-player-2"></span>music-player-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-music-player-3"></span>music-player-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-mute"></span>mute</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-muted"></span>muted</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-navigation"></span>navigation
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-navigation-1"></span>navigation-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-network"></span>network</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-newspaper"></span>newspaper
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-next"></span>next</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-note"></span>note</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook"></span>notebook
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook-1"></span>notebook-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook-2"></span>notebook-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook-3"></span>notebook-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook-4"></span>notebook-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notebook-5"></span>notebook-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notepad"></span>notepad</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notepad-1"></span>notepad-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notepad-2"></span>notepad-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-notification"></span>notification
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-paper-plane"></span>paper-plane
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-paper-plane-1"></span>paper-plane-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-pause"></span>pause</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-pause-1"></span>pause-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-percent"></span>percent</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-percent-1"></span>percent-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-perspective"></span>perspective
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-photo-camera"></span>photo-camera
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-photo-camera-1"></span>photo-camera-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-photos"></span>photos</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-picture"></span>picture</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-picture-1"></span>picture-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-picture-2"></span>picture-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-pin"></span>pin</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-placeholder"></span>placeholder
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-placeholder-1"></span>placeholder-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-placeholder-2"></span>placeholder-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-placeholder-3"></span>placeholder-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-placeholders"></span>placeholders
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-play-button"></span>play-button
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-play-button-1"></span>play-button-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-plus"></span>plus</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-power"></span>power</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-previous"></span>previous
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-price-tag"></span>price-tag
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-print"></span>print</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-push-pin"></span>push-pin
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-radar"></span>radar</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-reading"></span>reading</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-record"></span>record</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-repeat"></span>repeat</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-repeat-1"></span>repeat-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-restart"></span>restart</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-resume"></span>resume</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-rewind"></span>rewind</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-rewind-1"></span>rewind-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-route"></span>route</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-save"></span>save</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-search"></span>search</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-search-1"></span>search-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-send"></span>send</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-server"></span>server</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-server-1"></span>server-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-server-2"></span>server-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-server-3"></span>server-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings"></span>settings
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-1"></span>settings-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-2"></span>settings-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-3"></span>settings-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-4"></span>settings-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-5"></span>settings-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-6"></span>settings-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-7"></span>settings-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-8"></span>settings-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-settings-9"></span>settings-9
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-share"></span>share</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-share-1"></span>share-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-share-2"></span>share-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-shuffle"></span>shuffle</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-shuffle-1"></span>shuffle-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-shutdown"></span>shutdown
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-sign"></span>sign</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-sign-1"></span>sign-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-skip"></span>skip</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone"></span>smartphone
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-1"></span>smartphone-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-10"></span>smartphone-10
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-11"></span>smartphone-11
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-2"></span>smartphone-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-3"></span>smartphone-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-4"></span>smartphone-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-5"></span>smartphone-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-6"></span>smartphone-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-7"></span>smartphone-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-8"></span>smartphone-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-smartphone-9"></span>smartphone-9
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker"></span>speaker</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-1"></span>speaker-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-2"></span>speaker-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-3"></span>speaker-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-4"></span>speaker-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-5"></span>speaker-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-6"></span>speaker-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-7"></span>speaker-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-speaker-8"></span>speaker-8
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-spotlight"></span>spotlight
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-star"></span>star</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-star-1"></span>star-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stop"></span>stop</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stop-1"></span>stop-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stopwatch"></span>stopwatch
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stopwatch-1"></span>stopwatch-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stopwatch-2"></span>stopwatch-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stopwatch-3"></span>stopwatch-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-stopwatch-4"></span>stopwatch-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-street"></span>street</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-street-1"></span>street-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-substract"></span>substract
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-substract-1"></span>substract-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-success"></span>success</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch"></span>switch</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-1"></span>switch-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-2"></span>switch-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-3"></span>switch-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-4"></span>switch-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-5"></span>switch-5
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-6"></span>switch-6
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-switch-7"></span>switch-7
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-tabs"></span>tabs</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-tabs-1"></span>tabs-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-target"></span>target</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-television"></span>television
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-television-1"></span>television-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-time"></span>time</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-trash"></span>trash</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-umbrella"></span>umbrella
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-unlink"></span>unlink</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-unlocked"></span>unlocked
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-unlocked-1"></span>unlocked-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-unlocked-2"></span>unlocked-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-upload"></span>upload</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user"></span>user</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-1"></span>user-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-2"></span>user-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-3"></span>user-3</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-4"></span>user-4</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-5"></span>user-5</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-6"></span>user-6</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-user-7"></span>user-7</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-users"></span>users</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-users-1"></span>users-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-video-camera"></span>video-camera
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-video-camera-1"></span>video-camera-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-video-player"></span>video-player
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-video-player-1"></span>video-player-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-video-player-2"></span>video-player-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-view"></span>view</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-view-1"></span>view-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-view-2"></span>view-2</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-volume-control"></span>volume-control
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-volume-control-1"></span>volume-control-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-warning"></span>warning</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-wifi"></span>wifi</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-wifi-1"></span>wifi-1</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-windows"></span>windows</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-windows-1"></span>windows-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-windows-2"></span>windows-2
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-windows-3"></span>windows-3
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-windows-4"></span>windows-4
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-wireless-internet"></span>wireless-internet
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-worldwide"></span>worldwide
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-worldwide-1"></span>worldwide-1
                    </div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-zoom-in"></span>zoom-in</div>

                    <div class="icon-list-item col-md-3 col-sm-4"><span class="fi flaticon-zoom-out"></span>zoom-out
                    </div>
                </div>
            </div>
        </div>
        <footer class="content-footer">
            Sing HTML5 Version - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
        </footer>
    </main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

@endsection
