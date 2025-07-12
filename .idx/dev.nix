{ pkgs, ... }: {
  channel = "stable-24.05";
  packages = [
    pkgs.php83
    pkgs.php83Packages.composer
    pkgs.nodejs_20
    pkgs.python3
    pkgs.tailwindcss
  ];
  services.mysql = {
    enable = true;
    package = pkgs.mariadb;
  };
  env = {
    PHP_PATH = "${pkgs.php83}/bin/php";
  };
  idx = {
    extensions = [
      "rangav.vscode-thunder-client"
      "amirmarmul.laravel-blade-vscode"
      "bradlc.vscode-tailwindcss"
      "cweijan.dbclient-jdbc"
      "cweijan.vscode-database-client2"
      "formulahendry.vscode-mysql"
      "imgildev.vscode-tailwindcss-snippets"
      "onecentlin.laravel-blade"
      "shufo.vscode-blade-formatter"
      "yandeu.five-server"
    ];
    previews = {
      enable = true;
      previews = {
        web = {
          command = ["php" "-S" "localhost:9002"];
          manager = "web";
        };
      };
    };
    workspace = {
      onCreate = {
        default.openFiles = ["index.php"];
      };
      onStart = {
        run-server = "php -S localhost:8080";
      };
    };
  };
}