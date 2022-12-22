This app will crash the [Symfony CLI][] on Windows. Steps to reproduce:

1. Start the Symfony CLI server using a command similar to the following:
    >`symfony serve --dir /path/to/quickstart-symfony --passthru ../public/index.php --allow-http`
2. Load the homepage (at https://127.0.0.1:8000 by default).
3. Repeat step 2 a few times (F5 refresh) until it crashes.


  [Symfony CLI]: https://github.com/symfony-cli/symfony-cli
