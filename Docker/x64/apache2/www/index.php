<!DOCTYPE html>
<html>
  <head>
    <title>入退室管理システム</title>
    <link rel="stylesheet" href="./material/material.min.css">
    <script src="./material/material.min.js"></script>
    <link rel="stylesheet" href="./material/iconfont/material-icons.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
  </head>
  <body>
    <!-- The drawer is always open in large screens. The header is always shown,
      even in small screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
<div class="head-title">
<span class="mdl-layout-title">管理トップ</span>
</div>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
          <div class="logout">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">
             ログアウト
            </button>
          </div>
          </div>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">入退室管理システム</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">管理トップ</a>
          <a class="mdl-navigation__link" href="">情報一覧</a>
          <a class="mdl-navigation__link" href="">新規登録</a>
          <a class="mdl-navigation__link" href="">登録情報変更</a>
          <a class="mdl-navigation__link" href="">システム操作</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
      </main>
    </div>

  </body>
</html>
